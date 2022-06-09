<section class="banner">
  <img class="image" src="<?php echo web_root; ?>/Assets/Img1.jpg">
    <div class="content">
        <div class="font-content">
            <h1>Your Dream Job is Waiting</h1>
            <form class="form-group">
              <h4>Find a job</h4>
              <input type="text" name="SEARCH" class="form-field" placeholder="eg. Graphic. Web Developer">
              <select name="CATEGORY" class="Category">
                <option value="" >Category</option>
                <?php
                $sql = "SELECT * FROM `tblcategory`";
                $mydb->setQuery($sql);
                $res = $mydb->loadResultList();
                foreach ($res as $row) {
                  echo '<option>'.$row->CATEGORY.'</option>';
                }
                ?>
                </select>
                <Button class="btn"> Search</Button>
            </form>
        </div>
    </div>
</section>

<section class="services">
  <div class="cards">
    <div class="container">
      <h2>Search Millions of Jobs</h2>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
  </div>

  <div class="cards">
    <div class="container">
      <h2>Easy To Manage Jobs</h2>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
  </div>

  <div class="cards">
    <div class="container">
      <h2>Top Careers</h2>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
  </div>

  <div class="cards">
    <div class="container">
      <h2>Search Expert Candidates</h2>
      <p>A small river named Duden flows by their place and supplies.</p>
    </div>
  </div>
</section>

<section class="job-list" id="jobs">
  <h1 class="heading">Latest Job</h1>
  <div class="container">
    <div class="row">
      <?php

      if(isset($_GET['search'])) {
        $jobid = $_GET['search'];
      }else{
        $jobid = '';

      }

      $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID LIKE '%" .$jobid ."%' ORDER BY DATEPOSTED DESC";
      $mydb->setQuery($sql);
      $cur = $mydb->loadResultList();

      foreach ($cur as $result) {

        ?>
  <div class="job-card">
    <div class="container">
      <div class="job-name">
        <h2><?php echo $result->OCCUPATIONTITLE ?></h2>
        <h3><?php echo $result->CATEGORY ?></3>
      </div>
      <div class="job-details">
        <div class="address">
        <i class="fas fa-map-marker-alt"></i>
        <h5 class="company-address"><?php echo $result->COMPANYADDRESS ?></h5>
        </div>
        <p style="font-weight: 700">Years of Experience: <span style="font-weight: 500"><?php echo $result->WORKEXPERIENCE ?></p>
        <p class="timestam">Date Posted: <?php echo date_format(date_create($result->DATEPOSTED), 'M d, Y'); ?></p>
      </div>
    </div>
    <div class="btn">
      <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>" class="label-a">Apply Job</a>
    </div>
  </div>
</div>
  <?php } ?>
  </div>
</section>
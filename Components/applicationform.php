<section class="banner-application">
  <img class="image" src="<?php echo web_root; ?>/Assets/industry.jpg">
    <div class="content">
        <div class="font-content">
            <h2 class="breadcrumbs"><a href="<?php echo web_root; ?>index.php">Career <i class="fas fa-chevron-right"></i></a><span>Apply Now</span></h2>
        </div>
    </div>
</section>

<?php

if (isset($_GET['search'])) {
    $jobid = $_GET['search'];
}else{
    $jobid = '';
}

$sql = "SELECT * FROM `tbljob` j WHERE j.jobid=' . $jobid . ' ORDER BY DATEPOSTED DESC" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();

?>

<section class="job">
    <div class="job-container">
        <div class="job-name">
            <h2><?php echo $result->OCCUPATIONTITLE ?></h2>
        </div>
    </div>
</section>
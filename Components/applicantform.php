<?php
if (!isset($_SESSION['APPLICANTID'])) {
    ?>
    
    <form action="#" class="contact-form">
        <div class="form-group">
            <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
            <input class="form-control" id="FNAME" name="FNAME" placeholder="Firstname" type="text" value="" onkeyup="javascript:capitalize(this.id, this.value);">
        </div>
        <div class="form-group">
            <input class="form-control" id="LNAME" name="LNAME" placeholder="Lastname" onkeyup="javascript:capitalize(this.id, this.value);">
        </div>
        <div class="form-group">
            <input class="form-control" id="MNAME" name="MNAME" placeholder="Middle Name" onkeyup="javascript:capitalize(this.id, this.value);">
        </div>
        <div class="form-group">
            <input class="form-control" id="ADDRESS" name="ADDRESS" placeholder="Address" type="text" value="" required onkeyup="javascript:capitalize(this.id, this.value);">
        </div>
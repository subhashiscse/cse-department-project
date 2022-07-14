<script type="text/javascript">
</script>
<div class="panel panel-flat">
   <!--  <marquee>A scrolling text created with HTML Marquee element.</marquee> -->
    <div class="panel-heading">
        <h5 class="panel-title badge badge-info" style="text-align: center;">Welcome <?php echo $admin_info->User_Name; ?></h5>
        <br><br>                   
    </div>
    <div class="panel-body">
        <div class="col-md-8">
            <div class="form-group">
                <label >Name</label>
                <input type="text"  class="form-control" value="<?=$admin_info->User_Name;?>" name="" readonly="">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text"  class="form-control" value="<?=$admin_info->User_Email;?>" name="" readonly="">
            </div>
            <div class="form-group">
                <label >Phone No</label>
                <input type="text"  class="form-control" value="<?=$admin_info->User_Phone_No;?>" name="" readonly="">
            </div>
            <label >Profile Image</label>
            <div class="form-group">
                <?php if($admin_info->User_Image) {?>
                <img width="120" src="<?php echo base_url('assets/images/'.$admin_info->User_Image);?>">
                <?php }
                else{?>
                <img width="120" src="<?php echo base_url('assets/images/person.JPG');?>">
                <?php }?>
            </div>
        </div> 
    </div>
</div>

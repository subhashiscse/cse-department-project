<script type="text/javascript">
</script>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title badge badge-info">Add Stuff </h5>
        <br><br>
        <?php echo $this->session->flashdata('msg'); ?>                    
    </div>
    <div class="panel-body">
        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('dashboard_admin/save_stuff'); ?>">
            <!-- <input type="hidden" value="<?php echo $profile->profile_image; ?>" name="profile_image_path"> -->
            <div class="col-md-8">
                <div class="form-group">
                    <label >Full Name</label>
                    <input type="text"  class="form-control" value="" name="    stuff_name"  required="">
                </div>
                <div class="form-group">
                    <label >User Name</label>
                    <input type="text" class="form-control" value="" name="stuff_username"  required="">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email"  class="form-control" value="" name="stuff_email" required="">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password"  class="form-control" value="" name="    stuff_pass" required="">
                </div>
                <div class="form-group">
                    <label >Phone No</label>
                    <input type="text"  class="form-control" value=""name="stuff_phone">
                </div>
                <div class="form-group" id="feature_bg">
                    <img width="240" src="" alt=""><br>
                    <label>Upload Image</label>
                    <input type="file" class="form-control" name="stuff_image" required="">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>    
        </form>
    </div>
</div>

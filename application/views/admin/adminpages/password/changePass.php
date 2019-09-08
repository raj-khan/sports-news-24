<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">
        <div class="container">
            <div class="row">
                <br>
                <?php if ($this->session->flashdata('msg')): ?>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-warning alert-bordered">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold"> <?php echo $this->session->flashdata('msg'); ?> </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center" style="font-family: monospace; font-weight: bold;">Password Change</h2>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>Super_admin/updatePassword"  enctype="multipart/form-data">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label>Old Password : </label>
                        <input type="password" name="current_pass" class="form-control" placeholder="Old Password.....">
                    </div>
                    <div class="form-group">
                        <label>New Password : </label>
                        <input type="password" name="newPass" class="form-control" placeholder="Enter New Password.....">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password : </label>
                        <input type="password" name="newConfirmPass" class="form-control" placeholder="Enter Confirm Password.....">
                    </div>
                    <input class="btn btn-success" type="submit"  value="Submitt" style="float: right">
                </div>

            </form>
        </div>
        <!-- /.row -->
    </div>
</div>
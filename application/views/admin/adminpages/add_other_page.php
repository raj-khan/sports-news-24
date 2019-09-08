<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">

        <div class="row">
            <div>
                <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;">Insert Common Page</h2>
                <?php if ($this->session->flashdata('msg')): ?>
                    <h2 class="bg-success text-primary text-center"style="font-family: monospace; font-weight: bold;"><?php echo $this->session->flashdata('msg'); ?></h2>
                <?php endif; ?>


            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url('user-admin/save-common-page'); ?>">
                <div class="col-md-8 col-md-offset-2">


                    <div class="form-group">
                        <label>  Select Category</label>
                        <select name="category" class="form-control select2" style="width: 100%;">
                            <?php $categories = $this->CommonPageModel->showCommonPageCategory(); ?>
                            <?php foreach ($categories as  $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach;  ?>
                        </select>
                    </div>


                    <label>Page Content</label>
                    <div class="box">
                        <div class="box-body pad">
                            <textarea name="content" class="wysihtml5" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>

                    <input class="btn btn-success" type="submit" name="submit" value="Submit" style="float: right">
                </div>

            </form>

        </div>
        <!-- /.row -->


    </div>

</div>
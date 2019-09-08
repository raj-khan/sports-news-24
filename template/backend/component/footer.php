<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.1.00
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://raajkhan.com/" target="blank">Raj Khan</a>.</strong>
    All rights reserved.
</footer>
<div class="control-sidebar-bg"></div>
</div>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>


<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!--<script src="-->
<?php //echo base_url();     ?><!--template/backend/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>-->
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>template/backend/assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>template/backend/assets/dist/js/demo.js"></script>
<!---=================================Editor===================================----->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!---=================================Data Table===================================----->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!--Daterange picker-->
<script src="<?php echo base_url(); ?>template/backend/assets/plugins/daterangepicker/daterangepicker.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        //Initialize wysihtml5 Elements
        $(".wysihtml5").wysihtml5();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date picker
        //         $('#datepicker').datepicker({ autoclose: true });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        //         $(".my-colorpicker1").colorpicker();
        //color picker with addon
        //         $(".my-colorpicker2").colorpicker();

        //Timepicker
        //         $(".timepicker").timepicker({
        //             showInputs: false
        //         });
    });


</script>

<script>

    // Counter
    $('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });

</script>
</body>
</html>

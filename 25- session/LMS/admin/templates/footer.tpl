
<!--&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->

</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/metisMenu/metisMenu.min.js"></script>

<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/select2/js/select2.min.js"></script>


<!-- DataTables JavaScript -->
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo ADMIN_PUBLIC_URL; ?>vendor/datatables-responsive/dataTables.responsive.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#users-table').DataTable({
            responsive: true
        });

        $('.student-courses').select2();
    });
</script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo ADMIN_PUBLIC_URL; ?>dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php
ob_end_flush();
?>
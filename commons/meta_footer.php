<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/mdb5/js/mdb.min.js") ?>"></script>
<script src="https://unpkg.com/pretty-scroll@1.1.0/js/pretty-scroll.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    $("table").addClass("table-sm")
    $(document).ready(function() {
    $('table').DataTable();
} );
</script>
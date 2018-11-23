<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- DataTable -->
   <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
   <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.css"/>
</head>
<body>
    <div id="wrapper">
        <?php include_once 'header.php' ?>
           <!-- /. NAV TOP  -->
        <?php include_once 'menu.php' ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
        <div id="page-inner">
        <?php //include_once 'page-content.php' ?>
        <?php include_once 'content.php' ?>
        </div>      
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- <script src="assets/js/jquery-1.10.2.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="DataTables/jquery-3.3.1/jquery-3.3.1.min.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
    <!-- Template luar bawaan dari apk before -->
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(document).ready( function () {
            $('#tabel').DataTable();
        } );
     </script>
</body>
</html>

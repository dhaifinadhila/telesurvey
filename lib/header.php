<head>  
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>

  <link rel="stylesheet" type="text/css" href="lib/datatables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/syntax/shCore.css">
  <link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/demo.css">

  <style type="text/css" class="init">
  th, td { white-space: nowrap; }
  div.dataTables_wrapper {
    width: 972px;
    margin: 0 auto;
  }
  </style>
  <script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/syntax/shCore.js"></script>
  <script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/demo.js"></script>
  <script type="text/javascript" language="javascript" class="init">

  $(document).ready(function() {
    $('#example').dataTable( {
      "scrollX": true
    } );
  } );

  </script>
  
  <!--<script type="text/javascript" src="lib/jquery.min.js"></script>-->
  <script type="text/javascript">
    $(document).ready(function(){
      $("#kriteria_gagal_div").hide();
      //$("#var_nama").hide();  

      $('input[type="checkbox"]').change(function () {
        if (this.checked) {
          $("#kriteria_gagal_div").fadeIn('slow');
        } else 
        {
          $("#kriteria_gagal_div").fadeOut('slow');
        }
      });
      
    });
  </script>
</head>
<!doctype html>
 
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1"> 
    <title>HornBlower Calendar Test</title>   
    
    <?php /* beging copay and paste, add these lines to your dining.php file  */?>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script>
    $(function() { 
      $("#datepicker").datepicker({ 
        onSelect: function ( dateText, inst ) { 
          $( "#cruise-search-form" ).submit(); 
        } 
      }); 
    });
    </script>
    <?php /* end of copy and paste from here */?>
    
  </head>
  <body>
    <?php /* add the form to your dining.php file */?>
	<form id="cruise-search-form" name="cruise-search-form" action="http://www.hornblower.com/cruise" method="GET"> 
	  <input type="hidden" name="date" value="06/07/2013" id="cruise-date" /> 
	  <input type="hidden" name="port" value="ny" id="cruise-search-form_port" /> 
	  <input type="hidden" name="product" value="ALL" id="cruise-search-form_product" />
	  <div id="datepicker"></div>
	</form>
	<?php /* end of form */?>
  </body>
</html>
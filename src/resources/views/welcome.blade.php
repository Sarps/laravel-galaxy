<!DOCTYPE html>
<html>
<head>
	<title>Laravel GUI</title>
	<link href="/Sarps/gui/css/jquery-ui.css" rel="stylesheet">
	<link href="/Sarps/gui/css/jquery-ui.theme.min.css" rel="stylesheet">
	<script src = "/Sarps/gui/js/jquery.js"></script>
	<script src = "/Sarps/gui/js/jquery-ui.js"></script>
	 <!-- CSS -->
      <style>
         .ui-menu {
            width: 200px;
         }
      </style>
      <!-- Javascript -->
      
      <script>
         $(function() {
            $( "#menu-1" ).menu();
         });
      </script>
   </head>
   
   <body>
      <!-- HTML --> 
      <ul id = "menu-1">
         <li><a href = "#">Spring</a></li>
         <li><a href = "#">Hibernate</a></li>
         <li><a href = "#">Java</a>
            <ul>
               <li><a href = "#">Java IO</a></li>
               <li><a href = "#">Swing</a></li>
               <li><a href = "#">Jaspr Reports</a></li>
            </ul>
         </li>
         <li><a href = "#">JSF</a></li>
         <li><a href = "#">HTML5</a></li>
      </ul>
   </body>
</html>
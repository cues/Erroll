<!DOCTYPE html>
<?php
include ("Functions/Header/header.php");
include ("Functions/head.php");
include ("Functions/Body/body.php");
include ("Functions/Body/Body_1/body_1.php");
include ("Functions/Body/Body_2/body_2.php");




?>


<html>
<head>
 <?php head(); ?>

</head>
<script>

</script>

</div>
<body>
 <div class="main bt">



   <?php
  header_box();

  body_head();



   ?>

   <div class='containers'>
     <?php
     
     body_1();

     body_2();
     ?>

   </div>

   <div class='footer bt display-flex'>Erroll Alfredo&nbsp;<i class='material-icons copyright-icon' >copyright</i>&nbsp;<?php echo date("Y");?>

</div>
</body>
</html>

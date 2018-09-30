<?php

$con = mysqli_connect("localhost","root","","Erroll");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MYSQL:" .mysqli_connect_error();
}

function body_1(){
  global $con;




  $select_images = "SELECT * from IMAGES ORDER BY POSITION";
  $run_images = mysqli_query($con, $select_images);
  // $row_images = mysqli_fetch_array($run_images);
  // $c = mysqli_num_rows($run_images);

  echo"<div class='images_gallery_container transition-4'>

  <div class='title_1'>Logo Designs</div>
  ";
  while($row_images = mysqli_fetch_array($run_images)){
    $all_images_id = $row_images['ID'];
    $all_images = $row_images['IMAGE'];
    $all_images_title = $row_images['NAME'];
    echo"

    <div class='theme-main'>
    <div class='theme-box transition-5' style='background-image:url(Images/IMAGES/$all_images)' >
    </div>
          </div>

    ";
  }
  echo"
  <div class='title_2'>App Wireframes</div>  ";
  $select_images = "SELECT * from WIRE ORDER BY POSITION";
  $run_images = mysqli_query($con, $select_images);
  while($row_images = mysqli_fetch_array($run_images)){
    $all_images_id = $row_images['ID'];
    $all_images = $row_images['IMAGE'];
    $all_images_title = $row_images['NAME'];
    echo"

    <div class='theme-main theme-main-2'>
    <div class='theme-box theme-box-2 transition-5' style='background-image:url(Images/WIRE/$all_images)' >
    <div class='theme-title display-flex'>$all_images_title</div>
    <div class='theme-line'></div>

    </div>
          </div>

    ";
  }

echo"  </div>";

}


 ?>

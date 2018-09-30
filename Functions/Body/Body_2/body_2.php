<?php

$con = mysqli_connect("localhost","root","","Erroll");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MYSQL:" .mysqli_connect_error();
}

function body_2(){
  global $con;

  echo"
  <div class='work_container transition-4'>

  </div>
  ";

}



?>

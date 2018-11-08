<?php
if($_POST["id"]!="")
echo "รหัสนิสิต : ";
   echo $_POST["id"];
   echo "<br />";

if($_POST["firstname"]!="")
echo "ชื่อ-สกุล : ";
   echo $_POST["firstname"];
   echo " ";

if($_POST["lastname"]!="")
   echo $_POST["lastname"];
   echo "<br />";

if($_POST["birthday"]!="")
echo "วันเกิด : ";
   echo $_POST["birthday"];
   echo "<br />";

if (isset($_POST["gender"])){
   echo "เพศ : ";
   echo $_POST["gender"];
}
   echo "<br />";

if (isset($_POST["exp1"])||(isset($_POST["exp2"]))||(isset($_POST["exp3"]))||(isset($_POST["exp4"]))||(isset($_POST["exp5"]))||(isset($_POST["exp6"]))){
   echo "ทักษะ : ";
  // echo "<br />";
}

if (isset($_POST["exp1"]))
   echo $_POST["exp1"];
   echo " ";

if (isset($_POST["exp2"]))
   echo $_POST["exp2"];
   echo " ";

if (isset($_POST["exp3"]))
   echo $_POST["exp3"];
   echo " ";

if (isset($_POST["exp4"]))
   echo $_POST["exp4"];
   echo " ";

if (isset($_POST["exp5"]))
   echo $_POST["exp5"];
   echo " ";

if (isset($_POST["exp6"]))
   echo $_POST["exp6"];
   echo "<br />";

if ($_POST["major"]!="กรุณาเลือกสาขา - คณะ"){
   echo "คณะสาขา : ";
   echo $_POST["major"];
   echo "<br />";
}

if($_POST["comment"]!=""){
   echo "Comment : ";
   echo $_POST["comment"];
   echo "<br />";
}
?>

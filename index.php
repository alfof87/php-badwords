<?php
 $inputString = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
 // $Slorem = "Lorem *** dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
 $wordToCens = $_GET["name"];
 $sost = str_replace("***", "ipsum", $inputString);
?>

<h1>
 <?php
  echo $inputString;
  echo $_GET["name"];

  // echo "<br>";
  // echo $Slorem;
 ?>
</h1>

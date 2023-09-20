<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/lastpage.css" />
    <style>
      .orderDetails{
    background-color: red;
    text-align: center;
    font-size: 24px;
    border: 2px solid black;
    padding: 10px;
    width: 50%;
    height: 50%;
}
.imagePart {
  background-color: blue;
padding: 10px;
margin:20px;
width: 50%;



}
.main {
  display: flex;
  
  justify-content: space-around;
  
}
      </style>
  </head>
  <body>
    <!--Menu -->
    <div class="nav">
      <!--logo-->
      <div class="img">
        <a href="index.html">
          <img src="./StarbucksImages/starbucks logo.png" alt="" />
        </a>
      </div>
      <!--menu-->
      <div class="menu">
        <ul>
          <li><a href="Menu.html">MENU</a></li>
          <li><a href="Menu.html">REWARDS</a></li>
          <li><a href="Menu.html">GIFT CARDS</a></li>
        </ul>
      </div>
    </div>
    <h2>
      <em
        >Thanks for Order
        <!--image smile-->, Here it is
      </em>
    </h2>
    <!--Grid for making order and summary --->
    <div class="main">
  <div class="orderDetails">
<?php
$Amount = $_POST['Amount'];
echo "No of drinks: - " .$Amount."</br> </br>";
  $size = $_POST['size'];
  echo "Size is: -  " .$size. "</br> </br>";
  $cream = $_POST['cream'];
  echo "Amount of Cream: -   " .$cream. "</br> </br>";
  $sugar = $_POST['sugar'];
  echo "Amount of Sugar :-   " .$sugar. "</br> </br>";
  $espresso = $_POST['espresso'];
  echo "No. of espresso Shots: -  " .$espresso. "</br> </br>";
  echo "<hr>";
  
    echo "Total Price: - " .price($cream,$sugar,$espresso,$Amount)."</br>";
    $Tax = price($cream,$sugar,$espresso,$Amount) * 13/100;
    echo "<em>Tax on purchase </em> : - ".$Tax."</br>";
    $amounttax = price($cream,$sugar,$espresso,$Amount)+$Tax;
    echo "Total Price (include tax) :- ".$amounttax;

    // function for calcuting price
    function price($cream,$sugar,$espresso,$Amount){
      $size = $_POST['size'];
       $priced = ($cream * 0.75 + $sugar * 0.5+ $espresso * 1.23);
      if($size == 'Small'){
        $priced += 1  * $Amount;
      }
      else if ($size == "Medium"){
        $priced += 1.5  * $Amount;
      }
      else if($size == "Large"){
        $priced += 2 * $Amount;
      }
      else {
        $priced += 2 * $Amount;
      }
      return $priced;
    }
    

  
  ?>
  </div>
  <div class="imagePart">
    <!----How to add images in php ?  ----->
<?php 
// loop for images 

// ingredients 
$Amount = $_POST['Amount'];
$size = $_POST['size'];
$cream = $_POST['cream'];
$sugar = $_POST['sugar'];
if($Amount > 1){
  $i= 1;
while($i <= $Amount){
  // greater than one condition for cup
  // cup size adjustment
if($size=='Large') {
    $image_name = 'cup';
$image_path = './StarbucksImages/' . $image_name .'.jpg';
  echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 130px; margin: 5px;">'; }
  else if($size=='Medium') {
    $image_name = 'cup';
$image_path = './StarbucksImages/' . $image_name .'.jpg';
  echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 105px; margin: 5px;">';
  }
  else if($size=='Small') {
    $image_name = 'cup';
$image_path = './StarbucksImages/' . $image_name .'.jpg';
  echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 80px; margin: 5px;">';
  }
  else {
    $image_name = 'cup';
    $image_path = './StarbucksImages/' . $image_name .'.jpg';
      echo '<img src="' . $image_path . '"alt = "cup" style="width: 90px; height: 135px; margin: 5px;">';
  }
  
    $i++;
   // plus condition
    
     

 }
 
 } // else 
  else {
    // size adjustment
    if($size=='Large') {
      $image_name = 'cup';
  $image_path = './StarbucksImages/' . $image_name .'.jpg';
    echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 130px;">'; }
    else if($size == 'Medium') {
      $image_name = 'cup';
  $image_path = './StarbucksImages/' . $image_name .'.jpg';
    echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 105px;">';
    }
    else if($size == 'Small') {
      $image_name = 'cup';
  $image_path = './StarbucksImages/' . $image_name .'.jpg';
    echo '<img src="' . $image_path . '"alt = "cup" style="width: 80px; height: 80px;">';
    }
    else {
      $image_name = 'cup';
      $image_path = './StarbucksImages/' . $image_name .'.jpg';
        echo '<img src="' . $image_path . '"alt = "cup" style="width: 90px; height: 135px;">';
    }  
    
  }
  if($sugar > 1 ){
    $image_named = 'plus';
$image_pathd = './StarbucksImages/' . $image_named .'.jpg';
  echo '<img src="' . $image_pathd . '"alt = "plus" style="width: 20px; height: 25px; margin:5px;">';
    $s = 1;
  while($sugar >= $s){
    $image_namep = 'sugar';
    $image_pathp = './StarbucksImages/'.$image_namep .'.jpg';
    echo '<img src="' . $image_pathp . '"alt = "sugar" style="width: 50px; height: 40px; margin: 5px;">';
    $s++;
     

  }
// plus sign
 }
  // cream condition
   if($cream > 1 ){
    $image_named = 'plus';
$image_pathd = './StarbucksImages/' . $image_named .'.jpg';
  echo '<img src="' . $image_pathd . '"alt = "plus" style="width: 20px; height: 25px; margin:5px;">';
    $c=1;
    while($cream >= $c){
      $image_namep = 'cream';
      $image_pathp = './StarbucksImages/'.$image_namep .'.jpg';
      echo '<img src="' . $image_pathp . '"alt = "cream" style="width: 50px; height: 40px; margin: 5px;">';
      $c++;
      // plus sign
      
    } 
    }


 ?>
  </div>
  
  </div>
  </body>
</html>

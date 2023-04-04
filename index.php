<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php

$nameErr = $checkErr = $emailErr = $genderErr = $websiteErr = "";
$name = $check= $email = $gender = $comment = $website =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["group"])) {
    $website = "";
  } else {
    $website = test_input($_POST["group"]);
  }

  if (empty($_POST["details"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["details"]);
  }
  ///////
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

//   if (empty($_POST["chec"])) {
//     $checkErr = "You must agree the terms";
//   } else {
//     $check = test_input($_POST["chec"]);
//   }
}
//////
// if(isset($_POST['submit'])){
//   if (!empty($_POST['lang'])){
//     foreach($_POST['lang'] as $selected){
//       echo 'you select:' .$selected.'<br>';
//     }
//   }
//   else{
//     echo 'please select option';
//   }
// };


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>


<h2>Application name: AAST_BIS class register</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

    E-mail: <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

    Group#: <input type="text" name="group">
    <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
    Class details: <textarea name="details" rows="5" cols="30"></textarea>
  <br><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

    Select Courses:<select name='lang[]' multiple size=4 >
      <option value='sql' > Mysql  </option>
      <option value='php' > PHP  </option>
      <option value='html' > html </option>
      <option value='javascript' > javascript </option>
      <option value='css' > css </option>
    </select>
  <br><br>

    <input type='checkbox' name='chec'>Agree
  <!-- <span class="error">* <?php echo $checkErr;?></span> -->
  <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your given values are as:</h2>";
echo 'Name:'.$name;
echo "<br>";
echo  'E-mail:'.$email;
echo "<br>";
echo  'Group#'.$website;
echo "<br>";
echo  'class details:'.$comment;
echo "<br>";

if(isset($_POST['submit'])){
  if (!empty($_POST['lang'])){
    foreach($_POST['lang'] as $selected){
      echo 'your course is:' .$selected.'<br>';
    }
  }
  // else{
  //   echo 'please select option';
  // }
};

echo 'gender:'.$gender;
?>

</body>
</html>
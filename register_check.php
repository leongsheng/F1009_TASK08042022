<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Grade</title>
</head>

<body>
<?php
// define variables and set to empty values
$name = $nric= $email="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ((empty($_POST["name"])) or (empty($_POST["nric"])) or (empty($_POST["email"])) or(empty($_POST["state"]))) {
      header("Location: index.php");
	} else {
	  $name = test_input($_POST["name"]);
      $nric = test_input($_POST["nric"]);
      $email= test_input($_POST["email"]);
      $state= test_input($_POST["state"]);
      $password=test_input($_POST["password"]);
      $password2=test_input($_POST["password2"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: index.php");
      }
      if(!($password===$password2)){
          header("Location: index.php");
      }                        
      echo("Your name is ".$name);
      echo("<br>");
      echo("Your IC is ".$nric);
      echo("<br>");
      echo("Your email is ".$email);
      echo("<br>");
      echo("You are from ".$state);
      echo("<br>");
      echo("Your password is ".$password);
      echo("<br>");
      echo(getGender($nric));
      echo("<br>");
      echo(getBirth($nric));
	}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function getGender($IC){
    if(substr($IC,-1)%2==0){
        return "you are female";
    }
    else{
        return "you are male";
    }
}
function getBirth($IC){
    $year=substr($IC,0,2);
    $mounth=substr($IC,2,2);
    $day=substr($IC,4,2);
    return "Your birth is 20".$year."/".$mounth."/".$day;
}
?>


</body>
</html>
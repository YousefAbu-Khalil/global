
<?php
#Q1
echo "#Q1";
echo "<br>";
$email = $_POST["email"];
$password = $_POST["password"];
echo "  the email is $email , the password is $password";

echo "<br>";
echo "<br>";
?>
<?php
#Q2
echo "#Q2";
echo "<br>";
$url = $_POST["url"];
header("Location:$url");

echo "<br>";
echo "<br>";

?>
<?php
#Q3
echo "#Q3";
echo "<br>";
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$op = $_POST["op"];
$sum;

if($op == '+'){
    $sum=$num1+$num2;
}elseif($op == '-'){
    $sum=$num1-$num2;
}elseif($op == '*'){
    $sum=$num1*$num2;
}elseif($op == '/'){
    $sum=$num1/$num2;
}
echo $sum;

echo "<br>";
echo "<br>";
?>
<?php
#Q4
echo "#Q4";
echo "<br>";

session_start();
$toDoList = array();
$input = "";
if (!isset($_SESSION['toDoList'])) {
    $_SESSION['toDoList'] = array();
}

$toDoList = $_SESSION['toDoList'];
if (isset($_POST['list']) && !empty($_POST['list'])) {
    $input = $_POST['list'];
    $toDoList[] = $input; 

    $_SESSION['toDoList'] = $toDoList; 
}
print_r ($toDoList);

echo "<br>";
echo "<br>";

?>
<?php
#Q5
echo "#Q5";
echo "<br>";

echo 'http://' . $_SERVER['HTTP_HOST'] . '/';  
echo "<br>";
echo  $_SERVER['SCRIPT_NAME'] . '/';  

echo "<br>";
echo "<br>";
?>
<?php
#Q6
echo "#Q6";
echo "<br>";

echo $today = date("H:i:s");

echo "<br>";
echo "<br>";
?>
<?php
#Q7
echo "#Q7";
echo "<br>";

session_start();

if (!isset($_SESSION["refreshed_round"])) {
    $_SESSION["refreshed_round"] = 0;
}

$_SESSION["refreshed_round"]++;

session_write_close();


echo "User refreshed: " . $_SESSION["refreshed_round"];

echo "<br>";    
echo "<br>";
?>

<?php
#Q8
echo "#Q8";
echo "<br>";

$storeviews ="<script>localStorage.getItem('views')||0</script>";
echo $storeviews . "---- ";
$storeviews = intval($storeviews);
$views =$storeviews;

session_start(); 


if (!isset($_SESSION["views"])) {
    $_SESSION["views"] = 0;
}
$views  +=$_SESSION["views"]++;


echo "User views: " . $views;
session_write_close();
$storeviews += $views;
echo "<br>";
echo "<br>";


?>
<script>
    localStorage.setItem("views",<?php echo  $storeviews;?>);
</script>
<!-- repeate -->
<?php
echo "<script>
var x = Number(localStorage.getItem('views'));
(x) ? localStorage.setItem('views' , x+1) : localStorage.setItem('views' , 1);
</script>";

$views = "<script>document.write(localStorage.getItem('views'));</script>";
echo "User views: " . $views;

?>

<?php
#Q9
echo "#Q9";
echo "<br>";

$cookie_name = "user";


setcookie($cookie_name, "", time() - 1, "/");


setcookie($cookie_name, "yousef", time() + 3600, "/"); 

?>





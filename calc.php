<?php
//variables Declaration and Assignment
$num    = "";
$result = "";
$cookie_name1  = "num";
$cookie_value1 = "";
$cookie_name2  = "op";
$cookie_value2 = "";
//Display Numbers in input as text
if(isset($_POST['display'])){
    $num = $_POST['display'];
}else{
    $num = "";
}
//Action When A Number Clicked to show what on Display  currently and add changes
if(isset($_POST['submit'])){
    $num = $_POST['display'].$_POST['submit'];
}else{
    $num = "";
}
//Action when operator clicked to store values of num and op in cookie array
if(isset($_POST['op'])){
$cookie_value1 = $_POST['display'];
setcookie($cookie_name1,$cookie_value1,time() + (86400*30),"/");
$cookie_value2 = $_POST['op'];
setcookie($cookie_name2,$cookie_value2,time() + (86400*30),"/");
$num = "";
}
//Action of switching method and showing final result
if(isset($_POST['equals'])){
    $num = $_POST['display'];
    switch($_COOKIE['op']){
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
    }
    $num = $result;
}
?>
<!--html calculator Design -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator|Belal</title>
</head>
<body text-align="center">
<div class="calc-form">
<form action="#" method="post" style="display: inline-block;">
    <table border="1">
        <tr>
            <td colspan = "4">
                <input type="text" name="display" value="<?php echo $num; ?>">
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="7"></td>
            <td><input type="submit" name="submit" value="8"></td>
            <td><input type="submit" name="submit" value="9"></td>
            <td><input type="submit" name="op" value="/"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="4"></td>
            <td><input type="submit" name="submit" value="5"></td>
            <td><input type="submit" name="submit" value="6"></td>
            <td><input type="submit" name="op" value="*"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="1"></td>
            <td><input type="submit" name="submit" value="2"></td>
            <td><input type="submit" name="submit" value="3"></td>
            <td><input type="submit" name="op" value="+"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="0"></td>
            <td><input type="submit" name="clear" value="C"></td>
            <td><input type="submit" name="equals" value="="></td>
            <td><input type="submit" name="op" value="-"></td>
        </tr>
    </table>
</form>
</body>
</html>

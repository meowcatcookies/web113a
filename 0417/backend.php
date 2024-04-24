<?php
$username = $_POST["username"];
$gender = $_POST["gender"];
$userschool = $_POST["userschool"];
$userinterest = $_POST["userinterest"];
$userthough = $_POST["userthough"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>表單結果</title>
</head>

<body bgcolor="#d1fce8">

  <?php
if ($gender == "male") {
    echo " $username 先生您好</h2><br>" . "您的學歷為" . $userschool . "<br>";
} else {
    echo " $username 小姐您好</h2><br>" . "您的學歷為" . $userschool . "<br>";
}
echo "你喜歡的活動如下";

echo "<ul>";
foreach ($userinterest as $value) {
    //echo "<li>$value</li>";
    echo "<li>" . $value . "</li>";

}
echo "</ul>";

echo "你對於使用臉書經營社群的看法為:<br>";
echo $userthough . "<br>";
?>



</body>

</html>

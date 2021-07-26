<?php
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
    ttq.track('SubmitForm')
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<html>
<body>
Thank you for signing, additional details will be sent to: <?php echo $_POST["email"]; ?><br>
</body>
</html>

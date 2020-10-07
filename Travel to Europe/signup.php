<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>

</head>
<body>
<?php
  $name=$_GET["name"];
  $id=$_GET["id"];
  $email=$_GET["email"];
  $pwd=$_GET["pwd"];

?>
name:<?php print $name;?><br>
id:<?php print $id;?><br>
email:<?php print $email; ?><br>
password:<?php print $pwd?>

</body>
</html>
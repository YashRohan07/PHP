<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">    <!-- HTML form using POST method, action set to the current PHP file -->
 
  Name: <input type="text" name="fname">
  <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the form is submitted using the POST method

  $name = htmlspecialchars($_REQUEST['fname']);
  // Retrieve the value of the "fname" input field, and htmlspecialchars for security

  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<!--
$_SERVER['PHP_SELF'] is a specific element of the $_SERVER array, and it represents the filename of the currently executing script.
$_REQUEST is a superglobal variable in PHP that is used to collect data from HTML forms using both the GET and POST methods, as well as from cookies.
$_REQUEST['fname'] retrieves the value of the "fname" input field from the form data. This is the user-entered name in this context.
-->

</body>
</html>


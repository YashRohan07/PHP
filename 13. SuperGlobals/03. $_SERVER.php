<?php

//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations
//The example below shows how to use some of the elements in $_SERVER

echo $_SERVER['PHP_SELF'];   //Returns the filename of the currently executing script
echo $_SERVER['SERVER_NAME'];  //Returns the name of the host server (such as www.w3schools.com)
echo $_SERVER['HTTP_HOST'];  //Returns the Host header from the current request
echo $_SERVER['HTTP_REFERER'];  //Returns the complete URL of the current page (not reliable because not all user-agents support it)
echo $_SERVER['HTTP_USER_AGENT'];  
echo $_SERVER['SCRIPT_NAME'];  //Returns the path of the current script

?>
<?php
session_start();
if( $_GET["login"] && $_GET["passwd"] && $GET['submit'] === "OK") 
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		exit();
	}
?>
<html>
   <body>
   
      <form action = "." method = "GET">
	  login: <input type = "text" name = "login" value="<?php echo($_SESSION['login'])?>"/>
	  passwd <input type = "text" name = "passwd" value="<?php echo($_SESSION['passwd'])?>"/>
         <input type = "submit" name = "submit"value = "OK"/>
      </form>
      
   </body>
</html>

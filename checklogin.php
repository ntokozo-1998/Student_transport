<?php
function check_login()
{
	if(strlen($_SESSION['login'])==0)
	{	
			$host=$_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra="signin";		
			$_SESSION["login"]="";
			 echo '<script language="javascript">
                                                                document.location="signin";
                                                            </script>';
	}
}
?>
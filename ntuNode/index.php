<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';
/*
session_start();
if($_SESSION["user"])
{
	 
	 echo "<script>window.location.href='main.php'</script>";
	 exit(1);
}
*/
$smarty = new Smarty;
//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->left_delimiter = "{|";
$smarty->right_delimiter = "|}";
$smarty->display('index.tpl');
?>
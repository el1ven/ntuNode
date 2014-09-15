<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
session_start();
if(!$_SESSION["user"])
{
	 
	 echo "<script>alert('Please LogIn Firstly^_^')</script>";
	 echo "<script>window.location.href='index.php'</script>";
	 exit(1);
}
$username=$_SESSION["user"];
$smarty = new Smarty;
//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->left_delimiter = "{|";
$smarty->right_delimiter = "|}";
$smarty->assign('user',$username);
/*
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"),
                               array("I", "J", "K", "L"), array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option_selected", "NE");
*/
$smarty->display('myNode.tpl');
?>
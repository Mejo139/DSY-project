<?php 

session_start();

if ("admin" == $_POST["uname"] && "admin" == $_POST["password"]) {
	
	$_SESSION["admin logged in"] = 'Yes';

}else {
	echo "Zadal si nesprávne meno alebo heslo!";
}


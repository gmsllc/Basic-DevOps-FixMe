<?php
require_once("include.php");
echo displayForm();
switch (checkWord()) {
	case 1:
		echo "you found a word";
	break;
	case -1:
		echo "ain't fuck all in here for you";
	break;
	default:
		echo "no word submitted";
	break;
}

<?php
echo '
<style>
html {
	text-align: center;
}
</style>
';
require_once("include.php");
echo displayForm();
switch (checkWord()) {
	case 1:
		echo 'Congratulations, you found a word and by finding a word, you fixed it. <br /><img src="http://www.freemyspacegraphics.com/Graphics/Funny_Animations/images/43.gif" /><br /><img src="http://www.freemyspacegraphics.com/Graphics/Funny_Animations/images/funny_new_18.gif" width="180px;" />';
	break;
	case -1:
		echo 'There are no words in the list that match, please try again.<br /><img src="http://www.freemyspacegraphics.com/Graphics/Funny_Animations/images/funny_2.gif"/>';
	break;
	default:
		echo "Please submit a word to search for";
	break;
}

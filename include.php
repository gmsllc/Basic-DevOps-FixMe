<?php
function setGetDbData ($wordArray) {
        //connect to the database
        $dbLink = mysql_connect('localhost', 'worduser', 'wordpass');
        if (!$dbLink) {
            die('Could not connect: ' . mysql_error());
        }

        //pull some stuff from the database
        $result = mysql_query('SELECT `word` FROM devops.wordsList');
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }

        while ($row = mysql_fetch_assoc($result)) {
                $wordArray[] = $row['word'];
        }

}

function displayform() {
        return 
                '<form action="index.php">
                        <input type="text" name="theword" />
                        <input type="submit" name="submit" />
                </form>';
}

function checkWord () {
        if ( !isset( $_GET['theword'] ) || trim($_GET['theword']) == "" ) return null;

        $wordArray = array();
        setGetDbData(&$wordArray);

        return in_array(trim($_GET['theword']),$wordArray) ? 1:-1;
}

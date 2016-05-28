<?php
error_reporting(E_ALL);
include_once("../p/const.php");

$sql = "SELECT DISTINCT(url) FROM recent_url ORDER BY time DESC";
$dbCon = mysql_connect("localhost",DB_USER,DB_PD);
if($dbCon) {
    
    if (mysql_select_db(DB_NAME, $dbCon)) {

        $result = mysql_query($sql, $dbCon);
        
        if ($result) {
            while ($row = mysql_fetch_assoc($result)) {
                echo "<a href=\"" . $row['url'] . "\">" . $row['url'] . "</a><br>";
            }
        } else echo mysql_error();
    } else echo mysql_error();
}
mysql_close($dbCon);

?>
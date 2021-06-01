<?php

 
header('Content-type: application/xml');

echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
echo "<channel>\n";

//$posts -> my table 
 
 foreach ($posts as $item) {
    echo "<hr>"; 
    echo "<item>";
    echo "<title> $item->title</title><br>";
    echo "<name> $item->title  </name> <br>";
    echo "<link>link | </link>";
    echo "<description>$item->describe | </description>";
    echo "<data>$item->updated_at </data>";
    echo " </item><br>";
}
echo "<hr>";
 echo "</channel><br>";
 echo "</rss><br>";
?>

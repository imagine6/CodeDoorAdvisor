<?php 

$defizite=file('data.txt');

foreach($defizite as $def)
{
   echo 'You should improve your skills on "'.$def.'" please follow the <a href="https://en.wikipedia.org/w/index.php?search='.$def.'&title=Special:Search&fulltext=1" target="_blank">cododoor-advisor</a></br>';
}


?>
<?php 

if ($_POST) {

$file = 'data.txt';
$current = $_POST['defizite'];
file_put_contents($file, $current);

}

 echo '<form action="defizite.php" method="post"> 
	  <textarea rows="4" cols="50" name="defizite">';
			  
			 $defizite=file('data.txt');
			 
			 foreach($defizite as $def)
			 {
			    echo $def;
			 }
			 		 
 echo '</textarea> 
 	<input type="submit" value="Submit">
 </form>';
 
 ?>
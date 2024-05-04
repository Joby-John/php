<?php
$name = "Joby";
echo $name;
echo"<br>";

echo "The length"."of the name is ". strlen($name);
echo "<br>";
echo "Word count".str_word_count($name);
echo "<br>";
echo "String reverse ".strrev($name);
echo "<br>";
echo "string posiiiion  ".strpos($name, "ob"); 
echo "<br>";
echo "replacement ".str_replace("Joby", "Anna", $name );
echo "<br>";
echo "repeat ". str_repeat($name, 4);
echo "<br>";
echo "   <pre>   There is space at left and right </pre>";
echo "<br>";
echo "<pre>";
echo ltrim("   There is a space which i trimmed at left   ");
echo "<br>";
echo rtrim("   There is a space which i trimmed at right   ");

echo "</pre>";



?>
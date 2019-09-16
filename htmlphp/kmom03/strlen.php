<?php

$my_string = "Test\n";
$another_string = "\"\n";
$a_third_string = "Piff &amp Puff\n";

echo("<pre>");
echo("my_string: " . $my_string);
echo("another_string: " . $another_string);
echo("a_third_string: " . $a_third_string);
echo("Length: " . strlen($my_string) . "\n");
echo("Length: " . strlen($another_string) . "\n");
echo("Length: " . strlen($a_third_string) . "\n");
echo("</pre>");
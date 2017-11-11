<?php

$preferences = Preferences::getInstance();
$preferences->setProperty('foo', 'bar');

unset($preferences);

$preferences2 = Preferences::getInstance();
echo $preferences2->getProperty('foo'); //value is not lost and output is: bar

<?php

require '../../vendor/autoload.php';

use Singleton\Preferences;

$preferences = Preferences::getInstance();
$preferences2 = Preferences::getInstance();

if (get_class($preferences) === get_class($preferences2)) {
    echo "\nSame class!";
}

if ($preferences == $preferences2) {
    echo "\nSame values!";
}

if ($preferences === $preferences2) {
    echo "\nSame object!";
}

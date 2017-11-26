<?php

$italyShop = new ItalianFactory();
$italyVehicle = $italyShop->createVehicle();
$italyCurrency = $italyVehicle->getCurrency();

$usaShop = new USAFactory();
$usaVehicle = $usaShop->createVehicle();
$usaCurrency = $usaVehicle->getCurrency();

echo "\n UsaShop currency: " . $usaCurrency . " ItalyShop currency: " . $italyCurrency;
<?php

$italyFinance = new Italy();
$italyVat = $italyFinance->getVat();

$irelandFinance = new Ireland();
$irelandVat = $irelandFinance->getVat();

echo "\n Italy VAT: " . $italyVat . " Ireland VAT: " . $irelandVat;
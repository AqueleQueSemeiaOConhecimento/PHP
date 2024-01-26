<?php

# DATETIME - timezone

// ps: https://www.php.net/manual/en/timezones.php

$brasil = new DateTime('now', new DateTimeZone('America/Fortaleza'));

$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;
echo $portugal->format('d-m-Y H:i:s') . PHP_EOL;
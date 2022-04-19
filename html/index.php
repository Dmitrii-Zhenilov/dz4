<?php
include "../src/tarifInterface.php";
include "../src/serviceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";

$tariff = new TariffHour(5,61);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();

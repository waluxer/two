<?php

namespace in;
namespace out;

require __DIR__."/vendor/autoload.php";

use in\in;
use out\out;

# computer inside things
$cpu = new IN;
$cpu -> name = "intel core i3";
$cpu -> option = "11100K";
$cpu -> price = 200;

$ram = new IN;
$ram -> name = "RAM";
$ram -> option = "6 GB";
$ram -> price = 30;

$motherboard = new IN;
$motherboard -> name = "Lenovo 17 ideapad";
$motherboard -> option = "17 IDPD";
$motherboard -> price = 300;

$ssd = new IN;
$ssd -> name = "ASUS";
$ssd -> option = "256 GB";
$ssd -> price = 35;

# computer outside things
$displayLaptop = new OUT;
$displayLaptop -> name = "Lenovo 17";
$displayLaptop -> option = "17 IDPD";
$displayLaptop -> price = 60;

$display = new OUT;
$display -> name = "E";
$display -> option = "1070 x 2080";
$display -> price = 187;

$keyboard = new OUT;
$keyboard -> name = "CACT";
$keyboard -> option = "Mecanic red";
$keyboard -> price = 40;

$carpet = new OUT;
$carpet -> name = "logitech";
$carpet -> option = "70 x 30";
$carpet -> price = 3;

$mouse = new OUT;
$mouse -> name = "A4TECH";
$mouse -> option = "lazer";
$mouse -> price = 6;

$in = [$cpu, $ram, $motherboard, $ssd];
$out = [$displayLaptop, $display, $keyboard, $carpet, $mouse];

for ($x = 0; $x < count($in); $x++) {
    echo $in[$x] -> name ." ". $in[$x] -> price."</br>";
};

?>
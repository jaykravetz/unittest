<?php

require 'vendor/autoload.php';


$calc = new \Unit\Calculator(new \Unit\HtmlSerializer());

echo $calc->addAndSerialize(5,5,5,5,5,5,5);


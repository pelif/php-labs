<?php

use Source\Aggregation\Apportionment;
use Source\Aggregation\CostCenter;

require '../../vendor/autoload.php'; 

$apportionment = new Apportionment; 
$costCenter = new CostCenter('Desenvolvimento', 23.00); 
$costCenter2 = new CostCenter('Software Arquitecture', 42.00); 
$costCenter3 = new CostCenter('Marketing', 12.00); 

$apportionment->addItem($costCenter)
              ->addItem($costCenter2)
              ->addItem($costCenter3); 

foreach($apportionment->getItems() as $key => $item) {
    echo $item->name . ' --> ' . $item->percent . '%' . PHP_EOL;   
}
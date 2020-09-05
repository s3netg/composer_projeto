<?php

require_once "vendor/autoload.php";

use sergio\projeto\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('05038040');

print_r($resultado);
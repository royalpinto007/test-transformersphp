<?php

declare(strict_types=1);

use Codewithkyrian\Transformers\Transformers;

require_once './vendor/autoload.php';

Transformers::setup()
//    ->setImageDriver(\Codewithkyrian\Transformers\Utils\ImageDriver::GD)
    ->apply();


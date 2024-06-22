<?php

ini_set('memory_limit', '2G');

require 'vendor/autoload.php';

use function Codewithkyrian\Transformers\Pipelines\pipeline;

$prompt = "What is Drupal?";

$pipeline = pipeline('text-generation', 'Xenova/gpt2');

$options = [
    'max_length' => 100, // Set the maximum length of the generated text
    'num_return_sequences' => 1, // Number of sequences to return
];

$result = $pipeline($prompt, $options);

print_r($result);

?>

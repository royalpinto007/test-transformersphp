<?php

require 'vendor/autoload.php';

use function Codewithkyrian\Transformers\Pipelines\pipeline;

// Create a sentiment analysis pipeline
$classifier = pipeline('sentiment-analysis');

// Analyze a single sentence
$result = $classifier('I love TransformersPHP!');
echo "Single analysis result:\n";
print_r($result);

// Analyze multiple sentences
$results = $classifier([
    'I love TransformersPHP!',
    'I hate TransformersPHP!',
]);
echo "Multiple analysis results:\n";
print_r($results);

?>

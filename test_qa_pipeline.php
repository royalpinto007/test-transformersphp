<?php

require 'vendor/autoload.php';

use function Codewithkyrian\Transformers\Pipelines\pipeline;

$question = "Who is known as the father of computers?";
$context = "The history of computing is longer than the history of computing hardware and modern computing technology
and includes the history of methods intended for pen and paper or for chalk and slate, with or without the aid of tables.
Charles Babbage is often regarded as one of the fathers of computing because of his contributions to the basic design of
the computer through his analytical engine.";

$pipeline = pipeline('question-answering', 'Xenova/distilbert-base-cased-distilled-squad');

$result = $pipeline($question, $context);

print_r($result);

?>

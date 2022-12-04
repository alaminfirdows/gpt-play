<?php

use OpenAI;
use Symfony\Component\Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$apiToken = $_ENV['API_TOKEN'];
$client = OpenAI::client($apiToken);

$result = $client->completions()->create([
    'model' => 'davinci',
    'prompt' => 'PHP is',
]);

echo '<pre>';
var_dump($result);

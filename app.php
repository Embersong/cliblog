<?php



//TODO добавьте везде абсолютные пути
/*require_once __DIR__ . '/src/main.php';
require_once __DIR__ . '/src/quizs/quiz1.php';
require_once __DIR__ . '/src/quizs/quiz2.php';
require_once __DIR__ . '/src/helpers.php'*/;

require __DIR__ . '/vendor/autoload.php';

$result = app();

echo $result;

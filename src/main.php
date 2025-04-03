<?php


function app(): string
{

    $command = parseCommand();

    $result = function_exists($command)? $command(): handleError("Нет такой функции");

/*    if (function_exists($command)) {
        $result = $command();
    } else {
        $result = handleError("Нет такой функции");
    }*/

    return $result;
}

//TODO избавьтесь от повтора handleHelp
function parseCommand(): string
{
    return match($_SERVER['argv'][1] ?? 'help') {
            'quiz1' => 'Alex\Quiz\runQuiz',
            'quiz2' => 'Bob\Quiz\runQuiz',
            'posts' => 'showAllPosts',
            'post' => 'showPost',
            default => 'handleHelp',
        };

}

function getConfig(): array
{
    static $config = null;
    if (is_null($config)) {
        $config = include dirname(__DIR__) . '/config.php';
    }
    return $config;

}
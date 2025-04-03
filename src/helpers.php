<?php

function handleError(string $message): string
{
    return "\033[31m$message\033[0m";
}

function handleSuccess(string $message): string
{
    return "\033[32m$message\033[0m";
}

function handleHelp(): string
{
    $help = <<<HELP
Доступные команды
help - вывод данной подсказки
quiz1 - запустить викторину1
quiz2 - запустить викторину2
posts - показать все посты
post - показать пост по id
HELP;

    return $help;
}
<?php
namespace Alex\Quiz;

function runQuiz(): string
{
    $question = "Какая столица Франции?";
    $options = [
        'a' => 'Берлин',
        'b' => 'Париж',
        'c' => 'Мадрид',
        'd' => 'Рим'
    ];
    $correctAnswer = 'b';

    do {
        echo $question . "\n";
        foreach ($options as $key => $option) {
            echo "$key) $option\n";
        }


        $userAnswer = strtolower(trim(readline("Ваш ответ (a/b/c/d): ")));


        if (!array_key_exists($userAnswer, $options)) {
            echo handleError("Ошибка: выберите один из предложенных вариантов (a, b, c, d).\n");
            continue;
        }

        if ($userAnswer === $correctAnswer) {
            return handleSuccess("Правильно! Поздравляем!\n");
        }
        break;
    } while (true);
    return handleError("Ошибка! Неверный ответ. Программа завершена.\n");
}


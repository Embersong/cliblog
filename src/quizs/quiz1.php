<?php
namespace Bob\Quiz;


function runQuiz(): string
{
    $questions = getConfig()['questions'];

// Перебор вопросов
    foreach ($questions as $q) {
        echo $q['question'] . PHP_EOL; // Выводим вопрос

        // Выводим варианты ответов
        foreach ($q['options'] as $key => $option) {
            echo "$key) $option" . PHP_EOL;
        }

        // Запрашиваем ответ у пользователя
        do {
            $userAnswer = (int)readline('> '); // Читаем ответ пользователя
        } while(!array_key_exists($userAnswer, $q['options']));


        // Проверяем, является ли ответ корректным
        if ($userAnswer === $q['correct']) {
            echo handleSuccess("Поздравляем! Правильный ответ!" . PHP_EOL);
        } else {
            return handleError("Ошибка! Неправильный ответ." . PHP_EOL);
        }
    }

    return handleSuccess("Спасибо за участие в викторине!" . PHP_EOL);

}
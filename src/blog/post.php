<?php


function showPost()
{
    //1. считать все посты в массив
    //2. организовать цикл запроса id поста с проверкой ошибок
    //3. показать пост
}

function addPost():string
{
    $file = file_get_contents(getcwd() . '/blog.json');
    $posts = json_decode($file, true)['posts'];

    //0. считать все посты
    //1. запросить заголовок и текст поста с проверкой на пустоту
    //2. добавить пост в массив
    //3. сохранить массив в файл

}

function showAllPosts(): string
{
    $file = @file_get_contents(getcwd() . '/blog.json');

    if (!$file) {
        return handleError("Нет файла с постами blog.json");
    }

    $posts = @json_decode($file, true)['posts'];

    $output = '';
    foreach ($posts as $post) {
        $output .= "{$post['id']}) {$post['title']}" . PHP_EOL;
    }

    return $output;
}
<?php
$filename = __DIR__ . '/data/todos.json';

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if ($id) {
      $data = file_get_contents($filename);
      $todos = json_decode($data, true);
}

//header('location:http://localhost:3000');
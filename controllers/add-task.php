<?php

$app['database']->insert('tasks', [
    'description' => $_POST['description'],
]);

header('Location: /');
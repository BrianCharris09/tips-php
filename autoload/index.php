<?php

use Controllers\CourseController;
use Models\Course;

spl_autoload_register(function ($clase) {
    $file = str_replace('\\','/',$clase).'.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$curso = new Course;
$curso->saludar();

$curso2 = new CourseController;
$curso2->saludar();
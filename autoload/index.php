<?php

use \Controllers\CourseController;
use \Models\Course;

spl_autoload_register(
    function ($clase) {
        $file = str_replace('\\','/',$clase).'.php';
        if (!file_exists($file)) {
            # code...
        }
        require_once $file;
    }
);

$curso = new Course;

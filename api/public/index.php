<?php

use App\Kernel;


require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

echo "Hola Mundo";


echo "Que paso hombre";
return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

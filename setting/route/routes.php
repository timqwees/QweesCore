<?php

use App\Models\Router\Routes;
use App\Config\Database;
use App\Config\Session;
use App\Models\Network\Network;
use App\Controllers\AuthController;
use App\Controllers\MailController;
use App\Models\Article\Article;
use App\Models\Network\Message;
use App\Models\User\User;
use Setting\Route\Function\Functions;

//==================================================================================================//MAIN
Routes::get('/', 'on_Main');
//==================================================================================================//DOCS
Routes::get('/docs', 'on_docs');

/*
##======ПРИМЕРЫ/EXEMPLES===========##
# main (путь, функция)
# Routes::get('/', 'on_Main');

# exemple 2 (путь, ручная функция)
# Routes::get('/', function(){ echo 'hello'; });

# exemple 3 (путь, [вызов класса, функция в классе])
# Routes::get('/', [App\Models\Router\Routes::class, 'on_Main']);

# exemple 4 (параметры)
Routes::get('/user/{id}', function($id){ echo $id; });
*/

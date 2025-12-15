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
use App\Controllers\API\API;

//==================================================================================================//MAIN
Routes::get('/', 'on_Main');
//==================================================================================================//DOCS
Routes::get('/docs', 'on_docs');
//==================================================================================================//API
Routes::get('/api/test', 'on_API');

/*
##======ПРИМЕРЫ/EXEMPLES===========##
# main (path, function)
# Routes::get('/', 'on_Main');

# exemple 2 (path, manual function)
# Routes::get('/', function(){ echo 'hello'; });

# exemple 3 (path, [class, function name])
# Routes::get('/', [App\Models\Router\Routes::class, 'on_Main']);

# exemple 4 (parametrs)
Routes::get('/user/{id}', function($id){ echo $id; });

# exemple 5 (API)
Routes::get('/api/getQwees', function() { echo API::send('/public/pages/main/qwees.json'); });
Routes::post('/api/setQwees', function() { echo API::send('/public/pages/main/qwees.json'); });
// short version
Routes::get('/api/getQwees', fn() => print(API::send('/public/pages/main/qwees.json')));
Routes::post('/api/setQwees', fn() => print(API::send('/public/pages/main/qwees.json')));
*/

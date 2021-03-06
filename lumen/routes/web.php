    <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// $router->get('/hello/{name}', function($name){
//     return "Hello $name";
// });
    $router->get('/hello/{name}', [
        'as' => 'hello-world',
        'uses' => 'HelloController@index'
        ]);
    

    // $router->group([], function () use ($router) {
    //     $router->get('/api/users', function() {
    //         return[];
    // });
    $router->group(['prefix' => 'api'], function () use ($router) {
        $router->get('/', 'Api\WelcomeController@index');
        $router->get('/users', 'Api\UsersController@index');
        $router->get('/users/{id}', 'Api\UsersController@show');
        $router->post('/users', 'Api\UsersController@store');
        $router->put('/users', 'Api\UsersController@update');
    });

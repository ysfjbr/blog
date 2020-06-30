<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    $links = \App\Link::all();
    return view('welcome', ['links' => $links]);
});

*/
/* Route::get('/submit', function () {
    return view('submit');
}); */



/* Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);
    
    $link = new \App\Link;
    $link->title = $data['title'];
    $link->url = $data['url'];
    $link->description = $data['description'];

    // Save the model
    $link->save();
    
    return view('submit');

}); */
//['register' => false]
Auth::routes();

Route::get('/p/create', 'PostController@create');
Route::post('/p', 'PostController@store');
Route::get('/p/{post}', 'PostController@show');
Route::get('/p/{post}/edit', 'PostController@edit');
Route::patch('/p/{post}', 'PostController@update');
Route::post('/p/{post}/delete', 'PostController@delete');

Route::get('/profile/{user}', 'profileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'profileController@edit')->name('profile.edit');
Route::get('/profile/{user}/re-order', 'profileController@reorder')->name('profile.edit_reorder');
Route::patch('/profile/{user}', 'profileController@update')->name('profile.update');

Route::get('/', 'AppController@index')->name('welcome');
Route::get('/home', 'AppController@index')->name('welcome');

Route::get('/auth', function(){
    if(!Auth::check())
    {
        //$user = \App\User::find(1);
        //Auth::login($user);
    }
    return Auth::user();
});

Route::get('storage/profile/{filename}.{ext}', function ($filename, $ext) {
    $folders = glob(storage_path('app/public/*'), GLOB_ONLYDIR);
    $path = '';
    foreach ($folders as $folder) {
       $path = $folder . '/' . $filename . '.' . $ext;
       if (File::exists($path)) {
          break;
       }
    }

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header('Content-Type', $type);

    return $response;
});

//Route::get('/', 'AppController@index')->where('any','.*');


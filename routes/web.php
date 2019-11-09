<?php

use App\Jobs\MakeJob;

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Route::get('/user', 'NewController@user');
Route::resource('photos', 'PhotosController');
Route::get('/showphoto', function(){
    return view ('pages.showphoto');
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/queue', function () {
    dispatch(new MakeJob);
    return 'Finished';
});

// Route::get('/image', function () {

    // require 'vender/autoload.php';

    // use Intervention\Image\ImageManager;
    // $manager = new ImageManager(array('driver' => 'imagick'));
    
    // $image = Image::make(file_get_contents('http://3.bp.blogspot.com/-KddhKgmzCwU/U6QCL73SV3I/AAAAAAAACno/ribP6QgLr08/s1600/Audemars+Piguet+-+Royal+Oak+Leo+Messi+Ltd+Ed+Chronograph+13+Platinum.jpg'));

    // dd($image);
    // $image->resize(400, 400);
    // return Response::make($image, 200, ['Content-Type' => 'image/jpg']);
// });

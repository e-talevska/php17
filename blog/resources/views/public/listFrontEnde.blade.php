Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'ArticleController@about');

Route::get('articles', 'ArticleController@Index');
Route::get('articles/create', 'ArticleController@create');
Route::get('articles/edit/{id}', 'ArticleController@edit');
Route::get('articles/{slug}', 'ArticleController@view');
Route::post('articles', 'ArticleController@store');
Route::patch('articles/{id}','ArticleController@update');
Route::resource('tags','TagController');
Auth::routes();

Route::get('/home', 'HomeController@index');

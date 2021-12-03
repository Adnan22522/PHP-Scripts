<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions/dynamic', function () {
    return view('admin.question.dynamic');
});

Route::get('/answer', function () {
    return view('admin.question.answer');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['admin']], function(){
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/users', 'AdminController@users')->name('users');
Route::get('/quizrecord', 'QuizRecordController@index')->name('quizrecord');
Route::delete('/record/{id}', 'QuizRecordController@destroy')->name('record.destroy');
Route::resource('subjects','SubjectController');
Route::resource('questions','QuestionController');
});



// For Users
Route::get('/quiz', 'QuizController@quiz')->name('quiz');
Route::post('/quizstart', 'QuizController@start')->name('quiz.start');
Route::post('/quizstore','QuizController@store')->name('quiz.store');
Route::get('/viewrecord/{id}', 'ResultController@viewrecord')->name('result.viewrecord');
Route::get('/userdashboard', 'UserController@index')->name('/userdashboard');
Route::get('/editpassword', 'UserController@edit')->name('/user.edit');
Route::post('/updatepassword{id}', 'UserController@update')->name('user.update');
Route::get('/result','ResultController@index')->name('result');
Route::resource('profile','ProfileController');





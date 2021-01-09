<?php

use Illuminate\Support\Facades\Route;

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
 * Create an User
 * */
Route::get('/create_user', function (){
   $user = new \App\User();
   $user->name = "Himon Talukdar";
   $user->email = "abcd@gmail.com";
   $user->password = \Illuminate\Support\Facades\Hash::make("1234");

   // save the user into database
    $user->save();

    return \Illuminate\Support\Facades\Response::make("User is created");
});


Route::get('/', function () {
    $courses = \App\Models\Course::all();
    return view('main')->with('courses', $courses);
});

Route::get('/dashboard', function(){
	return view('admin.dashboard');
});

Route::get('/dashboard/all-courses', function(){
	return view('admin.courses.index');
});

Route::get('/dashboard/all-teachers', function(){
	return view('admin.teachers.index');
});

Route::get('/home', 'HomeController@home');

Route::get('/courses', function(){
    echo 'Courses';
});

Route::get('/students', function(){
    echo 'Students';
});
Route::resource('course', 'CourseController');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/avatars/' . $filename);
    // dd($path);
    if (!\Illuminate\Support\Facades\File::exists($path)) {
        abort(404);
    }

    $file = \Illuminate\Support\Facades\File::get($path);
    $type = \Illuminate\Support\Facades\File::mimeType($path);

    $response = \Illuminate\Support\Facades\Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


//Route::get("/create_teacher", function(){
//   return $teacher = factory(App\Teacher::class, 500)->create();
//});


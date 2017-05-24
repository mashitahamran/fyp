<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/login', 'ApiController@showLoginForm');

Route::post('/api/login', 'ApiController@login');
Route::get('/api/user/{id}', function ($id) {

    return response()->json([
        'score' => App\User::find($id)->score,
    ]);

});

Route::get('/insert-score/{id}/{score}', function ($id, $score) {
    $user = App\User::find($id);

    $user->score = $score;
    $user->save();

    return response()->json([
        'status' => 'success',
    ]);

});

Route::get('/api/users', function () {
    return App\User::all();
});

Route::get('/performance', function () {
    $users = App\User::whereCategory(1)->get();
    return view('/performance', compact('users'));
});

Route::get('/staff_reg', function () {
    return view('staff_reg');
});

Route::post('/staff_reg', function (Illuminate\Http\Request $request) {

    App\User::create([
        'name'        => $request->fullname,
        'email'       => $request->staffid,
        'password'    => Illuminate\Support\Facades\Hash::make($request->password),
        'mail'        => $request->email,
        'fullname'    => $request->fullname,
        'nric'        => $request->nric,
        'birthday'    => $request->birthday,
        'age'         => $request->age,
        'gender'      => $request->gender,
        'address'     => $request->address,
        'phoneNumber' => $request->phoneNumber,
        'score'       => 0,
        'category'    => 2,
    ]);

    return redirect('/contacts');

});

Route::get('/contacts', function () {
    $users = App\User::whereCategory(2)->get();
    return view('contacts', compact('users'));
});

Route::get('/access', function () {
    $users = App\LoginLog::all();

    return view('access', compact('users'));
});

Route::get('/log-keluar', function (Illuminate\Http\Request $request) {

    $request->session()->flush();

    $request->session()->regenerate();

    return redirect('/');
});

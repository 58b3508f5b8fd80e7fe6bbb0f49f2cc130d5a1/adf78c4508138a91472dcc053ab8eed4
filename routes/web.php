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
    return view('welcome', ['title' => 'home']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['checkMaintenance'])->group(function () {
    Route::middleware(['checkUserStatus'])->group(function (
    ) {
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::get('/resume', 'ResumeController@index')->name('resume');
        Route::get('/jobs', 'JobController@index')->name('jobs');
        Route::get('/jobs/applied', 'JobController@applied')->name('applied');
//Route::get('/{any}', 'HomeController@index')->where('any', '.*');
    });

    Route::post('profile/update', 'ProfileController@profile')
        ->name('update_profile');
    Route::prefix('/resume')->group(function () {
        Route::post('/coverletter', 'ResumeController@coverLetter');
        Route::post('/education', 'ResumeController@education');
        Route::post('/experiences', 'ResumeController@experience');
        Route::post('/honors', 'ResumeController@honors');
        Route::post('/curriculumvitae', 'ResumeController@curriculumVitae');
    });
});
Route::post('getlgas', function (\Illuminate\Support\Facades\Request $request) {
    $state = $request->input('state');
    $lgas = $this->LGAs();
    $html = "<option selected disabled>Select LGA</option>";
    foreach ($lgas as $lga) {
        if ($lga[0] == $state) {
            $html .= "<option>$lga[1]</option>";
        }
    }
    return response()->json([
        'html' => $html
    ]);
})->middleware('checkMaintenance');
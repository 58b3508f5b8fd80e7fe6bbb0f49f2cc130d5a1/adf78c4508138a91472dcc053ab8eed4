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

Route::middleware(['checkMaintenance'])->group(function () {
    Route::middleware(['auth', 'isUser', 'checkUserStatus'])->group(function (
    ) {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::get('/resume', 'ResumeController@index')->name('resume');
        Route::get('/jobs', 'JobController@index')->name('jobs');
        Route::get('/jobs/applied', 'JobController@applied')
            ->name('applied');
        Route::post('/jobs/apply', 'JobController@apply');
        Route::post('/jobs/cancel', 'JobController@cancel');
        Route::get('/jobs/test/{id}', 'TestController@index');
        Route::post('/jobs/test/start','TestController@startTest');
        Route::post('/jobs/test/submit','TestController@submitTest');

    });

    Route::post('profile/update', 'ProfileController@profile')
        ->name('update_profile');
    Route::post('profile/avatar', 'ProfileController@avatar')
        ->name('update_avatar');
    Route::prefix('/resume')->group(function () {
        Route::get('/download/cv', 'ResumeController@downloadCV');
        Route::get('/modal/{action}/{type}/{id?}',
            'ResumeController@getModal');
        Route::post('/delete', 'ResumeController@delete');
        Route::post('/delete', 'ResumeController@delete');
        Route::post('/coverletter', 'ResumeController@coverLetter');
        Route::post('/education', 'ResumeController@addEducation');
        Route::post('/experiences', 'ResumeController@addExperience');
        Route::post('/honors', 'ResumeController@addHonors');
        Route::post('/skills', 'ResumeController@addSkills');
        Route::post('/curriculumvitae', 'ResumeController@curriculumVitae');
    });

    // drg >> Routes for the administrators
    Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::prefix('/backend')->group(function () {
                Route::get('', 'AdminController@index');
                Route::get('/user/{id}', 'UserController@index');
                Route::get('/applicants/{id}/{page?}/{per?}',
                    'JobController@jobApplicants');
                Route::get('/jobs/{page?}/{per?}', 'JobController@jobs');
                Route::get('/jobs/search/{page?}/{per?}', 'JobController@searchJobs');
                Route::get('/download/cv/{id}', 'UserController@downloadCV');
                Route::post('/jobs/shortlist',
                    'JobController@shortlistApplicant');
                Route::prefix('/tests')->group(function () {
                    Route::get('/', 'TestController@index');
                    Route::get('/view', 'TestController@index');
                    Route::get('/add', 'TestController@addTest');
                    Route::get('/invite/{id}','TestController@getInvite');
                    Route::post('/invite','TestController@sendInvite');
                    Route::get('/result', 'TestController@viewJobResults');
                    Route::get('/result/{id}', 'TestController@viewTestResults');
                });
            });
        });
    });
});
Route::post('getlgas', function (\Illuminate\Http\Request $request) {
    $state = $request->input('state');
    $html = "<option selected disabled>Select LGA</option>";
    foreach (__('lgas.index') as $lga) {
        if ($lga[0] == $state) {
            $html .= "<option>$lga[1]</option>";
        }
    }

    return response()->json([
        'html' => $html
    ]);
})->middleware('checkMaintenance');
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});
Route::get('/faq', function () {
    return view('faq', ['title' => 'Frequently Asked Questions']);
});
Route::get('test', function (\Illuminate\Http\Request $request) {
    echo $request->user()->type;
});
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
//1	Admin	admin@admin.com	$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.		2018-06-14 06:06:47	2018-06-14 06:06:47
Auth::routes();

// Change Password Routes...
Route::get('change_password',
    'Auth\ChangePasswordController@showChangePasswordForm')
    ->name('change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')
    ->name('change_password');

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
        Route::post('/jobs/test/start', 'TestController@startTest');
        Route::post('/jobs/test/submit', 'TestController@submitTest');

    });

    Route::post('profile/update', 'ProfileController@profile')
        ->name('update_profile');
    Route::post('/profile/avatar', 'ProfileController@avatar')
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
                Route::get('/download/cv/{id}',
                    'UserController@downloadCV');
                Route::prefix('/jobs')->group(function () {
                    Route::get('/add', 'JobController@viewJobsAdd');
                    Route::post('/add', 'JobController@addJobs');
                    Route::post('/delete/{jid}', 'JobController@deleteJob');
                    Route::get('/view/edit/{jid}', 'JobController@viewJobEdit');
                    Route::post('/edit/{jid}', 'JobController@jobEdit');
                    Route::get('/{page?}/{per?}', 'JobController@jobs');
                    Route::get('/search/{page?}/{per?}',
                        'JobController@searchJobs');
                    Route::post('/shortlist',
                        'JobController@shortlistApplicant');
                });
                Route::prefix('/tests')->group(function () {
                    Route::get('/', 'TestController@index');
                    Route::get('/add', 'TestController@viewAddTest');
                    Route::post('/add', 'TestController@addTest');
                    Route::post('/delete/{tid}', 'TestController@deleteTest');
                    Route::get('/edit/{tid}', 'TestController@viewEditTest');
                    Route::post('/edit/{tid}', 'TestController@editTest');
                    Route::get('/invite/{id}', 'InterviewController@getInvite');
                    Route::post('/invite', 'InterviewController@sendInvite');
                    Route::get('/questions/add/{id}',
                        'TestController@viewAddQuestion');
                    Route::post('/questions/add/{id}',
                        'TestController@addQuestion');
                    Route::post('/questions/delete/{qid}',
                        'TestController@deleteQuestion');
                    Route::get('/questions/edit/{qid}',
                        'TestController@viewEditQuestion');
                    Route::post('/questions/edit/{qid}',
                        'TestController@editQuestion');
                    Route::get('/result', 'TestController@viewJobResults');
                    Route::get('/result/{id}',
                        'TestController@viewTestResults');
                    Route::get('/view', 'TestController@index');
                    Route::get('/view/{id}', 'TestController@viewTest');
                });
                Route::prefix('/interviews')->group(function () {
                    Route::get('/',
                        'InterviewController@viewJobInterviews');
                    Route::get('/{id}',
                        'InterviewController@viewInterviews');
                    Route::get('/assess/{id}',
                        'InterviewController@getAssess');
                    Route::post('/assess',
                        'InterviewController@assessInterview');
                });
            });
        });
    });

    Route::prefix('/learning')->group(function () {
        Route::namespace('Lms')->group(function () {
            Route::middleware(['auth', 'isUser', 'applicantPassed'])
                ->group(function () {
                    Route::get('/', 'HomeController@index');
                    Route::get('course/{slug}',
                        [
                            'uses' => 'CoursesController@show',
                            'as'   => 'courses.show'
                        ]);
                    Route::post('course/payment',
                        [
                            'uses' => 'CoursesController@payment',
                            'as'   => 'courses.payment'
                        ]);
                    Route::post('course/{course_id}/rating',
                        [
                            'uses' => 'CoursesController@rating',
                            'as'   => 'courses.rating'
                        ]);

                    Route::get('lesson/{course_id}/{slug}',
                        [
                            'uses' => 'LessonsController@show',
                            'as'   => 'lessons.show'
                        ]);
                    Route::post('lesson/{slug}/test',
                        [
                            'uses' => 'LessonsController@test',
                            'as'   => 'lessons.test'
                        ]);
                });
            Route::group([
                'middleware' => ['admin'],
                'prefix'     => '/admin',
                'as'         => 'admin.'
            ],
                function () {
                    Route::get('/', 'Admin\DashboardController@index');
                    Route::get('/home', 'Admin\DashboardController@index');
                    Route::resource('permissions',
                        'Admin\PermissionsController');
                    Route::post('permissions_mass_destroy', [
                        'uses' => 'Admin\PermissionsController@massDestroy',
                        'as'   => 'permissions.mass_destroy'
                    ]);
                    Route::resource('roles', 'Admin\RolesController');
                    Route::post('roles_mass_destroy', [
                        'uses' => 'Admin\RolesController@massDestroy',
                        'as'   => 'roles.mass_destroy'
                    ]);
                    Route::resource('users', 'Admin\UsersController');
                    Route::post('users_mass_destroy', [
                        'uses' => 'Admin\UsersController@massDestroy',
                        'as'   => 'users.mass_destroy'
                    ]);
                    Route::resource('courses', 'Admin\CoursesController');
                    Route::post('courses_mass_destroy', [
                        'uses' => 'Admin\CoursesController@massDestroy',
                        'as'   => 'courses.mass_destroy'
                    ]);
                    Route::post('courses_restore/{id}', [
                        'uses' => 'Admin\CoursesController@restore',
                        'as'   => 'courses.restore'
                    ]);
                    Route::delete('courses_perma_del/{id}', [
                        'uses' => 'Admin\CoursesController@perma_del',
                        'as'   => 'courses.perma_del'
                    ]);
                    Route::resource('lessons', 'Admin\LessonsController');
                    Route::post('lessons_mass_destroy', [
                        'uses' => 'Admin\LessonsController@massDestroy',
                        'as'   => 'lessons.mass_destroy'
                    ]);
                    Route::post('lessons_restore/{id}', [
                        'uses' => 'Admin\LessonsController@restore',
                        'as'   => 'lessons.restore'
                    ]);
                    Route::delete('lessons_perma_del/{id}', [
                        'uses' => 'Admin\LessonsController@perma_del',
                        'as'   => 'lessons.perma_del'
                    ]);
                    Route::resource('questions', 'Admin\QuestionsController');
                    Route::post('questions_mass_destroy', [
                        'uses' => 'Admin\QuestionsController@massDestroy',
                        'as'   => 'questions.mass_destroy'
                    ]);
                    Route::post('questions_restore/{id}', [
                        'uses' => 'Admin\QuestionsController@restore',
                        'as'   => 'questions.restore'
                    ]);
                    Route::delete('questions_perma_del/{id}', [
                        'uses' => 'Admin\QuestionsController@perma_del',
                        'as'   => 'questions.perma_del'
                    ]);
                    Route::resource('questions_options',
                        'Admin\QuestionsOptionsController');
                    Route::post('questions_options_mass_destroy', [
                        'uses' => 'Admin\QuestionsOptionsController@massDestroy',
                        'as'   => 'questions_options.mass_destroy'
                    ]);
                    Route::post('questions_options_restore/{id}', [
                        'uses' => 'Admin\QuestionsOptionsController@restore',
                        'as'   => 'questions_options.restore'
                    ]);
                    Route::delete('questions_options_perma_del/{id}', [
                        'uses' => 'Admin\QuestionsOptionsController@perma_del',
                        'as'   => 'questions_options.perma_del'
                    ]);
                    Route::resource('tests', 'Admin\TestsController');
                    Route::post('tests_mass_destroy', [
                        'uses' => 'Admin\TestsController@massDestroy',
                        'as'   => 'tests.mass_destroy'
                    ]);
                    Route::post('tests_restore/{id}', [
                        'uses' => 'Admin\TestsController@restore',
                        'as'   => 'tests.restore'
                    ]);
                    Route::delete('tests_perma_del/{id}', [
                        'uses' => 'Admin\TestsController@perma_del',
                        'as'   => 'tests.perma_del'
                    ]);
                    Route::post('/spatie/media/upload',
                        'Admin\SpatieMediaController@create')
                        ->name('media.upload');
                    Route::post('/spatie/media/remove',
                        'Admin\SpatieMediaController@destroy')
                        ->name('media.remove');

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
Route::get('apptest', function (\Illuminate\Http\Request $request) {
    /*$string='There is a name';
        $start=0;
        $limit=20;

        $stripped_string =strip_tags($string); // if there are HTML or PHP tags
        $string_array =explode(' ',$stripped_string);
        $truncated_array = array_splice($string_array,$start,$limit);
        $truncated_string=implode(' ',$truncated_array) . "...";

        echo $truncated_string;*/
/*    $url = url('/apptest');
    $csrf = csrf_field();

    echo "
<form action='$url'>
    $csrf
    Nth Term: <input name='nth' value=''> <br>
    <input type='submit'>
</form><hr>";

    if (isset($request->nth)) {

        $a = 0;
        $b = 1;
        $c = 0;
        $n = $request->nth;
        for ($i = 0; $i < $n; $i++) {
            if ($i <= 1) {
                $c = $i;
                $a=$b;
                $b=$c;
            } else {
                $c=$a+$b;
                $a=$b;
                $b=$c;
            }
            echo "$c,";
        }
        echo "<br>The $n term is =-> $c";
    }
*/
    /*$routeCollection = Route::getRoutes();

    echo sizeof($routeCollection);
    foreach ($routeCollection as $value) {
        echo $value->uri . "<br>";
    }*/
});
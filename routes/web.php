<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChildUserController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SocialLinksController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\UserAssignmentController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::resource('teams', TeamController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('register-child', [ChildUserController::class, 'showRegistrationForm'])->name('register.child');
Route::post('register-child', [ChildUserController::class, 'register'])->name('register.child');

Route::get('upload-file', [FileUploadController::class, 'showUploadForm'])->name('upload.file');
Route::post('upload-file', [FileUploadController::class, 'uploadFile'])->name('upload.file');

Route::get('register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register')->middleware('parent');
Route::post('register', [RegisteredUserController::class, 'register'])->middleware('parent');

// Route::get('/redirect/{provider}', [SocialAuthController::class, 'redirect']);

// Route::get('/callback/twitter', [SocialAuthController::class, 'callback']);


Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']
);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Route::get('assign-user', [UserAssignmentController::class, 'showAssignmentForm'])->name('assign.user');
Route::post('assign-user', [UserAssignmentController::class, 'assignUser'])->name('assign.user');

// Define the route for the user unassignment in the routes/web.php file
Route::post('unassign-user', [UserAssignmentController::class, 'unassignUser'])->name('unassign.user');


// adding social links
Route::middleware(['auth'])->group(function () {
    // Route for GitHub form submission
    Route::post('/update-github', [SocialLinksController::class, 'storeGithub'])->name('update.github');

    // Route for Twitter form submission
    Route::post('/update-twitter', [SocialLinksController::class, 'storeTwitter'])->name('update.twitter');

    // Route for Slack form submission
    Route::post('/update-slack', [SocialLinksController::class, 'storeSlack'])->name('update.slack');
});



Route::get('/software', function () {
    return view('software');
    
})->middleware(['auth', 'verified'])->name('software');


Route::middleware(['auth'])->group(function () {
    Route::view('/admin/users', 'admin.users');
    Route::delete('/admin/user/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
    Route::get('/admin/add-video', [AdminController::class, 'addVideo'])->name('admin.addVideo');
    Route::post('/admin/add-video', [AdminController::class, 'submitVideo'])->name('admin.submitVideo');
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('userdashboard');

    Route::get('/dashboard', 'VideoController@dashboard');
    Route::get('/dashboard', [VideoController::class, 'dashboard']);
    Route::post('/admin/adminhome', [AdminController::class, 'postVideo'])->name('post.video');

    // Add other authenticated routes here
});



// get user data
Route::get('/admin/users', 'AdminController@showUserList');
Route::get('/admin/users', [AdminController::class, 'showUserList'])->name('admin.users');


Route::get('/full_calendar', [EventController::class, 'index'])->middleware('auth')->name('event');

Route::get('/lessons',[UserController::class,'dashboard'])->middleware('auth')->name('lessons');

// Route::get('/lessons', function () {
//     return view('lessons');
    
// })->middleware(['auth', 'verified'])->name('lessons');

require __DIR__.'/auth.php';

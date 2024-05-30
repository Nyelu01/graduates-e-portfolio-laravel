<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Project\ProjectController;
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

// Public routes
Route::get("/", [AuthController::class, 'index'])->name("home");
Route::get("/about", [AuthController::class, 'about'])->name("about");
Route::get("/login/form", [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'userLogin'])->name('user.login');
Route::get('/register/candidate/form', [AuthController::class, 'register_candidate'])->name('candidate.register');
Route::get('/register/employer/form', [AuthController::class, 'register_employer'])->name('employer.register');
Route::post('/register', [AuthController::class, 'userRegister'])->name('register');

// Routes protected by 'auth' middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // Candidate routes
    Route::middleware(['user-role:candidate'])->group(function () {
        Route::resource('projects', ProjectController::class);

    });

    // Employer routes
    Route::middleware(['user-role:employer'])->group(function () {
        Route::get("/employer/home", [DashBoardController::class, 'employerHome'])->name("employer.home");
    });

});



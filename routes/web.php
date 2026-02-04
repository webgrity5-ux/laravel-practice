<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Jobs\SendWelcomeEmail;

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
    $user = \App\Models\User::find(2);
    $roles = $user->getRoleNames();
    echo "<pre>";
    print_r($roles->toArray());
    echo "</pre>";
    $user2 = \App\Models\User::all();
    // $permissions = $user2->getAllPermissions();
    // echo "<pre>"; print_r($permissions->toArray()); echo "</pre>";
    foreach ($user2 as $user) {
        $permissions = $user->getAllPermissions();

        echo "<h3>User: {$user->name} - {$user->getRoleNames()}</h3>";
        echo "<pre>";
        print_r($permissions->pluck('name')->toArray());
        echo "</pre>";
        SendWelcomeEmail::dispatch();

    }
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index']);
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

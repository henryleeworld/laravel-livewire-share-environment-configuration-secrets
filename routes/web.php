<?php

use App\Http\Livewire\Account;
use App\Http\Livewire\Apps\Edit;
use App\Http\Livewire\Apps\Index as AppsIndex;
use App\Http\Livewire\Apps\Show;
use App\Http\Livewire\Auth;
use App\Http\Livewire\Log;
use App\Http\Livewire\Setup;
use App\Http\Livewire\Users\Index as UsersIndex;
use Illuminate\Support\Facades\Route;

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
Route::middleware('setup')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('', Auth::class)->middleware('guest')->name('auth');
        Route::post('logout', function () {
            auth()->logout();

            return redirect('/');
        })->middleware('auth')->name('auth.logout');
    });

    Route::middleware('auth')->group(function () {
        Route::redirect('', 'apps');

        Route::get('account', Account::class)->name('account');

        Route::get('apps', AppsIndex::class)->name('apps.index');
        Route::get('apps/{app}', Show::class)->name('apps.show');
        Route::get('apps/{app}/edit', Edit::class)->name('apps.edit');

        Route::get('log', Log::class)->middleware('can:administrate')->name('log');

        Route::get('users', UsersIndex::class)->name('users.index');
    });
});

Route::get('setup', Setup::class)->middleware(['guest', 'not-setup'])->name('setup');

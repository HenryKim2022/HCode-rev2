<?php

use App\Http\Controllers\Base\Language_Controller;
use App\Http\Controllers\Base\SystemController;
use App\Http\Controllers\Base\Template_Controller;
use App\Http\Controllers\Landings\LandingPage_Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Locale Middleware Group
Route::group(['middleware' => ['setLocale']], function () {
    Route::get('/', [LandingPage_Controller::class, 'index'])->name('root');
    Route::get('/landing', [LandingPage_Controller::class, 'index'])->name('landing.root');
    Route::get('/temp', [Template_Controller::class, 'template']);
});

// Language Switching Route
Route::get('/lang/{locale}', [Language_Controller::class, 'switchLanguage'])
    ->name('lang.switch');


Route::middleware(['setLocale'])->group(function () {
    // System Settings Routes
    Route::get('/system/settings', [SystemController::class, 'index'])->name('index.syssettings');
    Route::post('/system/update-maintenance-exclusion', [SystemController::class, 'update'])->name('syssettings.exclusionupdate');
    Route::post('/system/toggle-maintenance', [SystemController::class, 'toggleMaintenance'])->name('syssettings.togglemaintenance');
    Route::post('/system/toggle-debug', [SystemController::class, 'toggleDebug'])->name('syssettings.toggledebug');
    Route::post('/system/toggle-logging', [SystemController::class, 'toggleLogging'])->name('syssettings.togglelogging');
    Route::get('/system/refresh-log', [SystemController::class, 'toggleRefreshLog'])->name('syssettings.refreshlogs');
    Route::post('/system/clear-log', [SystemController::class, 'toggleClearLog'])->name('syssettings.clearlogs');
    Route::get('/system/clear-log', [SystemController::class, 'toggleClearLog'])->name('syssettings.clearlogs');

    Route::post('/system/clear-app-cache', [SystemController::class, 'clearAppCache'])->name('syssettings.clearappcache');
    Route::post('/system/clear-config-cache', [SystemController::class, 'clearConfigCache'])->name('syssettings.clearconfigcache');
    Route::post('/system/clear-route-cache', [SystemController::class, 'clearRouteCache'])->name('syssettings.clearroutecache');
    Route::post('/system/clear-view-cache', [SystemController::class, 'clearViewCache'])->name('syssettings.clearviewcache');


    // Route::post('/system/save-typed-ip', [SystemController::class, 'saveTypedIp'])->name('syssettings.savetyped.ip');
    // Route::post('/system/save-typed-uri', [SystemController::class, 'saveTypedUri'])->name('syssettings.savetyped.uri');


    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Role-Based Middleware Group
Route::group(['middleware' => 'role:superuser,supervisor,moderator', 'prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::group(['prefix' => 'posts-type', 'as' => 'posts-type.'], function () {
        /* Define specific routes here */
    });
});

// Test Routes (Only for Development)
if (app()->environment('local')) {
    Route::get('/test-401', function () {
        abort(401); // Unauthorized
    });

    Route::get('/test-404', function () {
        abort(404); // Not Found
    });

    Route::get('/test-500', function () {
        abort(500); // Internal Server Error
    });

    Route::get('/test-503', function () {
        abort(503); // Service Unavailable (Maintenance Mode)
    });
}







// Include Authentication Routes
require __DIR__ . '/auth.php';

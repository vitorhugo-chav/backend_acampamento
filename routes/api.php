<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CampingController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\FestivalController;
use App\Http\Controllers\Api\V1\MaritalStatusController;
use App\Http\Controllers\Api\V1\RoleController;
use App\Http\Controllers\Api\V1\SectorController;
use App\Http\Controllers\Api\V1\SelectionMethodController;
use App\Http\Controllers\Api\V1\SubscriptionController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('api.v1.')->group(function () {
    // Rotas públicas
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('users', [UserController::class, 'store'])->name('users.store');

    // Dados públicos (usados no cadastro sem login)
    Route::apiResource('marital-statuses', MaritalStatusController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('selection-methods', SelectionMethodController::class);
    Route::apiResource('sectors', SectorController::class);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/user', fn (Request $request) => $request->user())->name('user');

        // Available campings for the authenticated user (MUST be before apiResource)
        Route::get('campings/available', [CampingController::class, 'available'])
            ->name('campings.available');

        Route::apiResource('campings', CampingController::class);
        Route::apiResource('festivals', FestivalController::class);
        Route::apiResource('events', EventController::class);
        Route::apiResource('subscriptions', SubscriptionController::class);
        Route::apiResource('users', UserController::class)->except('store');

        // Custom validation endpoint for event participation
        Route::get('events/{event}/validate-participation', [EventController::class, 'validateParticipation'])
            ->name('events.validate-participation');
    });
});

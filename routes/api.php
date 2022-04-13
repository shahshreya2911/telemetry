<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\CustomersController;
use App\Http\Controllers\Api\CustomerMetaController;
use App\Http\Controllers\Api\SitesController;
use App\Http\Controllers\Api\SiteMetaController;
use App\Http\Controllers\Api\PluginsController;
use App\Http\Controllers\Api\EventsController;
use App\Http\Controllers\Api\WebhooksController;
use App\Http\Controllers\Api\ReportsController;
use App\Http\Controllers\Api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test-page', [TestController::class, 'index'])->name('test-page');



// customers
Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
Route::post('/customers/create', [CustomersController::class, 'store'])->name('customers.create');
Route::post('/customers/details', [CustomersController::class, 'show'])->name('customers.details');
Route::post('/customers/update', [CustomersController::class, 'update'])->name('customers.update');
Route::post('/customers/delete', [CustomersController::class, 'destroy'])->name('customers.delete');
Route::post('/customers/delete-multiple', [CustomersController::class, 'deleteMultiple'])->name('customers.delete-multiple');


// customer-meta
Route::get('/customer-meta', [CustomerMetaController::class, 'index'])->name('customer-meta');
Route::post('/customer-meta/create', [CustomerMetaController::class, 'store'])->name('customer-meta.create');


// sites
Route::get('/sites', [SitesController::class, 'index'])->name('sites');
Route::post('/sites/create', [SitesController::class, 'store'])->name('sites.create');
Route::post('/sites/details', [SitesController::class, 'show'])->name('sites.details');
Route::post('/sites/update', [SitesController::class, 'update'])->name('sites.update');
Route::post('/sites/delete', [SitesController::class, 'destroy'])->name('sites.delete');
Route::post('/sites/delete-multiple', [SitesController::class, 'deleteMultiple'])->name('sites.delete-multiple');


// site-meta
Route::get('/site-meta', [SiteMetaController::class, 'index'])->name('site-meta');
Route::post('/site-meta/create', [SiteMetaController::class, 'store'])->name('site-meta.create');


// plugins
Route::get('/plugins', [PluginsController::class, 'index'])->name('plugins');
Route::post('/plugins/create', [PluginsController::class, 'store'])->name('plugins.create');


// events
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::post('/events/create', [EventsController::class, 'store'])->name('events.create');


// webhooks
Route::get('/webhooks', [WebhooksController::class, 'index'])->name('webhooks');
Route::post('/webhooks/create', [WebhooksController::class, 'store'])->name('webhooks.create');
Route::post('/webhooks/details', [WebhooksController::class, 'show'])->name('webhooks.details');
Route::post('/webhooks/update', [WebhooksController::class, 'update'])->name('webhooks.update');
Route::post('/webhooks/delete', [WebhooksController::class, 'destroy'])->name('webhooks.delete');
Route::post('/webhooks/delete-multiple', [WebhooksController::class, 'deleteMultiple'])->name('webhooks.delete-multiple');	



// reports
Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
Route::post('/reports/create', [ReportsController::class, 'store'])->name('reports.create');
Route::post('/reports/details', [ReportsController::class, 'show'])->name('reports.details');
Route::post('/reports/update', [ReportsController::class, 'update'])->name('reports.update');
Route::post('/reports/delete', [ReportsController::class, 'destroy'])->name('reports.delete');
Route::post('/reports/delete-multiple', [ReportsController::class, 'deleteMultiple'])->name('reports.delete-multiple');	
	

// users
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::post('/users/create', [UsersController::class, 'store'])->name('users.create');
Route::post('/users/details', [UsersController::class, 'show'])->name('users.details');
Route::post('/users/update', [UsersController::class, 'update'])->name('users.update');
Route::post('/users/delete', [UsersController::class, 'destroy'])->name('users.delete');
Route::post('/users/delete-multiple', [UsersController::class, 'deleteMultiple'])->name('users.delete-multiple');	

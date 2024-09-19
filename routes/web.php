<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('/supplier', [\App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');

    Route::get('/supplier/add/stock/view', [\App\Http\Controllers\AddStockController::class, 'index'])->name('supplier.add.stock.view');
    Route::post('/supplier/addtype', [\App\Http\Controllers\AddStockController::class, 'addProductType'])->name('supplier.add.type');
    Route::post('/supplier/add/stock', [\App\Http\Controllers\AddStockController::class, 'addStock'])->name('supplier.add.stock');

    Route::get('/supplier/stocks/view', [\App\Http\Controllers\SupplierStockController::class, 'index'])->name('supplier.stock.view');
    Route::get('/supplier/get/stocks', [\App\Http\Controllers\SupplierStockController::class, 'getStock'])->name('supplier.get.stocks');
    Route::post('/supplier/add/stocks/details', [\App\Http\Controllers\SupplierStockController::class, 'addDetails'])->name('supplier.add.dtls');
    Route::get('/supplier/show/stocks/details/{id}', [\App\Http\Controllers\SupplierStockController::class, 'showDetails'])->name('supplier.show.dtls');

    Route::get('/inventory', [\App\Http\Controllers\InventoryDashboardController::class, 'index'])->name('inventory');
    Route::get('/inventory/pending', [\App\Http\Controllers\InventoryDashboardController::class, 'showPendingStocks']);

    Route::get('/inventory/request/stock', [\App\Http\Controllers\InventoryRequestController::class, 'index'])->name('inventory.request');
    Route::post('/inventory/request/stock/make', [\App\Http\Controllers\InventoryRequestController::class, 'makeRequest']);

    Route::get('/inventory/stock', [\App\Http\Controllers\InventoryStockController::class, 'index'])->name('inventory.stock');

    Route::get('/finance', [\App\Http\Controllers\FinanceController::class, 'index'])->name('finance');

    Route::get('/finance/request', [\App\Http\Controllers\FinanceRequestController::class, 'index'])->name('finance.request');
    Route::get('/finance/request/show', [\App\Http\Controllers\FinanceRequestController::class, 'showRequest']);

    Route::get('/finance/generate/report', [\App\Http\Controllers\FinanceGenerateReportController::class, 'index'])->name('generate.report');
});

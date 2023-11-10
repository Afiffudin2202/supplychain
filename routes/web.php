<?php

use App\Models\logistic\Material;
use App\Models\logistic\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logistic\RakController;
use App\Http\Controllers\logistic\BpnbController;
use App\Http\Controllers\logistic\ScanController;
use App\Http\Controllers\logistic\StorageController;
use App\Http\Controllers\logistic\IncomingController;
use App\Http\Controllers\logistic\MaterialController;
use App\Http\Controllers\logistic\SupplierController;
use App\Http\Controllers\logistic\MaterialRakController;

Route::get('/', function () {
    return view('index');
});

// Logistic
route::get('/logistic', function () {
    return view('logistic.dashboard.index');
});

// master data
// material
route::resource('datamaster/material', MaterialController::class);
Route::get('datamaster/material/print/{id}', [MaterialController::class, 'print']);
Route::get('datamaster/material/addstock/{id}', [MaterialController::class, 'addStock']);
Route::put('datamaster/material/addstock/{id}', [MaterialController::class, 'updateStock']);
// material end

// supplier
Route::resource('datamaster/supplier', SupplierController::class);
// supplier end

// rak
Route::resource('datamaster/rak', RakController::class);
Route::get('datamaster/rak/print/{id}', [RakController::class, 'print']);
// rak end


// receiving
Route::resource('receiving/incoming', IncomingController::class);
Route::get('receiving/incoming/print/{id}', [IncomingController::class, 'print']);

// BPNB
route::resource('receiving/bpnb', BpnbController::class); // BPNB
Route::get('receiving/incoming/bpnb/print', [BpnbController::class, 'print']);
// BPNB end

//storage index material dan finishgood
Route::get('storage/rawmaterial', [StorageController::class, 'indexHome']);
Route::get('storage/finishedgood', [StorageController::class, 'indexFinishedGood']);


// Scan All
Route::get('scan/information', [ScanController::class, 'scanInformationMaterial']);
Route::get('receiving/scan', [ScanController::class, 'receivingScan']);
Route::get('receiving/scan/stockin', [ScanController::class, 'stockIn']);
Route::get('scan/stockin/add/{$id}', [MaterialController::class, 'addStock']);




// untuk rackchecking
Route::resource('storage/listmaterial', MaterialRakController::class);

// untuk scan
Route::get('storage/scan', [MaterialRakController::class, 'scan']);






// logistic end

<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIS\V1\CustomerController;
use App\Http\Controllers\APIS\V1\InvoiceController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello API'
    ]);
});

//api/v1
Route::prefix('v1')->group(function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});
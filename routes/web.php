<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController; // Import AppController

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

// Dashboard (Default, akan diarahkan berdasarkan peran)
Route::get('/', [AppController::class, 'dashboard'])->name('dashboard');

// Dashboard Spesifik Peran
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/sales', [AppController::class, 'salesDashboard'])->name('sales');
    Route::get('/superadmin', [AppController::class, 'superadminDashboard'])->name('superadmin');
    Route::get('/kepala-depo', [AppController::class, 'kepalaDepoDashboard'])->name('kepala_depo');
    Route::get('/koperasi', [AppController::class, 'koperasiDashboard'])->name('koperasi');
    Route::get('/supplier', [AppController::class, 'supplierDashboard'])->name('supplier');
});


// Master Data Group
Route::prefix('master-data')->name('master_data.')->group(function () {
    Route::get('/sales', [AppController::class, 'masterDataSales'])->name('sales');
    Route::get('/sales/{id}', [AppController::class, 'masterDataSalesDetail'])->name('sales_detail'); // Rute baru
    Route::get('/depo', [AppController::class, 'masterDataDepo'])->name('depo');
    Route::get('/depo/{id}', [AppController::class, 'masterDataDepoDetail'])->name('depo_detail'); // Rute baru
    Route::get('/jenis-pembayaran', [AppController::class, 'masterDataJenisPembayaran'])->name('jenis_pembayaran');
});

// Manajemen Relasi Group
Route::prefix('manajemen-relasi')->name('manajemen_relasi.')->group(function () {
    Route::get('/outlet', [AppController::class, 'manajemenRelasiOutlet'])->name('outlet');
    Route::get('/outlet/{id}', [AppController::class, 'manajemenRelasiOutletDetail'])->name('outlet_detail'); // Rute baru
    Route::get('/customer', [AppController::class, 'manajemenRelasiCustomer'])->name('customer');
    Route::get('/customer/{id}', [AppController::class, 'manajemenRelasiCustomerDetail'])->name('customer_detail'); // Rute baru
});

// Manajemen Produk & Penawaran Group
Route::prefix('produk-penawaran')->name('manajemen_produk_penawaran.')->group(function () {
    Route::get('/product', [AppController::class, 'manajemenProdukPenawaranProduct'])->name('product');
    Route::get('/product/{id}', [AppController::class, 'manajemenProdukPenawaranProductDetail'])->name('product_detail'); // Rute baru
    Route::get('/program-promo', [AppController::class, 'manajemenProdukPenawaranProgramPromo'])->name('program_promo');
    Route::get('/program-promo/{id}', [AppController::class, 'manajemenProdukPenawaranProgramPromoDetail'])->name('program_promo_detail'); // Rute baru
});

// Operasional Sales Group
Route::prefix('operasional-sales')->name('operasional_sales.')->group(function () {
    Route::get('/task-management', [AppController::class, 'operasionalSalesTaskManagement'])->name('task_management');
    Route::get('/task-management/{id}', [AppController::class, 'operasionalSalesTaskDetail'])->name('task_detail');
    Route::get('/sales-order', [AppController::class, 'operasionalSalesSalesOrder'])->name('sales_order');
    Route::get('/sales-order/{id}', [AppController::class, 'operasionalSalesSalesOrderDetail'])->name('sales_order_detail');
    Route::get('/pengiriman', [AppController::class, 'operasionalSalesPengiriman'])->name('pengiriman');
    Route::get('/pengiriman/{id}', [AppController::class, 'operasionalSalesPengirimanDetail'])->name('pengiriman_detail');
    Route::get('/penagihan', [AppController::class, 'operasionalSalesPenagihan'])->name('penagihan');
    Route::get('/penagihan/{id}', [AppController::class, 'operasionalSalesPenagihanDetail'])->name('penagihan_detail');
});

// Reports Group
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/', [AppController::class, 'reportsIndex'])->name('index');
    Route::get('/penjualan', [AppController::class, 'reportsPenjualan'])->name('penjualan');
    Route::get('/kunjungan-sales', [AppController::class, 'reportsKunjunganSales'])->name('kunjungan_sales');
    Route::get('/pengiriman', [AppController::class, 'reportsPengiriman'])->name('pengiriman');
    Route::get('/penagihan', [AppController::class, 'reportsPenagihan'])->name('penagihan');
    Route::get('/produk', [AppController::class, 'reportsProduk'])->name('produk');
    Route::get('/program-promo', [AppController::class, 'reportsProgramPromo'])->name('program_promo');
    Route::get('/customer', [AppController::class, 'reportsCustomer'])->name('customer');
});

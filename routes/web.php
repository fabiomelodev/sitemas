<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MercadoPagoController;
use App\Http\Controllers\NicheController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebsiteController;
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

// Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/nicho/{niche:slug}', [NicheController::class, 'show'])->name('niche.show');

Route::post('/nicho/{niche:slug}/processo', [NicheController::class, 'process'])->name('niche.process');

Route::get('/nicho/{niche:slug}/pedido/{order:uuid}', [OrderController::class, 'create'])->name('order.create');

// Route::post('/nicho/{niche:slug}/pedido/{order:uuid}', [OrderController::class, 'store'])->name('order.store');

Route::get('/nicho/{niche:slug}/checkout/{order:uuid}/', [OrderController::class, 'checkout'])->name('order.checkout');

Route::post('/nicho/{niche:slug}/pedido/{order:uuid}/voltar/{step}', [OrderController::class, 'back'])->name('order.back');
// Route::post('/mercadopago/planos', [MercadoPagoController::class, 'createPlan'])->name('mercadopago.createPlan');

// Route::post('/mercadopago/webhook', [MercadoPagoController::class, 'webhook']);

// Route::post('/processar-pagamento', [CheckoutController::class, 'processPayment'])->name('checkout.processPayment');

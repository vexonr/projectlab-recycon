<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Authentication;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'HomepageViewer']);
Route::get('/see_items', [ItemController::class, 'seeItems']);
Route::get('/search', [ItemController::class, 'searchItems']);
Route::get('/item_details/{item_id}', [ItemController::class, 'seeItemDetails']);

Route::get('/login', [UserController::class, 'seeLogin']);
Route::post('/login', [Authentication::class, 'userLogin']);
Route::get('/signup', [UserController::class, 'seeSignup']);
Route::post('/signup', [UserController::class, 'userSignup']);
Route::get('/logout', [Authentication::class, 'userLogout']);

Route::get('/edit_items', [ItemController::class, 'seeItemsAdmin'])->middleware('AuthorizationAdmin');
Route::get('/add_item', [ItemController::class, 'addItemAdminPage'])->middleware('AuthorizationAdmin');
Route::post('/add_item', [ItemController::class, 'addItemAdmin'])->middleware('AuthorizationAdmin');
Route::get('/update_item/{item_id}', [ItemController::class, 'updateItemAdminPage'])->middleware('AuthorizationAdmin');
Route::post('/update_item/{item_id}', [ItemController::class, 'updateItemAdmin'])->middleware('AuthorizationAdmin');
Route::get('/delete_item/{item_id}', [ItemController::class, 'deleteItemAdmin'])->middleware('AuthorizationAdmin');

Route::get('/edit_profile', [UserController::class, 'seeEditProfile']);
Route::post('/edit_profile', [UserController::class, 'editProfile']);

Route::get('/edit_password', [UserController::class, 'seeEditPassword']);
Route::post('/edit_password', [UserController::class, 'editPassword']);

Route::get('/cart', [CartController::class, 'seeCart']);

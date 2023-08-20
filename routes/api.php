<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/pdf', [App\Http\Controllers\Web\SampleController::class, 'pdf']);
Route::get('/json', [App\Http\Controllers\Web\SampleController::class, 'json']);
Route::get('/jsonx', [App\Http\Controllers\Web\SampleController::class, 'jsonx']);
Route::match(['GET','POST','PUT','DELETE'],'/login','App\Http\Controllers\Api\loginController@Login');
Route::post('/register','App\Http\Controllers\Api\loginController@Register');
Route::get('/item_master', [App\Http\Controllers\Api\ItemController::class, 'get']);
Route::put('/item_master/{id}', [App\Http\Controllers\Api\ItemController::class, 'put']);
Route::post('/item_master', [App\Http\Controllers\Api\ItemController::class, 'post']);
Route::delete('/item_master/{id}', [App\Http\Controllers\Api\ItemController::class, 'delete']);
Route::post('/excel_reader', [App\Http\Controllers\Excel_Reader::class, 'excel_reader']);
Route::get('/item_master', [App\Http\Controllers\Api\ItemController::class, 'get']);
Route::put('/item_master/{id}', [App\Http\Controllers\Api\ItemController::class, 'put']);
Route::post('/item_master', [App\Http\Controllers\Api\ItemController::class, 'post']);
Route::delete('/item_master/{id}', [App\Http\Controllers\Api\ItemController::class, 'delete']);
Route::get('/category_master', [App\Http\Controllers\Api\categoryNgradeController::class, 'getCatergory']);
Route::put('/category_master/{id}', [App\Http\Controllers\Api\categoryNgradeController::class, 'putCatergory']);
Route::post('/category_master', [App\Http\Controllers\Api\categoryNgradeController::class, 'postCatergory']);
Route::delete('/category_master/{id}', [App\Http\Controllers\Api\categoryNgradeController::class, 'deleteCatergory']);
Route::get('/grade_master', [App\Http\Controllers\Api\categoryNgradeController::class, 'getGrade']);
Route::put('/grade_master/{id}', [App\Http\Controllers\Api\categoryNgradeController::class, 'putGrade']);
Route::post('/grade_master', [App\Http\Controllers\Api\categoryNgradeController::class, 'postGrade']);
Route::delete('/grade_master/{id}', [App\Http\Controllers\Api\categoryNgradeController::class, 'deleteGrade']);
Route::get('/enquiry_master', [App\Http\Controllers\Api\enquiryNorderController::class, 'getEnquiry']);
Route::put('/enquiry_master/{id}', [App\Http\Controllers\Api\enquiryNorderController::class, 'putEnquiry']);
Route::post('/enquiry_master', [App\Http\Controllers\Api\enquiryNorderController::class, 'postEnquiry']);
Route::delete('/enquiry_master/{id}', [App\Http\Controllers\Api\enquiryNorderController::class, 'deleteEnquiry']);
Route::get('/order_master', [App\Http\Controllers\Api\enquiryNorderController::class, 'getOrder']);
Route::put('/order_master/{id}', [App\Http\Controllers\Api\enquiryNorderController::class, 'putOrder']);
Route::post('/order_master', [App\Http\Controllers\Api\enquiryNorderController::class, 'postOrder']);
Route::delete('/order_master/{id}', [App\Http\Controllers\Api\enquiryNorderController::class, 'deleteOrder']);
Route::get('/company_master', [App\Http\Controllers\Api\companyController::class, 'getCompany']);
Route::put('/company_master/{id}', [App\Http\Controllers\Api\companyController::class, 'putCompany']);
Route::post('/company_master', [App\Http\Controllers\Api\companyController::class, 'postCompany']);
Route::delete('/company_master/{id}', [App\Http\Controllers\Api\companyController::class, 'deleteCompany']);
Route::post('/notify', [App\Http\Controllers\Api\notificationController::class, 'post'])->middleware('auth:sanctum');
Route::get('/notify', [App\Http\Controllers\Api\notificationController::class, 'get'])->middleware('auth:sanctum');
Route::get('/chat', [App\Http\Controllers\Api\chatController::class, 'getChats']);
Route::post('/chat', [App\Http\Controllers\Api\chatController::class, 'postChats']);
Route::delete('/chat/{id}', [App\Http\Controllers\Api\chatController::class, 'deleteChats']);
Route::get('/chat_master', [App\Http\Controllers\Api\chatController::class, 'getChatsMaster']);
Route::post('/chat_master', [App\Http\Controllers\Api\chatController::class, 'postChatsMaster']);
Route::delete('/chat_master/{id}', [App\Http\Controllers\Api\chatController::class, 'deleteChatsMaster']);
Route::get('/user_access', [App\Http\Controllers\Api\userAccessController::class, 'get']);
Route::put('/user_access/{id}', [App\Http\Controllers\Api\userAccessController::class, 'put']);
Route::post('/user_access', [App\Http\Controllers\Api\userAccessController::class, 'post']);
Route::delete('/user_access/{id}', [App\Http\Controllers\Api\userAccessController::class, 'delete']);

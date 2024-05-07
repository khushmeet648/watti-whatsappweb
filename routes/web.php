<?php


use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ApiDocsController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ChatbotsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageAccountController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Auth.register');
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'registerPost'])->name('register.post');

// Team Inbox
Route::get('/inbox', [DashboardController::class,'index'])->name('inbox');

// Broadcast
Route::get('/history', [BroadcastController::class,'history'])->name('history');
Route::get('/scheduledbroadcast', [BroadcastController::class,'schedule'])->name('scheduledbroadcast');
Route::post('/scheduledbroadcast', [BroadcastController::class,'historypost'])->name('historypost');
Route::get('/templatemessages', [BroadcastController::class,'template'])->name('templatemessages');
Route::post('/templatemessages', [BroadcastController::class,'templatepost'])->name('template.post');
Route::get('delete/{Name}', [BroadcastController::class,'destroy'])->name('destroy');

// ChatBots
Route::get('/chatbotflows', [ChatbotsController::class,'flows'])->name('chatbotflows');
Route::get('/defaultaction', [ChatbotsController::class,'default'])->name('default');
Route::get('/keyword', [ChatbotsController::class,'keyword'])->name('keyword');
Route::get('/keywordaction', [ChatbotsController::class,'keywordaction'])->name('keywordaction');

Route::get('/replymaterial', [ChatbotsController::class,'replymaterial'])->name('replymaterial');
Route::get('/routing', [ChatbotsController::class,'routing'])->name('routing');
Route::get('/sequence', [ChatbotsController::class,'sequence'])->name('sequence');
Route::post('/sequence', [ChatbotsController::class,'sequencepost'])->name('sequence.post');



// sub folder of replymaterial 
Route::get('/text', [ChatbotsController::class,'text'])->name('text');
Route::get('/document', [ChatbotsController::class,'document'])->name('document');
// ------------

// Contact
Route::get('/contact', [ContactController::class,'index'])->name('contact');

// Analytics
Route::get('/inboxanalytics', [AnalyticsController::class,'inbox'])->name('inboxanalytics');
Route::get('/clicktowhatsappads', [AnalyticsController::class,'ctwa'])->name('ctwa');

// Api
Route::get('/apidocs', [ApiDocsController::class,'index'])->name('api');

// more
Route::get('/usermanagement', [MoreController::class,'user'])->name('user');
Route::get('/integration', [MoreController::class,'integration'])->name('integration');
Route::get('/webhooks', [MoreController::class,'webhooks'])->name('webhooks');
Route::get('/webhookslog', [MoreController::class,'logs'])->name('logs');
Route::get('/catalog', [MoreController::class,'commerce'])->name('commerce');


// Route::get('/profile', [ProfileController::class,'index'])->name('profile');
Route::get('/switchaccount', [ManageAccountController::class,'index'])->name('switchaccount');

// settings
Route::get('/businessprofile', [SettingsController::class,'profile'])->name('profile');
Route::post('/businessprofile', [SettingsController::class,'profilepost'])->name('profile.post');
Route::get('/general', [SettingsController::class,'general'])->name('general');
Route::post('/general', [SettingsController::class,'generalpost'])->name('general.post');
Route::get('/tagsandatrributes', [SettingsController::class,'tags'])->name('tags');
Route::get('/importexport', [SettingsController::class,'importexport'])->name('importexport');
Route::get('/msgdeletion', [SettingsController::class,'msgdeletion'])->name('msgdeletion');
Route::get('/managenotification', [SettingsController::class,'manage'])->name('manage');

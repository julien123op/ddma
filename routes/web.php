<?php

use App\Http\Controllers\conge_cont;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\connection_cont;
use App\Http\Controllers\employe_cont;
use App\Http\Controllers\personnel_cont;
use App\Http\Controllers\etatrec;

Route::get('/login', function () { 
    return view('login');
});
Route::post('/log', [connection_cont::class, 'connection']);
Route::get('/login-employe', function () { 
    return view('login-emp');
});
Route::post('/logemp', [connection_cont::class, 'connemp']);
Route::get('/fichepaie', [etatrec::class, 'bulletin']);
Route::get('/', function () {
    return view('index');
})->middleware('notlog');  
Route::get('/parametre', function () {
    return view('settings');
})->middleware('notlog');
// Route::get('/liste-des-employer', function () {
//     return view('user-list');
// });
// Route::get('/liste-personnel', function(){
//     return view('user-list-personnel');
// });
Route::get('/ajouter-personnel', function () {
    return view('add_per');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/liste-des-charge-patronale',[etatrec::class , 'chapatro']);
// Route::get('/',[etatrec::class, 'det'])->middleware('notlog');
Route::get('/liste-des-cnss',[etatrec::class,'cnss']);
Route::get('/liste-des-irpp',[etatrec::class,'irpp']);
Route::get('/liste-des-employes',[etatrec::class, 'emp']);
Route::get('/liste-personnel',[etatrec::class, 'per']);
Route::get('/liste-des-demandes-de-conges',[etatrec::class, 'conge']);
Route::get('/liste-des-bulletins', [etatrec::class, 'listbulletin']);
Route::get('/detail-bulletin', [etatrec::class, 'bulletin']);
Route::get('/bulletin', [connection_cont::class, 'connemp']);


// Route::get('/fiche', function () {
//     return view('emp.fiche');
// });
Route::get('/blocker', function () {
    return view('lock-screen');
});
// Route::get('/bulletin', function () {
//     return view('invoice-detail');
// });
Route::get('/ajouter-employer', function () {
    return view('add_user');
});
Route::post('/addchoice', [etatrec::class, 'choice']);
Route::post('/addemp', [employe_cont::class, 'ajouter']);
Route::post('/addper', [personnel_cont::class, 'ajouter']);
Route::post('/addask', [conge_cont::class, 'ajouter']);
// Route::get('/test', function () {
//     return view('tesr');
// });
Route::get('/logout' ,[connection_cont::class,'deconnexion']);
Route::get('/demande-conge', function(){
    return view('conge');
});
Route::get('/essai', function(){
    return view('essai');
});



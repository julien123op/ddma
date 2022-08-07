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
Route::get('/i', [connection_cont::class, 'connection'])->middleware('notlog');   
Route::get('/parametre', function () {
    return view('settings');
})->middleware('notlog');
Route::get('/ajouter-personnel', function () {
    return view('add_per');
})->middleware('notlog');
Route::get('/', function(){
    return view('home');
});
Route::get('/permission', function(){
    return view('permission');
})->middleware('notlog');
// Route::get('/edit-user', function(){
//     return view('edit-user');
// });



Route::get('/liste-des-charge-patronale',[etatrec::class , 'chapatro']);
// Route::get('/',[etatrec::class, 'det'])->middleware('notlog');
Route::get('/liste-des-cnss',[etatrec::class,'cnss']);
Route::get('/liste-des-irpp',[etatrec::class,'irpp']);
Route::get('/liste-des-employes',[etatrec::class, 'emp']);
Route::get('/liste-personnel',[etatrec::class, 'per']);
Route::get('/liste-des-demandes-de-conges',[etatrec::class, 'conge']);
Route::get('/liste-des-bulletins', [etatrec::class, 'listbulletin']);
Route::get('/detail-bulletin', [etatrec::class, 'bulletin']);
Route::get('/bulletin', [etatrec::class, 'bulletins']);
Route::get('/liste-des-cv',[etatrec::class, 'cv']);
Route::get('/modif-user',[employe_cont::class, 'modif']);
Route::get('/note',[etatrec::class, 'note']);
Route::get('/noteboss',[etatrec::class, 'noteboss']);
Route::get('/valide',[etatrec::class, 'ok']);
Route::get('/refus',[etatrec::class, 'no']);
Route::get('/report',[etatrec::class, 'report']);
Route::get('/permission-valide',[etatrec::class, 'yes']);
Route::get('/permission-refus',[etatrec::class, 'non']);
Route::get('/permission-report',[etatrec::class, 'rep']);
Route::get('/resultat',[etatrec::class, 'resultat']);
Route::get('/liste-des-demandes-de-permissions',[etatrec::class, 'permission']);
Route::get('/liste-des-notes-attribuees-a-l-utilisateur',[etatrec::class, 'noteb']);
Route::get('/liste-des-notes-personnelles-de-l-utilisateur',[etatrec::class, 'noteu']);

// Route::get('/addchoice',[etatrec::class, 'choice']);
 

Route::get('/ajouter-employer', [employe_cont::class, 'emp']);


// Route::get('/fiche', function () {
//     return view('emp.fiche');
// });
Route::get('/blocker', function () {
    return view('lock-screen');
});
// Route::get('/bulletin', function () {
//     return view('invoice-detail');
// });
// Route::get('/ajouter-employer', function () {
//     return view('add_user');
// });
Route::post('/addchoice', [etatrec::class, 'choice']);
Route::post('/addemp', [employe_cont::class, 'ajouter']);
Route::post('/addper', [personnel_cont::class, 'ajouter']);
Route::post('/addask', [conge_cont::class, 'ajouter']);
Route::post('/addcv', [employe_cont::class, 'ajoutercv']); 
Route::get('/sup', [employe_cont::class, 'supprimer']);
Route::get('/supp', [personnel_cont::class, 'supprimer']);
Route::get('/mod', [employe_cont::class, 'update']);
Route::post('/addnote', [employe_cont::class, 'ajouternote']);
Route::post('/addnoteoff', [employe_cont::class, 'ajouternoteboss']);
Route::post('/addaskp', [conge_cont::class, 'ajouterp']);
Route::post('/addchoicep', [etatrec::class, 'choicep']);




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



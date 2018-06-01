<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/actu', 'NewsController@index')->name('actu');
Route::get('/newsletter', 'NewsController@newsletter')->name('actu');
Route::post('/newsletterok', 'NewsController@newsletterok');
Route::get('/dossier', 'NewsController@dossier')->name('actu');
Route::get('/study', 'StudyController@index')->name('study');
Route::get('/collaborater', 'StudyController@collaborater')->name('collaborater');
Route::get('/volunteer', 'VolunteerController@index')->name('volunteer');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/demenagement', 'HomeController@demenagement')->name('demenagement');
Route::post('/demenagementok', 'HomeController@demenagementok');

// Partie bénévole
Route::get('/benevole', 'Benevole\BenevoleController@index')->name('benevole');
Route::get('/bilan', 'Benevole\BilanController@index')->name('benevole');
Route::get('/questionnaire', 'Benevole\QuestionnaireController@index')->name('benevole');

Route::get('/adminHome', 'Admin\AdminController@index')->name('adminHome');

// Gestion des news
Route::get('/newsHome', 'Admin\AdminNewsController@index');
Route::get('/addNews', 'Admin\AdminNewsController@newsForm');
Route::post('/addNews', 'Admin\AdminNewsController@store');
Route::get('/deleteNews/{news}','Admin\AdminNewsController@destroy');
Route::get('/newsHome/{news}', 'Admin\AdminNewsController@showNews');
Route::post('/newsHome/{news}','Admin\AdminNewsController@updateNews');

// Gestion des dossiers
Route::get('/dossierHome', 'Admin\AdminDossierController@index');
Route::get('/addDossier', 'Admin\AdminDossierController@dossierForm');
Route::post('/addDossier', 'Admin\AdminDossierController@store');
Route::get('/deleteDossier/{dossier}','Admin\AdminDossierController@destroy');
Route::get('/dossierHome/{dossier}', 'Admin\AdminDossierController@showDossier');
Route::post('/dossierHome/{dossier}','Admin\AdminDossierController@updateDossier');

// Gestion des calendriers
Route::get('/calendarHome', 'Admin\AdminCalendarController@index');
Route::get('/addCalendar', 'Admin\AdminCalendarController@calendarForm');
Route::post('/addCalendar', 'Admin\AdminCalendarController@store');
Route::get('/deleteCalendar/{calendar}','Admin\AdminCalendarController@destroy');
Route::get('/calendarHome/{calendar}', 'Admin\AdminCalendarController@showCalendar');
Route::post('/calendarHome/{calendar}','Admin\AdminCalendarController@updateCalendar');

// Gestion des lettres d'information
Route::get('/infoletterHome', 'Admin\AdminInfoletterController@index');
Route::get('/addInfoletter', 'Admin\AdminInfoletterController@infoletterForm');
Route::post('/addInfoletter', 'Admin\AdminInfoletterController@store');
Route::get('/deleteInfoletter/{infoletter}','Admin\AdminInfoletterController@destroy');
Route::get('/infoletterHome/{infoletter}', 'Admin\AdminInfoletterController@showInfoletter');
Route::post('/infoletterHome/{infoletter}','Admin\AdminInfoletterController@updateInfoletter');

// Gestion des FAQ
Route::get('/faqHome', 'Admin\AdminFaqController@index');
Route::get('/addFaq', 'Admin\AdminFaqController@faqForm');
Route::post('/addFaq', 'Admin\AdminFaqController@store');
Route::get('/deleteFaq/{faq}','Admin\AdminFaqController@destroy');
Route::get('/faqHome/{faq}', 'Admin\AdminFaqController@showFaq');
Route::post('/faqHome/{faq}','Admin\AdminFaqController@updateFaq');


// Gestion des vagues
Route::get('/wave', 'Admin\AdminWaveController@index');
Route::post('/wave1', 'Admin\AdminWaveController@wave1');
Route::post('/betweenwave', 'Admin\AdminWaveController@betweenwave');
Route::post('/wave2', 'Admin\AdminWaveController@wave2');
Route::post('/stopwave', 'Admin\AdminWaveController@stopwave');

// Gestion des space Communication
Route::get('/communicationHome', 'Admin\AdminCommunicationsController@index');
Route::get('/addCommunication', 'Admin\AdminCommunicationsController@communicationForm');
Route::post('/addCommunication', 'Admin\AdminCommunicationsController@store');
Route::get('/deleteCommunication/{communication}','Admin\AdminCommunicationsController@destroy');
Route::get('/communicationHome/{communication}', 'Admin\AdminCommunicationsController@showCommunication');
Route::post('/communicationHome/{communication}','Admin\AdminCommunicationsController@updateCommunication');

// Gestion des space Travaux_uni
Route::get('/academicWorkHome', 'Admin\AdminAcademicWorkController@index');
Route::get('/addAcademicWork', 'Admin\AdminAcademicWorkController@AcademicWorkForm');
Route::post('/addAcademicWork', 'Admin\AdminAcademicWorkController@store');
Route::get('/deleteAcademicWork/{academicWork}','Admin\AdminAcademicWorkController@destroy');
Route::get('/academicWorkHome/{academicWork}', 'Admin\AdminAcademicWorkController@showAcademicWork');
Route::post('/academicWorkHome/{academicWork}','Admin\AdminAcademicWorkController@updateAcademicWork');

// Gestion des space Principle Results
Route::get('/principleResultsHome', 'Admin\AdminPrincipleResultsController@index');
Route::get('/addPrincipleResults', 'Admin\AdminPrincipleResultsController@principleResultsForm');
Route::post('/addPrincipleResults', 'Admin\AdminPrincipleResultsController@store');
Route::get('/deletePrincipleResults/{principleResults}','Admin\AdminPrincipleResultsController@destroy');
Route::get('/principleResultsHome/{principleResults}', 'Admin\AdminPrincipleResultsController@showPrincipleResult');
Route::post('/PrincipleResultsHome/{principleResults}','Admin\AdminPrincipleResultsController@updatePrincipleResults');

// Gestion des abonnés à la NL
Route::get('/newsletterAdmin', 'Admin\AdminNewsletterController@index')->name('newsletter');
Route::get('/deleteNewsletter/{newsletter}','Admin\AdminNewsletterController@destroy');

// Gestion des utilisateurs
Route::get('/userHome', 'Auth\RegisterController@indexUser');
Route::get('/deleteUser/{user}','Auth\RegisterController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Approve users
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

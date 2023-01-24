<?php

use App\Models\Blog;
use App\Models\Pole;
use App\Models\Expertise;
use App\Models\IconeMetier;
use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Admin\MetierController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\PagePoleController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\TranslateController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\OffreEmploiController;
use App\Http\Controllers\Admin\PageAccueilController;
use App\Http\Controllers\Admin\CategoryArticlesController;
use App\Http\Controllers\Admin\UploadImageCkeditorController;

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

Route::get('/', [PagesController::class, 'accueil'])->name('acceuil');
Route::post('{post}/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::post('comment/store-offre/{offre}', [CommentController::class, 'storeOffreComment'])->name('comment.offre.store');

Route::post('postuler', [FrontendController::class, 'postuler'])->name('postuler');
Route::post('spontane/postuler', [FrontendController::class, 'spontanePostuler'])->name('spontane.postuler');

Route::get('poles/', [PagesController::class, 'poles']);
Route::get('apropos/', [PagesController::class, 'apropos'])->name('apropos');
Route::Get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::Post('/contact', [PagesController::class, 'contactSubmit']);

Route::prefix('poles/{url}/')->group(function () {
    Route::get('/', function ($url) {
        $pole = Pole::where('url', $url)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', "ASC")->latest()->limit(6)->get();
        return view('front.pole.index', ['metiers' => $metiers, 'pole' => $pole]);
    });

    // Présentation
    Route::get('/presentation/', [FrontendController::class, 'presentation'])->name('presentation');

    //Route pour les blogs
    Route::get('/blog/',  [FrontendController::class, 'blog'])->name('blog');
    // Détail des articles
    Route::get('blog/detail/{id}', [FrontendController::class, 'blogDetails'])->name('blog.details');

    // Route Offre d'emploi
    Route::get('offre-emploi', [FrontendController::class, 'offreEmploi'])->name('offre.emploi');
    Route::get('offre-emploi/detail/{id}', [FrontendController::class, 'offreEmploiDetails'])->name('offre.emploi.details');

    // Route de notre équipe
    Route::get('equipe', [FrontendController::class, 'equipe'])->name('equipe');
    // Route nos reference
    Route::get('reference', [FrontendController::class, 'reference'])->name('reference');

    // Route nos formations
    Route::get('formation', [FrontendController::class, 'formation'])->name('formation');
});


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('/', [AdminAuthController::class, 'login'])->name('admin.login');
    /* ============================ Mot de passe oublié =================================== */
    Route::get('password/forgot', [AdminAuthController::class, 'showForgotForm'])->name('password-forgot');
    Route::post('password/forgot', [AdminAuthController::class, 'sendResetLink'])->name('forgot.password.link');
    Route::get('password/reset/{token}', [AdminAuthController::class, 'showResetForm'])->name('reset.password.form');
    Route::post('password/reset', [AdminAuthController::class, 'resetPassword'])->name('reset.password');


    Route::get('logout', [AdminAuthController::class, 'logout']);
    Route::middleware('admin')->group(function () {
        /* ===============================Documentation========================================== */
        Route::get('documentation', [AdminController::class, 'documentation'])->name('admin.documentation');
        //Route tableau de bord
        // Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('image-profile', [AdminController::class, 'imageProfile'])->name('admin.imageProfile');
        Route::post('post-profile', [AdminController::class, 'postProfile'])->name('admin.postProfile');
        Route::post('change/password', [AdminController::class, 'changePassword'])->name('admin.changepassword');

        //Routes Inscriptions
        Route::post('create', [AdminController::class, 'create'])->name('admin.create')->middleware('role:admin');
        Route::get('users', [AdminController::class, 'users'])->name('admin.users')->middleware('role:admin');
        Route::delete('deleteUser/{id}', [AdminController::class, 'deleteUser'])->middleware('role:admin');
        Route::put('update-user-status/{id}', [AdminController::class, 'updateUserStatus'])->middleware('role:admin');

        //Permissions
        Route::resource('permission', PermissionController::class)->middleware('role:admin');

        //Roles
        Route::resource('role', RoleController::class)->middleware('role:admin');
        Route::get('role/edit/{id}', [RoleController::class, 'editRole'])->middleware('role:admin');
        Route::get('get-role/{id}', [RoleController::class, 'getRole'])->middleware('role:admin');

        /*
        ============================================ Axios routes ========================
        */
        Route::get('get-all-permissions', [PermissionController::class,  'getAllPermissions'])->middleware('role:admin');
        Route::get('get-all-roles', [RoleController::class,  'getAllRoles'])->middleware('role:admin');
        Route::post('postRole', [RoleController::class, 'store'])->middleware('role:admin');
        Route::get('getAllUsers', [AdminController::class, 'getAllUsers'])->middleware('role:admin');

        /*------------------ Langue et traduction---------------------------- */

        Route::get('get-language-key', [TranslateController::class, 'cle'])->middleware('role:admin|editeur');
        Route::post('postLanguageKey', [TranslateController::class, 'addLangKey'])->middleware("role_or_permission:admin|creer-cle-langue")->middleware('role:admin|editeur');
        Route::put('updateKey/{id}', [TranslateController::class, 'updateKey'])->middleware('role:admin|editeur');
        Route::get('langue-key', [TranslateController::class, 'index'])->name('admin.langue-key')->middleware('role:admin|editeur');
        Route::get('french-english', [TranslateController::class, 'frenchEnglish'])->name('admin.french-english')->middleware('role:admin|editeur');
        Route::put('updateLanguage/{id}', [TranslateController::class, 'updateLanguage'])->middleware('role:admin|editeur');
        Route::delete('deleteKey/{id}', [TranslateController::class, 'deleteKey'])->middleware('role:admin|editeur');

        /*--------------- créer un utilisateur -------------------------*/
        Route::post('postUser', [AdminController::class, 'postUser']);
        Route::put('updateUser/{id}', [AdminController::class, 'updateUser']);

        /* Role et permission */
        Route::put('updateRole/{id}', [RoleController::class, 'updateRole'])->middleware('role:admin');
        Route::put('update-permission/{id}', [PermissionController::class, 'updatePermission'])->middleware('role:admin');
        Route::get('get-permissions', [PermissionController::class, 'getPermissions'])->middleware('role:admin');
        Route::post('add-permission', [PermissionController::class, 'addPermission'])->middleware('role:admin');

        Route::get('page/accueil', [PageAccueilController::class, 'index'])->name('admin.page.accueil')->middleware('role:admin|editeur');

        Route::post('add/home/video', [PageAccueilController::class, 'video'])->name('home.video')->middleware('role:admin|editeur');
        Route::post('add/home/name', [PageAccueilController::class, 'name'])->name('home.name')->middleware('role:admin|editeur');
        Route::post('add/home/slogant', [PageAccueilController::class, 'slogant'])->name('home.slogant')->middleware('role:admin|editeur');
        Route::post('add/home/message', [PageAccueilController::class, 'message'])->name('home.message')->middleware('role:admin|editeur');


        Route::get('page/pole', [PagePoleController::class, 'pole'])->name('admin.pole')->middleware('role:admin|editeur');
        Route::post('page/pole/icone', [PagePoleController::class, 'icone'])->name('admin.pole.icone')->middleware('role:admin|editeur');
        Route::post('add/pole', [PagePoleController::class, 'addPole'])->name('admin.add.pole')->middleware('role:admin|editeur');
        Route::post('edit/pole/{id}', [PagePoleController::class, 'editPole'])->name('admin.edit.pole')->middleware('role:admin|editeur');
        Route::get('delete-pole/{id}', [PagePoleController::class, 'deletePole'])->middleware('role:admin|editeur');


        Route::get('index/pole', [PagePoleController::class, 'indexPole'])->name('admin.pole.index')->middleware('role:admin|editeur');
        Route::post('add/icone/metier', [PagePoleController::class, 'addMetierIcone'])->name('admin.add.icone')->middleware('role:admin|editeur');
        Route::post('edit/metier/{id}', [PagePoleController::class, 'editMetier'])->name('admin.edit.metier')->middleware('role:admin|editeur');

        Route::get('metier/presentation', [MetierController::class, 'presentation'])->name('admin.page.presentation')->middleware('role:admin|editeur|visiteur');
        Route::post('add/presentation', [MetierController::class, 'addPresentation'])->name('admin.add.presentation')->middleware('role:admin|editeur');
        Route::get('edit/presentation/{id}', [MetierController::class, 'editPresentation'])->name('admin.edit.presentation')->middleware('role:admin|editeur');
        Route::post('update/presentation/{id}', [MetierController::class, 'updatePresentation'])->name('admin.update.presentation')->middleware('role:admin|editeur');
        // Route::post('add/presentation', [MetierController::class, 'addPresentation'])->name('admin.add.presentation');

        Route::get('presentation/expertise', [ExpertiseController::class, 'expertise'])->name('admin.page.presentation.expertise')->middleware('role:admin|editeur|visiteur');
        Route::post('add/expertise', [ExpertiseController::class, 'addExpertise'])->name('admin.add.expertise')->middleware('role:admin|editeur');
        Route::get('get_expertise', [ExpertiseController::class, 'getExpertise'])->middleware('role:admin|editeur');
        Route::get('edit/expertise/{id}', [ExpertiseController::class, 'editExpertise'])->name('admin.edit.expertise')->middleware('role:admin|editeur');
        Route::post('update/expertise/{id}', [ExpertiseController::class, 'updateExpertise'])->name('admin.update.expertise')->middleware('role:admin|editeur');
        Route::get('delete-expertise/{id}', [ExpertiseController::class, 'deleteExpertise'])->middleware('role:admin|editeur');

        //Route blog

        Route::get('page/blog/category', [CategoryArticlesController::class, 'index'])->name('admin.categorie.article')->middleware('role:admin|editeur');
        Route::post('add/category', [CategoryArticlesController::class, 'addCategory'])->name('admin.add.category')->middleware('role:admin|editeur');
        Route::get('update/category/{id}', [CategoryArticlesController::class, 'updateCategory'])->name('admin.update.category')->middleware('role:admin|editeur');
        Route::post('edit/category/{id}', [CategoryArticlesController::class, 'editCategory'])->name('admin.edit.category')->middleware('role:admin|editeur');
        Route::get('delete-category/{id}', [CategoryArticlesController::class, 'deleteCategory'])->middleware('role:admin|editeur');
        Route::get('get-categories', [CategoryArticlesController::class, 'getCategories'])->middleware('role:admin|editeur');


        Route::get('create/article', [ArticlesController::class, 'createArticle'])->name('admin.create.article')->middleware('role:admin|editeur');
        Route::get('articles/index', [ArticlesController::class, 'index'])->name('admin.articles.index')->middleware('role:admin|editeur|visiteur');
        Route::post('add/article', [ArticlesController::class, 'addArticle'])->name('admin.add.article')->middleware('role:admin|editeur');
        Route::get('update/article/{id}', [ArticlesController::class, 'updateArticle'])->name('admin.update.article')->middleware('role:admin|editeur');
        Route::post('edit/article/{id}', [ArticlesController::class, 'editArticle'])->name('admin.edit.article')->middleware('role:admin|editeur');
        Route::get('delete-article/{id}', [ArticlesController::class, 'deleteArticle'])->middleware('role:admin|editeur');

        // Route::get('blog/category', [CategoryArticlesController::class, 'getCategory'])->name('admin.get-blog.category');

        Route::get('offre/index', [OffreEmploiController::class, 'index'])->name('admin.offre.index');
        Route::get('create/offre', [OffreEmploiController::class, 'createOffre'])->name('admin.create.offre');
        Route::post('add/offre', [OffreEmploiController::class, 'addOffre'])->name('admin.add.offre');
        Route::get('update/offre/{id}', [OffreEmploiController::class, 'updateOffre'])->name('admin.update.offre');
        Route::post('edit/offre/{id}', [OffreEmploiController::class, 'editOffre'])->name('admin.edit.offre');
        Route::get('delete-offre/{id}', [OffreEmploiController::class, 'deleteOffre'])->name('admin.delete.offre');
        //Charger image dans ckeditor
        Route::post('admin.ckeditor.upload.image', [UploadImageCkeditorController::class, 'upload'])->name('admin.ckeditor.upload.image');

        //Routes notre equipe

        Route::get('team/view', [TeamController::class, 'view'])->name('admin.team.view')->middleware('role:admin|editeur|visiteur');
        Route::post('add/team', [TeamController::class, 'addTeam'])->name('admin.add.team')->middleware('role:admin|editeur');
        Route::post('edit/team/{id}', [TeamController::class, 'editTeam'])->name('admin.edit.team')->middleware('role:admin|editeur');
        Route::get('delete-team/{id}', [TeamController::class, 'deleteTeam'])->middleware('role:admin|editeur');

        //Routes nos références

        Route::get('reference/view', [ReferenceController::class, 'view'])->name('admin.reference.view')->middleware('role:admin|editeur|visiteur');
        Route::post('add/reference', [ReferenceController::class, 'addReference'])->name('admin.add.reference')->middleware('role:admin|editeur');
        Route::get('create/reference/{id}', [ReferenceController::class, 'createReference'])->name('admin.create.reference')->middleware('role:admin|editeur');
        Route::post('edit/reference/{id}', [ReferenceController::class, 'editReference'])->name('admin.edit.reference')->middleware('role:admin|editeur');
        Route::get('delete-reference/{id}', [ReferenceController::class, 'deleteReference'])->middleware('role:admin|editeur');

        //Routes nos références

        Route::get('formation/view', [FormationController::class, 'view'])->name('admin.formation.view');
        Route::post('add/formation', [FormationController::class, 'addFormation'])->name('admin.add.formation');
        Route::get('create/formation/{id}', [FormationController::class, 'createFormation'])->name('admin.create.formation');
        Route::post('edit/formation/{id}', [FormationController::class, 'editFormation'])->name('admin.edit.formation');
        Route::get('delete-formation/{id}', [FormationController::class, 'deleteFormation']);
    });
});

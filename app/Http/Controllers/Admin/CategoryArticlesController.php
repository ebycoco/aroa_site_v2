<?php

namespace App\Http\Controllers\Admin;

use App\Models\Translate;
use Illuminate\Http\Request;
use App\Models\CategoryArticle;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryArticlesController extends Controller
{
    public function index(Request $request)
    {
        Session::put('page', '/admin/page/category');
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['sort'] == '') {
                $categories = CategoryArticle::orderBy('title_category', 'ASC')->get();
            } else {
                $categories = CategoryArticle::orderBy('title_category', 'ASC')->where('pole_id', $data['sort'])->get();
            }
            return view('admin.pages.blog.category.ajax_category', ['categories' => $categories]);
        } else {
            $categories = CategoryArticle::orderBy('title_category', 'ASC')->paginate(6);
            return view('admin.pages.blog.category.index', ['categories' => $categories]);
        }
    }

    /**
     * Summary of addCategory
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addCategory(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'titre_categorie' => 'required',
            'description' => 'required',
            'image_categorie' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'titre_categorie.required' => 'Le titre est requis SVP !',
            'description.required' => 'La description est requise SVP !',
            'image_categorie.required' => 'L\image est requise',
            'image_categorie.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('image_categorie')) {
            $ressource_tmp = $request->file('image_categorie');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image_categorie
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image_categorie
                $ressource = request('image_categorie')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/articles/categorie/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        } else {
            $ressourceName = null;
        }

        $category = new CategoryArticle();

        $user = auth()->user();

        $category->create([
            'image_category' => $ressourceName,
            'title_category' => $data['titre_categorie'],
            'description' => $data['description'],
            'pole_id' => $data['pole_id'],
            'user_id' => $user->id
        ]);

        if (Translate::where('lang_key', '=', $data['titre_categorie'])->count() > 0) {
            // return redirect()->back()->with('success', "titre_categorie ajouté avec succès");
        } else {
            $langKey = new Translate;
            $langKey->lang_key = $data['titre_categorie'];
            $langKey->french = $data['titre_categorie'];
            $langKey->user_id = $user->id;
            $langKey->save();

            // return redirect()->back()->with('success', "Expertise ajouté avec succès");
        }


        if ($data['description'] == '') {
            return redirect()->back()->with('success', "Catégorie ajoutée avec succès");
        } else {
            if (Translate::where('lang_key', '=', $data['description'])->count() > 0) {
                return redirect()->back()->with('success', "Catégorie ajoutée avec succès");
            } else {
                $langKey = new Translate;
                $langKey->lang_key = $data['description'];
                $langKey->french = $data['description'];
                $langKey->user_id = $user->id;
                $langKey->save();

                return redirect()->back()->with('success', "Catégorie ajoutée avec succès");
            }
        }
    }
    public function updateCategory($id)
    {
        $categorie = CategoryArticle::where('id', $id)->get()->first();
        return view('admin.pages.blog.category.update_category', ['categorie' => $categorie]);
    }
    public function editCategory(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);

        try {

            $rules = [
                'title_category' => 'required|string',
                'update_description' => 'required|string',
            ];

            $customMessages = [
                'title_category.required' => 'Veuillez entrer le titre de la categorie svp',
                'title_category.string' => 'Le titre doit etre une chaine de caracteres svp',
                'update_description.required' => 'Veuillez entrer la description de la categorie svp',
                'update_description.string' => 'La description doit etre une chaine de caracteres svp',
            ];
            $this->validate($request, $rules, $customMessages);

            $data = $request->all();

            if ($request->hasFile('image_category')) {
                $ressource_tmp = $request->file('image_category');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('image_category')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameNoir = $ressourceTitle . rand() . '.' . $extension;
                    $ressourcePath = 'public/images/articles/categorie/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameNoir);
                }
            } else {
                $ressourceNameNoir = null;
            }


            $categorie = CategoryArticle::where('id', '=', $id);
            $user = Auth::user()->id;

            $translate_title = Translate::where('lang_key', $request->input('old_title'))->get()->first();
            $translate_description = Translate::where('lang_key', $request->input('old_description'))->get()->first();

            if ($ressourceNameNoir == null) {
                $categorie->update([
                    // 'image_category' => $ressourceNameNoir,
                    'title_category' => $data['title_category'],
                    'description' => $data['update_description'],
                    'pole_id' => $data['pole'],
                    'user_id' => $user
                ]);
            }
            if ($ressourceNameNoir != null) {
                $categorie->update([
                    'image_category' => $ressourceNameNoir,
                    'title_category' => $data['title_category'],
                    'description' => $data['update_description'],
                    'pole_id' => $data['pole'],
                    'user_id' => $user
                ]);
            }

            $translate_title->update(['lang_key' => $data['title_category'], 'french' => $data['title_category']]);
            $translate_description->update(['lang_key' => $data['update_description'], 'french' => $data['update_description']]);

            return redirect()->route('admin.categorie.article')->with('success', "Categorie modifiée avec succès");
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function deleteCategory($id)
    {
        $categorie = CategoryArticle::findOrFail($id);
        $categorie->delete();
        return redirect()->back();
    }
    public function getCategories(Request $request)
    {
        $data = $request->all();


        if ($request->ajax()) {
            $data = $request->all();
            if ($data['categorie_id'] == '') {
                $categories = CategoryArticle::orderBy('title_category', 'ASC')->get();
            } else {
                $categories = CategoryArticle::orderBy('title_category', "ASC")->where('pole_id', $data['categorie_id'])->get();
            }
            return view('admin.pages.blog.articles.ajax_category_select', ['categories' => $categories]);
        }
    }
    public function createArticle()
    {
        return view('admin.pages.blog.articles.add_article');
    }
}

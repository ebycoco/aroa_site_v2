<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ArticlesController extends Controller
{
    /**
     * Summary of index
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        Session::put('page', '/admin/page/article');
        // dd($request->all());
        if ($request->ajax()) {
            $data = $request->all();
            // dd($data);
            if ($data['sort'] == '') {
                $articles = Blog::orderBy('title_article', 'ASC')->get();
            } else {
                $articles = Blog::orderBy('title_article', 'ASC')->where('pole_id', $data['sort'])->get();
            }
            return view('admin.pages.blog.articles.ajax_articles', ['articles' => $articles]);
        } else {
            $articles = Blog::orderBy('title_article', 'ASC')->paginate(6);
            return view('admin.pages.blog.articles.index', ['articles' => $articles]);
        }
        // return view('admin.pages.blog.articles.index');
    }
    /**
     * Summary of addArticle
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addArticle(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'titre_article' => 'required',
            'article_fr' => 'required',
            'image_article' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'titre_article.required' => 'Le titre est requis SVP !',
            'article_fr.required' => 'L\'article est requis SVP !',
            'image_article.required' => 'L\image est requise',
            'image_article.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('image_article')) {
            $ressource_tmp = $request->file('image_article');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image_article
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image_article
                $ressource = request('image_article')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/articles/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        } else {
            $ressourceName = null;
        }

        $category = new Blog();

        $user = auth()->user();

        $category->create([
            'image_article' => $ressourceName,
            'title_article' => $data['titre_article'],
            'article_fr' => $data['article_fr'],
            'pole_id' => $data['pole_id'],
            'category_id' => $data['category_id'],
            'user_id' => $user->id
        ]);

        if (Translate::where('lang_key', '=', $data['titre_article'])->count() > 0) {
            return redirect()->back()->with('success', "Article ajouté avec succès");
        } else {
            $langKey = new Translate;
            $langKey->lang_key = $data['titre_article'];
            $langKey->french = $data['titre_article'];
            $langKey->user_id = $user->id;
            $langKey->save();

            return redirect()->back()->with('success', "Article ajouté avec succès");
        }
    }
    /**
     * Summary of editArticle
     * @param Request $request
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editArticle(Request $request, $id)
    {
        $data = $request->all();
        // dd($id, $data);
        $rules = [
            'pole_id' => 'required',
            'title_article' => 'required',
            'category_id' => 'required',
            'pole_id' => 'required',
            'update_article_fr' => 'required',
            // 'image_article' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'title_article.required' => 'Le titre est requis SVP !',
            'category_id.required' => 'La catégorie est requise SVP !',
            'pole_id.required' => 'Le pôle est requis SVP !',
            'update_article_fr.required' => 'L\'article est requis SVP !',
            // 'image_article.required' => 'L\image est requise',
            // 'image_article.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('image_article')) {
            $ressource_tmp = $request->file('image_article');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image_article
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image_article
                $ressource = request('image_article')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/articles/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        } else {
            $ressourceName = null;
        }

        $category = Blog::where('id', $id)->get()->first();

        $user = auth()->user();

        if ($ressourceName == null) {
            $category->update([
                // 'image_article' => $ressourceName,
                'title_article' => $data['title_article'],
                'article_fr' => $data['update_article_fr'],
                'article_en' => $data['update_article_en'],
                'pole_id' => $data['pole_id'],
                'category_id' => $data['category_id'],
                'user_id' => $user->id
            ]);
        } else {
            $category->update([
                'image_article' => $ressourceName,
                'title_article' => $data['title_article'],
                'article_fr' => $data['update_article_fr'],
                'article_en' => $data['update_article_en'],
                'pole_id' => $data['pole_id'],
                'category_id' => $data['category_id'],
                'user_id' => $user->id
            ]);
        }

        $translate = Translate::where('lang_key', '=', $data['old_title'])->get()->first();

        $translate->update([
            'lang_key' => $data['title_article'],
        ]);

        return redirect()->route('admin.articles.index')->with('success', "Article modifié avec succès");
    }
    /**
     * Summary of updateArticle
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function updateArticle($id)
    {
        $article = Blog::where('id', $id)->get()->first();
        return view('admin.pages.blog.articles.edit_article', ['article' => $article]);
    }
    /**
     * Summary of deleteArticle
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function deleteArticle($id)
    {
        $article = Blog::findOrFail($id);
        $article->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;
use Session;

/**
 * Summary of TranslateController
 */
class TranslateController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function index()
    {
        $keys = Translate::paginate(10);

        return view('admin.langue.index')->with(compact('keys'));
    }

    /**
     * Summary of cle
     * @param Request $request
     * @return DataTableCollectionResource
     */
    public function cle(Request $request)
    {
        Session::put('page', '/admin/langue/cle');
        $length = $request->input('length');
        $sortBy = "lang_key";
        $orderByDir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Translate::eloquentQuery($sortBy, $orderByDir, $searchValue);

        $data = $query->paginate($length);

        return new DataTableCollectionResource($data);
    }

    /**
     * Summary of update
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['attrid'] as $key => $attr) {
                if (!empty($attr)) {
                    Translate::where(['id' => $data['attrid'][$key]])->update(['english' => $data['english'][$key], 'french' => $data['french'][$key]]);
                }
            }
            return redirect()->back()->with('success', 'Traduction effectuée avec succès');
        }
    }
    /**
     * Summary of fr_en
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fr_en()
    {
        Session::put('page', '/admin/langue/anglais-français');

        $english = Translate::orderBy('lang_key', 'ASC')->paginate(10);
        return view('admin.traduction.fr_en', ['english' => $english]);
    }
    /**
     * Summary of addLangKey
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function addLangKey(Request $request)
    {
        $rules = [
            'lang_key' => 'required',
        ];

        $customMessages = [
            'lang_key.required' => 'Veuillez entrer la clé de langue SVP !',
        ];

        $this->validate($request, $rules, $customMessages);

        $user = auth()->user();

        if (Translate::where('lang_key', '=', $request->input('lang_key'))->count() > 0) {
            $message = "La clé existe déjà";
            return response()->json([
                'message' => $message
            ], 302);
        } else {
            $langKey = new Translate;
            $langKey->lang_key = $request->input('lang_key');
            $langKey->french = $request->input('lang_key');
            $langKey->user_id = $user->id;
            $langKey->save();
            $message = "clé ajoutée avec succès";
            return redirect()->back()->with('success', $message);
        }
    }
    /**
     * Summary of updateKey
     * @param Request $request
     * @param mixed $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateKey(Request $request, $id)
    {
        $data = $request->input('lang_key');
        if (!empty($data)) {
            Translate::where(['id' => $id])->update(['lang_key' => $data]);
        }
        return response()->json(['La clé a été modifiée avec succès', 200]);
    }
    /**
     * Summary of frenchEnglish
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function frenchEnglish()
    {
        Session::put('page', '/admin/langue/anglais-français');
        $languages = Translate::orderBy('lang_key', 'ASC')->paginate(10);
        return view('admin.langue.francais_anglais', ['languages' => $languages]);
    }

    //Mise à jour Français anglais
    /**
     * Summary of updateLanguage
     * @param Request $request
     * @param mixed $id
     * @return DataTableCollectionResource
     */
    public function updateLanguage(Request $request, $id)
    {
        $data = $request->all();

        $update = Translate::where(['id' => $data['id']])->update(['english' => $data['english'], 'french' => $data['french']]);
        if ($update) {
            return $this->refresh();
        }
    }
    /**
     * Summary of refresh
     * @return DataTableCollectionResource
     */
    private function refresh(){
        $length = 10;
        $sortBy = "lang_key";
        $orderByDir = "asc";
        $searchValue = null;

        $query = Translate::eloquentQuery($sortBy, $orderByDir, $searchValue);

        $data = $query->paginate($length);

        return new DataTableCollectionResource($data);
    }
    /**
     * Summary of deleteKey
     * @param mixed $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteKey($id)
    {
        $key = Translate::findOrFail($id);
        $key->delete();
        return response()->json([
            'message' => 'La clé a été supprimé avec succès !'
        ], 200);

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expertise;
use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ExpertiseController extends Controller
{
    public function expertise(Request $request)
    {
        Session::put('page', '/admin/page/expertise');
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['sort'] == '') {
                $expertises = Expertise::orderBy('titre_expertise', 'ASC')->get();
            } else {
                $expertises = Expertise::orderBy('titre_expertise', 'ASC')->where('pole_id', $data['sort'])->get();
            }
            return view('admin.pages.metiers.ajax_expert', ['expertises' => $expertises]);
        } else {
            $expertises = Expertise::orderBy('titre_expertise', 'ASC')->paginate(6);
            return view('admin.pages.metiers.voir_expertise', ['expertises' => $expertises]);
        }
    }

    public function addExpertise(Request $request)
    {
        $data = $request->all();

        $rules = [
            'pole' => 'required',
            'expertise_fr' => 'required',
            // 'titre_expertise' => 'required',
        ];

        $customMessages = [
            'pole.required' => 'Veuillez sélectionner le pôle svp',
            'expertise_fr.required' => 'L\'expertise est requise SVP !',
            // 'titre_expertise.required' => 'Le titre est requis SVP !',
        ];
        $this->validate($request, $rules, $customMessages);



        $presentation = new Expertise();

        $user = auth()->user();


        $presentation->create([
            'expertise_fr' => $data['expertise'],
            'titre_expertise' => $data['titre_expertise'],
            'pole_id' => $data['pole'],
            'user_id' => $user->id
        ]);

        if (Translate::where('lang_key', '=', $data['expertise'])->count() > 0) {
            // return redirect()->back()->with('success', "Expertise ajouté avec succès");
        } else {
            $langKey = new Translate;
            $langKey->lang_key = $data['expertise'];
            $langKey->french = $data['expertise'];
            $langKey->user_id = $user->id;
            $langKey->save();

            // return redirect()->back()->with('success', "Expertise ajouté avec succès");
        }


        if ($data['titre_expertise'] == '') {
            return redirect()->back()->with('success', "Expertise ajouté avec succès");
        } else {
            if (Translate::where('lang_key', '=', $data['titre_expertise'])->count() > 0) {
                return redirect()->back()->with('success', "Expertise ajouté avec succès");
            } else {
                $langKey = new Translate;
                $langKey->lang_key = $data['titre_expertise'];
                $langKey->french = $data['titre_expertise'];
                $langKey->user_id = $user->id;
                $langKey->save();

                return redirect()->back()->with('success', "Expertise ajouté avec succès");
            }
        }
    }

    // public function getExpertise()
    // {
    // $data = Expertise::where('pole_id', $request->input('sort'))->get();
    // return view('admin.pages.metiers.ajax_expert', ['expertises' => $data]);
    // return response()->json([
    //     'data' => $data
    // ]);
    // }

    public function editExpertise($id)
    {
        $expertise = Expertise::where('id', $id)->get()->first();
        return view('admin.pages.metiers.edit_expertise', ['expertise' => $expertise]);
    }

    public function updateExpertise(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'titre' => 'required',
            'expertise_fr' => 'required',
            // 'image' => 'required',
        ];

        $customMessages = [
            'titre.required' => 'Le titre est requis SVP !',
            'expertise_fr.required' => 'L\'expetise est requise SVP !',
            // 'image.required' => 'Image requise !',
        ];
        $this->validate($request, $rules, $customMessages);

        $expertise = Expertise::where('id', $id);

        $user = auth()->user();

        $expertise->update([
            'expertise_fr' => $data['expertise_fr'],
            'expertise_en' => $data['expertise_en'],
            'user_id' => $user->id
        ]);

        return redirect()->back()->with('success', "Expertise modifiée avec succès");
    }

    public function deleteExpertise(Request $request, $id)
    {
        $expertise = Expertise::findOrFail($id);
        $expertise->delete();
        return redirect()->back();
    }
}

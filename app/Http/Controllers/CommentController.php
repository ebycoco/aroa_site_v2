<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Blog;
use App\Models\OffreEmploi;

class CommentController extends Controller
{
    /**
     * Summary of store
     * @param CommentStoreRequest $request
     * @param Blog $post
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function store(CommentStoreRequest $request, Blog $post)
    {
        // dd($post->id);
        $post->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return redirect()->back();

    }
    /**
     * Summary of storeOffreComment
     * @param CommentStoreRequest $request
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function storeOffreComment(CommentStoreRequest $request, $id)
    {
 
        $emploi = OffreEmploi::where('id', $id)->get()->first();
        // dd($emploi->id);
        $emploi->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return redirect()->back();

    }
}

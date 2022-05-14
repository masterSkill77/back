<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\PublicationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Publication extends Controller
{
    public function index()
    {
        return response()->json();
    }
    public function store(Request $request)
    {
        $publication = new PublicationModel();
        $publication->content = $request->input('content');
        // $publication->id_user = Auth::user()->id;
        // $client = User::find($publication->id_user);
        $publication->id_user = 1;

        $size = $request->file('file')->getSize();
        $path = $request->file('file')->store('/public/files');
        $publication->path = 'storage/' . $path;
        $publication->taille = $size;
        $publication->save();

        return $publication;
    }

    protected function valideFile($id_client)
    {
        $id_forfait = User::find($id_client)->id_forfait;
        return Forfait::find($id_forfait)->extension;
    }
}

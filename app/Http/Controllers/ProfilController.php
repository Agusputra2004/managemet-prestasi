<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;    
use App\Models\Kategori;

class ProfilController extends Controller
{
    public function index() {
        $users = User::all();
        $category = Kategori::all();
        return view('front.profil.index', [
            'category' => $category,
            'users' => $users,
        ]);
    }

    public function editprofil()
    {

        return view('front.profil.edit');
    }


    public function update(Request $request, $id) {

        $request->validate([
            'name' => ['string', 'min:3', 'max:191', 'required'],
            'email' => ['email','string', 'min:3', 'max:191', 'required'],
            'username' => ['required'],
            'alamat' => ['string', 'min:3', 'max:191', 'required'],
            'nohp' => ['string', 'min:3', 'max:191', 'required'],
        ]);

        if(empty($request->file('foto'))){

            $profil = User::find($id);

            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'alamat' => $request->alamat,
                'nohp' => $request->nohp,
               ]);


        } else {

            $profil = User::find($id);
            Storage::delete(Auth::user()->foto);

            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'alamat' => $request->alamat,
                'nohp' => $request->nohp,
                'foto' => $request->file('foto')->store('profil'),
               ]);

        }
        return redirect()->route('profil.index')->with('success', 'Data berhasil di update');
    }
}

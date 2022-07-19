<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(Biodata $biodata){
        return view('profile', [
            "title" => "Profile $biodata->namaLengkap",
            "members" => Biodata::all(),
            "biodata" => $biodata,
        ]);
    }

    public function addProfile(){
        return view('addProfile', [
            "title" => "Tambahkan Biodata",
            "members" => Biodata::all(),
        ]);
    }

    public function storeProfile(Request $request){
        $validatedBio = $request->validate([
            "namaLengkap" => "required",
            "namaPanggilan" => "required",
            "tempatLahir" => "required",
            "tanggalLahir" => "required",
            "jenisKelamin" => "required",
            "asal" => "required",
            "profileImage" => "image|file|max:10240",
        ]);

        if($request->file('profileImage')){
            $validatedBio['profileImage'] = $request->file('profileImage')->store('profile-images');
        }
        Biodata::create($validatedBio);

        return redirect('/');
    }
    public function editProfile(Biodata $biodata){
        return view('editProfile', [
            "title" => "Edit Profile $biodata->namaLengkap",
            "members" => Biodata::all(),
            "biodata" => $biodata,
        ]);
    }

    public function updateProfile(Request $request, Biodata $biodata){
        $validated = $request->validate([
            "namaLengkap" => "required",
            "namaPanggilan" => "required",
            "tempatLahir" => "required",
            "tanggalLahir" => "required",
            "jenisKelamin" => "required",
            "asal" => "required",
            "profileImage" => "image|file|max:10240",
        ]);

        if($request->file('profileImage')){
            if($request->oldImage && $request->oldImage!=="profile-images/user.png"){
                Storage::delete($request->oldImage);
            }
            $validated['profileImage'] = $request->file('profileImage')->store('profile-images');
        }

        Biodata::where('id', $biodata->id)->update($validated);

        return redirect("/profile/$biodata->id");
    }

    public function hapus(Biodata $biodata)
    {
        if($biodata->profileImage!=="profile-images/user.png"){
            Storage::delete($biodata->profileImage);
        }
        Biodata::destroy($biodata->id);

        return redirect('/');
    }
}

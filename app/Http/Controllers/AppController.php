<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    public function home(Request $request){
        $data = Document::where('uid', auth()->user()->id)->get()->count();
        return view('app.home',[
            'totalbook' => $data,
        ]);
    }
    
    public function profile(Request $request){
        return view('app.profile');
    }

    public function addbook(){
        return view('app.addbook');
    }

    public function paddbook(Request $request){
        $validated = $request->validate([
            'title'=>'required|min:5',
            'description' => 'required|min:5',
            'file' => 'required|mimetypes:application/pdf',
        ]);
        
        $path = $request->file('file')->store('documents');
        $hash = md5_file(storage_path().'/app/'.$path);
        
        $searchhash = Document::where('hash_md5', $hash)->first();
        if($searchhash!==null){
            return back()->withInput()->with('error', 'Terdapat file yang sama ! Silahkan upload file yang lain !');
        }

        $validated = array_merge($validated, ['url'=>$path , 'uid'=>auth()->user()->id, 'is_active'=>true, 'hash_md5'=>$hash]);

        $check = Document::create($validated);
        
        if($check){
            $user = User::where('id',auth()->user()->id)->first();
            $user->points += 5;
            $user->save();

            Auth::user();

            return redirect()->route('addbook')->with('success','Buku anda berhasil diupload, poin anda telah ditambahkan !');
        }else{
            return back()->withInput()->with('error', 'Unknown Error !');
        };
    }

    public function browse(){
        $data = Document::where('is_active', true)->get();
        return view('app.browse', [
            'data' => $data,
        ]);
    }

    public function buybook(Request $request, $id){
        if(auth()->user()->points < 5){
            return redirect()->route('browse')->with('error','Gagal membeli buku karena poin anda kurang');
        }

        $data = Document::where('id',$id)->first();
        //get data buku

        // //tambah poin yang punya
        // $tuser = User::where('id',$data->uid )->first();
        // $tuser->points += 5;
        // if(!$tuser->save()){
        //     return redirect()->route('browse')->with('error','Gagal menambah poin yang punya');
        // }

        //edit data buku
        $data->is_active = false;
        $data->uid=auth()->user()->id;
        if(!$data->save()){
            return redirect()->route('browse')->with('error','Gagal mengubah data buku');
        }

        $suser = User::where('id',auth()->user()->id)->first();
        $suser->points -= 5;
        if(!$suser->save()){
            return redirect()->route('browse')->with('error','Gagal mengurangi poin yang beli');
        }
        //edit data user yang beli

        return redirect()->route('browse')->with('success','Berhasil membeli buku, silahkan akses buku di bagian MyBook');
    }

    public function mybook(Request $request){
        $data = Document::where('uid', auth()->user()->id)->where('is_active', false)->get();
        return view('app.mybook', [
            'data' => $data,
        ]);
    }

    public function returnbook(Request $request, $id){
        $data = Document::where('id',$id)->first();
        $data->is_active = true;
        
        $tuser = User::where('id',$data->uid )->first();
        $tuser->points += 5;
        if($data->save() && $tuser->save()){
            return redirect()->route('mybook')->with('success','Berhasil mengembalikan buku, poin anda telah dikembalikan');
        }else{
            return redirect()->route('mybook')->with('error','Unknown error');
        }
    }

    public function download(Request $request, $id){
        $data = Document::where('id',$id)->first();
        if($data->uid === auth()->user()->id){
            return Storage::download($data->url);
        }else{
            return abort(403);
        }
    }
        

}

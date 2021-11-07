<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    
        $files =$user->files()->where('parent_id', null)->paginate('21');
        
        return view ('library', [
          'files' => $files,
         

        ]);
        
    }

    public function create(){

        return view ('index');
    }

    
    
    public function createfolder()
    {
        return view ('create');
    }

    public function addtofolder()
    {
        $user = Auth::user();
        $folders =$user->files()->get();
        // $files = File::all();
        return view ('add', [
            'folders' => $folders,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,png,doc,docx,pdf|max:2048'
        ]);

        $file = new File();
        $user = Auth::user();
        $file->user_id = $user->id;

        

        if(!$request->file()){
            $file->namefolder = $request->namefolder;
            $file->save();
        }

        if($request->parent_id){
        $file->parent_id =$request->parent_id;
        }

        if($request->file()) {
            
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');


            $fileSize =$request->file->getSize() ;
            //dd($fileSize);
            $file->file_size = $fileSize;
            
            $file->name = $fileName;
            $file->file_path = '/storage/' . $filePath;
            $file->file_type =$request->file->extension();
            $file->save();
            
            
            // $user->files()->create( [
            //     'name' => $fileName,
            //     'file_path' => '/storage/' . $filePath ,
            //     //'file_size' => $fileSize ,
            // ] );
            return redirect('/files')->with('success','File has been uploaded.');
        }
      
        
        return redirect('/files')->with('success','Folder has been created.');
    }
   
    public function filesinfolder($id){
        $user = Auth::user();
        $files =$user->files()->where('parent_id',$id)
        ->paginate('21');
        
        return view ('files', [
            'files' => $files,
        ]);
    }
}
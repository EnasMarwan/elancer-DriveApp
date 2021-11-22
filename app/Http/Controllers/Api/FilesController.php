<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum'])->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::latest()->with('user:id,name')->paginate();
        return $files;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            
            $file->file_size = $fileSize;
            
            $file->name = $fileName;
            $file->file_path = '/storage/' . $filePath;
            $file->file_type =$request->file->extension();
            $file->save();
            

            return [
                'message' => 'File has been uploaded.'
            ];
        }
        
        return [
            'message' => 'Folder has been created.'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

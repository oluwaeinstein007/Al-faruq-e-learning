<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassSubject;
use Illuminate\support\Facades\Storage;
use Illuminate\Support\Stringable;


class UploadController extends Controller
{

    public function index(){
        $data = ClassSubject::all();
        return view('uploaddash', compact('data'));
    }


    public function VideoUpload(Request $request){
            $request->validate([
                'video_title' => 'required|max:255',
                'tutorial_videos' => 'required',
                'class_levels' => 'required',
            ]);

            if($file= $request->file('file')){

            
                    // $name = $file;
                    $title= $request->input('video_title');

                    if( Storage::disk('local')->put('file.mp4',$name)){
                            //if( $file = move('Uploads', $name)){
                                        $post = new ClassSubject();
                                        $post -> waec_vid =$file;
                                        $post -> video_title = $request -> title; 
                                        $post->tutorial_videos= $name;
                                        $post->save();
                                                return redirect()->route('uploaddash');
                                            //return redirect('uploaddash');
                                    // };
                                    
                                    
                                    // dd($request);
                    };
                    

            };
          
           
           
          
  }
}

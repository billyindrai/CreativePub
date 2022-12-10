<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;
use App\Models\User;
use App\Models\MyJob;
use App\Models\Gallery;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    //Show all the galleries
    // public function index()
    // {
    //         $gallery = Job::join('users','job.idPengguna','=','users.id')->where('job.draftStatusJob','=',FALSE)->where('job.idPengguna','!=', Auth::user()->id)->get();
    //         return view('jobs',['jobs' => $jobs]);
    // }

    public function showGalleryHome()
    {
            $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.draftStatusGallery','=',FALSE)->paginate(18);
            return view('welcome',['gallery' => $gallery]);
    }

    public function showGalleryImagesHome()
    {
            $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.categoryGallery','=','image')->where('gallery.draftStatusGallery','=',FALSE)->paginate(18);
            return view('welcome_image',['gallery' => $gallery]);
    }

    public function showGalleryVideoHome()
    {
            $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.categoryGallery','=','video')->where('gallery.draftStatusGallery','=',FALSE)->paginate(18);
            return view('welcome_video',['gallery' => $gallery]);
    }

    public function searchGallery(Request $request)
    {
        $search = $request->search;
        $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.draftStatusGallery','=',FALSE)->where('gallery.titleGallery','like',"%".$search."%")->paginate(18);
        return view('welcome',['gallery' => $gallery]);
    }

    public function showGalleryAudioHome()
    {
            $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.categoryGallery','=','audio')->where('gallery.draftStatusGallery','=',FALSE)->paginate(18);
            return view('welcome_audio',['gallery' => $gallery]);
    }

    public function showGalleryScriptHome()
    {
            $gallery = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.categoryGallery','=','script')->where('gallery.draftStatusGallery','=',FALSE)->paginate(18);
            return view('welcome_script',['gallery' => $gallery]);
    }

    public function showComments(Request $request)
    {
            $comments = Komentar::join('users','komentar.idPengguna','=','users.id')->where('komentar.idGallery','=', $request->galleryId)->get();
            return response()->json($comments);
            // return view('posted_jobs',['myJobs' => $myJobs]);
    }

    public function storeComments(Request $request)
    {
            $request->validate([
                'isiKomentar' => ['required', 'string'],         
            ]);
            Komentar::create([
                'idGallery' => $request->galleryId,
                'isiKomentar' => $request->isiKomentar,
                'idPengguna' => Auth::user()->id,
                ]);
            return redirect('/');
            // return view('posted_jobs',['myJobs' => $myJobs]);
    }

    public function storeWithoutCover(Request $request, Gallery $gallery)
    {
        

        if($request->categoryGallery == 'image'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|image|mimes:jpeg,png,jpg',           
            ]);
        } else if ($request->categoryGallery == 'video'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:mp4',           
            ]);
        } else if($request->categoryGallery == 'audio'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:mp3',           
            ]);
        } else if($request->categoryGallery == 'script'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:pdf',           
            ]);
        }

        // $data = request()->validate([
        //     'titleGallery' => 'required',
        //     'toolsGallery' => 'required',
        //     'categoryGallery' => 'required',
        //     'descriptionGallery' => 'required',
        //     'tagsGallery' => 'required',
        //     'fileGallery'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        if ($request->hasFile('fileGallery')){

			$file = $request->file('fileGallery');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Gallery',$nama_file);
        }
        //  dd($request->input('button'));
        
        $user_id = Auth::user()->id;

        
            // $currentGallery = Gallery::all()->last();
            // return response()->json($request->fileGallery);
        
        switch ($request->button) {
            case 'continue':
                Gallery::create([
                                    'titleGallery' => $request->titleGallery,
                                    'toolsGallery' => $request->toolsGallery,
                                    'categoryGallery' => $request->categoryGallery,
                                    'tagsGallery' => $request->tagsGallery,
                                    'draftStatusGallery' => TRUE,
                                    'idPengguna' => $user_id,
                                    'descriptionGallery' => $request->descriptionGallery,
                                    'contentGallery' => '/images/Gallery/' . $nama_file,
                                    'likeGallery' => 0,
                                    'viewGallery' => 0,
                                    ]);
                $currentGallery = Gallery::all()->last();
                return response()->json($currentGallery);
                break;
    
            case 'draft':
                Gallery::create([
                    'titleGallery' => $request->titleGallery,
                    'toolsGallery' => $request->toolsGallery,
                    'categoryGallery' => $request->categoryGallery,
                    'tagsGallery' => $request->tagsGallery,
                    'draftStatusGallery' => TRUE,
                    'idPengguna' => $user_id,
                    'descriptionGallery' => $request->descriptionGallery,
                    'contentGallery' => '/images/Gallery/' . $nama_file,
                    'likeGallery' => 0,
                    'viewGallery' => 0,
                    ]);
                // Gallery::all()->last()->delete();
                return redirect()->route('profile');  
                break;
    
        }

        
    }

    public function storeFinalize(Request $request, Gallery $gallery)
    {
        $request->validate([ 
            'galleryCover' => 'required|image|mimes:jpeg,png,jpg',       
        ]);

        

        if ($request->hasFile('galleryCover')){

			$file = $request->file('galleryCover');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Gallery/Cover',$nama_file);
        }
        //  dd($request->input('button'));
        
        $user_id = Auth::user()->id;

        
            // $currentGallery = Gallery::all()->last();
            // return response()->json($request->fileGallery);
        
        switch ($request->button) {
            case 'publish':
                Gallery::where('idGallery','=',$request->galleryId)->update([
                    'draftStatusGallery' => FALSE,
                    'coverGallery' => '/images/Gallery/Cover/' . $nama_file,
                     ]);
                return redirect()->route('profile');       
                break;
    
            case 'draft':
                Gallery::where('idGallery','=',$request->galleryId)->update([
                    'coverGallery' => '/images/Gallery/Cover/' . $nama_file,
                     ]);
                return redirect()->route('profile');   
                break;
    
        }

        
    }

    public function showGalleryProfile(Gallery $gallery)
    {
        $galleries = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.draftStatusGallery','=',FALSE)->where('gallery.idPengguna','=', Auth::user()->id)->get();
        return view('profile',['galleries' => $galleries]);
        
    }

    public function showDraftGalleryProfile()
    {
        $galleries = Gallery::join('users','gallery.idPengguna','=','users.id')->where('gallery.draftStatusGallery','=',TRUE)->where('gallery.idPengguna','=', Auth::user()->id)->get();
        return view('profile_draft_gallery',['galleries' => $galleries]);
        
    }

    public function deleteGallery(Request $request, Gallery $gallery)
    {       
            Komentar::where('idGallery','=',$request->galleryId)->delete();   
            Gallery::where('idGallery','=',$request->galleryId)->delete();        
            
            return redirect('/profile'); 
    }
    
    public function editGallery(Request $request)
    {
           $gallery = Gallery::where('idGallery','=',$request->galleryId)->get();      
            return view('/edit_gallery',['gallery' => $gallery]);
    }

    public function storeEditWithoutCover(Request $request, Gallery $gallery)
    {
        if($request->categoryGallery == 'image'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|image|mimes:jpeg,png,jpg',           
            ]);
        } else if ($request->categoryGallery == 'video'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:mp4',           
            ]);
        } else if($request->categoryGallery == 'audio'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:mp3',           
            ]);
        } else if($request->categoryGallery == 'script'){
            $request->validate([
                'titleGallery' => ['required', 'string'],            
                'toolsGallery' => ['required', 'string'], 
                'categoryGallery' => ['required', 'string'],  
                'descriptionGallery' => ['required', 'string'],  
                'tagsGallery' => ['required', 'string'],
                'fileGallery' => 'required|mimes:pdf',           
            ]);
        }

      
        if ($request->hasFile('fileGallery')){

			$file = $request->file('fileGallery');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Gallery',$nama_file);

            switch ($request->button) {
                case 'continue':
                    Gallery::where('idGallery','=', $request->galleryId )->update([
                                        'titleGallery' => $request->titleGallery,
                                        'toolsGallery' => $request->toolsGallery,
                                        'categoryGallery' => $request->categoryGallery,
                                        'tagsGallery' => $request->tagsGallery,
                                        'descriptionGallery' => $request->descriptionGallery,
                                        'contentGallery' => '/images/Gallery/' . $nama_file,
                                        ]);
                    $currentGallery = Gallery::where('idGallery','=', $request->galleryId )->get();
                    return response()->json($request->galleryId);
                    break;
        
                case 'draft':
                    Gallery::where('idGallery','=', $request->galleryId )->update([
                        'titleGallery' => $request->titleGallery,
                        'toolsGallery' => $request->toolsGallery,
                        'categoryGallery' => $request->categoryGallery,
                        'tagsGallery' => $request->tagsGallery,
                        'descriptionGallery' => $request->descriptionGallery,
                        'contentGallery' => '/images/Gallery/' . $nama_file,
                        'draftStatusGallery' => TRUE,
                        ]);
                    return redirect()->route('profile');  
                    break;
        
            }
        } else {
            switch ($request->button) {
                case 'continue':
                    Gallery::where('idGallery','=', $request->galleryId )->update([
                                        'titleGallery' => $request->titleGallery,
                                        'toolsGallery' => $request->toolsGallery,
                                        'categoryGallery' => $request->categoryGallery,
                                        'tagsGallery' => $request->tagsGallery,
                                        'descriptionGallery' => $request->descriptionGallery,
                                        ]);
                    $currentGallery = Gallery::where('idGallery','=', $request->galleryId )->get();
                    return response()->json($request->galleryId);
                    break;
        
                case 'draft':
                    Gallery::where('idGallery','=', $request->galleryId )->update([
                        'titleGallery' => $request->titleGallery,
                        'toolsGallery' => $request->toolsGallery,
                        'categoryGallery' => $request->categoryGallery,
                        'tagsGallery' => $request->tagsGallery,
                        'descriptionGallery' => $request->descriptionGallery,
                        'draftStatusGallery' => TRUE,
                        ]);
                    return redirect()->route('profile');  
                    break;
        
            }

        }        
    }

    public function storeEditFinalize(Request $request, Gallery $gallery)
    {
        $request->validate([ 
            'galleryCover' => 'required|image|mimes:jpeg,png,jpg',       
        ]);

        

        if ($request->hasFile('galleryCover')){

			$file = $request->file('galleryCover');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Gallery/Cover',$nama_file);
        }
        //  dd($request->input('button'));
        
        $user_id = Auth::user()->id;

        
        switch ($request->input('button')) {
            case 'publish':
                Gallery::where('idGallery','=',$request->galleryId)->update([
                    'coverGallery' => '/images/Gallery/Cover/' . $nama_file,
                    'draftStatusGallery' => FALSE,
                     ]);
                return redirect()->route('profile');       
                break;
    
            case 'draft':
                Gallery::where('idGallery','=',$request->galleryId)->update([
                    'draftStatusGallery' => TRUE,
                    'coverGallery' => '/images/Gallery/Cover/' . $nama_file,
                     ]);
                return redirect()->route('profile');
                // return response()->json($request->galleryId);   
                break;
    
        }

        
    }
}
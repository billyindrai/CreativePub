<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function storeWithoutCover(Request $request, Collection $collection)
    {
        $request->validate([
            'titleCollection' => ['required', 'string'],            
            'toolsCollection' => ['required', 'string'], 
            'categoryCollection' => ['required', 'string'],  
            'descriptionCollection' => ['required', 'string'],  
            'tagsCollection' => ['required', 'string'],    
            'fileCollection' => ['required','file'],       
        ]);
        
        if($request->categoryCollection == 'image'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|image|mimes:jpeg,png,jpg',           
            ]);
        } else if ($request->categoryCollection == 'video'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:mp4',           
            ]);
        } else if($request->categoryCollection == 'audio'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:mp3',           
            ]);
        } else if($request->categoryCollection == 'script'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:pdf',           
            ]);
        }

        if ($request->hasFile('fileCollection')){

			$file = $request->file('fileCollection');
			$nama_file = $file->getClientOriginalName();
        }
        //  dd($request->input('button'));
        
        $user_id = Auth::user()->id;

        
        
        switch ($request->button) {
            case 'continue':
                Collection::create([
                                    'titleCollection' => $request->titleCollection,
                                    'toolsCollection' => $request->toolsCollection,
                                    'categoryCollection' => $request->categoryCollection,
                                    'tagsCollection' => $request->tagsCollection,
                                    'draftStatusCollection' => TRUE,
                                    'idPengguna' => $user_id,
                                    'descriptionCollection' => $request->descriptionCollection,
                                    'contentCollection' => '/images/Collection/' . $nama_file,
                                    'likeCollection' => 0,
                                    'viewCollection' => 0,
                                    'approvalCollection' => FALSE,
                                    ]);
                $file->move('images/Collection',$nama_file);
                $currentCollection = Collection::all()->last();
                return response()->json($currentCollection);
                break;
    
            case 'draft':
                Collection::create([
                    'titleCollection' => $request->titleCollection,
                    'toolsCollection' => $request->toolsCollection,
                    'categoryCollection' => $request->categoryCollection,
                    'tagsCollection' => $request->tagsCollection,
                    'draftStatusCollection' => TRUE,
                    'idPengguna' => $user_id,
                    'descriptionCollection' => $request->descriptionCollection,
                    'contentCollection' => '/images/Collection/' . $nama_file,
                    'likeCollection' => 0,
                    'viewCollection' => 0,
                    'approvalCollection' => FALSE,
                    ]);
                $file->move('images/Collection',$nama_file);
                return redirect()->route('profile.collection');   
                break;
    
        }

        
    }

    public function showCollectionHome()
    {
            $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('draftStatusCollection', '=', FALSE)->paginate(18);
            return view('welcome_collection',['gallery' => $collection]);
    }

    public function searchCollection(Request $request)
    {
        $search = $request->search;
        $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('collection.draftStatusCollection','=',FALSE)->where('collection.titleCollection','like',"%".$search."%")->paginate(18);
        return view('welcome_collection',['gallery' => $collection]);
    }

    public function downloadCollection(Request $request)
    {   
        return response()->download(public_path($request->contentPath));
    }

    public function showCollectionImagesHome()
    {
            $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('collection.draftStatusCollection','=',FALSE)->where('collection.categoryCollection','=','image')->paginate(18);
            return view('welcome_collection_image',['gallery' => $collection]);
    }

    public function showCollectionVideoHome()
    {
            $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('collection.draftStatusCollection','=',FALSE)->where('collection.categoryCollection','=','video')->paginate(18);
            return view('welcome_collection_video',['gallery' => $collection]);
    }

    public function showCollectionAudioHome()
    {
            $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('collection.draftStatusCollection','=',FALSE)->where('collection.categoryCollection','=','audio')->paginate(18);
            return view('welcome_collection_audio',['gallery' => $collection]);
    }

    public function showCollectionScriptHome()
    {
            $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.approvalCollection','=', TRUE)->where('collection.draftStatusCollection','=',FALSE)->where('collection.categoryCollection','=','script')->paginate(18);
            return view('welcome_collection_script',['gallery' => $collection]);
    }

    public function storeFinalize(Request $request, Collection $collection)
    {
        $request->validate([ 
            'collectionCover' => 'required|image|mimes:jpeg,png,jpg',       
        ]);

        

        if ($request->hasFile('collectionCover')){

			$file = $request->file('collectionCover');
			$nama_file = $file->getClientOriginalName();
           
        }
        
        $user_id = Auth::user()->id;
        
        switch ($request->button) {
            case 'publish':
                Collection::where('idCollection','=',$request->collectionId)->update([
                    'draftStatusCollection' => FALSE,
                    'coverCollection' => '/images/Collection/Cover/' . $nama_file,
                     ]);
                $file->move('images/Collection/Cover',$nama_file);
                return redirect()->route('profile.collection');       
                break;
    
            case 'draft':
                Collection::where('idCollection','=',$request->collectionId)->update([
                    'coverCollection' => '/images/Collection/Cover/' . $nama_file,
                     ]);
                return redirect()->route('profile.collection');   
                break;
    
        }

        
    }

    public function showCollectionProfile(Collection $collection)
    {
        $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.draftStatusCollection','=',FALSE)->where('collection.approvalCollection','=',TRUE)->where('collection.idPengguna','=', Auth::user()->id)->get();
        return view('profile_collection',['collection' => $collection]);
        
    }

    public function showDraftCollectionProfile()
    {
        $collection = Collection::join('users','collection.idPengguna','=','users.id')->where('collection.draftStatusCollection','=',TRUE)->where('collection.idPengguna','=', Auth::user()->id)->get();
        return view('profile_draft_collection',['collection' => $collection]);     
    }

    public function deleteCollection(Request $request, Collection $collection)
    {       
            Collection::where('idCollection','=',$request->collectionId)->delete();        
            return redirect()->route('profile.collection'); 
    }

    public function editCollection(Request $request)
    {
           $collection = Collection::where('idCollection','=',$request->collectionId)->get();      
            return view('/edit_collection',['collection' => $collection]);
    }

    public function storeEditWithoutCover(Request $request, Collection $collection)
    {
        if($request->categoryCollection == 'image'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|image|mimes:jpeg,png,jpg',           
            ]);
        } else if ($request->categoryCollection == 'video'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:mp4',           
            ]);
        } else if($request->categoryCollection == 'audio'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:mp3',           
            ]);
        } else if($request->categoryCollection == 'script'){
            $request->validate([
                'titleCollection' => ['required', 'string'],            
                'toolsCollection' => ['required', 'string'], 
                'categoryCollection' => ['required', 'string'],  
                'descriptionCollection' => ['required', 'string'],  
                'tagsCollection' => ['required', 'string'],
                'fileCollection' => 'required|mimes:pdf',           
            ]);
        }

      
        if ($request->hasFile('fileCollection')){

			$file = $request->file('fileCollection');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Collection',$nama_file);

            switch ($request->button) {
                case 'continue':
                    Collection::where('idCollection','=', $request->collectionId )->update([
                                        'titleCollection' => $request->titleCollection,
                                        'toolsCollection' => $request->toolsCollection,
                                        'categoryCollection' => $request->categoryCollection,
                                        'tagsCollection' => $request->tagsCollection,
                                        'descriptionCollection' => $request->descriptionCollection,
                                        'contentCollection' => '/images/Collection/' . $nama_file,
                                        ]);
                    return response()->json($request->collectionId);
                    break;
        
                case 'draft':
                    Collection::where('idCollection','=', $request->collectionId )->update([
                        'titleCollection' => $request->titleCollection,
                        'toolsCollection' => $request->toolsCollection,
                        'categoryCollection' => $request->categoryCollection,
                        'tagsCollection' => $request->tagsCollection,
                        'descriptionCollection' => $request->descriptionCollection,
                        'contentCollection' => '/images/Collection/' . $nama_file,
                        'draftStatusCollection' => TRUE,
                        ]);
                    return redirect()->route('profile.collection');     
                    break;
        
            }
        } else {
            switch ($request->button) {
                case 'continue':
                    Collection::where('idCollection','=', $request->collectionId )->update([
                        'titleCollection' => $request->titleCollection,
                        'toolsCollection' => $request->toolsCollection,
                        'categoryCollection' => $request->categoryCollection,
                        'tagsCollection' => $request->tagsCollection,
                        'descriptionCollection' => $request->descriptionCollection,
                        ]);
                    return response()->json($request->collectionId);
                    break;
        
                case 'draft':
                    Collection::where('idCollection','=', $request->collectionId )->update([
                        'titleCollection' => $request->titleCollection,
                        'toolsCollection' => $request->toolsCollection,
                        'categoryCollection' => $request->categoryCollection,
                        'tagsCollection' => $request->tagsCollection,
                        'descriptionCollection' => $request->descriptionCollection,
                        'draftStatusCollection' => TRUE,
                        ]);
                    return redirect()->route('profile.collection');     
                    break;
        
            }

        }        
    }

    public function storeEditFinalize(Request $request, Collection $collection)
    {
        $request->validate([ 
            'collectionCover' => 'required|image|mimes:jpeg,png,jpg',       
        ]);

        

        if ($request->hasFile('collectionCover')){

			$file = $request->file('collectionCover');
			$nama_file = $file->getClientOriginalName();
            $file->move('images/Collection/Cover',$nama_file);
        }
        //  dd($request->input('button'));
        
        $user_id = Auth::user()->id;

        switch ($request->input('button')) {
            case 'publish':
                Collection::where('idCollection','=',$request->collectionId)->update([
                    'coverCollection' => '/images/Collection/Cover/' . $nama_file,
                    'draftStatusCollection' => FALSE,
                     ]);
                return redirect()->route('profile.collection');       
                break;
    
            case 'draft':
                Collection::where('idCollection','=',$request->collectionId)->update([
                    'draftStatusCollection' => TRUE,
                    'coverCollection' => '/images/Collection/Cover/' . $nama_file,
                     ]);
                return redirect()->route('profile.collection');   
                break;
    
        }

        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\MyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tes()
    {
            return view('/');
    }

    public function index()
    {
            $jobs = Job::join('users','job.idPengguna','=','users.id')->where('job.draftStatusJob','=',FALSE)->where('job.idPengguna','!=', Auth::user()->id)->get();
            return view('jobs',['jobs' => $jobs]);
    }

    public function indexDraftJob()
    {
            $jobs = Job::join('users','job.idPengguna','=','users.id')->where('job.draftStatusJob','=',TRUE)->where('job.idPengguna','=', Auth::user()->id)->get();
            // $jobs->created_at = date('Y-m-d', $jobs->created_at);
            return view('draft_jobs',['jobs' => $jobs]);
    }

    public function indexDetailJob(Request $request, Job $job)
    {
            $jobs = Job::join('users','job.idPengguna','=','users.id')->where('job.idJob','=',$request->jobId)->get();
            foreach( $jobs as $j){
                $idJobOwner = $j->idPengguna;
                $categoryJob  = $j->categoryJob;
            }
            $jobsOther = Job::join('users','job.idPengguna','=','users.id')->where('job.idPengguna','=',$idJobOwner)->where('job.draftStatusJob','=',FALSE)->get();
            $jobsOtherFinished = Job::join('users','job.idPengguna','=','users.id')->where('job.idPengguna','=',$idJobOwner)->where('job.draftStatusJob','=',FALSE)->where('job.finishStatusJob','=',TRUE)->get();
            $jobsFromSameUser = Job::join('users','job.idPengguna','=','users.id')->where('job.idPengguna','=',$idJobOwner)->where('job.draftStatusJob','=',FALSE)->where('job.finishStatusJob','=',FALSE)->where('job.idJob','!=',$request->jobId)->take(3)->get();
            $jobsSimilar = Job::join('users','job.idPengguna','=','users.id')->where('job.categoryJob','=',$categoryJob)->where('job.draftStatusJob','=',FALSE)->where('job.idJob','!=',$request->jobId)->take(3)->get();
            return view('job_details',['jobs' => $jobs, 'otherJobs' => $jobsOther, 'otherJobsFinished' => $jobsOtherFinished, 'jobsFromSameUser' => $jobsFromSameUser,'jobsSimilar' => $jobsSimilar]);
    }

    public function indexPostedJobs(Request $request, Job $job)
    {
            $jobs = Job::join('users','job.idPengguna','=','users.id')->where('job.draftStatusJob','=',FALSE)->where('job.idPengguna','=', Auth::user()->id)->select('users.name','users.penggunaLocation','job.*')->get();
            $jobsDetail = array();
            $i = 0;
            foreach($jobs as $j){
                $jobsDetail[$i] = MyJob::where('idJob','=',$j->idJob)->get();
                $i = $i + 1;
            };
            // $jobsDetail = MyJob::where('idJob','=',3)->get();
        
            return view('posted_jobs',['jobs' => $jobs, 'jobsDetail' => $jobsDetail]);
    }
    public function showApplicantsPostedJobs(Request $request)
    {
            $myJobs = MyJob::join('users','my_jobs.idPengguna','=','users.id')->where('my_jobs.idJob','=', $request->jobId)->where('my_jobs.statusMyJobs','=','Waiting')->get();
            return response()->json($myJobs);
            // return view('posted_jobs',['myJobs' => $myJobs]);
    }

    public function acceptCreator(Request $request)
    {
            $myJobs = MyJob::where('idMyJobs','=',$request->idJob)->update([
                'statusMyJobs' => 'Applied'
            ]);
            return redirect()->back();
            // return view('posted_jobs',['myJobs' => $myJobs]);
    }

    public function indexMyJobs(Request $request, Job $job)
    {
            $jobs = Job::join('my_jobs','job.idJob','=','my_jobs.idJob')->join('users','job.idPengguna','=','users.id')->where('my_jobs.idPengguna','=',Auth::user()->id)->get();
        
            return view('my_jobs',['jobs' => $jobs]);
    }

    public function deletePostedJob(Request $request, Job $job)
    {       
            MyJob::where('idJob','=',$request->jobId)->delete(); 
            Job::where('idJob','=',$request->jobId)->delete();        
            return redirect('/posted_jobs');
    }

    public function deleteDraftJob(Request $request, Job $job)
    {       
            Job::where('idJob','=',$request->jobId)->delete();        
            return redirect('/draft_jobs');
    }

    public function postDraftJob(Request $request, Job $job)
    {
            Job::where('idJob','=',$request->jobId)->update([
                'draftStatusJob' => FALSE,
                 ]);        
            return redirect('/posted_jobs');
    }

    public function editJob(Request $request)
    {
           $jobDetail = Job::where('idJob','=',$request->idJob)->get();
           foreach($jobDetail as $jd){
            $jd->dueDateJob = date('m-d-Y', strtotime($jd->dueDateJob));
        
           }        
            return view('/edit_jobs',['jobDetail' => $jobDetail]);
    }

    public function storedEditedJob(Request $request)
    {
        $request->validate([
            'titleJob' => ['required', 'string'],            
            'toolsJob' => ['required', 'string'], 
            'categoryJob' => ['required', 'string'],  
            'descriptionJob' => ['required', 'string'],  
            'tagsJob' => ['required', 'string'],  
            'dueDateJob' => ['required', 'string'],         
        ]);
        
        $user_id = Auth::user()->id;
        $time = strtotime($request->dueDateJob);
        $newformat = date('Y-m-d',$time);

        switch ($request->input('button')) {
            case 'publish':
                Job::where('idJob','=', $request->idJob )->update([
                                    'titleJob' => $request->titleJob,
                                    'toolsJob' => $request->toolsJob,
                                    'categoryJob' => $request->categoryJob,
                                    'tagsJob' => $request->tagsJob,
                                    'dueDateJob' => $newformat,
                                    'draftStatusJob' => FALSE,
                                    'idPengguna' => $user_id,
                                    'descriptionJob' => $request->descriptionJob,
                                    'finishStatusJob' => FALSE,
                                    ]);
                return redirect('/posted_jobs');
                break;
    
            case 'cancel':
                return redirect('/posted_jobs');
                break;
    
        }
    }


    public function userApplyJob(Request $request, Job $job ,MyJob $myJobs)
    {
        $myJobs = MyJob::all();
        $status = TRUE;

        foreach($myJobs as $mj){
            if($mj->idJob == $request->jobId && $mj->idPengguna == Auth::user()->id){
                $status = FALSE;
                break;
            }
        }

        if(Auth::check() && $status == TRUE){

            MyJob::create([
                'statusMyJobs' => 'Waiting',
                'idPengguna' => Auth::user()->id,
                'idJob' => $request->jobId,
                ]);
                return redirect('/my_jobs');
        } else if(Auth::check()) {
            return redirect('/jobs');
        } else{
            return view('login');
        }
    }        

    public function createUploadJob()
    {
        return view('/upload_job_page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Job $job)
    {
        $request->validate([
            'titleJob' => ['required', 'string'],            
            'toolsJob' => ['required', 'string'], 
            'categoryJob' => ['required', 'string'],  
            'descriptionJob' => ['required', 'string'],  
            'tagsJob' => ['required', 'string'],  
            'dueDateJob' => ['required', 'string'],         
        ]);
        
        $user_id = Auth::user()->id;
        $time = strtotime($request->dueDateJob);
        $newformat = date('Y-m-d',$time);

        switch ($request->input('button')) {
            case 'publish':
                Job::create([
                                    'titleJob' => $request->titleJob,
                                    'toolsJob' => $request->toolsJob,
                                    'categoryJob' => $request->categoryJob,
                                    'tagsJob' => $request->tagsJob,
                                    'dueDateJob' => $newformat,
                                    'draftStatusJob' => FALSE,
                                    'idPengguna' => $user_id,
                                    'descriptionJob' => $request->descriptionJob,
                                    'finishStatusJob' => FALSE,
                                    ]);
                return redirect()->route('show_posted_jobs');  
                break;
    
            case 'draft':
                Job::create([
                    'titleJob' => $request->titleJob,
                    'toolsJob' => $request->toolsJob,
                    'categoryJob' => $request->categoryJob,
                    'tagsJob' => $request->tagsJob,
                    'dueDateJob' => $newformat,
                    'draftStatusJob' => TRUE,
                    'idPengguna' => $user_id,
                    'descriptionJob' => $request->descriptionJob,
                    'finishStatusJob' => FALSE,
                    ]);
                return redirect()->route('show_draft_jobs');  
                break;
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}

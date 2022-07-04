<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $jobsFromSameUser = Job::join('users','job.idPengguna','=','users.id')->where('job.idPengguna','=',$idJobOwner)->where('job.draftStatusJob','=',FALSE)->where('job.finishStatusJob','=',FALSE)->take(3)->get();
            $jobsSimilar = Job::join('users','job.idPengguna','=','users.id')->where('job.categoryJob','=',$categoryJob)->where('job.draftStatusJob','=',FALSE)->take(3)->get();
            return view('job_details',['jobs' => $jobs, 'otherJobs' => $jobsOther, 'otherJobsFinished' => $jobsOtherFinished, 'jobsFromSameUser' => $jobsFromSameUser,'jobsSimilar' => $jobsSimilar]);
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
                return view('/profile');
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
                return view('/profile');
                break;
    
        }
        
        // if(Auth::user()->idBankAccount==NULL){
        //     $bankAccount = BankAccount::create([
        //                     'bankBankAccount' => $request->bank,
        //                     'accountNumberBankAccount' => $request->bankNumber,
        //                 ]);
            
        //     User::where('id', $user_id )->update(['idBankAccount' => $bankAccount->idBankAccount]);
        // } else{
        //     BankAccount::where('idBankAccount',Auth::user()->idBankAccount)->update([
        //         'bankBankAccount' => $request->bank,
        //         'accountNumberBankAccount' => $request->bankNumber,
        //     ]);
        // }
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

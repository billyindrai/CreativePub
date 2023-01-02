<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Collection;
use App\Models\Job;
use App\Models\MyJob;
use App\Models\Monetize;
use App\Models\BankAccount;
use App\Models\PaymentInformation;
use App\Models\PremiumRequest;
use App\Models\Komentar;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('/login_page');
    }

    public function pay(Request $request)
    {    


        $paymentInformation = PaymentInformation::create([
            'namaPayment' => $request->namaBilling,
            'companyNamePayment' => $request->companyBilling,
            'countryPayment' => $request->countryBilling,
            'addressPayment' => $request->addressPayment,
            'cityPayment' => $request->cityBilling,
            'regionPayment' => $request->regionBilling,
            ]);
        
        User::where('id','=', Auth::user()->id )->update([
            'idPayment' => $paymentInformation->idPayment,
            ]);   

        $order = NULL;
        if($request->radio == 480000){
            $order = '1 YEAR';
            User::where('id','=', Auth::user()->id )->update([
                'premiumPackage' => $order,
                ]); 
        } else if($request->radio == 300000){
            $order = '6 Months';
            User::where('id','=', Auth::user()->id )->update([
                'premiumPackage' => $order,
                ]); 
        } else {
            $order = '1 Month';
            User::where('id','=', Auth::user()->id )->update([
                'premiumPackage' => $order,
                ]); 
        }

        

        return view('/payment_page_confirmation',['name' => $request->namaBilling, 'address'=> $request->addressPayment, 'order' => $order, 'total' => $request->radio]);
    }

    public function showPaymentPage()
    {
        return view('/payment_page');
    }

    public function paymentFinished()
    {
        PremiumRequest::create([
            'statusPremiumRequest' => FALSE,
            'idPengguna' => Auth::user()->id,

            ]);
    }

    public function adminShowAccount()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allUser = User::paginate(5);
            return view('/admin',['user' => $allUser]);
        } else {
            return redirect('/');
        }
    }

    public function adminShowJob()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allJob = Job::join('users','job.idPengguna','=','users.id')->paginate(5);
            return view('/admin_job',['job' => $allJob]);
        } else {
            return redirect('/');
        }
    }

    public function adminShowRequest()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allRequest = PremiumRequest::join('users','premium_request.idPengguna','=','users.id')->paginate(5);
            return view('/admin_premium',['request' => $allRequest]);
        } else {
            return redirect('/');
        }
    }

    public function adminConfirmRequest(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            PremiumRequest::where('idPremiumRequest', '=', $request->requestId)->update(['statusPremiumRequest' => TRUE]);
            User::where('id', '=', $request->userId)->update(['langgananPengguna' => TRUE]);
            return redirect('/admin_premium');
        } else {
            return redirect('/');
        }
    }

    public function adminShowCollection()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allCollection = Collection::paginate(5);
            return view('/admin_collection',['collection' => $allCollection]);
        } else {
            return redirect('/');
        }
    }

    public function adminShowGallery()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allGallery = Gallery::paginate(5);
            return view('/admin_gallery',['gallery' => $allGallery]);
        } else {
            return redirect('/');
        }
    }

    public function adminShowApproval()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allCollection = Collection::where('approvalCollection', '=', FALSE)->paginate(5);
            return view('/admin_approval',['collection' => $allCollection]);
        } else {
            return redirect('/');
        }
    }

    public function adminShowMonetize()
    {
        if(Auth::user()->isAdmin == TRUE){
            $allMonetize = Monetize::join('users','monetize.idPengguna','=','users.id')->join('bank_account', 'users.idBankAccount', '=', 'bank_account.idBankAccount')->paginate(5);
            return view('/admin_monetize',['monetize' => $allMonetize]);
        } else {
            return redirect('/');
        }
    }

    public function adminFinishMonetize(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Monetize::where('idMonetize', '=', $request->monetizeId)->update(['monetizeStatus' => TRUE]);
            return redirect('/admin_monetize');
        } else {
            return redirect('/');
        }
    }

    public function adminDeleteAccount(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Komentar::where('idPengguna','=',$request->accountId)->delete();
            Gallery::where('idPengguna','=',$request->accountId)->delete();
            Collection::where('idPengguna','=',$request->accountId)->delete();
            $job = Job::where('idPengguna','=',$request->accountId)->get();
            foreach($job as $j){
                MyJob::where('idJob','=',$j->idJob)->delete();
            }
            MyJob::where('idPengguna','=',$request->accountId)->delete();
            Job::where('idPengguna','=',$request->accountId)->delete();
            User::where('id','=', $request->accountId)->delete();
            return redirect('/admin')->with('status','Data pengguna berhasil dihapus!');
        } else {
            return redirect('/');
        }
    }

    public function adminDeleteJob(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            MyJob::where('idJob','=',$request->jobId)->delete();
            Job::where('idJob','=',$request->jobId)->delete();
            return redirect('/admin_job')->with('status','Data job berhasil dihapus!');
        } else {
            return redirect('/');
        }
    }

    public function adminDeleteCollection(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Collection::where('idCollection','=',$request->collectionId)->delete();
            return redirect('/admin_collection')->with('status','Data collection berhasil dihapus!');
        } else {
            return redirect('/');
        }
    }

    public function adminDeleteGallery(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Komentar::where('idGallery','=',$request->galleryId)->delete();   
            Gallery::where('idGallery','=',$request->galleryId)->delete();
            return redirect('/admin_gallery')->with('status','Data gallery berhasil dihapus!');
        } else {
            return redirect('/');
        }
    }

    public function adminDeleteApproval(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Collection::where('idCollection','=',$request->collectionId)->delete();
            return redirect('/admin_approval')->with('status','Data collection berhasil dihapus!');
        } else {
            return redirect('/');
        }
    }

    public function adminSearchJob(Request $request)
    {
        $search = $request->keywordSearch;
        $allJob =  Job::where('titleJob','like',"%".$search."%")->paginate(5);
        return view('/admin_job',['job' => $allJob]);
    }

    public function adminSearchAccount(Request $request)
    {
        $search = $request->keywordSearch;
        $allUser =  User::where('usernamePengguna','like',"%".$search."%")->paginate(5);
        return view('/admin',['user' => $allUser]);
    }

    public function adminSearchCollection(Request $request)
    {
        $search = $request->keywordSearch;
        $allCollection =  Collection::where('titleCollection','like',"%".$search."%")->paginate(5);
        return view('/admin_collection',['collection' => $allCollection]);
    }

    public function adminSearchGallery(Request $request)
    {
        $search = $request->keywordSearch;
        $allGallery =  Gallery::where('titleGallery','like',"%".$search."%")->paginate(5);
        return view('/admin_gallery',['gallery' => $allGallery]);
    }

    public function adminApproval(Request $request)
    {
        if(Auth::user()->isAdmin == TRUE){
            Collection::where('idCollection','=',$request->collectionId)->update(['approvalCollection' => TRUE]);
            return redirect('/admin_approval')->with('status','Data collection berhasil diapprove!');
        } else {
            return redirect('/');
        }
    }

    public function showMonetize()
    {
        $basicMonetize = 50000;
        $countCollection = Collection::where('idPengguna', '=', Auth::user()->id)->where('approvalCollection', '=', TRUE)->where('draftStatusCollection', '=', FALSE)->count();
        $subTotalMonetize = $basicMonetize*$countCollection;
        $taxMonetize = (10/100)*$subTotalMonetize;
        $totalMonetize = $subTotalMonetize + $taxMonetize;
        return view('/monetize',['basicMonetize' => $basicMonetize, 'countCollection' => $countCollection, 'subTotalMonetize' => $subTotalMonetize, 'taxMonetize' => $taxMonetize, 'totalMonetize' => $totalMonetize]);
    }

    public function submitMonetize(Request $request)
    {
        $monetize = Monetize::create([
            'idPengguna' => Auth::user()->id,
            'monetizeAmount' => $request->amountMonetize,
            'monetizeStatus' => FALSE,
            ]);
    }

    public function createUpdateProfileGeneral()
    {
        return view('/edit_profile_general');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if(Auth::user()->isAdmin == TRUE){
            return redirect('/admin');
        } else {
            return redirect('/');
        }
    }
    

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function updateProfilePassword(Request $request, User $user)
    {
        $request->validate([
            'oldPassword' => ['required', Rules\Password::defaults(),
            function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Your password was not updated, since the provided current password does not match.');
                }
            }
        ],
            'newPassword' => ['required_with:confirmPassword',Rules\Password::defaults(),'same:confirmPassword'],
            'confirmPassword' => [Rules\Password::defaults(),'required',],
        ]);
        

        if(Hash::check($request->oldPassword,Auth::user()->password)){
            if($request->confirmPassword==$request->newPassword){
                User::where('id',Auth::user()->id)->update([
                    'password'=> Hash::make($request->newPassword)
                ]);
                return redirect('/');
            }
        } else{
        }
    }

    public function updateProfileSocial(Request $request, User $user)
    {
        $request->validate([
            'instagram' => ['required', 'url', 'string'],            
            'lindkedIn' => ['required', 'url', 'string'],        
        ]);
        
        $user_id = Auth::user()->id;

        User::where('id', $user_id )->update([
            'penggunaInstagram' => $request->instagram,
            'penggunaLinkedIn' => $request->lindkedIn
             ]);
        
        return redirect('/profile');

        
    }

    public function updateProfileBank(Request $request, User $user, BankAccount $bankAccount)
    {
        $request->validate([
            'bank' => ['required', 'string'],            
            'bankNumber' => ['required', 'string'],        
        ]);
        
        $user_id = Auth::user()->id;
        
        if(Auth::user()->idBankAccount==NULL){
            $bankAccount = BankAccount::create([
                            'bankBankAccount' => $request->bank,
                            'accountNumberBankAccount' => $request->bankNumber,
                        ]);
            
            User::where('id', $user_id )->update(['idBankAccount' => $bankAccount->idBankAccount]);
        } else{
            BankAccount::where('idBankAccount',Auth::user()->idBankAccount)->update([
                'bankBankAccount' => $request->bank,
                'accountNumberBankAccount' => $request->bankNumber,
            ]);
        }

        

        return redirect('/profile');

        
    }

    public function updateProfileGeneral(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'usernamePengguna' => ['required', 'string', 'max:255'],
            'penggunaProfession' => ['required', 'string', 'max:255'],
            'penggunaLocation' => ['required', 'string', 'max:255'],
            'penggunaBio' => ['required', 'string', 'max:255'],
            'penggunaQuotes' => ['required', 'string', 'max:255'],
            
        ]);
        
        $user_id = Auth::user()->id;

        User::where('id', $user_id )->update([
            'name' => $request->name,
            'email' => $request->email,
            'usernamePengguna' => $request->usernamePengguna,
            'penggunaProfession' => $request->penggunaProfession,
            'penggunaLocation' => $request->penggunaLocation,
            'penggunaBio' => $request->penggunaBio,
            'penggunaQuotes'=> $request->penggunaQuotes
             ]);
        
        
        return redirect('/profile');
    }
}

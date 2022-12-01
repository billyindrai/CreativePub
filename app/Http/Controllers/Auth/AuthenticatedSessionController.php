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
use App\Models\BankAccount;

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

    public function showPaymentPage()
    {
        return view('/payment_page');
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

        return redirect('/');
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
            'oldPassword' => ['required', Rules\Password::defaults()],
            'newPassword' => ['required', Rules\Password::defaults(),'required_with:confirm_password|same:confirm_password'],
            'confirmPassword' => ['required', Rules\Password::defaults()],
        ]);
        

        if(Hash::check($request->oldPassword,Auth::user()->password)){
            if($request->confirmPassword==$request->newPassword){
                User::where('id',Auth::user()->id)->update([
                    'password'=> Hash::make($request->newPassword)
                ]);
                return redirect('/');
            }
        } else{
            return view('/profile');
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

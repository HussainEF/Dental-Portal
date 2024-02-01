<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator, Redirect, Response;

//Models
use App\Models\DoctorOfficial;
use App\Models\MedicalSetupDoctors;
use App\Models\MedicalSetupDoctorsDetail;

//Facades
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Function for the Authentication of User Before Login
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        $user = DoctorOfficial::where('code', $request->email)
                                ->orwhere('email', $request->email)
                                ->orwhere('username', $request->email)->first();
        $md5Password = md5(md5($request->password));
        // dd($user->password, $md5Password);

        if(!empty($user)){
            if($md5Password == $user->password){
                Auth::login($user);
                $doctorId = $user->doctor_id;
                if($this->getDataForSession($doctorId)){
                    $defaultPasswordHash = "14e1b600b1fd579f47433b88e8d85291";
                    if($user->password == $defaultPasswordHash){
                        return redirect()->intended('change-password');
                    }else{
                        return redirect()->intended('dashboard');
                    }
                }
            }
        }
        return Redirect::to("login")->withErrors(['login' => 'Invalid Credentials!']);
    }

    public function getDataForSession($doctorId){
        $doctorData = MedicalSetupDoctors::with(['DoctorOfficial'])->whereHas('DoctorOfficial', function ($query) use($doctorId) {
            $query->where(['doctor_id'=> $doctorId, 'is_deleted'=> 42]);
        })->first();
        session([
            'doctorId' => $doctorData->id,
            'doctorName' => $doctorData->name,
        ]);
        return true;
    }


    public function changePassword(){
        return view('cases.change_password');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator, Redirect, Response;

//Models
use App\Models\DoctorOfficial;
use App\Models\MedicalTeamRoles;
use App\Models\HR;
use App\Models\MyOrganizationTeam;

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
        
        $user = DoctorOfficial::where('code', $request->email)
                                ->orwhere('email', $request->email)
                                ->orwhere('username', $request->email)->first(['id', 'email', 'code', 'password']);
        $md5Password = md5(md5($request->password));

        if(!empty($user)){
            if($md5Password == $user->password){
                Auth::login($user);
                $result = $this->getDataForSession();
                // print_r($result);
                // dd($result);
                // dd(Session::all());
                return redirect()->intended('dashboard');
            }
        }
        return Redirect::to("login")->withSuccess('Oppoes! You have enteren worng email or password');
    }

    public function getDataForSession(){
        $accountId = Auth::id();
        $sessionData = MyOrganizationTeam::whereHas('DoctorOfficial', function ($query) use ($accountId) {
            $query->where(['id'=> 1097, 'is_deleted'=> 42]);
        })->with(['DoctorOfficial' => function ($query) use ($accountId){
            $query->select('id as accountID', 'doctor_id as teamID', 'company', 'account_status as accountStatus');
        },'MedicalTeamRoles' => function ($query){
            $query->select('role_id as roleID');
        }, 'HR' => function ($query){
            $query->select('name as temMemberName', 'photo as temMemberPhoto');
        }])->get('HR_id as teamMemberHRID','organization_id as teamMemberOrganizationID');
        return $sessionData->count();
    }
}
// SELECT account.id AS accountID, account.doctor_id AS teamID, account.company AS company, account.account_status AS accountStatus, organizationTeam.HR_id AS teamMemberHRID, organizationTeam.organization_id AS teamMemberOrganizationID, HR.name AS temMemberName, HR.photo AS temMemberPhoto, teamOfficialRoles.role_id AS roleID FROM tbl_application_doctor_officials AS account LEFT JOIN tbl_application_my_organization_team AS organizationTeam ON organizationTeam.id = account.team_id LEFT JOIN tbl_application_hr AS HR ON organizationTeam.HR_id = HR.id LEFT JOIN tbl_application_medical_team_roles AS teamOfficialRoles ON teamOfficialRoles.team_id = organizationTeam.id WHERE account.id = 11 AND account.is_deleted = 42
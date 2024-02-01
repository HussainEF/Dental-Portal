<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DoctorOfficial;
use Illuminate\Support\Facades\Auth;


class ChangePassword extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $flag = 0;


    public function updatedConfirmPassword(){
        if($this->newPassword!=$this->confirmPassword){
            $this->flag = 1;
        }
        else{
            $this->flag = 0;
        }
    }

    public function updatePassword(){
        $user = Auth::user();
        $validatedData = $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:5',
            'confirmPassword' => 'required|min:5',
        ]);

        $md5HashCurrentPassword = md5(md5($this->currentPassword));
        if($md5HashCurrentPassword == $user->password){
            if($this->newPassword == $this->confirmPassword){
                $md5HashNewPassword = md5(md5($this->newPassword));
                $doctor = DoctorOfficial::find($user->id);
                // $doctor->update(['password' => $md5HashNewPassword]);
                $doctor->password = $md5HashNewPassword;
                $doctor->save();
                session()->flash('success', 'Password updated successfully!');
                $this->reset(['currentPassword', 'newPassword', 'confirmPassword']);
            }
        }else{
            session()->flash('error', 'Current password is incorrect.');
        }
    }

    public function cancel(){
        return redirect()->intended('dashboard');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}

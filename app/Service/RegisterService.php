<?php


namespace App\Service;

use App\Models\File;
use App\Models\UnderageGuardian;
use App\Models\User;
use App\Models\UserInfos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RegisterService
{
    public function createUser($request){
        $request->password = bcrypt($request->password);

        User::create(['email' => $request->email,'password' => $request->password,'first_login'=> 0, 'profile_id' => 1]);
    }

    public function createUserInfo($request){
        $dateNow = Carbon::now();
        $dateBirth = $request->dateStudent;
        $yearsOld = $dateNow->diffInYears($dateBirth);

        if(isset($request->kinshipType) && $yearsOld < 18){
            $request->validate([
                'photoGuardian' => 'required|file|mimes:jpg,jpeg,png',
                'nameGuardian' => 'required',
                'dateGuardian' => 'required',
                'nationalityGuardian' => 'required',
                'cpfGuardian' => 'required',
                'kinshipType' => 'required'
            ]);

            $fileNameStudent = auth()->id() . '_' . time() . '.'. $request->file->extension();
            $mimeStudent = $request->file->getClientMimeType();
            $sizeStudent = $request->file->getSize();
            $pathStudent = $request->file('file')->store('file/' . auth()->user()->id);

            $fileNameGuardian = auth()->id() . '_' . time() . '.'. $request->photoGuardian->extension();
            $mimeGuardian = $request->photoGuardian->getClientMimeType();
            $sizeGuardian = $request->photoGuardian->getSize();
            $pathGuardian = $request->file('photoGuardian')->store('file/' . auth()->user()->id);

            $fileStudent = File::create([
                'name' => $fileNameStudent,
                'mime' => $mimeStudent,
                'size' => $sizeStudent,
                'path' => $pathStudent
                ]);

            $fileGuardian = File::create([
                'name' => $fileNameGuardian,
                'mime' => $mimeGuardian,
                'size' => $sizeGuardian,
                'path' => $pathGuardian
                ]);

            $userInfo = UserInfos::create([
            'name' => $request->nameStudent,
            'date_birth'=> $request->dateStudent,
            'phone' => $request->phoneStudent,
            'cpf' => $request->cpfStudent,
            'display_photo' => 0,
            'file_id'=>$fileStudent->id,
            'nationality_id'=>$request->nationalityStudent,
            'user_id'=> Auth::user()->id,
            ]);

            UnderageGuardian::create([
                'name' => $request->nameGuardian,
                'date_birth'=> $request->dateGuardian,
                'phone' => $request->phoneGuardian,
                'cpf' => $request->cpfGuardian,
                'file_id'=>$fileGuardian->id,
                'nationality_id'=>$request->nationalityGuardian,
                'kinship_type_id'=>$request->kinshipType,
                'user_info_id'=> $userInfo->id,
                ]);

            User::find(Auth::user()->id)->update(['first_login' => 1]);



        } else {
            $request->validate([
                'file' => 'required|file|mimes:jpg,jpeg',
            ]);

            $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();
            $mime = $request->file->getClientMimeType();
            $size = $request->file->getSize();
            $path = $request->file('file')->store('file/' . auth()->user()->id);

            $file = File::create([
                'name' => $fileName,
                'mime' => $mime,
                'size' => $size,
                'path' => $path
                ]);

            UserInfos::create([
            'name' => $request->nameStudent,
            'date_birth'=> $request->dateStudent,
            'phone' => $request->phoneStudent,
            'cpf' => $request->cpfStudent,
            'display_photo' => 0,
            'file_id'=>$file->id,
            'nationality_id'=>$request->nationalityStudent,
            'user_id'=> Auth::user()->id,
            ]);

            User::find(Auth::user()->id)->update(['first_login' => 1]);
        }
    }

}

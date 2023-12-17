<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Gate;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        //  if(Gate::denies('user')){
        //     return redirect(route('pages.index'));
        // }
        // $this->middleware('can:customer-routes');
    }
    public function dashboard(){
        return view ('backend.dashboard');
    }
    public function profile(){
        return view('frontend.pages.profile');
    }

    public function edit(Request $request){
        $user = auth()->user();
        $countries = Country::all();
        return view('frontend.pages.edit-profile', compact('user', 'countries'));
    }

    
    public function update(Request $request){
       
        // dd($request->all());
        $id = auth()->id();
        $user = User::findOrFail($id);
        // dd($user);
        $input = $request->validate([
            'name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'country' => 'required',
            'avatar' => 'nullable|sometimes|image',
        ]);

        // dd($input);

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $avatar = $this->storeImage($file, 'seams/users');
        }else{
            $avatar = $user->avatar;
        }
        
        $update = array_merge(
            $input,
            ['avatar' => $avatar]
        );
        
        $user->update($update);

        return redirect()->route('user.profile')->with('profile-updated', "Profile updated successfully");
    }

    public function storeImage($file, $destination){ 

        //Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();

        //Get file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //Remove unwanted characters
        $filename = preg_replace("/[^A-Za-z0-9 ]/", ' ', $filename);
        $filename = preg_replace('/\s+/', '-', $filename);
   
        //Create unique file name
        $fileNameToStore = time().'-'.$filename;


        //Store image on cloudinary
        $result = $file->storeOnCloudinaryAs($destination, $fileNameToStore);

        if($result){
            return $result->getSecurePath();
        }else{
            return 'an error occurred';
        }
    }

    public function editPassword(Request $request){
        return view('frontend.pages.edit-password');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'min:8'],
            'confirm_new_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('user.profile')->with('password-updated', "Password update successful");
    }
}

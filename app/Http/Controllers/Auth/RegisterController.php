<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/userHome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/|required|string|min:8|
                            confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'role' => $data['role'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }

    protected function create(array $data)
    {

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to('konexionparis@gmail.com')->send(new VerifyMail($user));

        return $user;
    }

    public function indexUser()
    {
        $users = DB::table('users')->orderBy('id', 'DESC')->get()->all();
        return view('/admin/userHome', compact('users'));
    }

    public function destroy($id){

        $user = DB::table('users')->where('id', '=', $id);

         if (!is_null($user)) {
            $user->delete();
            session()->flash('message', 'L\'utilisateur a bien été suprimé');
        }


        return redirect('/userHome');

    }

    //Approve users
    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Votre adresse email a été validé, vous pouvez vous connecter.";
            }else{
                $status = "Votre adresse email est toujours valable, vous pouvez vous connecter.";
            }
        }else{
            return redirect('/login')->with('warning', "Désolé, votre adresse mail n'a pas été validée.");
        }

        return redirect('/login')->with('status', $status);
    }

    //verify if user registered
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'Nous vous avons envoyé un code d\'activation. Regardez dans vos mails et cliquez sur le lien de vérification.');
    }
}

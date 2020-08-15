<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('dashboard');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            
                Session::put('name',$data->nama_lengkap);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('dashboard');
            
            
                //return redirect('login')->with('alert','Password atau Email, Salah !');
            
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        //dd($request->all());
        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|min:4|email|unique:users',
        //     'password' => 'required',
        //     'confirmation' => 'required|same:password',
        // ]);

        // $data =  new User();
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        // $data->save();
        // return redirect('login')->with('alert-success','Kamu berhasil Register');

        User::create([
            'nama_lengkap'  => $request['nama'],
            'email'         => $request['email'],
            'password'      => $request['password']

        ]);
        return view('dashboard');
        //return redirect()->route('pertanyaans.index')->with('success', 'Pertanyaan berhasil dibuat');
    }
    
}

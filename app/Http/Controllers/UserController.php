<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userRepo;
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepo->getAll();
        return view('pages.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:190',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|confirmed',
            'jabatan' => 'required'
        ]);
        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'jabatan' => $request->input('jabatan')
        ];
        $this->userRepo->createOne($data);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepo->getOne($id);
        return view('pages.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepo->getOne($id);
        return view('pages.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|max:190',
            'username' => 'required',
            'jabatan' => 'required'
        ]);
        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'jabatan' => $request->input('jabatan')
        ];
        $this->userRepo->updateOne($id, $data);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepo->deleteOne($id);
        return redirect('/user');
    }

    public function changePassword(){
        return view('pages.user.change-password');
    }
    public function postChangePassword(Request $request){
        $this->validate($request,[
           'password' => 'required|min:6',
           'password_confirmation' => 'required|confirmed',
        ]);
        if (!Hash::check($request->input('old_password'), Auth::user()->getAuthPassword())){
            return back();
        }
        $data = [
            'password' => bcrypt($request->input('password'))
        ];
        $this->userRepo->updateOne(Auth::user()->getAuthIdentifier(), $data);
        return redirect('/user');
    }
}

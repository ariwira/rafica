<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Repositories\CabangRepo;

class CabangController extends Controller
{
    private $cabang;
    private $userRepo;
    public function __construct(CabangRepo $cabangRepo, UserRepo $userRepo)
    {
        $this->cabang = $cabangRepo;
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabangs = $this->cabang->getAll();
        return view('pages.cabang.index',compact('cabangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->userRepo->getAll();
        return view('pages.cabang.create',compact('users'));
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
            'user' => 'required',
            'nama' => 'required|max:190'
        ]);
        $data = [
            'user_id' => $request->input('user'),
            'nama' => $request->input('nama')
        ];
        $this->cabang->createOne($data);
        return redirect('/cabang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cabang = $this->cabang->getOne($id);
        return view('pages.cabang.show',compact('cabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = $this->userRepo->getAll();
        $cabang = $this->cabang->getOne($id);
        return view('pages.cabang.edit',compact('users','cabang'));
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
            'user' => 'required',
            'nama' => 'required|max:190'
        ]);
        $data = [
            'user_id' => $request->input('user'),
            'nama' => $request->input('nama')
        ];
        $this->cabang->updateOne($id, $data);
        return redirect('/cabang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cabang->deleteOne($id);
        return redirect('/cabang');
    }
}

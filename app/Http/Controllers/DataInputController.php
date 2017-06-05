<?php

namespace App\Http\Controllers;

use App\Crud;
use App\Repositories\CabangRepo;
use App\Repositories\DataInputRepo;
use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataInputController extends Controller
{
    private $userRepo;
    private $dataInputRepo;
    private $cabangRepo;
    public function __construct(UserRepo $userRepo, DataInputRepo $dataInputRepo, CabangRepo $cabangRepo)
    {
        $this->userRepo = $userRepo;
        $this->dataInputRepo = $dataInputRepo;
        $this->cabangRepo = $cabangRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = $this->dataInputRepo->getAll();
        dd($datas[0]);
        return view('pages.data-input.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cabang = $this->cabangRepo->getAll(2);
        return view('pages.data-input.create',compact('cabang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->input());
        $this->validate($request,[
            'judul.* => required',
            'tahun.* => required',
            'deskripsi.* => required',
            'cabang_id.* => required',
            'score1.*' => 'required|numeric',
            'score2.*' => 'required|numeric',
            'score3.*' => 'required|numeric',
            'score4.*' => 'required|numeric',
            'score5.*' => 'required|numeric',
        ]);
            $crud = Crud::create([
                'judul' => $request->input('judul'),
                'tahun' => $request->input('tahun'),
                'deskripsi' => $request->input('deskripsi'),
            ]);
          $cabang_id = $request->input('cabang_id');
          $score1 = $request->input('score1');
          $score2 = $request->input('score2');
          $score3 = $request->input('score3');
          $score4 = $request->input('score4');
          $score5 = $request->input('score5');
            $data = array();
          foreach ($cabang_id as $key => $cab){
              $data[$key] = [
                  'cab' => $cab,
                  'crud_id' => $crud->id,
                  'score1' => $score1[$key],
                  'score2' => $score2[$key],
                  'score3' => $score3[$key],
                  'score4' => $score4[$key],
                  'score5' => $score5[$key],
              ];
          }
         foreach ($data as $dat){
             $collect = $this->dataInputRepo->createOne(array_except($dat,['cab']));
             $this->dataInputRepo->attach($collect->id,$dat['cab']);
         }

        return redirect('/input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

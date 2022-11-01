<?php

namespace App\Http\Controllers;

use App\Models\Kebutuhan;
use App\Models\Student;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = kebutuhan::Latest()->paginate(5);
        $students = Student::all();
        return view('kebutuhan.index',compact('kebutuhan','students'))
                ->with('i',(request()->input('page', 1)- 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kebutuhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_user' => 'required',
            'nama_kebutuhan'=> 'required',
            'qty'=> 'required'
        ]);
        kebutuhan::create($request->all());
        return redirect()->route('kebutuhan.index')
                    ->with('succes','berhasil menyimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show(Kebutuhan $kebutuhan)
    {
        return view('kebutuhan.show',compact('kebutuhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebutuhan $kebutuhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebutuhan $kebutuhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebutuhan $kebutuhan)
    {
        //
    }
}

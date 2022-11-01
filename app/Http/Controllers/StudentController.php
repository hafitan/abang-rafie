<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\Student;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = kebutuhan::all();
        $students = student::latest()->paginate(5);
        return view('students.index',compact('students','kebutuhan'))
                ->with('i',(request()->input('page', 1)- 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
            
            // student::create([
            //     'user_id' => Str::uuid()->toString(),
            //     'nama_pemohon' => $request->nama_pemohon,
            //     'no_tlp' => $request->no_tlp,
            //     'asal_intansi' => $request->asal_intansi,
            //     'nama_kegiatan' => $request->nama_kegiatan,
            //     'pic_kegiatan' => $request->pic_kegiatan,
            //     'pic_pmli' => $request->pic_pmli,
            //     'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            //     'tempat_platfrom' => $request->tempat_platfrom,
            //     'email' => $request->email,
            //     'option1' => $request->option1,
            //     'kebutuhan' => $request->kebutuhan,
            //     'qty_kebutuhan' => $request->qty
            // ]);

            $student->nama_pemohon = $request->nama_pemohon;
            $student->no_tlp = $request->no_tlp;
            $student->asal_intansi = $request->asal_intansi;
            $student->nama_kegiatan = $request->nama_kegiatan;
            $student->pic_kegiatan = $request->pic_kegiatan;
            $student->pic_pmli = $request->pic_pmli;
            $student->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
            $student->tempat_platfrom = $request->tempat_platfrom;
            $student->email = $request->email;
            $student->option1 = $request->option1;
            $result = $student->save();
            if($result) {
                // dd($student->id);
                $kebutuhan = $request->kebutuhan;
                $qty = $request->qty_kebutuhan;
    
               for($i = 0; $i < count($kebutuhan); $i++) {
                Kebutuhan::create([
                    'id_students'=>$student->id,
                    'nama_kebutuhan'=>$kebutuhan[$i],
                    'qty'=>$qty[$i]
                ]);
               }
            }

            return redirect()->route('students.index')->with('succes', 'berhasil');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // $kebutuhan = Kebutuhan::all();
        // dd($student->kebutuhan);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $students = student::all();
        // $drugs = Drug::all();
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama_pemohon' => 'required',
            'no_tlp' => 'required',
            'asal_intansi' => 'required',
            'nama_kegiatan' => 'required',
            'pic_kegiatan' => 'required',
            'pic_pmli' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'tempat_platfrom' => 'required',
            'email' => 'required',
            'option1' => 'required',
            'record' => 'required',
            // 'kebutuhan' => 'required'

        ]);
        $student->update($request->all());

        return redirect()->route('students.index')
                        ->with('success','berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
                    ->with('success','berhasil hapus !');
    }
}

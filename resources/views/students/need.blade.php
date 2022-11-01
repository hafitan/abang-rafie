@extends('students.layout')
     
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Kebutuhan tambahan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> <i class="bi bi-bookmark-plus"></i></a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Email</th>
                <th scope="col">NO.Telp</th>
                <th scope="col">Asal Intansi</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">PIC Kegiatan</th>
                <th scope="col">PIC PMLI</th> 
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Tempat/Platfrom</th>
                <th scope="col">Anggaran</th>
                <th scope="col">Action</th>
    
              </tr>
            </thead>
            
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nama_pemohon }}</td>
            <td>{{ $student->nama_pemohon }}</td>
            <td>{{ $student->no_tlp }}</td>
            <td>{{ $student->asal_intansi }}</td>
            <td>{{ $student->nama_kegiatan }}</td>
            <td>{{ $student->pic_kegiatan}}</td>
            <td>{{ $student->pic_pmli}}</td>
            <td>{{ $student->tanggal_pelaksanaan}}</td>
            <td>{{ $student->tempat_platfrom}}</td>
            <td>{{ $student->option1}}</td>
                    <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
            
           
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="bi bi-pen"></i></a>
                </td>
                <td>
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger"onclick="return confirm('Yakin mau di hapus {{ $student->nama_pemohon }}?')"><i class="bi bi-trash3"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    
    
    {!! $students->links() !!}
        
@endsection
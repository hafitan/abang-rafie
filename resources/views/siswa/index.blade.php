@extends('siswa.layout')
     
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kebutuhan tambahan</h2>
            </div>
             {{-- <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.index') }}"> <i class="bi bi-bookmark-plus">Create</i></a>
            </div>
        </div>
    </div>  --}}
    
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
                <th scope="col">Nama pemohon</th>
                <th scope="col">Email</th>
                <th scope="col">NO.Telp</th>
                <th scope="col">Aksi</th>
            
    
              </tr>
            </thead>

            <form action="" method="POST">
                

       @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nama_pemohon }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->no_tlp }}</td>

            <td>
                <a class="btn btn-info" href="{{ route('students.show',$student->id) }}" style="transform: rotate()" ><i class="bi bi-eye"></i></a>
                <a class="btn btn-primary" href="{{ route('transaction.index',$student->id) }}" style="transform: rotate()" ><i class="bi bi-pen"></i></a>
                
                @csrf
                <div class="col-4">
                    <div class="from-group">
                        <strong></strong>
                        <select class="from-select" name="studenst" id="studenst" value="{{old('nama_status')}}" required>
                        <option disabled selected option>status</option>
                    @foreach($students as $student)
                @if($student->aktif==1)
                    <option value="{{$student->id}}">{{$student->$nama_status}}</option>
                @endif
            @endforeach
        </select>
                    </div>
                </div>
            </td>
                    
        @endforeach
    </table>

    
    
    {!! $siswa->links() !!}
        
@endsection
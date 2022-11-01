@extends('siswa.layout')
     
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Transaction
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
    <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @foreach($student as $key => $datas)
        <table class="table table-bordered" id="dynamicAddRemove">  
            <tr>
                <th>Nama kebutuhan</th>
                <th>QTY</th>
                <th>Harga</th>
            </tr>
            <tr>        
            <td><input type="text"  name="kebutuhan" value="{{ $datas->kebutuhan }}" class="form-control" /></td>  
            <td><input type="text"  name="qty"  value="{{ $datas->qty_kebutuhan }}" class="form-control" /></td>
            <td><input type="text"  name="harga" placeholder="Harga" class="form-control" /></td>  
            </tr>  
        </table> 
        @endforeach
        <button type="submit" class="btn btn-primary" id="" style=""><i class="bi bi-send-fill"></i> kirim</button>     
    </form>

@endsection
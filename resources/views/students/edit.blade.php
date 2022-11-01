
@extends('students.layout')
  
@section('content')

{{-- <html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
{{-- <script type="text/javascript">
    <!--
    //initial checkCount of zero
    var checkCount=0
    //maximum number of allowed checked boxes
    var maxChecks=1
    function setChecks(obj){
    //increment/decrement checkCount
    if(obj.checked){
    checkCount=checkCount+1
    }else{
    checkCount=checkCount-1
    }
    //if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
    if (checkCount>maxChecks){
    obj.checked=false
    checkCount=checkCount-1
    alert('Anda Hanya Bisa Memilih '+maxChecks+' opsi')
    }
    }
    //--> --}}
    </script>
{{-- <style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style> --}}
{{-- <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="kebutuhan" id="kebutuhan"></td>' +
            '<td><input type="number" class="form-control" name="kebutuhan" id="kebutuhan"></td>' +
            // '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="kebutuhan' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script> --}}
</head>
<body>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> <i class="bi bi-backspace"></i></a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pemohon:</strong>
                <input type="text" name="nama_pemohon" class="form-control" placeholder="nama_pemohon" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO.Telp:</strong>
                <input type="number" min=-2 name="no_tlp" class="form-control" placeholder="no_tlp" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Intansi:</strong>
                <input type="text" name="asal_intansi" class="form-control" placeholder="asal_intansi" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kegiatan:</strong>
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="nama_kegiatan" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PIC Kegiatan:</strong>
                <input type="text" name="pic_kegiatan" class="form-control" placeholder="pic_kegiatan" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PIC PMLI:</strong>
                <input type="text" name="pic_pmli" class="form-control" placeholder="pic_pmli" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pelaksanaan:</strong>
                <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="tanggal_pelaksanaan" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat/Platfrom:</strong>
                <input type="text" name="tempat_platfrom" class="form-control" placeholder="tempat_platfrom" >
            </div>
        </div>
        
        
        <div class="form-check">
            <h6>Anggaran</h6>
            <input class="form-check-input" type="radio" id="check1" name="option1" value="Anggaran Pribadi" onclick="setChecks(this)">
            <label class="form-check-label">Anggaran Pribadi</label>
            
          </div><div class="form-check">
            <input class="form-check-input" type="radio" id="check2" name="option1" value="Anggaran Intansi" onclick="setChecks(this)">
            <label class="form-check-label">Anggaran Intansi</label>
            <div class="col-xs-12 col-sm-12 col-md-12">

            {{-- <div class="form-group row">
                <input class="form-check-input" type="radio" id="check3" name="option3" value="Anggaran Intansi" onclick="setChecks(this)"  >
                <label class="form-check-label col-sm-2 col-form-control">Lainya :</label>
                <div class="col-sm-10">
                    <input class="" type="text" name="option1" id="check1" class="" placeholder="Lainya" >
                                </div> --}}
              </div>
            </div>
        </div>   <br>
       
        </div>
    </div>
    {{-- <!DOCTYPE html>
<div class="container-lg">
    <div class="table-responsive">
        <div class="">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">List kebutuhan</div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Jenis Kebutuhan</th>
                        <th>Qty</th>
                        <th>Action</th>

                    </tr>
                </thead>
                    <tr>
                      
                        <td>
                            <a class="add" title=" " data-toggle=""><i class="material-icons" name="kebutuhan">&#xE03B;</i></a>
                            <a class="edit" title="" data-toggle=""><i class="material-icons" name="kebutuhan">&#xE254;</i></a>
                            <a class="delete" title="" data-toggle=""><i class="material-icons" >&#xE872;</i></a>
                        </td>
                    </tr>
                      
                </tbody>
            </table>
        </div>
    </div>
</div>      --}}
<br>
<button type="submit" class="btn btn-primary" style="margin-left:1000px"><i class="bi bi-send-fill"></i> kirim</button>
</body>
</html>
     <br><br><br><b><br></b>
</form>
@endsection
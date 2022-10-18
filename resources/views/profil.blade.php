@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div cla    ss="page-title">
            <h1>Dashboard
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                <li class="pull-right">
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-purple">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Profil</h4>
                        </div>         
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                        </div>               
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">                        
                            <form class="form-horizontal" >
                                @foreach ($user as $value)
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$value->name}}" readonly>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nik" name="nik" value="{{$value->nik}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="{{$value->email}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jk" name="jk" value="{{$value->jenis_kelamin}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Tgl Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tgl" name="tgl" value="{{$value->tanggal_lahir}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hp" name="hp" value="{{$value->handphone}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$value->alamat}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$value->nama_jabatan}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bagian" name="bagian" value="{{$value->nama_bagian}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textInput" class="col-sm-2 control-label">Root Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="root" name="root" value="{{$value->root_jab}}" readonly>
                                    </div>
                                </div>                                
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>    
</div>

@endsection

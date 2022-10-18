@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Detail User
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  Admin
                </li>
                <li class="active">Manage User</li>
                <li class="active">Detail</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->

<!-- begin DASHBOARD CIRCLE TILES -->
<div class="row">
    
    
        <div class="col-lg-12">

            <div class="row">

                <!-- Basic Form Example -->
           		<div class="col-lg-12">
                    <div class="portlet portlet-green">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Detail User</h4>
                            </div>
                            <div class="portlet-widgets">
                                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="formControls" class="panel-collapse collapse in">
                            <div class="portlet-body">
                            @foreach ($user as $user)                             
                                <form id="frm" action="{{URL('/admin/show-user/')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">NIK</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$user->nik}}</label>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$user->username}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Nama User</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->name}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->email}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->jenis_kelamin}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tanggal Lahir</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->tanggal_lahir}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->handphone}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->alamat}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Nama Bagian</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$user->nama_bagian}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Nama Jabatan</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->nama_jabatan}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Root Jabatan</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$user->root_jab}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Last Login</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$user->last_login}}</label></input>
                                        </div>
                                    </div>                                                                                                        
                                    <fieldset>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.portlet -->
                </div>
                

            </div>
            <!-- /.row (nested) -->

        </div>


    
</div>

@endsection

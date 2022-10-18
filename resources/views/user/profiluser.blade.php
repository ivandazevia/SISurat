@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Profil
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Profil</li>
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
                    <div class="portlet portlet-orange">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Profil User</h4>
                            </div>
                            <div class="portlet-widgets">
                                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="formControls" class="panel-collapse collapse in">
                            <div class="portlet-body">                            
                                <form id="frm" action="#" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">NIK</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">NIK</label>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Username</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Nama User</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Nama User</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">No Handphone</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Alamat</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Email</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Jenis Kelamin</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tgl Lahir</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Tgl Lahir</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Bagian</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Jabatan</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Parent Jabatan</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Parent Jabatan</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <a href="#" style="margin-bottom:10px;" type="submit" class="btn btn-default"><i class="fa fa-pencil mr-3"></i>  Ubah</a>                                              
                                        </div>
                                    </div>                                                                      
                                    <fieldset>
                                </form>
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

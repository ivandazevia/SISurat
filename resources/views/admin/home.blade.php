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
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->

<!-- begin DASHBOARD CIRCLE TILES -->
<div class="row">
    
    
        <div class="col-lg-8">

            <div class="row">

                <!-- Basic Form Example -->
           		<div class="col-lg-12">
                    <div class="portlet portlet-red">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Data User</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="formControls" class="panel-collapse collapse in">
                            <div class="portlet-body">
                            
                                <form class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Nama User</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama" name="nama" value="{{$datas['nama']}}" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Nama Bagian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nrp" name="nrp" value="{{$datas['bagian']}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInputDisabled" class="col-sm-3 control-label">Nama Jabatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="password" name="password" value="{{$datas['jabatan']}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInputDisabled" class="col-sm-3 control-label">Terakhir Login</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="password" name="password" value="{{$datas['last_login']}}" readonly>
                                        </div>
                                    </div>
                                    <br>
                                    

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

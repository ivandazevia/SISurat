@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Dashboard
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Dashboard</li>
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
                    <div class="portlet portlet-blue">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Data User</h4>
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
                                        <label for="textInput" class="col-sm-3 control-label">Nama User</label>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="font-weight: normal;">{{$datas['nama']}}</label>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Nama Bagian</label>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="font-weight: normal;">{{$datas['bagian']}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Nama Jabatan</label>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="font-weight: normal;">{{$datas['jabatan']}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Last Login</label>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="font-weight: normal;">{{$datas['last_login']}}</label></input>
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

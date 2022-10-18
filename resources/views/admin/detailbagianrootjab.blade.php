@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Detail
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Jabatan</li>
                <li class="active">Detail</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->

<!-- begin DASHBOARD CIRCLE TILES -->
@if (\Request::is('admin/show-jabatan/*'))
@foreach ($jabatan as $jab)
<div class="row">   
    <div class="col-lg-12">
        <div class="row">
       		<div class="col-lg-12">
                <div class="portlet portlet-blue">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Detail Jabatan</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">                            
                            <form id="frm" action="{{URL('/admin/show-jabatan/')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Nama Jabatan</label>
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$jab->nama_jabatan}}</label>                                        
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$jab->nama_bagian}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Level</label>
                                            <div class="form-horizontal">
                                                <div class="col-sm-10">
                                                    <label class="control-label" style="font-weight: normal;">{{$jab->level}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Parent Jabatan</label>
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$jab->parent_jabatan}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Root Jabatan</label>
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$jab->root_jab}}</label></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-2 control-label">Keterangan</label>
                                            <div class="form-horizontal">
                                                <div class="col-sm-10">
                                                    <label class="control-label" style="font-weight: normal;">{{$jab->keterangan}}</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </fieldset>                                                                   
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
@endforeach
@endif

@if (\Request::is('admin/show-rootjab/*'))
@foreach ($rootjab as $root)
<div class="row">   
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-red">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Detail Root Jabatan</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">                            
                            <form id="frm" action="{{URL('/admin/show-rootjab/')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-3 control-label">Root Jabatan</label>
                                            <div class="col-sm-9">
                                                <label class="control-label" style="font-weight: normal;">{{$root->root_jab}}</label>                                        
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>                                                                   
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
@endforeach
@endif

@if (\Request::is('admin/show-bagian/*'))
@foreach ($bagian as $bag)
<div class="row">   
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-purple">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Detail Bagian</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">                            
                            <form id="frm" action="{{URL('/admin/show-bagian/')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-3 control-label">Kode Bagian</label>
                                            <div class="col-sm-9">
                                                <label class="control-label" style="font-weight: normal;">{{$bag->kode_bagian}}</label>                                       
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-3 control-label">Nama Bagian</label>
                                            <div class="col-sm-9">
                                                <label class="control-label" style="font-weight: normal;">{{$bag->nama_bagian}}</label>                                       
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textInput" class="col-sm-3 control-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <label class="control-label" style="font-weight: normal;">{{$bag->keterangan}}</label>                                       
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>                                                                   
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
@endforeach
@endif
@endsection

@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Detail Disposisi
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Disposisi</li>
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
                    <div class="portlet portlet-orange">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Detail Disposisi</h4>
                            </div>
                            <div class="portlet-widgets">
                                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="formControls" class="panel-collapse collapse in">
                            <div class="portlet-body">
                            @foreach ($disposisi as $dis)                            
                                <form id="frm" action="{{URL('/user/show-disposisi')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">ID Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->id_surats}}</label>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">No Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->no_surat}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Dari</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->dari}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Status Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->disposisi_status}}</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Status Disposisi</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">{{$dis->status_surat_disposisi}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tipe Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->tipe_surat_disposisi}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tgl Disposisi</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->tanggal_disposisi}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Waktu Disposisi</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">{{$dis->waktu_disposisi}}</label>
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

@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Detail Surat Keluar
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Surat Keluar</li>
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
                    <div class="portlet portlet-red">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h4>Detail Surat</h4>
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
                                        <label for="textInput" class="col-sm-2 control-label">No Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">No Surat</label>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tgl Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Tgl Surat</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Jenis Surat</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">Jenis Surat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Dari</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Dari</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Entry</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Entry</label></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Untuk</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">Untuk</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Perihal</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Perihal</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Tembusan</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Tembusan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">No Berkas</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">No Berkas</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">Keterangan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Status Surat</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">Status Surat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Status Disposisi</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <label class="control-label" style="font-weight: normal;">Status Disposisi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">File Surat</label>
                                        <div class="col-sm-10">
                                            <label class="control-label" style="font-weight: normal;">File Surat <a download href="#">(<strong>Unduh</strong>)</a></label>
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

@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Add Disposisi
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Disposisi</li>
                <li class="active">Add</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
        
<div class="row">

<!-- begin LEFT COLUMN -->
<div class="col-lg-12">

<div class="row">

<!-- Basic Form Example -->
<div class="col-lg-12">


    <div class="portlet portlet-purple">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Add Disposisi</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">
                @foreach ($surat as $value)
                <form id="frm" action="{{URL('user/create-disposisi')}}" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">ID Surat</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="idsurat" name="idsurat" value="{{$value->id_surat}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Surat</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nosurat" name="nosurat" value="{{$value->no_surat}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Dari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="dari" name="dari" value="{{$value->dari}}" readonly>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Untuk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="dari" name="untuk" value="{{$value->tujuan_surat_keluar}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tipe Surat</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="dari" name="tipesurat" value="{{$value->tipe_surat}}" readonly>
                                
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tgl Disposisi</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control disabled" id="tgl" name="tgl" value="{{$time}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Waktu Disposisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="waktu" name="waktu" value="{{$waktu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Catatan Disposisi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="keterangan" name="catatan" value="Keterangan" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" id="btnUp" class="btn btn-default">Tambah</button> <div id="additional"></div>
                        </div>
                    </div>
                    <fieldset>
                </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /.portlet -->
</div>

            <!-- Form Controls -->

            <!-- /.col-lg-12 (nested) -->
            <!-- End Form Controls -->

            <!-- Input Sizing -->

            <!-- /.col-lg-12 (nested) -->
            <!-- End Form Controls -->

        </div>
        <!-- /.row (nested) -->

    </div>
    <!-- /.col-lg-6 -->
    <!-- end RIGHT COLUMN -->

</div>
<!-- /.row -->
<!-- end MAIN PAGE ROW -->

</div>
<!-- /.page-content -->

@endsection
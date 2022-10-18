@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Tambah Surat Internal
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Surat Internal</li>
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
                <h4>Tambah Surat Internal</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">
                <form id="frm" action="{{URL('user/create-surat-internal')}}" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">

                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Surat</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nosurat" name="nosurat" value="{{$create_nosurat}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tgl Surat</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control disabled" id="tglsurat" name="tglsurat" required>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jenis Surat</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenissurat" id="jenissurat">
                                    <option selected disabled hidden>Jenis Surat</option>
                                    <option value="private">Private</option>
                                    <option value="penting">Penting</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Dari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dari" name="dari" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Entry</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="entry" name="entry" value="{{$user->name}}" readonly></input>
                            <input type="hidden" class="form-control" id="entry" name="id_entry" value="{{$user->id_user}}" readonly></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Untuk</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="untuk" name="untuk" ></input>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Perihal</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="perihal" name="perihal" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tembusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tembusan" name="tembusan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Berkas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="noberkas" name="noberkas" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">File Surat</label>
                        <div class="col-sm-10">
                            <input type="file" id="filesurat" name="filesurat" required>
                            <p class="help-block">Format yang diperbolehkan : PDF, DOC</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" required></textarea>
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
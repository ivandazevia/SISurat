@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Edit Surat Keluar
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Surat Keluar</li>
                <li class="active">Edit</li>
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


    <div class="portlet portlet-red">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Edit Surat Keluar</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">
                <!-- @foreach ($user as $value) -->
                <form id="frm" action="#" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Surat</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nosurat" name="nosurat" value="No Surat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tgl Surat</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control disabled" id="tglsurat" name="tglsurat" value="23/08/1998" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jenis Surat</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenissurat" id="jenissurat">
                                    <option selected disabled hidden value="#">Jenis Surat</option>
                                    <option value="penting">Penting</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Dari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dari" name="dari" value="dari siapa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Entry</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="entry" name="entry" value="entry" readonly></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Untuk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="untuk" name="untuk" value="untuk siapa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Perihal</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="perihal" name="perihal" value="Perihal apa" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tembusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tembusan" name="tembusan" value="Tembusan apa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Berkas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="noberkas" name="noberkas" value="No Berkas apa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="Keterangan" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Status Surat</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenissurat" id="jenissurat">
                                    <option selected disabled hidden value="#">Status Surat</option>
                                    <option value="unread">Un Read</option>
                                    <option value="read">Read</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Status Disposisi</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenissurat" id="jenissurat">
                                    <option selected disabled hidden value="#">Status Disposisi</option>
                                    <option value="undisposisi">Un Disposisi</option>
                                    <option value="disposisi">Disposisi</option>
                                </select>
                            </div>
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
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" id="btnUp" class="btn btn-default">Update</button> <div id="additional"></div>
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
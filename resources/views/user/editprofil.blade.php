@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Manage User
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage User</li>
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


    <div class="portlet portlet-orange">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Manage User</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">            
                <form id="frm" action="{{URL('admin/edit-user')}}" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">
                    <input type="hidden" class="form-control disabled" id="nama" name="id" value="#" required >
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="nik" name="nik" value="#" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="#" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Nama User</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nama" name="nama" value="#" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hp" name="hp" value="#" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="alamat" name="alamat" required>#</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="#" required>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option selected disabled hidden value="#">Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="#" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="bagian" class="form-control" required name="bagian">
                                    <option selected disabled hidden value="#">Bagian</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jabatan</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="jabatan" class="form-control" required name="jabatan">
                                    <option selected disabled hidden value="#">Jabatan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Parent Jabatan</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="rootjabatan" class="form-control" required name="parentjabatan">
                                    <option selected disabled hidden value="#">Parent Jabatan</option>
                                </select>
                            </div>
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
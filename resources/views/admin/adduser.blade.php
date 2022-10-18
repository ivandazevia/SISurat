@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Add User
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  Admin
                </li>
                <li class="active">Add User</li>
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


    <div class="portlet portlet-blue">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Tambah User</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">
                <form id="frm" action="{{URL('admin/create-user')}}" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">

                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="nik" name="nik" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenis_kelamin" id="pilihandosen1">
                                    <option selected disabled hidden>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hp" name="hp" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jabatan</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="jabatan" class="form-control" required name="jabatan">
                                    <option selected disabled hidden>Jabatan</option>
                                    <?php  foreach ($jabatan as $value) : ?>
                                    <option value="{{$value->id_jabatan}}">{{$value->nama_jabatan}}</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="bagian" class="form-control" required name="bagian">
                                    <option selected disabled hidden>Bagian</option>
                                    <?php  foreach ($bagian as $value) : ?>
                                    <option value="{{$value->id_bagian}}">{{$value->nama_bagian}}</option>
                                    <?php endforeach; ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Root Jabatan</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="rootjabatan" class="form-control" required name="rootjabatan">
                                    <option selected disabled hidden>Root Jabatan</option>
                                    <?php  foreach ($rootjabatan as $value) : ?>
                                    <option value="{{$value->id_rootJab}}">{{$value->root_jab}}</option>
                                    <?php endforeach; ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Authority</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="authority" class="form-control" required name="authority">
                                    <option selected disabled hidden>Authority</option>
                                    <option>Authority</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="sekretaris">Sekretaris</option>
                                    
                                </select>
                            </div>
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
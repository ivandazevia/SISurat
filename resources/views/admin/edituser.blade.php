@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Edit User
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  Admin
                </li>
                <li class="active">Edit User</li>
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
                <h4>Edit User</h4>
            </div>
            <div class="portlet-widgets">
                <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="formControls" class="panel-collapse collapse in">
            <div class="portlet-body">
                @foreach ($user as $value)
                <form id="frm" action="{{URL('admin/edit-user')}}" method="post" enctype="multipart/form-data">
                <fieldset>
                @csrf
                <div class="form-horizontal">
                    <input type="hidden" class="form-control disabled" id="nama" name="id" value="{{$value->id_user}}" required >
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control disabled" id="nama" name="nama" value="{{$value->name}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control disabled" id="nik" name="nik" value="{{$value->nik}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="{{$value->email}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="{{$value->username}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select class="form-control" name="jenis_kelamin" id="pilihandosen1">
                                    <option value="{{$value->jenis_kelamin}}">{{$value->jenis_kelamin}}</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="{{$value->tanggal_lahir}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hp" name="hp" value="{{$value->handphone}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="alamat" name="alamat" required>{{$value->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-2 control-label">Jabatan</label>
                        <div class="form-horizontal">
                            <div class="col-sm-10">
                                <select id="jabatan" class="form-control" required name="jabatan">
                                    <option  value="{{$value->id_jabatans}}">{{$value->nama_jabatan}}</option>
                                    <?php  foreach ($jabatan as $val) : ?>
                                    <option value="{{$val->id_jabatan}}">{{$val->nama_jabatan}}</option>
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
                                    <option value="{{$value->id_bagians}}">{{$value->nama_bagian}}</option>
                                    <?php  foreach ($bagian as $val) : ?>
                                    <option value="{{$val->id_bagian}}">{{$val->nama_bagian}}</option>
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
                                    <option value="{{$value->id_rootJabs}}">{{$value->root_jab}}</option>
                                    <?php  foreach ($rootjabatan as $val) : ?>
                                    <option value="{{$val->id_rootJab}}">{{$val->root_jab}}</option>
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
                                    <option value="{{$value->authority}}">{{$value->authority}}</option>
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
@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Tambah Jabatan
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  Admin
                </li>
                <li class="active">Tambah Jabatan</li>
            </ol>
        </div>        
    </div>
</div>

@if (\Request::is('admin/edit-jabatan/*'))
@foreach ($jabatan as $jab)
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-blue">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Tambah Jabatan</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form id="frm" action="{{URL('admin/edit-jabatan')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                <div class="form-horizontal">
                                <input type="hidden" value="{{$jab->id_jabatan}}" class="form-control disabled" id="jabatan" name="id" required>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Nama Jabatan</label>
                                        <div class="col-sm-10">

                                            <input type="text" value="{{$jab->nama_jabatan}}" class="form-control disabled" id="jabatan" name="jabatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Bagian</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <select id="bagian" class="form-control" required name="bagian">
                                                    <option value="{{$jab->id_bagians}}">{{$jab->nama_bagian}}</option>                                
                                                    @foreach ($bagian as $bag)
                                                    <option value="{{$bag->id_bagian}}">{{$bag->nama_bagian}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Level</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <select id="level" class="form-control" required name="level">
                                                    <option value="{{$jab->level}}">{{$jab->level}}</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                    <option value="sekretaris">Sekretaris</option>
                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Parent Jabatan</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                            <input type="text" value="{{$jab->parent_jabatan}}" class="form-control disabled" id="parent_jabatan" name="parent_jabatan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Root Jabatan</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-10">
                                                <select id="rootjabatan" class="form-control" required name="rootjabatan">
                                                    <option value="{{$jab->id_rootJabs}}">{{$jab->root_jab}}</option>
                                                    <?php foreach ($rootjab as $root) : ?>
                                                    <option value="{{$root->id_rootJab}}">{{$root->root_jab}}</option>
                                                    <?php endforeach; ?>
                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-2 control-label">Keterangan</label>
                                        <div class="col-sm-10">

                                            <input type="text" value="{{$jab->keterangan}}" class="form-control disabled" id="keterangan" name="keterangan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" id="btnUp" class="btn btn-default">Tambah</button> <div id="additional"></div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                            </form>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@if (\Request::is('admin/edit-rootjab/*'))
@foreach ($rootjab as $root)
<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-red">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Root Jabatan</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form id="frm" action="{{URL('admin/edit-rootjab')}}" method="post" enctype="multipart/form-data">
                            <fieldset>
                            @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    <input type="hidden" value="{{$root->id_rootJab}}" class="form-control disabled" id="root_jabatan" name="id" required>
                                        <label for="textInput" class="col-sm-3 control-label">Root Jabatan</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-9">
                                            <input type="text" value="{{$root->root_jab}}" class="form-control disabled" id="root_jabatan" name="root_jabatan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" id="btnUp" class="btn btn-default">Tambah</button> <div id="additional"></div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                            </form>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif

    @if (\Request::is('admin/edit-bagian/*'))
    @foreach ($bagian as $bag)
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-purple">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Bagian</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            
                            <form id="frm" action="{{url('admin/edit-bagian')}}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control disabled" value="{{$bag->id_bagian}}" id="kodebag" name="id_bagian" required>  
                                        <label for="textInput" class="col-sm-3 control-label">Kode Bagian</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$bag->kode_bagian}}" class="form-control disabled" id="kodebag" name="kodebag" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Nama Bagian</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$bag->nama_bagian}}" class="form-control disabled" id="namabag" name="namabag" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$bag->keterangan}}" class="form-control disabled" id="ketbag" name="ketbag" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" id="btnUp" class="btn btn-default">Update</button> <div id="additional"></div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                            </form>      
                                   
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach   
    @endif
</div>

@endsection
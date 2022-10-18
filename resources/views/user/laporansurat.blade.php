@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Laporan Surat
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Laporan Surat</li>
            </ol>
        </div>        
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-orange">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Laporan Surat</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="formControls" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form id="frm" action="{{URL('user/download-laporan-surat')}}" method="post" enctype="multipart/form-data">
                            <fieldset>
                            @csrf
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Tipe Surat</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-9">
                                                <select id="tipesurat" class="form-control" required name="tipesurat">
                                                    <option selected disabled hidden>Tipe Surat</option>
                                                    <option value="internal">Internal</option>
                                                    <option value="eksternal">Eksternal</option>
                                                    <option value="keluar">Keluar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Dari</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-9">
                                            <input type="date" class="form-control disabled" id="dari" name="dari" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textInput" class="col-sm-3 control-label">Sampai</label>
                                        <div class="form-horizontal">
                                            <div class="col-sm-9">
                                            <input type="date" class="form-control disabled" id="sampai" name="sampai" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" id="btnUp" class="btn btn-default">Proses</button> <div id="additional"></div>
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

@endsection
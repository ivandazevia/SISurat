@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Edit Password
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage User</li>
                <li class="active">Edit Password</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
        
<div class="row">

<!-- begin LEFT COLUMN -->
<div class="col-lg-8">

<div class="row">

<!-- Basic Form Example -->
<div class="col-lg-12">


    <div class="portlet portlet-orange">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Edit Password</h4>
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
                        <label for="textInput" class="col-sm-3 control-label">Password Lama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control disabled" id="pass_lama" name="pass_lama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-3 control-label">Password Baru</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control disabled" id="pass_baru" name="pass_baru" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textInput" class="col-sm-3 control-label">Re-Password Baru</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control disabled" id="re_pass_baru" name="re_pass_baru" required>
                        </div>
                    </div>                                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" id="btnUp" class="btn btn-default">Ubah</button> <div id="additional"></div>
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
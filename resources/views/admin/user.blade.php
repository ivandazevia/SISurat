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
                <li><i class="fa fa-dashboard"></i>  Admin
                </li>
                <li class="active">Manage User</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">

    <div class="col-lg-12">

        <div class="row">
            <div class="col-lg-12">
        <div class="row">
            
            <div class="col-lg-12">
                <div>
                    <a href="{{URL('admin/create-user')}}" style="margin-bottom:10px;" type="submit" class="btn btn-default">Tambah User</a>
                    
                </div>

                <div class="portlet portlet-green">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-exchange fa-fw"></i> Daftar Data User</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="table-responsive dashboard-demo-table">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Usernama</th>
                                            <th>Nama User</th>
                                            <th>Nama Bagian</th>
                                            <th>Last Login</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($user as $row) { ?>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->nik}}</td>
                                            <td>{{$row->username}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->nama_jabatan}}</td>
                                            <td>{{$row->last_login}}</td>
                                            <td>
                                                <a href="{{URL('admin/show-user/'.$row->id_user)}}"><i class="fa fa-eye mr-3"></i></a>
                                                <a href="{{URL('admin/edit-user/'.$row->id_user)}}"><i class="fa fa-pencil mr-3"></i></a>
                                                <a href="{{URL('admin/delete-user/'.$row->id_user)}}"><i class="fa fa-trash-o mr-3"></i></a>
                                            </td>
                                        </tr>
                                        <?php  }  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
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
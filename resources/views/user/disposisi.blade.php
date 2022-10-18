@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Manage Disposisi
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Disposisi</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">

    <div class="col-lg-12">
        <div>
            <a href="#" style="margin-bottom:10px;" type="submit" class="btn btn-default">Cetak ke Ms. Excel</a>  
        </div>
        <div class="row">
            <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-orange">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-exchange fa-fw"></i>Daftar Disposisi</h4>
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
                                            <th>ID Surat</th>
                                            <th>No Surat</th>
                                            <th>Dari</th>
                                            <th>Status Surat</th>
                                            <th>Status Disposisi</th>
                                            <th>Tipe Surat</th>
                                            <th>Tanggal Disposisi</th>
                                            <th>Waktu Disposisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($disposisi as $row) { ?>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->id_surats}}</td>
                                            <td>{{$row->no_surat}}</td>
                                            <td>{{$row->dari}}</td>
                                            <td>{{$row->disposisi_status}}</td>
                                            <td>{{$row->status_surat_disposisi}}</td>
                                            <td>{{$row->tipe_surat_disposisi}}</td>
                                            <td>{{$row->tanggal_disposisi}}</td>
                                            <td>{{$row->waktu_disposisi}}</td>
                                            <td>
                                                <a href="{{URL('user/show-disposisi/'.$row->id_surats)}}"><i class="fa fa-eye mr-3"></i></a>                                               
                                                <a href="{{URL('user/delete-disposisi/'.$row->id_disposisi)}}"><i class="fa fa-trash-o mr-3"></i></a>
                                                @if ($row->disposisi_status != "diterima")
                                                <a class="text-center" href="{{URL('user/verif-disposisi/'.$row->id_surats)}}"><i class="fa fa-check mr-3"></i></a>
                                                @endif
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
@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Manage Surat Internal
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Manage Surat Internal</li>
            </ol>
        </div>
        
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-8">
                @if( (session()->get('userSession')['authority'] == "admin") or (session()->get('userSession')['authority'] == "sekretaris") )
                <div class="col-lg-4">
                    <a href="{{URL('user/create-surat-internal')}}" style="margin-bottom:10px;" type="submit" class="btn btn-default">Tambah Surat Internal</a>    
                </div>
                <div class="col-lg-2">
                    <a href="{{URL('user/create-laporan-surat-internal')}}" style="margin-bottom:10px;" type="submit" class="btn btn-default">Cetak ke Ms. Excel</a>    
                </div>
                @endif
                <div class="col-lg-12">
                    <form id="frm" action="{{URL('user/get-surat-internal')}}" method="post" enctype="multipart/form-data">
                        <fieldset>
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="search" name="cari" class="form-control" placeholder="Search...">
                                </div>
                                <div class="col-lg-4">
                                    <input type="date" name="mulai" class="form-control" placeholder="Search by Date From...">
                                    </div>
                                <div class="col-lg-4">
                                    <input type="date" name="sampai" class="form-control" placeholder="Search by Date To...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btnUp" class="btn btn-default">Search</button> <div id="additional"></div>
                        </div>
                        <fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-purple">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-exchange fa-fw"></i>Daftar Surat Internal</h4>
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
                                            <th>No Surat</th>
                                            <th>Dari</th>
                                            <th>Entry</th>
                                            <th>Untuk</th>
                                            <th>Perihal</th>
                                            <th>Keterangan</th>
                                            <th>Status Surat</th>
                                            <th>Status Disposisi</th>
                                            <th>Action</th>
                                            
                                            <th>Disposisi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($surat as $row) { ?>
                                        @if($row->tipe_surat != "eksternal")
                                        <tr>
                                        <td>{{$no++}}</td>
                                            <td>{{$row->no_surat}}</td>
                                            <td>{{$row->dari}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->tujuan_surat_keluar}}</td>
                                            <td>{{$row->perihal}}</td>
                                            <td>{{$row->keterangan}}</td>
                                            <td>{{$row->status_surat}}</td>
                                            <td>{{$row->status_disposisi}}</td>
                                            <td>
                                                <a href="{{URL('user/show-surat-internal/'.$row->id_surat)}}"><i class="fa fa-eye mr-3"></i></a>
                                                @if( (session()->get('userSession')['authority'] == "admin") or (session()->get('userSession')['authority'] == "sekretaris"))
                                                <a href="{{URL('user/edit-surat-internal/'.$row->id_surat)}}"><i class="fa fa-pencil mr-3"></i></a>
                                                <a href="{{URL('user/delete-surat-internal/'.$row->id_surat)}}"><i class="fa fa-trash-o mr-3"></i></a>
                                                @endif
                                                <a href="{{URL('user/download-surat-internal/'.$row->id_surat)}}"><i class="fa fa-download mr-3"></i></a>
                                            </td>
                                            
                                            <td>
                                            <a class="text-center" href="{{URL('user/create-disposisi/'.$row->id_surat)}}"><i class="fa fa-pencil mr-3"></i></a>
                                            </td>
                                            
                                        </tr>

                                        @endif
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
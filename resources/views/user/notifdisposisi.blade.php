@extends('layouts.template')

@section('content')

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Notifikasi Disposisi
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  User
                </li>
                <li class="active">Notifikasi Disposisi</li>
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
                <div class="portlet portlet-green">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-exchange fa-fw"></i>Notifikasi Disposisi</h4>
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
                                            <th>ID Disposisi</th>
                                            <th>No Surat</th>
                                            <th>Dari</th>
                                            <th>Untuk</th>
                                            <th>Keterangan</th>
                                            <th>Disposisi Status</th>
                                            <th>Status Surat Disposisi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($jabatan as $row) { ?>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>intern test 1</td>
                                            <td>test intern PT A</td>
                                            <td>si A</td>
                                            <td>test intern perihal 5</td>
                                            <td>SEMANGAT</td>
                                            <td>MAS</td>
                                            <td>SATRIYO</td>
                                            <td>
                                                <a href="#" style="margin-bottom:10px;" type="submit" class="btn btn-default"><i class="fa fa-eye mr-3"></i> Detail Disposisi</a>
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
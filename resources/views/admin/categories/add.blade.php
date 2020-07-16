@extends('templates.admin.master')
{{--title--}}
@section('title-admin') Thêm Danh Mục @endsection
{{--src--}}
@section('src-header-admin')
    <!-- DataTables CSS -->
    <link href="{{$urlAdmin}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{$urlAdmin}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endsection
{{--content--}}
@section('content-admin')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Mục</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm Danh Mục
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="{{route('admin.categories.postAdd')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input class="form-control" name="namecat" placeholder="Nhập tên danh mục">
                                            <span class="alert-danger">{{$errors->first('namecat')}}</span>
                                        </div>
                                        @if(isset($categoreies))
                                        <div class="form-group">
                                            <label>Danh mục cha</label>
                                            <select class="form-control" name="idsub">
                                                <option value="0">--Không--</option>
                                                @foreach($categoreies as $value)
                                                    <option value="{!! $value->id !!}">{!! $value->name !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                        <input type="submit" class="btn btn-primary" value="Thêm">
                                        <a href="{{route('admin.categories.get')}}" class="btn btn-success">Quay lại</a>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection


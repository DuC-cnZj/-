@extends('layouts.index')

@section('main')
      <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> 快递员列表</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="icon_document_alt"></i>{{ $company_name }}</li>
                  <li><i class="fa fa-files-o"></i>{{ $station_name }}</li>
                  @can('create', App\Courier::class)
                      <a href="{{ route('station.courier.create', $station_id) }}" class="pull-right"><i class="fa fa-plus"></i>新增快递员</a>
                  @endcan
                </ol>
              </div>
            </div>
            @include('admin.courier._panel')
@endsection
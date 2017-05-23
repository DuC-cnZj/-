@extends('layouts.index')

@section('main')
	  <div class="row">
		<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table"></i> 分站列表</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Index</a></li>
                <li><i class="fa fa-table"></i>分站</li>
			<li><i class="fa fa-table"></i>{{ $company->name }}</li>
          @can('create', App\Substation::class)
          		<a href="{{ route('company.station.create', $id) }}" class="pull-right"><i class="fa fa-plus"></i>添加分站</a>
          @endcan
		</ol>
	</div>

	</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr class="warning">
                                 <th><i class="icon_profile"></i> 分站名称</th>
                                 <th><i class="icon_pin_alt"></i> 所在地址</th>
                                 <th><i class="icon_mail_alt"></i> 分站邮箱</th>
                                 <th><i class="icon_mobile"></i> 电话</th>
                                 <th><i class="icon_calendar"></i> 建立日期</th>
                                 <th><i class="icon_cogs"></i> 操作</th>
                              </tr>
                              @foreach($substation as $sub)
                              <tr>
                                 <td>{{ $sub->name }}</td>
                                 <td>{{ $sub->addr }}</td>
                                 <td>{{ $sub->email }}</td>
                                 <td>{{ $sub->phone }}</td>
                                 <td>{{ $sub->created_at->toDateString() }}</td>
                                 <td>
                                 @can('delete', $sub)
                                  <div class="btn-group">
                                      <a class="btn btn-success" href="{{ route('station.courier.index', $sub->id) }}"><i class="fa fa-users"></i>快递员管理</a>
                                      <a class="btn btn-primary" href="{{ route('company.station.edit', [$id, $sub]) }}"><i class="fa fa-cog"></i></a>
                                      @include('admin.station._deleteSubStation', ['company_id' => $sub->SubCompany->id, 'sub_id' => $sub->id])
                                  </div>                                          
                                 @else
                                     <a href="#" class="btn btn-danger">没有权限</a>
                                 @endcan
                                  </td>
                              </tr>
                @endforeach                   
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
@endsection
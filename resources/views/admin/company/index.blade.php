@extends('layouts.index')

@section('main')
	  <div class="row">
		<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-table"></i> 分公司列表</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Index</a></li>
			<li><i class="fa fa-table"></i>旗下分公司</li>
              @can('create', App\SubCompany::class)
                      <a href="{{ route('company.create') }}" class="pull-right"><i class="fa fa-plus"></i>注册分公司</a>
              @endcan
		</ol>
	</div>

	</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr class="success">
                                 <th><i class="icon_profile"></i> 公司名称</th>
                                 <th><i class="icon_mail_alt"></i> 公司邮箱</th>
                                 <th><i class="icon_pin_alt"></i> 所在地址</th>
                                 <th><i class="icon_mobile"></i> 电话</th>
                                 <th><i class="icon_calendar"></i> 成立日期</th>
                                 <th><i class="icon_cogs"></i> 操作</th>
                              </tr>
                              @foreach($subCompanies as $sub)
                              <tr>
                                 <td>{{ $sub->name }}</td>
                                 <td>{{ $sub->email }}</td>
                                 <td>{{ $sub->addr }}</td>
                                 <td>{{ $sub->phone }}</td>
                                 <td>{{ $sub->created_at->toDateString() }}</td>
                                 <td>
                                  <div class="btn-group">
                                @can('delete', $sub)
                                      <a class="btn btn-primary" href="{{ route('company.edit', $sub) }}"><i class="fa fa-cog"></i></a>
                                        @include('admin.company._deleteSubCompany', $sub)
                                  @else
                                        <a href="#" class="btn btn-danger">没有权限</a>
                                @endcan
                                  </div>
                                  </td>
                              </tr>
                @endforeach                   
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
@endsection
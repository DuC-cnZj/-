@extends('layouts.index')

@section('main')
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              分公司查询
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>快递编号</th>
                                  <th>目的地分站</th>
                                  <th>目的地分公司</th>
                                  <th>收货人</th>
                                  <th>是否送达</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($things as $thing)
                                <tr>
                                  <td>{{ $thing->number }}</td>
                                  <td>{{ $thing->destination }}</td>
                                  <td>{{ $thing->sub_company }}</td>
                                  <td>{{ $thing->person }}</td>
                                  <td>{{ $thing->status ? '是': '否' }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
              <div class="row">
		<div class="alert alert-info col-md-4 col-md-offset-1">
		    <a href="#" class="close" data-dismiss="alert">
		        &times;
		    </a>
		    <strong>揽件统计:</strong>该公司总共收揽 <strong>{{ count($things) }}</strong> 件
		</div>
		<div class="alert alert-success col-md-4 col-md-offset-1">
		    <a href="#" class="close" data-dismiss="alert">
		        &times;
		    </a>
		    <strong>送件统计:</strong>该公司总共送达 <strong>{{ $sendthings }}</strong> 件
		</div>

              </div>	
              <div class="row">
              	<div class="alert alert-danger col-md-4 col-md-offset-1">
		    <a href="#" class="close" data-dismiss="alert">
		        &times;
		    </a>
		    <strong>发件统计:</strong>该公司总共发出快件 <strong>{{ $count }}</strong> 件
		</div>
	</div>
@endsection
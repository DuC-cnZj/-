@extends('layouts.index')

@section('main')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> 发货管理</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="fa fa-files-o"></i>发货管理</li>
                </ol>
              </div>
            </div>

                   <div class="row" >
                  <div class="col-lg-12">
                      <section class="panel panel-warning">
                          <header class="panel-heading">
                              发货管理
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('updateThing') }}">
                                       {{ csrf_field() }}
                                       {{ method_field('patch') }}
                                       <div class="form-group ">
                                          <label for="cnumber" class="control-label col-lg-2">快件编号 <span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <input class="form-control" id="cnumber" name="number"  type="text" required />
                                          </div>
                                      </div>  
                                      <div class="form-group ">
                                          <label for="sel_menu2" class="control-label col-lg-2">此刻所在地 <span class="required">*</span></label>
                                                 <div class="col-lg-6">            
	                                                 <select  id="sel_menu2"  name="station" style="width: 50%">
	                                                 @foreach($companies as $company)
	                                                       <optgroup label="{{$company->name}}">
	                                                          @foreach($company->stations as $station)
	                                                           <option value="{{$station->name}}">{{$station->name}}</option>
	                                                           @endforeach
	                                                       </optgroup>
	                                                  @endforeach
	                                                 </select>                 　　
	                                      </div>
                                      </div>
                                    <div class="form-group ">
                                          <label for="sel_menu2" class="control-label col-lg-2">快递员姓名 <span class="required">*</span></label>
                                                 <div class="col-lg-6">            
	                                                 <select  id="sel_menu2"  name="courier_id" style="width: 50%">
	                                                 @foreach($stations as $station)
	                                                       <optgroup label="{{$station->name}}">
	                                                          @foreach($station->couriers as $cour)
	                                                           <option value="{{$cour->id}}">{{$cour->name}}</option>
	                                                           @endforeach
	                                                       </optgroup>
	                                                  @endforeach
	                                                 </select>                 　　
	                                      </div>
                                      </div>
                                    <div class="form-group ">
                                          <label for="cphone" class="control-label col-lg-2">是否送达 <span class="required">*</span></label>
				<div>
				  <label class="checkbox-inline">
				    <input type="radio" name="status" id="optionsRadios3" value="0" checked>运输中
				  </label>
				  <label class="checkbox-inline">
				    <input type="radio" name="status" id="optionsRadios4" value="1">已送达
				  </label>
				</div>
                                      </div>   

                                   
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button" onclick="history.back(-1)">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              {{-- 引入vue.js --}}
              <script src="https://unpkg.com/vue/dist/vue.js"></script>
              {{-- 引入select2 --}}
              <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
              <script>
                          $("#sel_menu2").select2({
                                tags: true,
                                
                            });
              </script>
@endsection
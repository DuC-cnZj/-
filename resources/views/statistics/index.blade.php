@extends('layouts.index')

@section('main')
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">

	     <div class="row">
	      <div class="col-lg-12">
	        <h3 class="page-header"><i class="fa fa-files-o"></i> 统计功能</h3>
	        <ol class="breadcrumb">
	          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
	          <li><i class="fa fa-files-o"></i>统计功能</li>
	        </ol>
	      </div>
	    </div>
                   <div class="row" >
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                              统计管理
                          </header>
                          <div class="panel-body">
                              <div class="form" id="app">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('tongji') }}">
                                       {{ csrf_field() }}
  
                                    <div class="form-group ">
                                          <label for="cphone" class="control-label col-lg-2">查询条件 <span class="required">*</span></label>
				<div>
				  <label class="checkbox-inline">
				    <input type="radio" name="tianojian" id="tiaojian1" @click="riqi" value="0" checked>按日期
				  </label>
				  <label class="checkbox-inline">
				    <input type="radio" name="tianojian" id="tiaojian2" @click="gongsi" value="1">按分公司
				  </label>
				  <label class="checkbox-inline">
				    <input type="radio" name="tianojian" id="tiaojian3" @click="fenzhan" value="2">按分站
				  </label>
				  <label class="checkbox-inline">
				    <input type="radio" name="tianojian" id="tiaojian4" @click="kdy" value="3">按快递员
				  </label>
				</div>
                                      </div>     
                                      <div class="form-group" v-if='date' >
                                      	<div class="block col-md-8 col-md-offset-2">
                                      	<input type="hidden" name="date" v-model='form.date1'>
                                      	<el-form>	
				    <el-col :span="11">
				      <el-date-picker type="date" placeholder="选择日期" v-model="form.date1" style="width: 100%;"></el-date-picker>
				    </el-col>
		 
				  </el-form-item>
				  </el-form>
				  </div>
                                      </div>    
                                      <div class="form-group" v-if='company' >
				@include('statistics._select') 
                                      </div>    
                                      <div class="form-group" v-if='courier'  >
				<div class="block col-md-2 col-md-offset-2">
					<input type="text" class="form-control " name="courier_name" placeholder="快递员姓名">
				</div>
                                       </div>
                                      <div class="form-group" v-if='station' >
                                      	@include('statistics._station')
                                      </div>                                   
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Search</button>
                                              <button class="btn btn-default" type="button" onclick="history.back(-1)">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>

<script>
	new Vue({
		el: '#app',
		data: {
			form:{
				date1: ''
			},
			value1: '',
			date: true,
			company: false,
			station: false,
			courier: false,
			pickerOptions0: {
				disabledDate(time) {
				return time.getTime() < Date.now() - 8.64e7;
			},}
		},
		methods: {
			fenzhan: function () {
				this.date = false
				this.company = false
				this.station = true
				this.courier = false
			},
			gongsi: function () {
				this.date = false
				this.company = true
				this.station = false
				this.courier = false
			},
			kdy: function () {
				this.date = false
				this.company = false
				this.station = false
				this.courier = true
			},		
			riqi: function () {
				this.date = true
				this.company = false
				this.station = false
				this.courier = false
			}
		}
	})
</script>
@endsection
@extends('layouts.index')

@section('main')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> 添加运输物件</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="fa fa-files-o"></i>添加运输物件</li>
                </ol>
              </div>
            </div>

                   <div class="row" >
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                              添加运输物件
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('thing.store') }}">
                                       {{ csrf_field() }}
                                      <div class="form-group ">
                                          <label for="sel_menu2" class="control-label col-lg-2">目的地 <span class="required">*</span></label>
                                                 <div class="col-lg-6">            
                                                 <select  id="sel_menu2"  name="destination" style="width: 50%">
                                                 @foreach($companies as $company)
                                                       <optgroup label="{{$company->name}}">
                                                          @foreach($company->stations as $station)
                                                           <option value="{{ $station->SubCompany->name }}-{{$station->name}}">{{$station->name}}</option>
                                                           @endforeach
                                                       </optgroup>
                                                  @endforeach
                                                 </select>                 　　
                                      </div>
                                      </div>
                                        {{-- <input type="hidden" name="sub_company" value="@{{ company }}"> --}}
{{--                                       <div class="form-group ">
                                          <label for="csub_company" class="control-label col-lg-2">目的地所属分公司 <span class="required">*</span></label>
                                          <div class="col-lg-6">
                                              <input class="form-control " id="csub_company"   name="sub_company" required />
                                          </div>
                                      </div> --}}
                                    <div class="form-group ">
                                          <label for="cperson" class="control-label col-lg-2">收件人 <span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <input class="form-control" id="cperson" name="person"  type="text" required />
                                          </div>
                                      </div>   
                                      <div class="form-group " id="app">
                                          <label for="cweight" class="control-label col-lg-2">重量<span class="required">*</span></label>
                                          <div class="col-lg-1">
                                              <input class="form-control " id="cweight" type="addr" name="weight" v-model="weight" @keyup='dothis' />
                                          </div>
                                          <div><p  style="font-size: 1.5em;color: red"><strong>￥ @{{ RMB }} 元</strong></p></div>
                                          <input type="hidden" v-model='RMB' name="RMB">
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
              <script>
                new Vue({
                  el: '#app',
                  data: {
                        weight : '',
                        RMB: '',
                  },
                  computed: {
                    dothis: function () {
                      if (this.weight == 0) {
                        return this.RMB = 0
                      }
                      return this.RMB = Math.ceil(this.weight) * 5 + 1
                    }
                  }

                });
              </script>

@endsection
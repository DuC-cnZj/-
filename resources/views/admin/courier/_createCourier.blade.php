@extends('layouts.index')

@section('main')
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> 新增快递员</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="fa fa-files-o"></i>新增快递员</li>
                </ol>
              </div>
            </div>

                   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              新增快递员
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('station.courier.store', $station_id) }}">
                                       {{ csrf_field() }}
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">快递员姓名 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="name"  type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cage" class="control-label col-lg-2">年龄 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cage" type="age" name="age" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">家庭住址<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="addr" name="addr" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cphone" class="control-label col-lg-2">联系电话 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cphone" name="phone"  type="text" required />
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
@endsection
@extends('layouts.index')

@section('main')
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> 创建分公司</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Forms</li>
            <li><i class="fa fa-files-o"></i>创建分公司</li>
          </ol>
        </div>
      </div>

                   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              创建分公司
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post"   action="{{ route('company.update', $id) }}">
                                       {{ csrf_field() }}
                                       {{ method_field('PUT') }}
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">公司名称 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="name"  type="text" value="{{ $company->name }}" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">邮箱 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email" value="{{ $company->email }}" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">公司地址<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="addr" name="addr" value="{{ $company->addr }}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cphone" class="control-label col-lg-2">公司电话 <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cphone" name="phone"  type="text" value="{{ $company->phone }}" required />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="cdescription" class="control-label col-lg-2">公司描述</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="cdescription" name="description"  required>{{ $company->description }}</textarea>
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
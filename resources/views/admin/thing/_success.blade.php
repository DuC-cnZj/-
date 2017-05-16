@extends('layouts.index')

@section('main')
  <div class="col-md-offset-2 col-md-8">
            <div class="alert alert-info fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                  </button>
                  <strong>物件添加成功！</strong><p>编号为：{{$number}}</p>
            </div>
  </div>
@endsection
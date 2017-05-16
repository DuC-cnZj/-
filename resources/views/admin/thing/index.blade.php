@extends('layouts.index')

@section('main')
            <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-truck"></i>
            <div class="count">6.674</div>
            <div class="title">运输中</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa  fa-plane"></i>
            <div class="count">7.538</div>
            <div class="title">国外物件</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->     
 
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count">4.362</div>
            <div class="title">日交易量</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">1.426亿</div>
            <div class="title">总计</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
      </div><!--/.row-->

      <div class="row">
        <div class="col-lg-9 col-md-12">  
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2><i class="fa fa-flag-o red"></i><strong>运输情况</strong></h2>
              <div class="panel-actions">
                <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <div class="panel-body">
              <table class="table bootstrap-datatable countries">
                <thead>
                  <tr>
                    <th></th>
                    <th>公司</th>
                    <th>分站</th>
                    <th>分站地址</th>
                    <th>总运输进度</th>
                  </tr>
                </thead>   
                <tbody>
                  <tr>
                    <td><img src="{{ asset('hou/img/Spain.png') }}" style="height:18px; margin-top:-2px;"></td>
                    <td>Spain</td>
                    <td>562</td>
                    <td>452</td>
                    <td>
                      <div class="progress progress-striped  active ">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                               style="width: 20%;">
                          </div>
                      </div>                 
                    </td>
                  </tr>
                  <tr>
                    <td><img src="{{ asset('hou/img/Spain.png') }}" style="height:18px; margin-top:-2px;"></td>
                    <td>Spain</td>
                    <td>562</td>
                    <td>452</td>
                    <td>
                      <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-warning" role="progressbar"
                               aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                               style="width: 69%;">
                          </div>
                      </div>                 
                    </td>
                  </tr>
                  <tr>
                    <td><img src="{{ asset('hou/img/Spain.png') }}" style="height:18px; margin-top:-2px;"></td>
                    <td>Spain</td>
                    <td>562</td>
                    <td>452</td>
                    <td>
                      <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-danger" role="progressbar"
                               aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                               style="width: 44%;">
                          </div>
                      </div>                 
                    </td>
                  </tr>
                  <tr>
                    <td><img src="{{ asset('hou/img/Spain.png') }}" style="height:18px; margin-top:-2px;"></td>
                    <td>Spain</td>
                    <td>562</td>
                    <td>452</td>
                    <td>
                      <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-success" role="progressbar"
                               aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                               style="width: 75%;">
                          </div>
                      </div>                 
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
  
          </div>  

        </div><!--/col-->
          <div class="col-md-3">
              <!-- List starts -->
        <ul class="today-datas">
                <!-- List #1 -->
        <li>
                  <!-- Graph -->
                  <div><span id="todayspark1" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text">11,500 visitors/day</div>
                </li>
                <li>
                  <div><span id="todayspark2" class="spark"></span></div>
                  <div class="datas-text">15,000 Pageviews</div>
                </li>
                <li>
                  <div><span id="todayspark3" class="spark"></span></div>
                  <div class="datas-text">30.55% Bounce Rate</div>
                </li>
                <li>
                  <div><span id="todayspark4" class="spark"></span></div>
                  <div class="datas-text">$16,00 Revenue/Day</div>
                </li> 
                <li>
                  <div><span id="todayspark5" class="spark"></span></div>
                  <div class="datas-text">12,000000 visitors every Month</div>
                </li>                                                                                                              
              </ul>
              </div>
</div>

              
@endsection
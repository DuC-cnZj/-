@foreach($couriers->chunk(4) as $list)
    <div class="row ">
        @foreach($list as $li)
        <div class="col-md-3">  
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-user"></i>{{ $li->name }}
                        @can('delete', $li)
                            @include('admin.courier._deleteCourier', ['station_id' => $station_id, 'courier_id' => $li->id])
                        @endcan

                    </div>
                    <div class="panel-body">
                        <li><strong>住址：</strong>{{ $li->addr }}</li>
                        <li><strong>年龄：</strong>{{ $li->age }}</li>
                        <li><strong>进入公司的时间：</strong>{{ $li->created_at->diffForHumans(null, true) }}</li>
                    </div>
                    <div class="panel-footer"><i class="fa fa-phone"></i><span>{{ $li->phone }}</span></div>
                </div>
        </div>
        @endforeach
    </div>
@endforeach
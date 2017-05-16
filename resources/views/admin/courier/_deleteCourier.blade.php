<a class="btn  pull-right "  style="font-size: 14px;" href="javascript:;" onclick="del({{ $station_id }}, {{ $courier_id }})">
	<i class="fa fa-times"></i>
</a>
 

<script>
        function del(station_id, courier_id)
        {
            layer.confirm('您确定要删除吗？', {
            btn: ['确定','取消'] //按钮
            }, function(){
              // console.log(station_id,courier_id)
              $.ajax({
                  url:"{{ url('station/')}}/" +  station_id + '/courier/' + courier_id,
                  type: "POST",
                  data:{'_token':'{{ csrf_token()}}','_method':'DELETE'},
                  success: function(data){
                    if(data.status == 0){
                        location.reload();
                        layer.msg(data.msg, {icon: 1});
                    }else{
                         layer.msg(data.msg, {icon: 5});
                    }
                  }
            });
            });
        }
    </script>
<a class="btn btn-danger"  href="javascript:;" onclick="del({{ $company_id }}, {{ $sub_id }})">
	<i class="fa fa-times"></i>
</a>
 

<script>
        function del(company_id, sub_id)
        {
            layer.confirm('您确定要删除吗？', {
            btn: ['确定','取消'] //按钮
            }, function(){
              $.ajax({
                  url:"{{ url('company/')}}/" +  company_id + '/station/' + sub_id,
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
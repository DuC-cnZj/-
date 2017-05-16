@extends('layouts.index')
@section('main')
  

  
 <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">
	<style>
		
	.el-upload__input {
	    display: none;
	}

	</style>
<div id="app">
<div v-if="msg">
	<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">
        &times;
    </a>@{{msg }}
</div>
</div>
<el-upload
 action="{{ route('user.store') }}" name='file'
  list-type="picture-card"
  :on-preview="handlePictureCardPreview"
  :on-success='hand'
  :on-remove="handleRemove">
  <i class="el-icon-plus"></i>
</el-upload>

<el-dialog v-model="dialogVisible" size="tiny">
  <img width="100%" :src="dialogImageUrl" alt="" >
</el-dialog>

</div>

  <!-- 先引入 Vue -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- 引入组件库 -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script>
      new Vue({
      el: '#app',
      data: {
      	msg: '',
        imageUrl: '',
             dialogImageUrl: '',
        dialogVisible: false,
 
      },     methods: {
      handleRemove(file, fileList) {
        console.log(file, fileList);
      },
      handlePictureCardPreview(file) {
        this.dialogImageUrl = file.url;
        this.dialogVisible = true;
      },
      hand(response, file, fileList){
      	this.msg = '上传成功！！'
      	setTimeout(function(){  //使用  setTimeout（）方法设定定时2000毫秒
	window.location.reload();//页面刷新
	},2000);
      }
    }
    })
  </script>
@endsection
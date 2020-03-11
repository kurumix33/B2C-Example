<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\pp\PHPTutorial\WWW\tp\public/../application/admin\view\adv\adv.html";i:1558692896;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/admin/css/pintuer.css">
<link rel="stylesheet" href="/admin/css/admin.css">
<script src="/admin/js/jquery.js"></script>
<script src="/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">图片</th>
      <th width="15%">名称</th>
      <th width="20%">价格</th>
<!--       <th width="10%">数量</th> -->
      <th width="15%">操作</th>
    </tr>
   <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      
      <td><?php echo $vo['id']; ?></td>     
      <td><img src="/uploads/20190518/<?php echo $vo['image']; ?>" alt="" width="120" height="50" /></td>     
      <td><?php echo $vo['name']; ?></td>
      <td><?php echo $vo['price']; ?></td>
<!--       <td>{}</td> -->
      <td><div class="button-group">
      
      <a class="button border-red" href="<?php echo url('admin/Adv/outadv',['id'=>$vo['id']]); ?>" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
      
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){
	
	}
}
</script>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('admin/Adv/doadv'); ?>" enctype="multipart/form-data">    
      <div class="form-group">
        <div class="label">
          <label>名称</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>价格</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="url" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
          <input type="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" name="img" >
          <div class="tipss">图片尺寸：1920*500</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
         

         </div>
       
      </div>
      <div class="form-group">
     
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>
<blockquote class="layui-elem-quote" style="margin: 20px 0;">
	欢迎使用MyTheme主题，您已获得授权使用本主题管理系统，在您配置或修改文件前请备份相关文件，以免数据丢失造成不必要的麻烦！
</blockquote>

<div class="layui-row">
    <div class="layui-col-md4" style="padding-right: 20px;">
    	<table class="layui-table">	
    		<thead>
		        <tr>
		            <th colspan="2" scope="col">简介</th>
		        </tr>
	        </thead>	    
		    <tbody>
		        <tr>
		            <td>主题名称</td>
		            <td>
						<a class="theme" target="_blank" href="">
							<?php echo($my['name']) ?>
						</a>
					</td>
		        </tr>
		        <tr>
		            <td>适用系统</td>
		            <td><?php echo($my['system']) ?></td>
		        </tr>
		        <tr>
		        	<td>主题作者</td>
		            <td><?php echo($my['author']) ?></td>
		        </tr>
		        <tr>
		            <td>主题ID号</td>
		            <td>B<?php echo($my['catid']) ?>-<?php echo($my['id']) ?></td>
		        </tr>
		        <tr>
		            <td>当前版本</td>
		            <td>v<?php echo($my['version']) ?><span class="edition"></span></td>
		        </tr> 
		        <tr>
		            <td>更新时间</td>
		            <td><?php echo($my['update']) ?></td>
		        </tr>				        	
		        <tr>
		        	<td>在线客服</td>
		            <td>QQ：<?php echo($my['qq']) ?></td>
		        </tr>
		        <tr>
		            <td>官网地址</td>
		            <td> <a target="_blank" href="<?php echo($my['website']) ?>"><?php echo($my['website']) ?></a></td>
		        </tr>
		    </tbody>
		</table>
    </div>
    <div class="layui-col-md8">
    	<table class="layui-table">
			<thead>
		        <tr>
		            <th>
		            	基础说明
		            </th>
		        </tr>
		    </thead>
		    
			<tr>
				<td>
					1. 推荐使用PHP版本≥5.4
				</td>
			</tr>
			<tr>
				<td>
					2. 主题文件读写权限755
				</td>
			</tr>
			<tr>
				<td>
					3. 不兼容IE8及以下浏览器
				</td>
			</tr>
			<tr>
				<td>
					4. 主题具备可复制性，请勿传播
				</td>
			</tr>
			<tr>
				<td>
					5. 非技术人员请勿私自修改主题核心文件
				</td>
			</tr>
			<tr>
				<td>
					6. 不提供个性化修改服务，高端定制请联系客服洽谈
				</td>
			</tr>
			<tr>
				<td>
					7. 使用中出现问题请提交工单，我们会在24小时内回复你
				</td>
			</tr>
			<tr>
				<td style="color: red;">
					禁止任何形式的二次出售、分享他人等侵害作者及正版用户的行为，一经发现取消授权资格并加入黑名单。
				</td>
			</tr>
		</table>
    </div>
</div>
<div class="layui-row">
	<blockquote class="layui-elem-quote" style="margin: 20px 0;">
		快捷入口： 
		<a class="layui-btn layui-btn-primary" href="backups.php" target="_blank">导出备份</a>
		<a class="layui-btn layui-btn-primary" href="?do=home_import">导入备份</a>
		<a class="layui-btn layui-btn-primary" href="?do=sadmin_cadd">导入栏目</a> 
		<a class="layui-btn layui-btn-primary theme" target='_blank' href="">主题详情</a> 
		<a class="layui-btn layui-btn-primary book" target="_blank" href="">使用手册</a> 
		<a class="layui-btn layui-btn-primary" target="_blank" href="https://www.mytheme.cn/">MyTheme官网</a>
		<a class="layui-btn layui-btn-primary" target="_blank" href="https://www.mytheme.cn/index.php?s=theme&c=bug&cid=<?php echo($my['id']) ?>">BUG与建议</a>
	</blockquote>
	<fieldset class="layui-elem-field layui-field-title">
	  	<legend>最新主题</legend>
	</fieldset>
	<iframe src="https://www.mytheme.cn/index.php?c=page&id=2&catid=<?php echo($my['catid']) ?>" id="myiframe" width="100%" height="1000" frameborder="0" scrolling="no" frameborder="0"  class="hs-iframe"></iframe>
</div>
<script type="text/javascript">
	var MyEdition = "<?php echo($my['version']) ?>"; 
	var ThemeId = "<?php echo($my['id']) ?>";
	$(function() {
		$.ajax({
			url: 'https://api.mytheme.cn/version.php?id=<?php echo($my['id']) ?>',
			type: "get",
			dataType: "json",
			success: function(data) {
				var obj = data;
	            $.each(obj.return,function(i,e){
	            	if(e.version>MyEdition){
	            		$(".edition").html("<a target='_blank' href='<?php echo($my['website']) ?>"+e.url+"'><font color='red'>【最新v"+e.version+"】</font></a>");
	            	}else{
	            		$(".edition").html("【已是最新】");
	            	}
					$(".theme").attr("href","<?php echo($my['website']) ?>"+e.url)
					$(".book").attr("href","<?php echo($my['website']) ?>/book/"+e.book+".html");
	            });
			},
			error:function(){
				alert("获取数据失败");
			}
		});	
	});
</script>
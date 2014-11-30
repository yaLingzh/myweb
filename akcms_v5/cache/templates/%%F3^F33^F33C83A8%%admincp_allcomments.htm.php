<?php /* Smarty version 2.6.13, created on 2014-11-28 03:51:57
         compiled from admincp_allcomments.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
function review(obj) {
	$('#review' + obj).show();
	$('#textareames' + obj).css("display","none");
	$('#textarea' + obj).show();
	$('#save' + obj).focus();
	$('#textarea' + obj).focus();
	$.get("index.php?file=admincp&action=getreview&all=1&itemid="+obj+"&r="+Math.random(), function(data){
		$('#textarea' + obj).val(data);
	});
}
function reviewcom(obj) {
	$('#review' + obj).show();
	$('#textarea' + obj).css("display","none");
	$('#textareames' + obj).show();
	$('#save' + obj).focus();
	$('#textareames' + obj).focus();
	$.get("index.php?file=admincp&action=getcmessage&all=1&itemid="+obj+"&r="+Math.random(), function(data){
		$('#textareames' + obj).val(data);
	});
}
function deletecomment(cid,itemid,vc) {
	if(!confirm('<?php echo $this->_tpl_vars['lan']['suredelcomment']; ?>
')) return;
	$.get("index.php?file=admincp&action=deletecomment&vc="+vc+"&all=1&id="+cid+"&itemid="+itemid+"&r="+Math.random(), function(data){
		if(data !== 'no') {
			$(".c"+cid).empty().remove();
			ajaxtip('<?php echo $this->_tpl_vars['lan']['deleted']; ?>
');
		} else if(data == 'no') {
			ajaxtip('<?php echo $this->_tpl_vars['lan']['deletefailed']; ?>
');
		}
	});
}
function savecommentchange(cid,itemid) {
	var reviewval = $("#textarea"+cid).val();
	var messageval = $("#textareames"+cid).val();
	$.post("index.php?file=admincp&action=reviewcomment&r="+Math.random(), {review:reviewval,message:messageval,id:cid}, function(data){
		if(data == 'ok') {
			$("#comspan"+cid).text(messageval);
			$("#revspan"+cid).text(reviewval);
			ajaxtip('<?php echo $this->_tpl_vars['lan']['commentssaved']; ?>
');
		}
	});
}
function denyip(ip, itemid, vc) {
	$.get("index.php?file=admincp&action=commentdenyip&all=1&ip="+ip+"&itemid="+itemid+"&vc="+vc, function(data){
		if(data == 'ok') {
			ajaxtip("<?php echo $this->_tpl_vars['lan']['denyipsuccess']; ?>
");
		} else if(data == 'no') {
			ajaxtip("<?php echo $this->_tpl_vars['lan']['denyipfailed']; ?>
");
		}
	});
}
</script>
<style>
.reviewdiv{display:none;}
</style>
<body>
<div class="block"></div>
<iframe name="work" style="display:none"></iframe>
<table border="0" align="center" cellpadding="4" cellspacing="1" class="commontable width100">
<tr class="header">
	<td><?php echo $this->_tpl_vars['lan']['comment']; ?>
</td>
</tr>
<?php echo $this->_tpl_vars['comments']; ?>

<form action="<?php echo $this->_tpl_vars['indexurl']; ?>
" method="post">
	<tr class="header">
		<td><form action="index.php?file=admincp&action=allcomments" method="post"><ul class="index"><?php echo $this->_tpl_vars['str_index']; ?>
</ul></form></td>
	</tr>
</form>
</table>
</body>
</html>
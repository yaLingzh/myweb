<?php /* Smarty version 2.6.13, created on 2014-11-28 07:55:36
         compiled from admincp_process.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
var step = new Array();
<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['step']):
?>
step[<?php echo $this->_tpl_vars['key']; ?>
] = "<?php echo $this->_tpl_vars['step']; ?>
";
<?php endforeach; endif; unset($_from); ?>
function runprocess() {
	$.get('<?php echo $this->_tpl_vars['processurl']; ?>
&rand=' + Math.random(), recall);
}
function recall(strers) {
	var returnvalue = strers.split("\t");
	var percent = returnvalue[0];
	var stepid = returnvalue[1];
	var title = returnvalue[2];
	if(typeof title != "undefined" && title != "" && title.length < 100) $("#title").html(title);
	if(percent < 100 && percent > 0) {
		if(stepid < step.length) {$("#step").html(step[stepid] + ": ");}
		$("#percentspan").html(percent);
		$("#processdiv").width(percent + "%");
	} else if(percent == 100){
		$("#percentspan").html("100");
		$("#title").html("<?php echo $this->_tpl_vars['lan']['finished']; ?>
");
		$("#processdiv").width("100%");
<?php if ($this->_tpl_vars['targeturl']): ?>
document.location.href = "<?php echo $this->_tpl_vars['targeturl']; ?>
";
<?php else: ?>
alert("<?php echo $this->_tpl_vars['completetipmsg']; ?>
");
<?php endif; ?>
		return true;
	}
	setTimeout("runprocess()", <?php echo $this->_tpl_vars['timeout']; ?>
);
}
</script>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" align="center" class="commontable" style="width:666px;">
	<tr class="header">
		<td colspan="3"><?php echo $this->_tpl_vars['title']; ?>
</td>
	</tr>
	<tr>
		<td style="padding:16px;">
			<div style="border:1px solid #555;padding:1px;width:100%;height:15px;background:#FFF;">
				<div id="processdiv" style="width:0px;background:#9EB6D8;height:15px;"></div>
			</div>
			<div style='width:150px;float:right;text-align:right;margin-top:10px;'><?php echo $this->_tpl_vars['lan']['finished']; ?>
 <span id="percentspan">0.00</span> %&nbsp;</div>
			<div style='width:445px;margin-top:10px;'><span id='step'></span><span id='title'></span></div>
		</td>
	</tr>
</table>
<script>runprocess();</script>
</body>
</html>
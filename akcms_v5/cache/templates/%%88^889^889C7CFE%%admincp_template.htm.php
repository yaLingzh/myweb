<?php /* Smarty version 2.6.13, created on 2014-11-27 08:09:24
         compiled from admincp_template.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_template.htm', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
	html{overflow-x:hidden;}
	.leftinfo{float:none;margin-right:188px;_margin-right:206px;}
	.rightinfo{float:none;position:absolute;top:0px;right:0px;width:185px;height:532px;display:none;margin-top:0px;z-index:1;}
	.templatearea{width:99.4%;margin-right:0px;height:465px;}
	.templateareatable{height:495px;}
	.templatehelp{padding:5px;overflow:hidden;height:494px;_height:496px;height:496px\9;}
</style>
<body>
<div class="block"></div>
<div id="leftinfo" class=''>
	<form action="index.php?file=admincp&action=template&job=save" method="POST">
		<input type="hidden" name="template" value="<?php echo $this->_tpl_vars['template']; ?>
">
		<table cellspacing="1" cellpadding="4" align="center" class="commontable width100 templateareatable">
			<tr class="header">
				<td><div class="righttop"><?php echo h(array('k' => 'template'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['system_templates']; ?>
(<?php echo $this->_tpl_vars['template']; ?>
)</td>
			</tr>
			<tr>
				<td align="center">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td><textarea name="html" rows="25" class="template templatearea"><?php echo $this->_tpl_vars['str_template']; ?>
</textarea>
								<div class="block"></div>
								<div style='text-align:center;'><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" name="save_template"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'templatehelp.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="clear:both;"></div>

<script type="text/javascript">

$(document).ready(function(){
	safeloadiframe("http://www.akhtm.com/embed/template1.htm", 'dyframe', 'rightinfo', 'leftinfo', 'leftinfo');
});

</script>
</body>
</html>
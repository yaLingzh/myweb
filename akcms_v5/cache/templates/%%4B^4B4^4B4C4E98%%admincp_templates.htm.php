<?php /* Smarty version 2.6.13, created on 2014-11-27 08:08:48
         compiled from admincp_templates.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_templates.htm', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function confirmdelete() {
	return confirm("<?php echo $this->_tpl_vars['lan']['suredeltemplate']; ?>
");
}
</script>
<style type="text/css">
	html{overflow-x:hidden;}
	.leftinfo{float:none;margin-right:188px;_margin-right:206px;}
	.rightinfo{float:none;position:absolute;top:0px;right:0px;width:185px;display:none;margin-top:0px;z-index:1;}
</style>
<body>
<div class="block"></div>
<div id="leftinfo" class=''>
	<table cellspacing="1" cellpadding="4" align="center" class="commontable width100">
		<tr class="header">
			<td colspan="2"><div class="righttop"><?php echo h(array('k' => 'template'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['maintemplate']; ?>
</td>
		</tr>
		<tr>
			<td>
				<table  cellpadding="4" cellspacing="1" class="commontable width100">
				<tr class="header">
					<td width="20">ID</td>
					<td><?php echo $this->_tpl_vars['lan']['filename']; ?>
</td>
				</tr>
				<?php echo $this->_tpl_vars['str_maintemplates']; ?>

				</table>
				<div class="block"></div>
				<table  cellpadding="4" cellspacing="1" class="commontable width100">
				<tr class="header"  style='width:100%'>
					<td><?php echo $this->_tpl_vars['lan']['addnewtemplate']; ?>
</td>
				</tr>
				<form action="index.php?file=admincp&action=templates" method="post">
				<input type="hidden" name="prefix" value=",">
				<tr>
					<td>
						<input type="text" name="templatename" size="10" class="mustoffer">.htm&nbsp;
						<input type="submit" name="addnewtemplate" value="<?php echo $this->_tpl_vars['lan']['add']; ?>
">
					</td>
				</tr>
				</form>
				</table>
			</td>
		</tr>
	</table>
	<div class="block"></div>
	<table cellspacing="1" cellpadding="4" align="center" class="commontable width100">
		<tr class="header">
			<td colspan="2"><div class="righttop"><?php echo h(array('k' => 'template'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['subtemplate']; ?>
</td>
		</tr>
		<tr>
			<td>
				<table cellpadding="4" cellspacing="1" class="commontable width100">
				<tr class="header">
					<td width="20">ID</td>
					<td><?php echo $this->_tpl_vars['lan']['filename']; ?>
</td>
				</tr>
				<?php echo $this->_tpl_vars['str_subtemplates']; ?>

				</table>
				<div class="block"></div>
				<table cellpadding="4" cellspacing="1" class="commontable width100">
				<tr class="header" style='width:100%'>
					<td><?php echo $this->_tpl_vars['lan']['addnewtemplate']; ?>
</td>
				</tr>
				<form action="index.php?file=admincp&action=templates" method="post">
				<input type="hidden" name="prefix" value="">
				<tr>
					<td>
						<input type="text" name="templatename" size="10" class="mustoffer">.htm&nbsp;
						<input type="submit" name="addnewtemplate" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
">
					</td>
				</tr>
				</form>
				</table>
			</td>
		</tr>
	</table>
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
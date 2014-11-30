<?php /* Smarty version 2.6.13, created on 2014-11-27 08:08:29
         compiled from admincp_app.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_app.htm', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function(){
	currentmenu("app", "appshop");
	$(".install").click(function() {
		alert("<?php echo $this->_tpl_vars['lan']['newwindowinstallapp']; ?>
");
	})
})
</script>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" align="center" class="commontable width100">
	<tr class="header">
		<td colspan="3"><div class="righttop"><?php echo h(array('k' => "modules:help"), $this);?>
</div><?php echo $this->_tpl_vars['apppagename']; ?>
</td>
	</tr>
	<tr>
		<td>
			<div class="appcontent">
				<?php echo $this->_tpl_vars['html']; ?>

				<div style="clear:both;"></div>
			</div>
		</td>
	</tr>
</table>
</body>
</html>
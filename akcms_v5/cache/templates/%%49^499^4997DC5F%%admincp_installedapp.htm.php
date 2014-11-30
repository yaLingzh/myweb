<?php /* Smarty version 2.6.13, created on 2014-11-28 06:48:42
         compiled from admincp_installedapp.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_installedapp.htm', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function(){
	currentmenu("app", "alreadyinstalled");
	$(".uninstall").click(function(event){
		event.preventDefault();
		if(confirm("<?php echo $this->_tpl_vars['lan']['makesureuninstallapp']; ?>
")) {
			var key = $(this).parent().parent().next().text();
			$.get("index.php?file=app&action=uninstall&key="+key, function(data){alert("<?php echo $this->_tpl_vars['lan']['succeduninstallapp']; ?>
");location.reload();});
		}
	});
	$("#refresh").click(function(event){
		location = "index.php?file=app&action=refresh";
	});
	if($("#flaga").length > 0) {$("#refresh").hide();}
})
</script>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" align="center" class="commontable width100">
	<tr class="header">
		<td colspan="3"><div class="righttop"><?php echo h(array('k' => 'modules'), $this);?>
</div><?php echo $this->_tpl_vars['apppagename']; ?>
</td>
	</tr>
	<tr>
		<td>
			<div class="appcontent">
				<?php echo $this->_tpl_vars['html']; ?>

				<div style="clear:both;"></div>
			</div>
			<div id="" style="text-align:center;">
				<input id="refresh" type="button" value="<?php echo $this->_tpl_vars['lan']['refreshapplist']; ?>
" />
			</div>
		</td>
	</tr>
</table>
</body>
</html>
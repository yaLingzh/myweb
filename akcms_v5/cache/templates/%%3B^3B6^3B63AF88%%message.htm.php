<?php /* Smarty version 2.6.13, created on 2014-11-27 08:02:44
         compiled from message.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['url_forward'] != ''): ?>
<script>
function gotourl() {location = "<?php echo $this->_tpl_vars['url_forward']; ?>
";}
setTimeout("gotourl();", <?php echo $this->_tpl_vars['timeout_micro']; ?>
);
</script>
<?php endif; ?>
<body style="padding:30px;">
<table border="0" cellspacing="1" cellpadding="4" width="400" class="commontable">
	<tr class="header">
		<td><?php echo $this->_tpl_vars['sitename'];  echo $this->_tpl_vars['lan']['cp']; ?>
</td>
	</tr>
	<tr>
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr height="80">
			<td width="80" align="center"><img src="<?php echo $this->_tpl_vars['core_url']; ?>
images/admin/icon_<?php echo $this->_tpl_vars['flag']; ?>
.gif"></td>
			<td><?php echo $this->_tpl_vars['message']; ?>
<br>
<?php if ($this->_tpl_vars['url_forward'] != ''): ?><a href="javascript:gotourl()"><?php echo $this->_tpl_vars['lan']['clickfortarget']; ?>
</a><?php endif; ?>
			</td>
		</tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
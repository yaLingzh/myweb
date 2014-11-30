<?php /* Smarty version 2.6.13, created on 2014-11-27 08:02:33
         compiled from login.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'login.htm', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<title><?php echo $this->_tpl_vars['sitename']; ?>
 <?php echo $this->_tpl_vars['lan']['cp']; ?>
</title>
<script>
$(document).ready(function(){
	$("#username").focus();
});
</script>
<body>
<div class="block"></div>
<form name="loginform" method="post" action="index.php?file=login">
<table border="0" cellspacing="1" cellpadding="4" class="commontable">
	<tr class="header">
		<td colspan="2"><?php echo $this->_tpl_vars['sysname']; ?>
 <?php echo $this->_tpl_vars['lan']['login']; ?>
<input name="action" type="hidden" id="action" value="login"></td>
	</tr>
	<tr>
		<td align="right"><?php echo $this->_tpl_vars['lan']['username']; ?>
</td>
		<td><input id="username" name="username" type="text" size="15" id="username"></td>
	</tr>
	<tr>
		<td valign="top" align="right"><?php echo $this->_tpl_vars['lan']['password']; ?>
</td>
		<td><input name="password" type="password" size="15" id="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="rememberlogin" id="rememberlogin" value="1"><label for="rememberlogin"><?php echo $this->_tpl_vars['lan']['rememberlogin']; ?>
</label></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo h(array('k' => "default-password:defaultpassword"), $this);?>
<br /><?php echo h(array('k' => "forgetpassword:forgetpassword"), $this);?>
</td>
	</tr>
</table>
<div class="block"></div>
<center><input type="submit" name="loginsubmit" value="<?php echo $this->_tpl_vars['lan']['login']; ?>
"></center>
</form>
</body>
</html>
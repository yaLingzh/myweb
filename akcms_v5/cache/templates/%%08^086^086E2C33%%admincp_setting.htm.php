<?php /* Smarty version 2.6.13, created on 2014-11-27 08:07:53
         compiled from admincp_setting.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
$(document).ready(function(){
$("tr").filter(":odd").not(".header").children("td").css("background", "#EFEFEF");
});
</script>
<body>
<div class="block"></div>
<form action="index.php?file=setting" method="post">
<?php echo $this->_tpl_vars['str_settings']; ?>

</table>
<input type="hidden" value="<?php echo $this->_tpl_vars['action']; ?>
" name="action">
<center><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" name="setting_submit"></center>
</form>
</body>
</html>
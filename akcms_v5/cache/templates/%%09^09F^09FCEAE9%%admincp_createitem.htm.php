<?php /* Smarty version 2.6.13, created on 2014-11-28 07:59:17
         compiled from admincp_createitem.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<table align="center" cellpadding="4" cellspacing="1" class="commontable">
	<tr class="header">
		<td colspan="2"><?php echo $this->_tpl_vars['lan']['createitembatch']; ?>
</td>
	</tr>
	<form action="index.php" method="get" name="batchform">
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['choosecategory']; ?>
</td>
		<td>
		<select name="category">
		<option value="-1"><?php echo $this->_tpl_vars['lan']['allcategory']; ?>
+<?php echo $this->_tpl_vars['lan']['page']; ?>
</option>
		<option value="0"><?php echo $this->_tpl_vars['lan']['allcategory']; ?>
</option>
		<?php echo $this->_tpl_vars['categories']; ?>

		</select>
		</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['choosestep']; ?>
</td> 
		<td>
		<select name="step">
		<option value="1">1</option>
		<option value="5">5</option>
		<option value="10">10</option>
		<option value="40">40</option>
		<option value="50">50</option>
		<option value="60">60</option>
		<option value="70">70</option>
		<option value="100">100</option>
		</select>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="hidden" name="action" value="createitem">
		<div align="center"><input type="submit" name="createitemsubmit" value="<?php echo $this->_tpl_vars['lan']['start']; ?>
"></div>
		</td>
	</tr>
	</form>
</table>
</body>
</html>
<?php /* Smarty version 2.6.13, created on 2014-11-27 09:45:22
         compiled from admincp_module.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_module.htm', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<form action="index.php?file=admincp&action=modules&job=savemodule" method="post">
<table border="0" cellspacing="1" cellpadding="4" class="commontable" align="center">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	<tr class="header">
		<td colspan="2"><div class="righttop"><?php echo h(array('k' => 'modules'), $this);?>
</div><?php if ($this->_tpl_vars['modulename'] == ''):  echo $this->_tpl_vars['lan']['add'];  else:  echo $this->_tpl_vars['lan']['edit'];  endif;  echo $this->_tpl_vars['lan']['space'];  echo $this->_tpl_vars['lan']['module']; ?>
</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['modulename']; ?>
</td>
		<td><input type="text" name="modulename" size="9" value="<?php echo $this->_tpl_vars['modulename']; ?>
"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['ispage']; ?>
</td>
		<td><input type="radio" id="page1" name="page" value="1"<?php if ($this->_tpl_vars['page'] == 1): ?> checked<?php endif; ?>><label for="page1"><?php echo $this->_tpl_vars['lan']['yes']; ?>
</label>&nbsp;<input type="radio" id="page-1" name="page" value="-1"<?php if ($this->_tpl_vars['page'] == -1): ?> checked<?php endif; ?>><label for="page-1"><?php echo $this->_tpl_vars['lan']['no']; ?>
</label></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['ifcreatehtml']; ?>
</td>
		<td><input type="radio" id="html0" name="html" value="0"<?php if ($this->_tpl_vars['html'] == 0): ?> checked<?php endif; ?>><label for="html0"><?php echo $this->_tpl_vars['lan']['withglobal']; ?>
</label>&nbsp;<input type="radio" id="html1" name="html" value="1"<?php if ($this->_tpl_vars['html'] == 1): ?> checked<?php endif; ?>><label for="html1"><?php echo $this->_tpl_vars['lan']['yes']; ?>
</label>&nbsp;<input type="radio" id="html-1" name="html" value="-1"<?php if ($this->_tpl_vars['html'] == -1): ?> checked<?php endif; ?>><label for="html-1"><?php echo $this->_tpl_vars['lan']['no']; ?>
</label></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['categoryispage']; ?>
</td>
		<td><input type="radio" id="categorypage1" name="categorypage" value="1"<?php if ($this->_tpl_vars['categorypage'] == 1): ?> checked<?php endif; ?>><label for="categorypage1"><?php echo $this->_tpl_vars['lan']['yes']; ?>
</label>&nbsp;<input type="radio" id="categorypage-1" name="categorypage" value="-1"<?php if ($this->_tpl_vars['categorypage'] == -1): ?> checked<?php endif; ?>><label for="categorypage-1"><?php echo $this->_tpl_vars['lan']['no']; ?>
</label></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['categoryifcreatehtml']; ?>
</td>
		<td><input type="radio" id="categoryhtml1" name="categoryhtml" value="1"<?php if ($this->_tpl_vars['categoryhtml'] == 1): ?> checked<?php endif; ?>><label for="categoryhtml1"><?php echo $this->_tpl_vars['lan']['yes']; ?>
</label>&nbsp;<input type="radio" id="categoryhtml-1" name="categoryhtml" value="-1"<?php if ($this->_tpl_vars['categoryhtml'] == -1): ?> checked<?php endif; ?>><label for="categoryhtml-1"><?php echo $this->_tpl_vars['lan']['no']; ?>
</label></td>
	</tr>
	
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['iffilename']; ?>
</td>
		<td>
			<input type="radio" name="usefilename" value="0"<?php if ($this->_tpl_vars['usefilename'] == 0): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['withglobal']; ?>

			<input type="radio" name="usefilename" value="1"<?php if ($this->_tpl_vars['usefilename'] == 1): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['yes']; ?>

			<input type="radio" name="usefilename" value="-1"<?php if ($this->_tpl_vars['usefilename'] == -1): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['no']; ?>

		</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['numperpage']; ?>
</td>
		<td><input type="text" name="numperpage" value="<?php echo $this->_tpl_vars['numperpage']; ?>
" size="9"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['picturemaxsize']; ?>
</td>
		<td><input type="text" name="picturemaxsize" value="<?php echo $this->_tpl_vars['picturemaxsize']; ?>
" size="9"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['itemtemplate']; ?>
</td>
		<td><select id="itemtemplate" name="itemtemplate"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['storemethod']; ?>
</td>
		<td><input type="text" id="storemethod" name="storemethod" value="<?php echo $this->_tpl_vars['storemethod']; ?>
" size="50"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['template2']; ?>
</td>
		<td><select id="template2" name="template2"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['storemethod2']; ?>
</td>
		<td><input type="text" id="storemethod2" name="storemethod2" value="<?php echo $this->_tpl_vars['storemethod2']; ?>
" size="50"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['template3']; ?>
</td>
		<td><select id="template3" name="template3"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['storemethod3']; ?>
</td>
		<td><input type="text" id="storemethod3" name="storemethod3" value="<?php echo $this->_tpl_vars['storemethod3']; ?>
" size="50"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['template4']; ?>
</td>
		<td><select id="template4" name="template4"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['storemethod4']; ?>
</td>
		<td><input type="text" id="storemethod4" name="storemethod4" value="<?php echo $this->_tpl_vars['storemethod4']; ?>
" size="50"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['pagetemplate']; ?>
</td>
		<td><select id="pagetemplate" name="pagetemplate"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['pagestoremethod']; ?>
</td>
		<td><input type="text" id="pagestoremethod" name="pagestoremethod" value="<?php echo $this->_tpl_vars['pagestoremethod']; ?>
" size="50"></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['defaulttemplate']; ?>
</td>
		<td>
		<select name="defaulttemplate" id="defaulttemplate">
		<option value=""><?php echo $this->_tpl_vars['lan']['default']; ?>
</option>
		<?php echo $this->_tpl_vars['templates']; ?>

		</select>
		</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['categoryhomemethod']; ?>
</td>
		<td><input type="text" value="<?php echo $this->_tpl_vars['categoryhomemethod']; ?>
" name="categoryhomemethod" size="50"> <?php echo h(array('k' => "category-storage-setting"), $this);?>
</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['listtemplate']; ?>
</td>
		<td>
		<select name="listtemplate" id="listtemplate">
		<option value=""><?php echo $this->_tpl_vars['lan']['default']; ?>
</option>
		<?php echo $this->_tpl_vars['templates']; ?>

		</select>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<table border="0" cellspacing="1" cellpadding="5" class="commontable" align="center" id="fieldslist">
				<tr class="header">
					<td colspan="10"><?php echo $this->_tpl_vars['lan']['fieldsetting']; ?>
</td>
				</tr>
				<tr>
					<td><?php echo $this->_tpl_vars['lan']['field']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['variable']; ?>
 <?php echo h(array('k' => "template-variables:?"), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['tag']; ?>
 <?php echo h(array('k' => "getitems:?"), $this);?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['alias']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['order']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['listorder']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['description']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['default']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['fieldsize']; ?>
</td>
					<td><?php echo $this->_tpl_vars['lan']['type']; ?>
</td>
				</tr>
<?php echo $this->_tpl_vars['fieldshtml']; ?>

			</table>
			<div class="block2"></div>
			<center><input type="submit" onclick="check_extfield_alias();return false;" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" /></center>
		</td>
	</tr>
</table>
</form>
<script>
function addfield() {
	var trid = fieldslist.rows.length;
	var objRow = fieldslist.insertRow(trid);
	var objCel = objRow.insertCell(0);
	objCel.innerHTML = "<input type='text' name='extfield" + trid + "' value='' size='12'>";
	var objCel = objRow.insertCell(1);
	var objCel = objRow.insertCell(2);
	var objCel = objRow.insertCell(3);
	objCel.innerHTML = "<input class='extfield_alias' type='text' name='extfield_alias" + trid + "' value='' size='10'>";
	var objCel = objRow.insertCell(4);
	objCel.innerHTML = "<input type='text' name='extfield_order" + trid + "' value='' size='3'>";
	var objCel = objRow.insertCell(5);
	objCel.innerHTML = "<input type='text' name='extfield_listorder" + trid + "' value='' size='3'>";
	var objCel = objRow.insertCell(6);
	objCel.innerHTML = "<input type='text' name='extfield_description" + trid + "' value='' size='16'>";
	var objCel = objRow.insertCell(7);
	objCel.innerHTML = "<input type='text' name='extfield_default" + trid + "' value='' size='10'>";
	var objCel = objRow.insertCell(8);
	objCel.innerHTML = "<input type='text' name='extfield_size" + trid + "' value='' size='9'>";
	var objCel = objRow.insertCell(9);
	objCel.innerHTML = "<select name='extfield_type" + trid + "' id='extfield_type" + trid + "' ><option value='plain'><?php echo $this->_tpl_vars['lan']['plaintext']; ?>
</option><option value='rich'><?php echo $this->_tpl_vars['lan']['richtext']; ?>
</option></select>";
}
function check_extfield_alias() {
	var emptyalias = new Array();
	$(".extfield_alias").each(function(i){
		if($(this).val() == '') {
			$(this).css('background','#ff0');
			emptyalias.push(i);
		}
	});
	if(emptyalias.length <= 0 || $(".extfield_alias").length <= 0) {
		$("form").trigger("submit");
		return '';
	}
	alert("<?php echo $this->_tpl_vars['lan']['cannotemptyalias']; ?>
");
}
$(document).ready(function(){
	$("#itemtemplate").val("<?php echo $this->_tpl_vars['itemtemplate']; ?>
");
	$("#listtemplate").val("<?php echo $this->_tpl_vars['listtemplate']; ?>
");
	$("#defaulttemplate").val("<?php echo $this->_tpl_vars['defaulttemplate']; ?>
");
	$("#template2").val("<?php echo $this->_tpl_vars['template2']; ?>
");
	$("#template3").val("<?php echo $this->_tpl_vars['template3']; ?>
");
	$("#template4").val("<?php echo $this->_tpl_vars['template4']; ?>
");
	$("#pagetemplate").val("<?php echo $this->_tpl_vars['pagetemplate']; ?>
");
	$("tr").not(":odd").not(".header").children("td").css("background", "#EFEFEF");
});
</script>
</body>
</html>
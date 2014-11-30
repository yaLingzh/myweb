<?php /* Smarty version 2.6.13, created on 2014-11-28 03:45:22
         compiled from admincp_category_edit.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_category_edit.htm', 141, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<table cellpadding="4" cellspacing="1" class="commontable width100">
<form enctype="multipart/form-data" action="index.php?file=admincp&action=editcategory&id=<?php echo $this->_tpl_vars['id']; ?>
" method="post" name="categoryedit">
<tr class="header">
	<td colspan="9"><?php echo $this->_tpl_vars['lan']['category_edit']; ?>
</td>
</tr>
<tr>
	<td width="100"><?php echo $this->_tpl_vars['lan']['category_name']; ?>
</td>
	<td><input type="text" name="category" value="<?php echo $this->_tpl_vars['category']; ?>
" class="mustoffer">&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['lan']['delete']; ?>
" name="delete" class="alert" onclick="delcategory()"></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['alias']; ?>
</td>
	<td><input type="text" name="alias" value="<?php echo $this->_tpl_vars['alias']; ?>
"></td>
</tr>
<?php if ($this->_tpl_vars['categoryup'] == -11): ?>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['binddomain']; ?>
</td>
	<td>
		<input type="text" name="domain" size="40" value="<?php echo $this->_tpl_vars['domain']; ?>
" onblur="checkdomain(this.value)"><span id="domain_msg"></span><br />
		<?php echo $this->_tpl_vars['lan']['binddomain_desc']; ?>

	</td>
</tr>
<?php endif; ?>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['categoryup']; ?>
</td>
	<td>
<?php if ($this->_tpl_vars['selectcategories']): ?>
		<select name="categoryup" id="categoryup">
			<option value="0"><?php echo $this->_tpl_vars['lan']['rootcategory']; ?>
</option>
		<?php echo $this->_tpl_vars['selectcategories']; ?>

		</select>
<?php else: ?>
<input type="text" size="6" name="categoryup" value="0">
<?php endif; ?>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['bindmodule']; ?>
</td>
	<td>
		<select name="module" id="module">
		<?php echo $this->_tpl_vars['selectmodules']; ?>

		</select>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['description']; ?>
</td>
	<td><textarea name="description" cols="80" rows="3"><?php echo $this->_tpl_vars['description']; ?>
</textarea></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['data']; ?>
</td>
	<td><textarea name="data" cols="80" rows="5"><?php echo $this->_tpl_vars['data']; ?>
</textarea></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['keywords']; ?>
</td>
	<td><textarea name="keywords" cols="80" rows="3"><?php echo $this->_tpl_vars['keywords']; ?>
</textarea></td>
</tr>
<tr>
	<td width="50" valign="top"><?php echo $this->_tpl_vars['lan']['picture']; ?>
</td>
	<td>
		<table>
			<tbody>
				<tr>
					<td><?php echo $this->_tpl_vars['lan']['pictureurl']; ?>
:<input type="text" name="picture" value="<?php echo $this->_tpl_vars['picture']; ?>
" size="50"></td><td><a target="_blank" href='<?php echo $this->_tpl_vars['repicture']; ?>
'>  <?php echo $this->_tpl_vars['lan']['preview']; ?>
</td>
				</tr>
				<tr>
					<td><?php echo $this->_tpl_vars['lan']['or']; ?>
</td>
				</tr>
				<tr>
					<td><?php echo $this->_tpl_vars['lan']['uploadpicture']; ?>
:<input type="file" name="uploadpicture" value=""></td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['order']; ?>
</td>
	<td><input type="text" name="order" value="<?php echo $this->_tpl_vars['orderby']; ?>
"></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['path']; ?>
</td>
	<td><input type="text" name="path" value="<?php echo $this->_tpl_vars['path']; ?>
"></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['itemtemplate']; ?>
</td>
	<td>
	<select name="itemtemplate" id="itemtemplate">
	<option value=""><?php echo $this->_tpl_vars['lan']['default']; ?>
</option>
	<?php echo $this->_tpl_vars['selecttemplates']; ?>

	</select>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['storemethod']; ?>
</td>
	<td><input type="text" value="<?php echo $this->_tpl_vars['storemethod']; ?>
" name="storemethod" size="50"></td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['template2']; ?>
</td>
	<td><select id="template2" name="template2"><option value=""><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option><?php echo $this->_tpl_vars['selecttemplates']; ?>
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
</option><?php echo $this->_tpl_vars['selecttemplates']; ?>
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
</option><?php echo $this->_tpl_vars['selecttemplates']; ?>
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
</option><?php echo $this->_tpl_vars['selecttemplates']; ?>
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
	<?php echo $this->_tpl_vars['selecttemplates']; ?>

	</select>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['categoryhomemethod']; ?>
</td>
	<td><input type="text" value="<?php echo $this->_tpl_vars['categoryhomemethod']; ?>
" name="categoryhomemethod" size="50"> <?php echo h(array('k' => "category-storage-setting:help"), $this);?>
</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['listtemplate']; ?>
</td>
	<td>
	<select name="listtemplate" id="listtemplate">
	<option value=""><?php echo $this->_tpl_vars['lan']['default']; ?>
</option>
	<?php echo $this->_tpl_vars['selecttemplates']; ?>

	</select>
	</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['lan']['ifcreatehtml']; ?>
</td>
	<td>
		<input type="radio" name="html" value="0"<?php if ($this->_tpl_vars['html'] == 0): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['withglobal']; ?>

		<input type="radio" name="html" value="1"<?php if ($this->_tpl_vars['html'] == 1): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['yes']; ?>

		<input type="radio" name="html" value="-1"<?php if ($this->_tpl_vars['html'] == -1): ?> checked<?php endif; ?>><?php echo $this->_tpl_vars['lan']['no']; ?>

	</td>
</tr>
<tr>
	<td colspan="9" align="center"><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" name="category_edit_submit"></td>
</tr>
</form>
</table>
<script language="javascript">
function delcategory() {
	if(confirm('<?php echo $this->_tpl_vars['lan']['suredelpage']; ?>
')) {
		document.location = "index.php?file=admincp&action=deletecategory&id=<?php echo $this->_tpl_vars['id']; ?>
&vc=<?php echo $this->_tpl_vars['vc']; ?>
";
	}
}
function checkdomain(domain) {
	if(domain == '') {return true;}
	$.get('index.php?file=admincp&action=ajaxcheckdomain&id=<?php echo $this->_tpl_vars['id']; ?>
&domain=' + domain, recall);
}
function recall(strers) {
	var s = strers;
	if(s.indexOf('error') != -1) {
		$("#domain_msg").text("<?php echo $this->_tpl_vars['lan']['bindederror']; ?>
");
		$("#domain_msg").css("color", 'red');
		$("#domain_msg").css("padding-left", '9px');
		$("#domain_msg").show();
	} else {
		$("#domain_msg").hide();
	}
}
$(document).ready(function(){
	$("#module").val(<?php echo $this->_tpl_vars['module']; ?>
);
	$("#categoryup").val(<?php echo $this->_tpl_vars['categoryup']; ?>
);
	$("#template2").val("<?php echo $this->_tpl_vars['template2']; ?>
");
	$("#template3").val("<?php echo $this->_tpl_vars['template3']; ?>
");
	$("#template4").val("<?php echo $this->_tpl_vars['template4']; ?>
");
	$("#pagetemplate").val("<?php echo $this->_tpl_vars['pagetemplate']; ?>
");
	$("#itemtemplate").val("<?php echo $this->_tpl_vars['itemtemplate']; ?>
");
	$("#defaulttemplate").val("<?php echo $this->_tpl_vars['defaulttemplate']; ?>
");
	$("#listtemplate").val("<?php echo $this->_tpl_vars['listtemplate']; ?>
");
	$("tr").not(":odd").not(".header").children("td").css("background", "#FFFFFF");
});
</script>
</body>
</html>
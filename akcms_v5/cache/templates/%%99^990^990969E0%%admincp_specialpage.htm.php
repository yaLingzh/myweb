<?php /* Smarty version 2.6.13, created on 2014-11-28 09:24:07
         compiled from admincp_specialpage.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<form id="editpage" name="editpage" action="index.php?file=admincp&action=specialpages&id=<?php echo $this->_tpl_vars['id']; ?>
" method="POST">
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1" class="commontable">
	<tr class="header">
		<td colspan="2"><?php echo $this->_tpl_vars['lan']['specialpage_edit']; ?>
</td>
	</tr>
	<tr>
		<td width="60"><?php echo $this->_tpl_vars['lan']['pagename']; ?>
</td>
		<td><input type="text" name="pagename" style="width:200px;" value="<?php echo $this->_tpl_vars['pagename']; ?>
" class="mustoffer"></td>
	</tr>
	<tr>
		<td width="60"><?php echo $this->_tpl_vars['lan']['title']; ?>
</td>
		<td><input type="text" name="title" style="width:500px;" value="<?php echo $this->_tpl_vars['title']; ?>
"><br /><?php echo $this->_tpl_vars['lan']['getintemplate']; ?>
:&lt;{$title}&gt;</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['template']; ?>
</td>
		<td><select id="template" name="template" class="mustoffer"><?php echo $this->_tpl_vars['str_templates']; ?>
</select></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['keywords']; ?>
</td>
		<td><input type="text" name="keywords" style="width:500px;" value="<?php echo $this->_tpl_vars['keywords']; ?>
"><br /><?php echo $this->_tpl_vars['lan']['getintemplate']; ?>
:&lt;{$keywords}&gt;</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['description']; ?>
</td>
		<td><textarea name="digest" style="width:500px;height:50px;"><?php echo $this->_tpl_vars['digest']; ?>
</textarea><br /><?php echo $this->_tpl_vars['lan']['getintemplate']; ?>
:&lt;{$description}&gt;</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['filename']; ?>
</td>
		<td><input type="text" name="filename" size="20" value="<?php echo $this->_tpl_vars['filename']; ?>
"> (<?php echo $this->_tpl_vars['lan']['ifnofilename']; ?>
)</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['lan']['data']; ?>
</td>
		<td><div>
<textarea name="data" id="data" style='width:100%;height:300px;' class="xheditor {hoverExecDelay:-1,upImgUrl:'index.php?file=upload&id=<?php echo $this->_tpl_vars['id']; ?>
',upImgExt:'jpg,jpeg,gif,png',tools:'Source,Pastetext,|,Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,|,Align,List,Outdent,Indent,|,Link,Unlink,Anchor,Img,Hr,Table',loadCSS:'<style>body{font-size:14px;}</style>'}"><?php echo $this->_tpl_vars['data']; ?>
</textarea>
</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="saveeditpage" size="20" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
"></td>
	</tr>
</table>
</form>
<script>
$(function(){
	$("#template").val('<?php echo $this->_tpl_vars['template']; ?>
');	
});
</script>
</body>
</html>
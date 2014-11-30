<?php /* Smarty version 2.6.13, created on 2014-11-27 02:47:16
         compiled from head.htm */ ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['header_charset']; ?>
" />
<?php if ($this->_tpl_vars['startinstall']): ?>
	<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<?php else: ?>
	<title><?php echo $this->_tpl_vars['sitename']; ?>
 <?php echo $this->_tpl_vars['lan']['cp']; ?>
</title>
<?php endif; ?>
<meta name="Robots" content="NOINDEX,NOFOLLOW,noarchive" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link href="<?php echo $this->_tpl_vars['core_url']; ?>
images/admin/admin.css" rel="stylesheet" type="text/css" />
<?php if ($this->_tpl_vars['customcss']): ?><link href="<?php echo $this->_tpl_vars['ak_url']; ?>
configs/customer.css" rel="stylesheet" type="text/css"><?php endif; ?>
<script language="javascript" src="<?php echo $this->_tpl_vars['jquery']; ?>
"></script>
<script>
if(typeof jQuery == 'undefined') {
	if(confirm("<?php echo $this->_tpl_vars['lan']['jqueryfail']; ?>
")) {
		document.location = "http://www.akhtm.com/manual/custom-jquery.htm";
	}
} else {
	if(jQuery.attrHooks != undefined) {
		jQuery.attrHooks['width']=jQuery.attrHooks['height']=null;
	}
}
</script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['core_url']; ?>
include/xh/xheditor-1.1.14-zh-cn.min.js"></script>
<script src="<?php echo $this->_tpl_vars['core_url']; ?>
include/common.js"></script>
</head>
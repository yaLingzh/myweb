<?php /* Smarty version 2.6.13, created on 2014-11-27 08:05:55
         compiled from admincp_welcome.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_welcome.htm', 57, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div id="leftinfo" style="float:left;overflow:hidden;width:1px;height:1px;">
	<div class="block"></div>
	<table cellspacing="1" cellpadding="4" class="commontable width100" id="quickoperatetable">
		<tr class="header">
			<td><div class="righttop"><?php echo $this->_tpl_vars['lan']['welcome']; ?>
,<?php echo $this->_tpl_vars['admin_id']; ?>
</div><?php echo $this->_tpl_vars['lan']['quickoperate']; ?>
</td>
		</tr>
		<tr>
			<td>
				<b><?php echo $this->_tpl_vars['lan']['customquickoperate']; ?>
</b>: <?php echo $this->_tpl_vars['customquickoperate']; ?>
&nbsp;<a href="index.php?file=setting&action=custom"><?php echo $this->_tpl_vars['lan']['add']; ?>
+</a><br />
				
		<b><?php echo $this->_tpl_vars['lan']['favo']; ?>
</b>: <a href="index.php?file=welcome&action=updatecache"><?php echo $this->_tpl_vars['lan']['updatecache']; ?>
</a> <!--<?php echo $this->_tpl_vars['lan']['systeminfo']; ?>
--> <a href="index.php?file=admincp&action=createcategory"><?php echo $this->_tpl_vars['lan']['batchcreatehtml']; ?>
(<?php echo $this->_tpl_vars['lan']['category']; ?>
)</a> <a href="index.php?file=admincp&action=createitem"><?php echo $this->_tpl_vars['lan']['batchcreatehtml']; ?>
(<?php echo $this->_tpl_vars['lan']['item']; ?>
)</a> <a href="index.php?installtemplate=1" target="_parent"><?php echo $this->_tpl_vars['lan']['installtemplate']; ?>
</a> <a href="index.php?app=akprober"><?php echo $this->_tpl_vars['lan']['systeminfo']; ?>
</a><br />
			
			<b><?php echo $this->_tpl_vars['lan']['content']; ?>
</b>: <a href="index.php?file=admincp&action=specialpages"><?php echo $this->_tpl_vars['lan']['page']; ?>
</a> <?php echo $this->_tpl_vars['moduleoperate']; ?>
 <a href="index.php?file=admincp&action=allcomments"><?php echo $this->_tpl_vars['lan']['comment']; ?>
</a><br />
		
		<b><?php echo $this->_tpl_vars['lan']['system']; ?>
</b>: <a href="index.php?file=admincp&action=categories"><?php echo $this->_tpl_vars['lan']['category']; ?>
</a> <a href="index.php?file=admincp&action=sections"><?php echo $this->_tpl_vars['lan']['section']; ?>
</a> <a href="index.php?file=admincp&action=templates"><?php echo $this->_tpl_vars['lan']['template']; ?>
</a> <a href="index.php?file=admincp&action=variables"><?php echo $this->_tpl_vars['lan']['variable']; ?>
</a> <a href="index.php?file=admincp&action=modules"><?php echo $this->_tpl_vars['lan']['module']; ?>
</a> <a href="index.php?file=admincp&action=filters"><?php echo $this->_tpl_vars['lan']['filter']; ?>
</a><br />
				
			<b><?php echo $this->_tpl_vars['lan']['setting']; ?>
</b>: <a href="index.php?file=setting&action=generally"><?php echo $this->_tpl_vars['lan']['generallysetting']; ?>
</a> <a href="index.php?file=setting&action=functions"><?php echo $this->_tpl_vars['lan']['functionssetting']; ?>
</a> <a href="index.php?file=setting&action=front"><?php echo $this->_tpl_vars['lan']['frontsetting']; ?>
</a> <a href="index.php?file=setting&action=attach"><?php echo $this->_tpl_vars['lan']['attachsetting']; ?>
</a> <a href="index.php?file=setting&action=service"><?php echo $this->_tpl_vars['lan']['servicesetting']; ?>
</a> <a href="index.php?file=setting&action=frontswitch"><?php echo $this->_tpl_vars['lan']['frontswitch']; ?>
</a><br />
			
			<b><?php echo $this->_tpl_vars['lan']['app']; ?>
</b>: <?php echo $this->_tpl_vars['app']; ?>
<a href="index.php?file=app&action=appshop"><?php echo $this->_tpl_vars['lan']['appshop']; ?>
&gt;&gt;</a><br />
			</td>
		</tr>
	</table>
	<div class="block"></div>
	<table cellspacing="1" cellpadding="4" class="commontable width100" id="siteinfotable">
		<tr class="header">
			<td><?php echo $this->_tpl_vars['lan']['siteinfo']; ?>
</td>
		</tr>
		<tr>
			<td>
				<?php echo $this->_tpl_vars['lan']['siteitems']; ?>
:<?php echo $this->_tpl_vars['items']; ?>
<br>
				<?php echo $this->_tpl_vars['lan']['sitepvs']; ?>
:<?php echo $this->_tpl_vars['pvs']; ?>
<br>
			</td>
		</tr>
	</table>
	<div class="block"></div>
	<table cellspacing="1" cellpadding="4" class="commontable width100" id="coreinfotable">
		<tr class="header">
			<td><?php echo $this->_tpl_vars['lan']['coreinfo']; ?>
</td>
		</tr>
		<tr>
			<td>
				<?php echo $this->_tpl_vars['lan']['akversion']; ?>
:AKCMS <?php echo $this->_tpl_vars['akversion']; ?>
(<a href="http://www.akhtm.com/akcms_maillist.php" target="_blank"><?php echo $this->_tpl_vars['lan']['maillist']; ?>
</a>)&nbsp;<span id="newversion"><span>&nbsp;</span></span><br />
			<?php echo $this->_tpl_vars['lan']['licensestatus']; ?>
:<?php if ($this->_tpl_vars['authsuccess']): ?>(<?php echo $this->_tpl_vars['lan']['licenseuser']; ?>
)(<a href='index.php?file=license' target='_self'><?php echo $this->_tpl_vars['lan']['licensecenter']; ?>
</a>)<?php else: ?>(<a href="http://www.akhtm.com/manual/powered-by-akcms.htm" target="_blank"><?php echo $this->_tpl_vars['lan']['freeuser']; ?>
</a>)(<a href='index.php?file=license' target='_self'><?php echo $this->_tpl_vars['lan']['checklicence']; ?>
</a>)<?php endif; ?>
			</td>
		</tr>
	</table>
	<div class="block"></div>
	<table cellspacing="1" cellpadding="4" class="commontable width100" id="faqtable">
		<tr class="header">
			<td><div class="righttop"><a href="http://bbs.akhtm.com/" target="_blank"><?php echo $this->_tpl_vars['lan']['ask']; ?>
&gt;&gt;</a></div><?php echo $this->_tpl_vars['lan']['faq']; ?>
</td>
		</tr>
		<tr>
			<td id="faqtd" style="overflow:hidden;">
				<ul id="faq">
					<li><?php echo h(array('k' => "auth-faq:faq1"), $this);?>
</li>
					<li><?php echo h(array('k' => "create-html:faq2"), $this);?>
</li>
					<li><?php echo h(array('k' => "fake-static:faq3"), $this);?>
</li>
					<li><?php echo h(array('k' => "spider:faq4"), $this);?>
</li>
					<li><?php echo h(array('k' => "add-editor:faq5"), $this);?>
</li>
					<li><?php echo h(array('k' => "post-example:faq6"), $this);?>
</li>
					<li><?php echo h(array('k' => "createhtmls:faq7"), $this);?>
</li>
					<li><?php echo h(array('k' => "create-template:faq8"), $this);?>
</li>
					<li><?php echo h(array('k' => "buy-template:faq9"), $this);?>
</li>
					<li><?php echo h(array('k' => "xitongqianyi:faq10"), $this);?>
</li>
					<li><?php echo h(array('k' => "akcms-update:faq11"), $this);?>
</li>
					<li><?php echo h(array('k' => "time-differences:faq12"), $this);?>
</li>
					<li><?php echo h(array('k' => "last-next-page:faq13"), $this);?>
</li>
					<li><?php echo h(array('k' => "watermark:faq14"), $this);?>
</li>
					<li><?php echo h(array('k' => "filter:faq15"), $this);?>
</li>
					<li><?php echo h(array('k' => "run-php-in-template:faq16"), $this);?>
</li>
					<li><?php echo h(array('k' => "custom-thumb-size:faq17"), $this);?>
</li>
					<li><?php echo h(array('k' => "template-tag-php:faq18"), $this);?>
</li>
					<li><?php echo h(array('k' => "cms_xingnengtiaoyou:faq19"), $this);?>
</li>
					<li><?php echo h(array('k' => "debug:faq20"), $this);?>
</li>
					<li><?php echo h(array('k' => "template-path:faq21"), $this);?>
</li>
					<li><?php echo h(array('k' => "php-cli-windows-linux.htm:faq22"), $this);?>
</li>
					<li><?php echo h(array('k' => "crontab:faq23"), $this);?>
</li>
					<li><?php echo h(array('k' => "crack-warning:faq24"), $this);?>
</li>
					<li><?php echo h(array('k' => "sql-error:faq25"), $this);?>
</li>
					<li><?php echo h(array('k' => "ajax-comment-demo:faq26"), $this);?>
</li>
					<li><?php echo h(array('k' => "custom-url:faq27"), $this);?>
</li>
					<li><?php echo h(array('k' => "youarehere:faq28"), $this);?>
</li>
					<li><?php echo h(array('k' => "support-password-info:faq29"), $this);?>
</li>
					<li><?php echo h(array('k' => "template-recursion:faq30"), $this);?>
</li>
					<li><?php echo h(array('k' => "clear-data:faq31"), $this);?>
</li>
					<li><?php echo h(array('k' => "template-variables:faq32"), $this);?>
</li>
					<li><?php echo h(array('k' => "ifnotempty:faq33"), $this);?>
</li>
					<li><?php echo h(array('k' => "modules:faq34"), $this);?>
</li>
					<li><?php echo h(array('k' => "custom-cp:faq35"), $this);?>
</li>
					<li><?php echo h(array('k' => "cache-dynamic:faq36"), $this);?>
</li>
					<li><?php echo h(array('k' => "akcms-struct:faq37"), $this);?>
</li>
					<li><?php echo h(array('k' => "data-dic:faq38"), $this);?>
</li>
					<li><?php echo h(array('k' => "troubleshooting:faq39"), $this);?>
</li>
					<li><?php echo h(array('k' => "charset-error:faq40"), $this);?>
</li>
				</ul>
			</td>
		</tr>
	</table>
</div>
<div id="rightinfo" style="width:315px;">
	<div class="rightinfocontent">
		<div class="header" style="height:25px;padding:0px;">
			<span class="headertitle"><?php echo $this->_tpl_vars['lan']['officialinfo']; ?>
</span>
		</div>
		<div id="rightiframe" style="padding:5px;text-align:center;">
			<img src="images/admin/loading.gif" style="margin-top:88px;" />
		</div>
	</div>
</div>
<div style="clear:both;"></div>
<script type="text/javascript">
function resizewelcome() {
	var leftheight = pageHeight() - 50;
	$("#leftinfo").css('height', leftheight + "px");
	$("#rightiframe").css('height', pageHeight() - 91 + "px");
	$("#leftinfo").css('width', pageWidth() - 328 + "px");
	var faqheight = leftheight - $("#quickoperatetable").height() - $("#siteinfotable").height() - $("#coreinfotable").height() - 56;
	$("#faq").css('height', faqheight + 'px');
}

function loadofficialerror() {
	if(window.online === undefined) {
		$("#rightiframe").html('<div style="margin-top:88px;"><?php echo $this->_tpl_vars['lan']['loadofficialerror']; ?>
</div>');
	}
}
$(document).ready(function(){	
	$.getScript('http://s.akhtm.com/js/isonline.js?'+Math.random(), function(){
		if(window.online !== undefined) {
			$("#rightiframe").html('<iframe id="dyframe" frameborder="0" scrolling="no" src="http://www.akhtm.com/embed/cp1.htm?ver=<?php echo $this->_tpl_vars['akversion']; ?>
&siteid=<?php echo $this->_tpl_vars['siteid']; ?>
" style="background:#F8F8F8;height:100%;"></iframe>');
		} else {
			loadofficialerror();
		}
		$.getScript('index.php?file=welcome&action=checknew&r=' + Math.random());
	});
	resizewelcome();
	$(window).resize(function(){
		resizewelcome();
	});
	setTimeout("loadofficialerror()", 5000);
});
</script>
</body>
</html>
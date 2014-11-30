<?php /* Smarty version 2.6.13, created on 2014-11-27 08:05:54
         compiled from layout.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_xheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
function resizebody() {
	bodywidth = pageWidth() - <?php echo $this->_tpl_vars['menuwidth']; ?>
 - 4;
	$("#bodyiframe").attr("width", bodywidth + "px");
	bodyheight = pageHeight() - 25;
	$("#bodyiframe").attr("height", bodyheight + "px");
}

function appendmessage() {
	var delay;
	var tipnum = messagearray.length;
	if(!tipnum) return ;
	$("#redtip").show();
	$("#redtip").find("ul").empty();
	for(var i=0; i<tipnum; i++) {
		$("#redtip").find("ul").append("<li>"+messagearray[i]+"</li>");
	}
	i = null;
	if(tipnum > 0) {
		$("#tiptext").show();
		$("#tiptexts").show();
		$("#tiptext").text(tipnum);
	}
	$("#redtip").find("li").eq(0).css("margin-top","0px").css("border","none");
	$("#tiptextcontent").toggle(function(){$("#zhongjie").show();},function(){$("#zhongjie").hide();});
	$("#tiptextcontent").hover(function(){$("#zhongjie").show();},function(){
							delay = setTimeout('$("#zhongjie").hide();', 500);
						}
	);
	$("#redtipcontent").hover(function(){
		$("#zhongjie").show();
		clearTimeout(delay);
		}, function(){$("#zhongjie").hide()});
}

function messagecalback(data) {
	if(!data) return '';
	var jsonobj = jQuery.parseJSON(data);
	if(!jsonobj) return '';
	if(jsonobj && jsonobj.length > 0) {
		for(var i=0; i<jsonobj.length; i++) {
			messagearray.push(jsonobj[i]);
		}
	}
	appendmessage();
}

function loadcheckmessage() {
	messagearray = new Array();
	$.get('index.php?file=welcome&action=checkmessage&r='+Math.random(), messagecalback);
}

$(document).ready(function(){
	resizebody();
	$(window).resize(function() {
		resizebody();
	});
	$("#nav li").click(function(){
		id = this.id;
		$('#c').hide();
		$("#nav li").each(function(){
			if(this.id == id) {
				this.className = "current";
			} else {
				this.className = "";
			}
		});
		$("#menu .menu_body").each(function(){
			if(this.id == "menu_" + id) {
				this.style.display = "block";
			} else {
				this.style.display = "none";
			}
		});
	});
	$("#menu a").click(function(){
		var li = $(this).parent();
		li.addClass("current");
		var o = li.offset();
		var w = li.css('width');
		$('#c').css('left', (<?php echo $this->_tpl_vars['menuwidth']; ?>
 + 2) + 'px');
		$('#c').css('top', o.top + 'px');
		$('#c').css('z-index', '9');
		$('#c').show();
		li.prevAll().removeClass('current');
		li.nextAll().removeClass('current');
	});
	$('#menu a').focus(function(){
                if(this.blur){
                        this.blur();
                };
        });
        $("#nav li:first").click();
	setTimeout("loadcheckmessage()", 100);
	window.setInterval(jshook, 60000);
});

function jshook() {
	$.get('index.php?file=admincp&action=jshook&r='+Math.random(), jshookcallback);
}

function jshookcallback(data) {
	if(!data) return '';
	eval(data);
}
</script>
<base target="mainFrame">
<body style="padding:0px;height:100%;overflow:hidden;" scroll="no">
<div id="c"></div>
	<div id="header">
		<?php if ($this->_tpl_vars['customed']): ?>
			<div id="switchmode">
				<?php if ($this->_tpl_vars['usermode'] == 'editor'): ?>
					<a href='index.php?file=admincp&action=admin' target='_self'><?php echo $this->_tpl_vars['lan']['switchadmin']; ?>
</a>
				<?php else: ?>
					<a href='index.php?file=admincp&action=custom' target='_self'><?php echo $this->_tpl_vars['lan']['switcheditor']; ?>
</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div id="favorite"><?php echo $this->_tpl_vars['favorite']; ?>
</div>
		<div id="logo"><a href='<?php echo $this->_tpl_vars['softhomepage']; ?>
' target='_blank'><img src="<?php echo $this->_tpl_vars['logo']; ?>
" border="0" /></a></div>
		<div id="nav">
			<?php echo $this->_tpl_vars['nav']; ?>

		</div>
		
		<div id="redtip">
			<div id="tiptextcontent">
				<div id="tiptext" style="display:none;"></div>
				<div id="tiptexts" style="display:none;"><?php echo $this->_tpl_vars['lan']['checkmessage']; ?>
</div>
			</div>
			<div id="zhongjie" style="display: none; ">
				<div id="redtipcontent">
					<div id="tiparrow"></div>
					<div id="tiptopborder"></div>
					<div id="tipcontent">
						<ul>
						</ul>
					</div>
					<div id="tipbottomborder"></div>
				</div>
			</div>
		</div>
		
	</div>
	<div id="menu" style="width:<?php echo $this->_tpl_vars['menuwidth']; ?>
px;">
		<?php echo $this->_tpl_vars['menu']; ?>

	</div>
	<div style="margin-left:<?php echo $this->_tpl_vars['menuwidth2']; ?>
px;overflow:hidden;background-color:#9EB6D8;">
		<iframe name="mainFrame" id="bodyiframe" src="index.php?file=welcome" frameborder="0" style="background-color:#9EB6D8;overflow-x:hidden;"></iframe>
		<div style="clear:both;"></div>
	</div>
</body>
</html>
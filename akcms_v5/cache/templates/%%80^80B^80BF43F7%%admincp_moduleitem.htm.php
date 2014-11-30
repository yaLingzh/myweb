<?php /* Smarty version 2.6.13, created on 2014-11-28 09:10:59
         compiled from admincp_moduleitem.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
var attdatas = new Array();
function confirmdelete() {
	if(!confirm('<?php echo $this->_tpl_vars['lan']['suredelitem']; ?>
')) {
		return false;
	} else {
		document.location = "index.php?file=admincp&action=deleteitem&id=<?php echo $this->_tpl_vars['id']; ?>
&returnlist=1&vc=<?php echo $this->_tpl_vars['vc']; ?>
";
	}
}
function checksubmit() {
	if($('#title').val() == "") {
		alert("<?php echo $this->_tpl_vars['lan']['notitle']; ?>
");
		$('#title').focus();
		return false;
	}
	if($('#category').val() == "" || $('#category').val() == 0) {
		alert("<?php echo $this->_tpl_vars['lan']['nocategory']; ?>
");
		$('#category0').focus();
		return false;
	}
	$('#draft').attr("disabled", true);
	$('#s').attr("disabled", true);
}
function selectcategory(l, c) {
	if(c == 0) {
		if(l > 1) $("#category").val($("#category" + (l - 2)).val());
	} else {
		$("#category").val(c);
	}
	for(i = l; i < 10 ;i ++) {
		$("#category" + i).get(0).options.length = 0;
	}
	$("#category" + l).prepend("<option value='0'><?php echo $this->_tpl_vars['lan']['pleasechoose']; ?>
</option>");
	if(c > 0 || l == 0) {
		var fileref = document.createElement("script");
		fileref.setAttribute("type", "text/javascript");
		fileref.setAttribute("src", "index.php?file=admincp&action=selectcategories&up="+c+"&level="+l+"&module=<?php echo $this->_tpl_vars['moduleid']; ?>
&defaultlist=<?php echo $this->_tpl_vars['categorylist']; ?>
");
		document.body.appendChild(fileref);
	}
}
function SetframeHeight(obj) {
	var iframeid = document.getElementById(obj);
	if(iframeid.contentDocument && iframeid.contentDocument.body.offsetHeight) {
		iframeid.height = iframeid.contentDocument.body.offsetHeight;
	} else {
		iframeid.height = iframeid.Document.body.scrollHeight;
	}
}
function delatt(delid) {
	if(confirm("<?php echo $this->_tpl_vars['lan']['suredelattach']; ?>
")) {
		$.get("index.php?file=admincp&action=delattach&id="+delid+"&r="+Math.random(), function(data){
			if(data == 'ok') {
				$("#attach"+delid).remove();
			} else if(data == 'no') {
				alert("<?php echo $this->_tpl_vars['lan']['delattachmentfail']; ?>
");
			} else{alert(data)}
			zebra($("#attachmentstab"));
		});
	}
}
function editatt(id) {
	$(".savechangebutton").empty().remove();
	var data = attdatas[id];
	var desc = $("#desc" + id).val();
	var orderby = $("#orderby" + id).val();
	if(desc == data.desc && orderby == data.orderby) {
		return false;
	} else {
		$.post("index.php?file=admincp&action=updateattach&id=" + id + "&r="+Math.random(), {desc:desc,orderby:orderby}, function(data){
			ajaxtip('<?php echo $this->_tpl_vars['lan']['saveattach']; ?>
');
			attdatas[id] = {desc:desc,orderby:orderby};
		});
	}
}
function displayattachments(){
	$("#attachmentstab").empty().remove();
	var itemid = $("input[name='uploadid']").val();
	$.get("index.php?file=admincp&action=attachments&id="+itemid+"&r="+Math.random(), function(data){
		var attlisttitle = "<table id='attachmentstab' class='commontable' border='0' cellpadding='4' cellspacing='1' style='margin:0px;'><tr class='header'><td>ID</td><td><?php echo $this->_tpl_vars['lan']['filename']; ?>
</td><td><?php echo $this->_tpl_vars['lan']['date']; ?>
</td><td><?php echo $this->_tpl_vars['lan']['description']; ?>
</td><td><?php echo $this->_tpl_vars['lan']['order']; ?>
</td><td><?php echo $this->_tpl_vars['lan']['filesize']; ?>
</td><td><?php echo $this->_tpl_vars['lan']['delete']; ?>
</td></tr>";
		var attachmentlist = '';
		var appendcontent = '';
		var attachments = jQuery.parseJSON(data);
		var attachmentslen = attachments.length;
		for(var i = 0; i < attachmentslen; i ++) {
			var att = attachments[i];
			var attid = att['id'];
			var attobj = new Object;
			attobj.desc = att['desc'];
			attobj.orderby = att['orderby'];
			attdatas[attid] = attobj;
			attachmentlist += "<tr id=\'attach"+attid+"\'>";
			attachmentlist += "<td>"+attid+"</td>";
			attachmentlist += "<td><a href=\""+att['url']+"\" target='_blank'>"+att['originalname']+"</a></td>";
			attachmentlist += "<td>"+att['dateitme']+"</td>";
			attachmentlist += "<td><input class='attachmentdesc' type='text' id=\'desc"+attid+"\' size='50' value=\'"+att['desc']+"\' onblur=\'editatt(" + attid + ")\'></td>";
			attachmentlist += "<td><input class='attachmentord' type='text' id=\'orderby"+attid+"\' size='2' value=\'"+att['orderby']+"\' onblur=\'editatt(" + attid + ")\'></td>";
			attachmentlist += "<td>"+att['filesize']+"&nbsp;KB</td>";
			attachmentlist += "<td><a href=\'javascript:delatt(" + attid + ");\'><?php echo $this->_tpl_vars['lan']['delete']; ?>
</a></td>";
			attachmentlist += "</tr>";
		}
		appendcontent = attlisttitle+attachmentlist+"</table>";
		if(attachmentslen > 0) {
			$("#attachments").append(appendcontent);
		}
		zebra($("#attachmentstab"));
		$(".attachmentdesc,.attachmentord").focus(function(){
			if($(this).parent().find(".savechangebutton").length < 1) {
				$(this).after("<input class='savechangebutton' type='button' value='<?php echo $this->_tpl_vars['lan']['save']; ?>
'/>");
			}
			$(".savechangebutton").click(function(event){
				event.preventDefault();
				$(this).empty().remove();
			});
		});
	});
}

function review(obj) {
	$('#review' + obj).show();
	$('#textareames' + obj).css("display","none");
	$('#textarea' + obj).show();
	$('#save' + obj).focus();
	$('#textarea' + obj).focus();
	$.get("index.php?file=admincp&action=getreview&all=1&itemid="+obj+"&r="+Math.random(), function(data){
		$('#textarea' + obj).val(data);
	});
}
function reviewcom(obj) {
	$('#review' + obj).show();
	$('#textarea' + obj).css("display","none");
	$('#textareames' + obj).show();
	$('#save' + obj).focus();
	$('#textareames' + obj).focus();
	$.get("index.php?file=admincp&action=getcmessage&all=1&itemid="+obj+"&r="+Math.random(), function(data){
		$('#textareames' + obj).val(data);
	});
}
function deletecomment(cid, itemid) {
	if(!confirm('<?php echo $this->_tpl_vars['lan']['suredelcomment']; ?>
')) return;
	$.get("index.php?file=admincp&action=deletecomment&vc=<?php echo $this->_tpl_vars['vc']; ?>
&all=1&id="+cid+"&itemid="+itemid+"&r="+Math.random(), function(data){
		if(data !== 'no') {
			$(".c"+cid).empty().remove();
			$("#commentlen").text('<?php echo $this->_tpl_vars['lan']['comment']; ?>
('+data+')');
			ajaxtip('<?php echo $this->_tpl_vars['lan']['deleted']; ?>
');
		} else if(data == 'no') {
			ajaxtip('<?php echo $this->_tpl_vars['lan']['deletefailed']; ?>
');
		}
	});
}
function savecommentchange(cid,itemid) {
	var reviewval = $("#textarea"+cid).val();
	var messageval = $("#textareames"+cid).val();
	$.post("index.php?file=admincp&action=reviewcomment&r="+Math.random(), {review:reviewval,message:messageval,id:cid}, function(data){
		if(data == 'ok') {
			$("#comspan"+cid).text(messageval);
			$("#revspan"+cid).text(reviewval);
			ajaxtip('<?php echo $this->_tpl_vars['lan']['commentssaved']; ?>
');
		}
	});
}
function denyip(ip, itemid) {
	$.get("index.php?file=admincp&action=commentdenyip&all=1&ip="+ip+"&itemid="+itemid+"&vc=<?php echo $this->_tpl_vars['vc']; ?>
", function(data){
		if(data == 'ok') {
			ajaxtip("<?php echo $this->_tpl_vars['lan']['denyipsuccess']; ?>
");
		} else if(data == 'no') {
			ajaxtip("<?php echo $this->_tpl_vars['lan']['denyipfailed']; ?>
");
		}
	});
}
function displaycomments() {
	var itemid = $("input[name='uploadid']").val();
	$.get("index.php?file=admincp&action=comments&id="+itemid+"&r="+Math.random(),function(data){
		var comments = jQuery.parseJSON(data);
		var commentslen = comments.length;
		var commentshtml = '<table  border="0" cellpadding="4" cellspacing="1" class="commontable" style="width:100%;float:left;"><tbody><tr class="header"><td id="commentlen" colspan="10"><?php echo $this->_tpl_vars['lan']['comment']; ?>
('+commentslen+')</td></tr>';
		for(var i = 0; i < commentslen; i ++) {
			var cid = comments[i].id;
			var ctitle = comments[i].title;
			var ip = comments[i].ip;
			var dateline = comments[i].dateline;
			var message = comments[i].message;
			var itemid = comments[i].itemid;
			var username = comments[i].username;
			var review = comments[i].review;
			commentshtml += '<tr class=\"c'+cid+'\" bgcolor=\"#FFFFFF\"><td><div class=\"righttop\">';
			commentshtml += '<a href=\"javascript:deletecomment('+cid+','+itemid+','+commentslen+');\"><?php echo $this->_tpl_vars['lan']['delete']; ?>
</a>&nbsp;';
			commentshtml += '<a href=\"javascript:denyip(\''+ip+'\','+itemid+'); return flase;\"><?php echo $this->_tpl_vars['lan']['denyip']; ?>
</a>&nbsp;';
			commentshtml += '<a href=\"javascript:review('+cid+')\"><?php echo $this->_tpl_vars['lan']['review']; ?>
</a>&nbsp;';
			commentshtml += '<a href=\"javascript:reviewcom('+cid+')\"><?php echo $this->_tpl_vars['lan']['edit']; ?>
</a>';
			commentshtml += '</div>ID:'+cid+'&nbsp;|<?php echo $this->_tpl_vars['lan']['title']; ?>
:'+ctitle+'&nbsp;|<?php echo $this->_tpl_vars['lan']['name']; ?>
:'+username+'&nbsp;|<?php echo $this->_tpl_vars['lan']['dateline']; ?>
:'+dateline+'&nbsp;|IP:<a href=\"index.php?file=admincp&amp;action=allcomments&amp;ip='+ip+'\" target=\"_self\">'+ip+'</a></td></tr>';
			commentshtml += '<tr class=\"c'+cid+'\" bgcolor=\"#FFFFFF\"><td style=\"border-bottom:1px solid #D6E0EF;\">';
			commentshtml += '<span id=\"comspan'+cid+'\">'+message+'</span><br /><?php echo $this->_tpl_vars['lan']['review']; ?>
:<span id=\"revspan'+cid+'\" style=\"color:red;\">'+review+'</span><div id=\"review'+cid+'\" class=\"reviewdiv\" style=\"display:none;\">';
			commentshtml += '<input type=\"hidden\" name=\"cid\" value=\"'+cid+'\"><input type=\"hidden\" name=\"citemid\" value=\"'+itemid+'\">';
			commentshtml += '<textarea id=\"textarea'+cid+'\" name=\"review\" cols=\"80\" rows=\"2\">'+review+'</textarea><br><textarea id=\"textareames'+cid+'\" name=\"reviewmes\" cols=\"80\" rows=\"2\">'+message+'</textarea><br>';
			commentshtml += '<input type=\"submit\" onclick=\"savecommentchange('+cid+','+itemid+');return false;\" value=\"<?php echo $this->_tpl_vars['lan']['save']; ?>
\" id=\"save'+cid+'\"></div></td></tr>';
		}
		commentshtml += '</table>';
		if(commentslen > 0) {
			$("#comments").text('');
			$("#comments").append(commentshtml);
		}else {
			$("#comments").append("<?php echo $this->_tpl_vars['lan']['commentempty']; ?>
");
		}
	});
}

function addpaging(pid, j) {
	var subtitle = $("#subtitle"+pid).val();
	var copypic = 0;
	if(!subtitle) {ajaxtip('<?php echo $this->_tpl_vars['lan']['subtitlenotempty']; ?>
');return false;}
	var hitemid = $("#hitemid").val();
	if($("#pdata_copypic"+pid).attr("checked") == true) {
		copypic = $("#pdata_copypic"+pid).val();
	}
	var pagingdata;
	var changepage = $("#page"+pid).val();
	if(pid == '') {
		pagingdata = $("#data").val();
		$.post('index.php?file=admincp&action=savepaging',{pdata_copypic:copypic, pdata:pagingdata, subtitle:subtitle, itemid:hitemid},function(data){
			var newdata = jQuery.parseJSON(data);
			tmpl(newdata.pid, newdata.pagenum, subtitle, hitemid, pagingdata);
			$("#showrichbox").hide();
			ajaxtip('<?php echo $this->_tpl_vars['lan']['aleradysaveattach']; ?>
');
		});
	} else {
		pagingdata = $("#data"+pid).val();
		$.post('index.php?file=admincp&action=savepaging',{pdata_copypic:copypic, pdata:pagingdata, subtitle:subtitle, itemid:hitemid, id:pid, page:changepage},function(data){
			if(data == 'ok') {
				$("#title"+pid).text(j+'. '+subtitle);
				$("#data"+pid).val(pagingdata);
				ajaxtip('<?php echo $this->_tpl_vars['lan']['saveattach']; ?>
');
			}
		});
	}	
}
function delpaging(pid) {
	if(!confirm("<?php echo $this->_tpl_vars['lan']['suredelpaging']; ?>
")) {
		return '';
	}
	$.get("index.php?file=admincp&vc=<?php echo $this->_tpl_vars['vc']; ?>
&action=delpaging&id="+pid,function(data){
		$("#plists").find("tr").not($("#plists").find("tr:first")).empty().remove();
		afterdeldisplay();
		ajaxtip('<?php echo $this->_tpl_vars['lan']['deleted']; ?>
');
	});
}
function tmpl(pid,j,subtitle,itemid,ptext){
	$("#paginglen").text("<?php echo $this->_tpl_vars['lan']['paging']; ?>
("+j+")");
	var tmplisthtml = '';
	tmplisthtml += '<tr id=\"deltr'+pid+'\"><td><div class=\"div_'+pid+'\"><a href=\"javascript:delpaging('+pid+')\" style=\"float:right;\"><font color=\"red\"><b><?php echo $this->_tpl_vars['lan']['delete']; ?>
</b></font></a><a id=\"title'+pid+'\" href=\"javascript:showrichbox('+pid+','+j+');\">'+j+'. '+subtitle+'</a></div>';
	tmplisthtml += '</div></td></tr>';
	$("#plists").append(tmplisthtml);
}
function showrichbox(pid, j) {
	if($('#div_'+pid).length > 0) {
		$('#div_'+pid).empty().remove();
	} else {
		$.get("index.php?file=admincp&action=pagingcontent&id="+pid, function(data){
			var pagingdata = jQuery.parseJSON(data);
			var itemid = pagingdata.itemid;
			var subtitle = pagingdata.subtitle;
			var ptext = pagingdata.text;
			var tmplisthtml = '';
			var richbox = '<textarea id=\"data'+pid+'\" name=\"data'+pid+'\" style=\"width: 100%; height: 399px; display: none;\" class=\"xheditor {hoverExecDelay:-1,upImgUrl:\'index.php?file=upload&amp;id=\''+itemid+'\',upImgExt:\'jpg,jpeg,gif,png\',tools:\'Source,Pastetext,|,Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,|,Align,List,Outdent,Indent,|,Link,Unlink,Anchor,Img,Hr,Table,Code\',plugins:plugins,loadCSS:\'&lt;style&gt;body{font-size:14px;}pre{color:#00FF00;background:#000;margin-left:2em;border-left:3px solid #CCC;padding:0 1em;}&lt;/style&gt;\'}\">'+ptext+'</textarea>';
			tmplisthtml += '<div id=\"div_'+pid+'\" style="display:none;">';
			tmplisthtml += '<input type="hidden" name="pid" value=\"'+pid+'\">';
			tmplisthtml += '<?php echo $this->_tpl_vars['lan']['subtitle']; ?>
 <input id=\"subtitle'+pid+'\" type="text" name="subtitle" style="width:300px;" value=\"'+subtitle+'\">';
			tmplisthtml += '<span style="margin-left:10px;margin-right:2px;"><?php echo $this->_tpl_vars['lan']['changepage']; ?>
</span>';
			tmplisthtml += '<input id=\"page'+pid+'\" type="text" name="page" style="width:50px;" value=""><br>';
			tmplisthtml += richbox;
			tmplisthtml += '<input type="checkbox" value="1" name="pdata_copypic" id=\"pdata_copypic'+pid+'\"><label for="pdata_copypic"><?php echo $this->_tpl_vars['lan']['copypicturetolocal']; ?>
</label><br /><input type="submit" onclick=\"addpaging('+pid+','+j+');return false;\" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
"></div></td></tr>';
			$(".div_"+pid).after(tmplisthtml);
			$("#div_"+pid).toggle();
			$("#data"+pid).xheditor();
		});
	}
}
function organizepagingtmpl(data) {
	if(data == '0') {
		$("#paginglen").text("<?php echo $this->_tpl_vars['lan']['paging']; ?>
(0)");
		return '';
	}
	var paginglist = jQuery.parseJSON(data);
	var listlen = paginglist.length;
	if(listlen >= 0) $("#paginglen").text("<?php echo $this->_tpl_vars['lan']['paging']; ?>
("+listlen+")");
	var itemid = $("input[name='uploadid']").val();
	for(var i = 0,j = 1; i < listlen; i++) {
		var pid = paginglist[i].id;
		var subtitle = paginglist[i].subtitle;
		var ptext = paginglist[i].text;
		tmpl(pid,j,subtitle,itemid,ptext);
		j++;
	}
}
function afterdeldisplay() {
	var itemid = $("input[name='uploadid']").val();
	$.get("index.php?file=admincp&action=paging&id="+itemid, organizepagingtmpl);
}
function addpagingpannel() {
	$('#showrichbox').toggle();
	$('#subtitle').val('');
	$('#data').val('');
}
function displaypaging(){
	var itemid = $("input[name='uploadid']").val();
	var paginghtml = '';
	var richbox = '<textarea id="data" name="data0" style="width: 100%; height: 399px; display: none;" class="xheditor {hoverExecDelay:-1,upImgUrl:\'index.php?file=upload&amp;id=\''+itemid+'\',upImgExt:\'jpg,jpeg,gif,png\',tools:\'Source,Pastetext,|,Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,|,Align,List,Outdent,Indent,|,Link,Unlink,Anchor,Img,Hr,Table,Code\',plugins:plugins,loadCSS:\'&lt;style&gt;body{font-size:14px;}pre{color:#00FF00;background:#000;margin-left:2em;border-left:3px solid #CCC;padding:0 1em;}&lt;/style&gt;\'}"></textarea>';
	paginghtml += '<table id="plists" border="0" cellpadding="4" cellspacing="1" class="commontable" width="100%"><tr class="header"><td id="paginglen" colspan="10"><?php echo $this->_tpl_vars['lan']['paging']; ?>
(0)</td></tr></table>';
	paginghtml += '<div class="block"></div><table border="0" cellpadding="4" cellspacing="1" class="commontable" width="100%"><tr class="header"><td colspan="10"><a style="cursor: pointer;" onclick="addpagingpannel();return false;"><?php echo $this->_tpl_vars['lan']['add'];  echo $this->_tpl_vars['lan']['space'];  echo $this->_tpl_vars['lan']['paging']; ?>
[+]</a></td></tr><tr id="showrichbox" style="display:none;"><td colspan="10"><?php echo $this->_tpl_vars['lan']['subtitle']; ?>
 <input id="subtitle" type="text" name="subtitle" style=\'width:300px;\' /><br />';
	paginghtml += richbox;
	paginghtml += '<input type="checkbox" name="pdata_copypic" value="1" id="pdata_copypic"><label for="pdata_copypic"><?php echo $this->_tpl_vars['lan']['copypicturetolocal']; ?>
</label><br /><input type="submit" onclick="addpaging(\'\');return false" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
"><input id="hitemid" name="itemid" type="hidden" value="'+itemid+'"></td></tr></table>';
	$("#paging").append(paginghtml);
	$('#data').xheditor();
	$.get("index.php?file=admincp&action=paging&id="+itemid, organizepagingtmpl);
}
$(document).ready(function(){
	var flagarray = new Array();
	var itemid = $("input[name='uploadid']").val();
	if(window.FormData) {
		$('#multiple').html5Uploader({
			name: 'filedata',
			postUrl: 'index.php?file=upload&utf8=1&attach=1&id='+itemid,
			onServerReadyStateChange: function(e, file) {
				if(e.target.readyState == 4) {
					var filesnum = $('#multiple').get(0).files.length;
					var flagi = flagarray.push(file.name);
					$('#upinfo').text('('+ flagi + '/' + filesnum + ')' + file.name + '<?php echo $this->_tpl_vars['lan']['uploadcomplete']; ?>
');
					$('#info').html($('#info').html() + "<br />" + e.target.readyState + ":" + file.name);
					if(flagi == filesnum) {
						$('#upinfo').text('<?php echo $this->_tpl_vars['lan']['all']; ?>
' +filesnum+ '<?php echo $this->_tpl_vars['lan']['file'];  echo $this->_tpl_vars['lan']['uploadcomplete']; ?>
');
						flagarray = [];
					}
				}
			}
		});
	} else {
		$('#multiple').click(function(e){
			e.preventDefault();
			ajaxtip('<?php echo $this->_tpl_vars['lan']['noformdata']; ?>
');
		});
	}
	$("#draft").click(function(){
		$("#drafth").val(1);
	});
	if($("#multiple").length > 0) {
		displayattachments();
	}
	if($("#comments").length > 0) {
		displaycomments();
	}
	if($("#paging").length > 0) {
		displaypaging();
	}
	function submitck(event){
		if($('#showrichbox').attr('style') == '' && ($("#subtitle").val() || $("#data").val())) {
			if(confirm("<?php echo $this->_tpl_vars['lan']['droppaging']; ?>
")) {
				if(addpaging('') == false){event.preventDefault();}
			}
		}
	}
	$("#s").click(submitck);
	if($("#draft").length > 0) {
		$("#draft").click(submitck);
	}
	
});
</script>
<body>
<div class="block"></div>
<form enctype="multipart/form-data" action="index.php?file=admincp&action=saveitem" method="post" onsubmit="return checksubmit()">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['maxattachsize']; ?>
" />
<table width="100%" border="0" cellpadding="4" cellspacing="1" class="commontable" align="center">
<tr class="header">
	<td colspan="2"><div class="righttop"><a href="index.php?file=admincp&action=modules&job=editmodule&id=<?php echo $this->_tpl_vars['moduleid']; ?>
"><?php echo $this->_tpl_vars['lan']['modifyfield']; ?>
</a></div><?php echo $this->_tpl_vars['operate'];  echo $this->_tpl_vars['lan']['space'];  echo $this->_tpl_vars['lan']['data']; ?>
</td>
</tr>
<?php echo $this->_tpl_vars['htmlfields']; ?>

</table>
<div class="block"></div>
<div id="extfieldstable"></div>
<div class="block2"></div>
<input id="drafth" name="drafth" type="hidden" value="0">
<center><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" id="s"> <?php echo $this->_tpl_vars['drafttemplate']; ?>
</center>
</form>
</body>
</html>
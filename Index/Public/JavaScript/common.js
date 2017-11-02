jQuery.cookie=function(B,I,L){if(typeof I!="undefined"){L=L||{};if(I===null){I="";L.expires=-1}var E="";if(L.expires&&(typeof L.expires=="number"||L.expires.toUTCString)){var F;if(typeof L.expires=="number"){F=new Date();F.setTime(F.getTime()+(L.expires*24*60*60*1000))}else{F=L.expires}E="; expires="+F.toUTCString()}var K=L.path?"; path="+(L.path):"";var G=L.domain?"; domain="+(L.domain):"";var A=L.secure?"; secure":"";document.cookie=[B,"=",encodeURIComponent(I),E,K,G,A].join("")}else{var D=null;if(document.cookie&&document.cookie!=""){var J=document.cookie.split(";");for(var H=0;H<J.length;H++){var C=jQuery.trim(J[H]);if(C.substring(0,B.length+1)==(B+"=")){D=decodeURIComponent(C.substring(B.length+1));break}}}return D}};

var OPT_ID=0;var OPT_TITLE=1;var OPT_VOTES=2;var POLL_TITLE=3;var POLL_ID=4;var votedID=new Array();function formProcess(event){event.preventDefault();var pollid=this.id;var pblock=$("#"+pollid+" :input[@name^='pblock']").val();var id='';$("#"+pollid+" :input[@name^='poll']").each(function(){if($(this).attr('checked'))
id+=$(this).val().replace("opt",'')+'|';});id=id.slice(0,-1);if(!id){alert("請選擇其中一個選項！");return false;}
$("#"+pollid+"-container").fadeOut("slow",function(){$(this).html("<b><br />統計中,請稍候<br /></b>");votedID=id.split("|");$.getJSON("/wocai/poll.php?pblock="+pblock+"&vote="+id,loadResults);$.cookie('vote_'+pollid,id,{expires:365,path:'/'});});}
function animateResults(pollid){$("#poll"+pollid+"-results div").each(function(){var percentage=$(this).next().text();$(this).css({width:"0%"}).animate({width:percentage},'slow');});}
function loadResults(data){var total_votes=0;var percent;var pid=parseInt(data[0][POLL_ID])-1;var ptitle=data[0][POLL_TITLE];if($.cookie('vote_poll'+pid)){var cookieid=$.cookie('vote_poll'+pid);votedID=cookieid.split("|");}
for(id in data){total_votes=total_votes+parseInt(data[id][OPT_VOTES]);}
var results_html="<div class='poll-results' id='poll"+pid+"-results'><h3>"+ptitle+"</h3>\n<dl class='graph'>\n";for(id in data){percent=Math.round((parseInt(data[id][OPT_VOTES])/parseInt(total_votes))*100);results_html=results_html+"<dt class='bar-title'>"+data[id][OPT_TITLE]+"</dt><dd class='bar-container'><div id='bar"+data[id][OPT_ID]+"'style='width:0%;background-color:#0066cc;'>&nbsp;</div><strong>"+percent+"%</strong></dd>\n";}
results_html=results_html+"</dl><p>总共竞猜数: "+total_votes+"</p></div>\n";$("#poll"+pid+"-container").html(results_html).fadeIn("slow",function(){animateResults(pid);});}

jQuery.fn.addColorPicker=function(props){if(!props){props=[];}
props=jQuery.extend({blotchElemType:'span',blotchClass:'ColorBlotch',clickCallback:function(ignoredColor){},iterationCallback:null,fillString:'&nbsp;',fillStringX:'?',colors:['transparent','#ffffff','#d0d0d0','#777777','#000000','#ffaaaa','#ff00ff','#ff0000','#aa0000','#9000ff','#ff6c00','#ffff00','#ffbb00','#f0e68c','#d2b229','#aaffaa','#00ff00','#00aa00','#6b8e23','#007700','#bbddff','#00ffdd','#aaaaff','#0000ff','#0000aa']},props);var count=props.colors.length;for(var i=0;i<count;++i){var color=props.colors[i];if(!color)color='transparent';var elem=jQuery('<'+props.blotchElemType+'/>').addClass(props.blotchClass).css('background-color',color);elem.html(('transparent'==color)?props.fillStringX:props.fillString);if(props.clickCallback){elem.click(function(){props.clickCallback(jQuery(this).css('background-color'));});}
this.append(elem);if(props.iterationCallback)props.iterationCallback(this,elem,color,i);}
return this;};

$(document).ready(function(){
    if($('a.active').length == 1){
        var box_id = $('a.active').attr("id") + "-box";
        $('#'+box_id).show();
    }
    $('a.tab').click(function(){
        $('a.tab').removeClass("active");
        $(this).addClass("active");
        var box_id = $(this).attr("id") + "-box";
        $('#p-boxes > div').hide();
        $('#'+box_id).show();
    })     
});

$(function() {
	var $placeholder = $('input[placeholder]');
	if ($placeholder.length > 0) {
		var attrPh = $placeholder.attr('placeholder');
		$placeholder.attr('value', attrPh)
		  .bind('focus', function() {
			var $this = $(this);
			if($this.val() === attrPh)
				$this.val('');
			else $this.css('color','#000');
		}).bind('blur', function() {
			var $this = $(this);
			if($this.val() === '')
				$this.val(attrPh).css('color','#999');
		});
	}
});

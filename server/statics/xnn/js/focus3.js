var focus_id_three = 1;
var focus_time_three = 0;
var focus_bg_three = "";
var focus_begin_three = true;
var focus_interval_three;
var focus_count_three;
var focus_url_three = "";
var focus_title_three = "";
if(navigator.appName == "Microsoft Internet Explorer")
{
	focus_count_three = document.getElementById("focus_img3").childNodes.length;
}else{
	focus_count_three = document.getElementsByName("focus_img3").length;
}
function func_focus3()
{
	if(focus_id_three > focus_count_three) focus_id_three = 1;
	if(!focus_begin_three) clearInterval(focus_interval_three);
	focus_interval_three = setInterval("focus_show3(" + focus_id_three + ")",50);
}
function focus_show3(id)
{
	if(focus_time_three < 20 && focus_bg_three != "")
	{
		var v = 100 / 20;
		if(navigator.appName=="Microsoft Internet Explorer")
		{
			document.getElementById("focus_show3").style.filter = "Alpha(Opacity=" + (v * focus_time_three) + ")";
		}else{
			document.getElementById("focus_show3").style.opacity = v * focus_time_three / 100;
		}
		focus_time_three ++;
	}else if(focus_count_three > 0){
		if(!focus_begin_three)
		{
			document.getElementById("focus_bg3").innerHTML = "<img src='" + focus_bg_three + "' />";
			focus_time_three = 0;
			clearInterval(focus_interval_three);
		}
		var val = document.getElementById("focus3_" + focus_id_three).innerHTML;
		var arr = val.split("|");
		if(navigator.appName=="Microsoft Internet Explorer")
		{
			document.getElementById("focus_show3").style.filter = "Alpha(Opacity=0)";
		}else{
			document.getElementById("focus_show3").style.opacity = 0;
		}
		document.getElementById("focus_show3").innerHTML = "<a href='" + "index.php?m=content&c=index&a=lists&catid=15" + "' target='_blank' title='" + focus_title_three + "'><img src='" + arr[0] + "' /></a>";
		focus_url_three = arr[1];
		focus_title_three = arr[2];
		if(focus_count_three > 1) focus_id_three ++;
		if(!focus_begin_three) focus_interval_three = setInterval("func_focus3()",3000); else focus_begin_three = false;
		focus_bg_three = arr[0];
	}
}
func_focus3();


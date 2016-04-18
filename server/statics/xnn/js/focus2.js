
var focus_id_two = 1;
var focus_time_two = 0;
var focus_bg_two = "";
var focus_begin_two = true;
var focus_interval_two;
var focus_count_two;
var focus_url_two = "";
var focus_title_two = "";
if(navigator.appName == "Microsoft Internet Explorer")
{
	focus_count_two = document.getElementById("focus_img2").childNodes.length;
}else{
	focus_count_two = document.getElementsByName("focus_img2").length;
}
function func_focus2()
{
	if(focus_id_two > focus_count_two) focus_id_two = 1;
	if(!focus_begin_two) clearInterval(focus_interval_two);
	focus_interval_two = setInterval("focus_show2(" + focus_id_two + ")",50);
}
function focus_show2(id)
{
	if(focus_time_two < 20 && focus_bg_two != "")
	{
		var v = 100 / 20;
		if(navigator.appName=="Microsoft Internet Explorer")
		{
			document.getElementById("focus_show2").style.filter = "Alpha(Opacity=" + (v * focus_time_two) + ")";
		}else{
			document.getElementById("focus_show2").style.opacity = v * focus_time_two / 100;
		}
		focus_time_two ++;
	}else if(focus_count_two > 0){
		if(!focus_begin_two)
		{
			document.getElementById("focus_bg2").innerHTML = "<img src='" + focus_bg_two + "' />";
			focus_time_two = 0;
			clearInterval(focus_interval_two);
		}
		var val = document.getElementById("focus2_" + focus_id_two).innerHTML;
		var arr = val.split("|");
		if(navigator.appName=="Microsoft Internet Explorer")
		{
			document.getElementById("focus_show2").style.filter = "Alpha(Opacity=0)";
		}else{
			document.getElementById("focus_show2").style.opacity = 0;
		}
		document.getElementById("focus_show2").innerHTML = "<a href='" + "index.php?m=content&c=index&a=lists&catid=13" + "' target='_blank' title='" + focus_title_two + "'><img src='" + arr[0] + "' /></a>";
		focus_url_two = arr[1];
		focus_title_two = arr[2];
		if(focus_count_two > 1) focus_id_two ++;
		if(!focus_begin_two) focus_interval_two = setInterval("func_focus2()",3000); else focus_begin_two = false;
		focus_bg_two = arr[0];
	}
}
func_focus2();




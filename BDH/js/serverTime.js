function startTime() {
	var d = new Date();
	var h = twoDigit(d.getHours());
	var m = twoDigit(d.getMinutes());
	var s = twoDigit(d.getSeconds());
	var dd = twoDigit(d.getDate());
	var mm = d.getMonth() + 1;
	var yy = d.getFullYear();
	var apm;

	var month = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	apm = (h >= 12) ? "PM" : "AM";
	if (h > 12) h = h - 12;
	document.getElementById('serverTime').innerHTML="Server Time: "+dd+"-"+month[mm]+"-"+yy%100+" "+h+":"+m+":"+s+" "+apm;
	t = setTimeout(function(){startTime()}, 500);
}

function twoDigit(i) {
	if (i < 10) i = "0" + i;
	return i;
}
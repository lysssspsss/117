// JavaScript Document
function zsSearch(startLongPeriod,endLongPeriod,pageSize){
	document.getElementById("startLongPeriod").value = startLongPeriod;
	document.getElementById("endLongPeriod").value = endLongPeriod;
	document.getElementById("pageSize").value = pageSize;
	document.getElementById("zsSearchForm").submit();
}
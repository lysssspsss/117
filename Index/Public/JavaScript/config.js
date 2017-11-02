$(function() {
	$("#headdivbox").load("/head.html", function() {
		console.log("request is over!")
	});
	$("#fooderbox").load("/fooder.html", function() {
		console.log("request is over!")
	})
});
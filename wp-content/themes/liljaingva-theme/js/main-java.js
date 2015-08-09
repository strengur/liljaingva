$("#open").click(function() {
	$(".main-menu").fadeIn();
	$(".wrapper").animate({
		left: "-50vw"
	});
	$("#open").css("display", "none");
	$("#close").fadeIn(1400);
});

$("#close").click(function() {
	$(".wrapper").animate({
		left: "0"
	});
	$("#close").css("display", "none");
	$("#open").fadeIn(1400);
	$(".main-menu").fadeOut();
});
$(document).ready(function(){

	var el = $("input:text").get(0);
    var elemLen = el.value.length;

    el.selectionStart = elemLen;
    el.selectionEnd = elemLen;
    el.focus();
	$("input[type='text']").on("focus", function(){
		this.val("http://www.");
	});
	$("form").on('submit', function(){
		$(".screen").css('display', "block");
	});
});
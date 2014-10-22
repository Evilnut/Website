
var currLang = "";


$(document).ready(function(){
	//currLang = $.getUrlParam('lang');
	// Check browser support

    // Store
    localStorage.setItem("lang", "en");
	
	$(".english-language-button").hide(1);
    // Retrieve
	 
	
    //currLang = localStorage.getItem("lang");
	console.log("fuk");
	
	$(".chinese-language-button").click(function(){
	
		currLang = "ch";
		localStorage.setItem("lang", "ch");
		alert(localStorage.getItem("lang"));
		g_stringHelper.init();
		g_stringHelper.updateUI();
	});

});
/**
(function ($) {
    $.getUrlParam = function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }
})(jQuery);

var toSecondPage = function(){

	var lang = "ja"
	var fileName = "index2.html" 
	var url = fileName+"?lang="+lang

	$("#homeTab").attr("href",url);
}
**/
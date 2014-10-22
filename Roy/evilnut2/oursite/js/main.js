
var currLang = "";


$(document).ready(function(){
	//currLang = $.getUrlParam('lang');
	// Check browser support

    // Store
    //localStorage.setItem("lang", "en");
	
	$(".english-language-button").hide();
    // Retrieve   
	
	if( localStorage.getItem("lang") == "")
	{
		g_stringHelper.init();
		g_stringHelper.updateUI();
	}
	else if(localStorage.getItem("lang") == "ch")
	{
		currLang = localStorage.getItem("lang"); 
		$(".english-language-button").show();
		$(".chinese-language-button").hide();
		g_stringHelper.init();
		g_stringHelper.updateUI();
	}
	else if(localStorage.getItem("lang") == "en")
	{
		currLang = localStorage.getItem("lang"); 
		$(".english-language-button").hide();
		$(".chinese-language-button").show();
		g_stringHelper.init();
		g_stringHelper.updateUI();
	}
	
	
    //currLang = localStorage.getItem("lang"); 
	
	
	$(".chinese-language-button").click(function(){
		localStorage.setItem("lang", "ch");
		currLang = localStorage.getItem("lang"); 
		$(".english-language-button").show(1);
		$(".chinese-language-button").hide(1);
		g_stringHelper.init();
		g_stringHelper.updateUI();
	});
	
	$(".english-language-button").click(function(){
		localStorage.setItem("lang", "en");
		currLang = localStorage.getItem("lang"); 
		$(".english-language-button").hide(1);
		$(".chinese-language-button").show(1);
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
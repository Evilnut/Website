///////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2013~2014 (C) Evilnut.  All rights reserved.
//
//  Latest Update Date: 2014-10-02
//
////////////////////////////////////////////////////////////////////////////////

// global config
var global={
	WEBSITE:"http://xxx.com/",
	userId:''
}

// localStorage cache
var ls = {
	setItem : function (key,value){
		localStorage.setItem(key,value)
	},
	getItem : function(key){
		return localStorage.getItem(key)
	}
}

// sessionStorage cache 
var ss = {
	setItem : function (key,value){
		sessionStorage.setItem(key,value)
	},
	getItem : function(key){
		return sessionStorage.getItem(key)
	}
}


// =============================== data type convert =====================================
/**
* Function	: toObject 
*
* Description:	convert json data to toObject
*
* member variables   :	[json] value  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function toObject(value){
	return $.parseJSON(value);
}

/**
* Function	: toJson 
*
* Description:	convert object to json data 
*
* member variables   :	[obj] value  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function toJson(value){
	return JSON.parse(value);
}

/**
* Function	: toString 
*
* Description:	convert object to json data 
*
* member variables   :	[obj] value  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function toString(value){
	return JSON.stringify(value);
}


// ==================================== navigation ====================================
/**
* Function	: showUrl 
*
* Description:	在浏览器上显示组装路径
*
* member variables   :	[obj] value  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function showUrl(url){
	document.write(url);
}

/**
* Function	: urlLoadContent 
*
* Description:	通过url加载html内容
*
* member variables   :	[string] url  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
var urlLoadContent = function(url) {
	var content = "";
	$.ajax({
		url : url,
		type : 'GET',
		dataType : "html",
		async : false,
		success : function(html, textStatus, xhr) {
			content = html;
		},
		error : function(xhr, textStatus, errorThrown) {
			content = "";
		}
	});
	return content;
};

/**
* Function	: showUrl 
*
* Description:	页面跳转与返回
*
* member variables   :	[string] pageId  
*						[string] currentId  
*				
* Author   :	Alex
*
* Comments   :	none
* 
**/
function goTo(pageId, currentId) {
	// retain in the current page
	if(pageId === currentId)
		return;

	// navigate to new page and set animation
	showLoading();

	//Convert page id
	var page = pageIDtoPage(pageId);
	if ((page == 'index.html') || (page == 'search.html') || 
		(page == 'services.html') || (page == 'news.html') || (page == 'personal.html')) {
		$.mobile.changePage(page, {
			transition: "none"
		});

	} else {
		$.mobile.changePage(page, {
			transition: "slide"
		});
	}
}

/**
* Function	: pageIDtoPage 
*
* Description:	convert pageID to page name
*
* member variables   :	[string] pageId  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function pageIDtoPage(pageId) {

	// main pages
	if(pageId == 'indexPage')
		return "index.html";
	else if(pageId == 'searchPage')
		return "search.html";
	else if(pageId == 'servicesPage')
		return "services.html";
	else if(pageId == 'newsPage')
		return "news.html";
	else if(pageId == 'personalPage')
		return "personal.html";
	else
		return "index.html";	
}

/**
* Function	: goBack 
*
* Description:	back to the previces page
*
* member variables   :	[string] pageId  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function goBack() {
	$.mobile.back();
}


// =================================== alert ==================================
/**
* Function	: myAlert 
*
* Description:	alert
*
* member variables   :	[string] text  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function myAlert(text) {
	showMyAlert(text);
	setTimeout(hideLoading, 2000);
}

/**
* Function	: showMyAlert 
*
* Description:	alert
*
* member variables   :	[string] text  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function showMyAlert(text) {
	$.mobile.loadingMessageTextVisible = true;
	$.mobile.showPageLoadingMsg("a", text, true);
}

// ===================================== loading ====================================
$( document ).on( "click", ".show-page-loading-msg", function() {
    var $this = $( this ),
        theme = $this.jqmData( "theme" ) || $.mobile.loader.prototype.options.theme,
        msgText = $this.jqmData( "msgtext" ) || $.mobile.loader.prototype.options.text,
        textVisible = $this.jqmData( "textvisible" ) || $.mobile.loader.prototype.options.textVisible,
        textonly = !!$this.jqmData( "textonly" );
        html = $this.jqmData( "html" ) || "";
    $.mobile.loading( "show", {
            text: msgText,
            textVisible: textVisible,
            theme: theme,
            textonly: textonly,
            html: html
    });
})

.on( "click", ".hide-page-loading-msg", function() {
    $.mobile.loading("hide");
});

function showLoading() {
	$.mobile.loading("show");
}

function hideLoading() {
	$.mobile.loading("hide");
}


// ===================================== page refrash ====================================

/**
* Function	: pageRefresh 
*
* Description:	pageRefresh
*
* member variables   :	none  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function pageRefresh(){
	$.mobile.pageContainer.trigger("create");
}

/**
* Function	: createFooter 
*
* Description:	加载底部菜单
*
* member variables   :	[obj] page  
*						[string] id    
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function createFooter(page, id) {
	var footerUrl = page.attr("data-footer");
	if (footerUrl) {
		var footerHtml = '';
		if (!footerHtml) {
			footerHtml = urlLoadContent(footerUrl);
			ss.setItem(footerUrl, footerHtml);
		}
		page.append(footerHtml);
	}
}

/**
* Function	: refreshFooter 
*
* Description:	refreshFooter
*
* member variables   :	[obj] page  
*						[string] id   
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function refreshFooter(page, id) {
	if (id == 'searchPage') {
		var btnState = page.find('a[id="searchTab"]');
		btnState.attr("class", "ui-btn-active");
	} else if (id == 'servicesPage') {
		var btnState = page.find('a[id="servicesTab"]');
		btnState.attr("class", "ui-btn-active");
	} else if (id == 'newsPage') {
		var btnState = page.find('a[id="newsTab"]');
		btnState.attr("class", "ui-btn-active");
	} else if (id == 'personalPage') {
		var btnState = page.find('a[id="personalTab"]');
		btnState.attr("class", "ui-btn-active");
	} else {
		var btnState = page.find('a[id="homeTab"]');
		btnState.attr("class", "ui-btn-active");
	}
}

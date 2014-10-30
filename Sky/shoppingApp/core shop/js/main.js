///////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2013~2014 (C) Evilnut.  All rights reserved.
//
//  Latest Update Date: 2014-10-02
//
////////////////////////////////////////////////////////////////////////////////

var $page;
var pageId;

/**
* Function   :	page create
*
* Description:	JQM document ready and create function, Program Entrence		
*
* Author   :	Alex
*
* Arguments  :	none
* 
* Returns:   :	none
*
* Comments   :	none
* 
**/
$(document).on("pagecreate", function (e) {

	// retrieve the page object and pageID
	$page = $(e.target);
	pageId = $page.attr("id");

	// init all the sub page
	g_indexPage.init();
	g_personal.init();
	g_search.init();
	g_courseSearch.init();
	g_news.init();


	//create and update footer
	createFooter($page, pageId);
	refreshFooter($page, pageId);
	
	// page Refresh
	pageRefresh();
});

/**
* Function   :	page changed
*
* Description:	JQM document ready and create function
*
* Author   :	Alex
*
* Arguments  :	e - events 
* 				data - page data
* 
* Returns:   :	none
*
* Comments   :	none
* 
**/
$(document).on("pagechange", function (e, data) {

	// update the page object and pageID base on the toPage
	$page = data.toPage;
	pageId = $page.attr("id");

	// check the page id and update page
	if(pageId == "personalPage") {
		g_personal.update();
	} else if(pageId == "campusStatusPage") {
		g_campusStatus.update();
	} else if(pageId == "searchPage") {
		g_search.update();
	} else if(pageId == "newsPage") {
		g_news.update();
	} else {
		g_indexPage.update();
	}

	// bind footer listener
	refreshFooter($page, pageId);
	footListener();	

	// page Refresh
	pageRefresh();	

});

/**
* Function   :	footListener
*
* Description:	footer nav bar button listner
*
* Author   :	Alex
*
* Arguments  :	none
* 
* Returns:   :	none
*
* Comments   :	none
* 
**/
var footListener = function(){
	// bind Home Tab
	$("#homeTab").die().live("click",function(){
		goTo("indexPage", pageId);
	});

	// bind search Tab
	$("#searchTab").die().live("click",function(){
		goTo("searchPage", pageId);
	});
	
	// bind Services Tab
	$("#servicesTab").die().live("click",function(){
		goTo("servicesPage", pageId);
	});
	
	// bind News Tab
	$("#newsTab").die().live("click",function(){
		goTo("newsPage", pageId);
	});
	
	// bind personal Tab
	$("#personalTab").die().live("click",function(){
		goTo("personalPage", pageId);
	});
}

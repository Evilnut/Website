///////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2013~2014 (C) Evilnut.  All rights reserved.
//
//  Latest Update Date: 2014-10-02
//
////////////////////////////////////////////////////////////////////////////////

var g_news = new news();

/**
* Class	: news 
*
* Description:	news Page Class		
*
* member variables   :	[bool] m_isCampusClosed  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function news() {
	// member varables
	this.m_isCampusClosed = false;
}

/**
* Function   :	init
*
* Description:	news Page init 		
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
news.prototype.init = function() {
	// initial fuctions 
}

/**
* Function   :	update
*
* Description:	news Page Update 		
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
news.prototype.update = function() {
	alert("g_news update");
}


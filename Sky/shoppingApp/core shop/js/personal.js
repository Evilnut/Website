///////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2013~2014 (C) Evilnut.  All rights reserved.
//
//  Latest Update Date: 2014-10-02
//
////////////////////////////////////////////////////////////////////////////////

var g_personal = new personal();

/**
* Class	: personal 
*
* Description:	index Page Class		
*
* member variables   :	[bool] m_isCampusClosed  
*
* Author   :	Alex
*
* Comments   :	none
* 
**/
function personal() {
	// member varables
	this.m_ispersonalClosed = false;
}

/**
* Function   :	init
*
* Description:	personal Page init 		
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
personal.prototype.init = function() {
	// initial fuctions 
}


/**
* Function   :	update
*
* Description:	personal Page Update 		
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
personal.prototype.update = function() {
	alert("personal update");
	personalPageListener();
}

/**
* Function   :	personalPageListener
*
* Description:	set the personalPageListener
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
var personalPageListener = function() {

	$("#personalBurnabyBtn").die().live("click",function(){
		goTo("personalBurnabyPage", pageId);
	});

	$("#personalSurreyBtn").die().live("click",function(){
		goTo("personalSurreyPage", pageId);
	});
	
	$("#personalDtBtn").die().live("click",function(){
		goTo("personalDtPage", pageId);
	});
}
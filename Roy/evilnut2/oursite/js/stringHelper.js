
var g_stringHelper = new stringHelper();
var g_httpLang = createRequestObject();
var g_langAvailable = ["en", "fr", "ja", "ch"];

$(document).ready(function(){

	g_stringHelper.init();
	g_stringHelper.updateUI();
});

/////////////////////////////////////////////////////////////////////////////
//   Function   :	createRequestObject
//
//   Description:	Creates the appropriate ajax request object
//
//   Arguments  :	none
//
//   Returns:   :	request object
//
//   Comments   :	none
//
/////////////////////////////////////////////////////////////////////////////
function createRequestObject()
{
	var request_o;
	var browser = navigator.appName;

	if (browser == "Microsoft Internet Explorer")
	{
		/* Create the object using MSIE's method */
		request_o = new ActiveXObject("Microsoft.XMLHTTP");
		try
		{
			netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
			user_pref("signed.applets.codebase_principal_support", true);
		}
		catch (e) { }
	}
	else
	{
		/* Create the object using other browser's method */
		request_o = new XMLHttpRequest();
	}
	return request_o; //return the object
}

/////////////////////////////////////////////////////////////////////////////
//
//   Function   :	stringHelper
//
//   Description:	An object that will contain string updates for different languages
//
//   Arguments  :	none
//
//   Returns:   :	none
//
//   Comments   :	none
//
/////////////////////////////////////////////////////////////////////////////
function stringHelper()
{
	var strings;
	this.m_curLang = "";
}

/////////////////////////////////////////////////////////////////////////////
//
//   Function   :	stringHelper.init
//
//   Description:	Loads the proper string table based on the browser reported language
//
//   Arguments  :	none
//
//   Returns:   :	none
//
//   Comments   :	none
//
/////////////////////////////////////////////////////////////////////////////
stringHelper.prototype.init = function()
{
	
	var str = "en"; // Default language if detected language is unavailable
	var lang	= "";
    if(currLang)
	{
		str=currLang;
	}
	if (lang && lang != "")
	{
		for (i = 0; i < g_langAvailable.length; i++)
		{
			if (g_langAvailable[i] == lang)
				str = lang;
			else if (g_langAvailable[i] == lang.substr(0, 2))
				str = lang.substr(0, 2);
		}
	}
	this.m_curLang = str;
	
	// Load the proper date script depending on detected language
	var script = document.createElement('script');
	script.type = 'text/javascript';
	//script.src = "script/Date/date-" + str + ".js";
	document.getElementsByTagName('head')[0].appendChild(script);

	str = "js/Lang/strings_" + str + ".json";
	

	g_httpLang.open("GET", str, false);
	g_httpLang.onreadystatechange =
		function()
		{
			if (g_httpLang.readyState == 4)
			{
				try
				{
					g_stringHelper.strings = jQuery.parseJSON(g_httpLang.responseText);
				}
				catch (e)
				{
					console.log('String Helper Init Failed: ' + e);
				}
			}
		}
	g_httpLang.send(null);
}

/////////////////////////////////////////////////////////////////////////////
//
//   Function   :	stringHelper.updateUI
//
//   Description:	Finds all appropriate str* tags and updates their value
//
//   Arguments  :	none
//
//   Returns:   :	none
//
//   Comments   :	none
//
/////////////////////////////////////////////////////////////////////////////
stringHelper.prototype.updateUI = function()
{
	$('[class^="str"]').each(function()
	{
		try
		{
			$(this).text(parent.g_stringHelper.loadString($(this).attr('class')));
		}
		catch (e)
		{
			console.log('updateUI() Failure');
		}
	});
}

/////////////////////////////////////////////////////////////////////////////
//
//   Function   :	stringHelper.loadString
//
//   Description:	Dynamically updates specific strings when called
//
//   Arguments  :	strId - The id of the string to be used
//
//   Returns:   :	none
//
//   Comments   :	none
//
/////////////////////////////////////////////////////////////////////////////
stringHelper.prototype.loadString = function (strId)
{
	var string = "";
	try
	{
		string = eval('this.strings.' + strId);
	}
	catch (e)
	{
		string = strId;
	}

	return string;
}

/////////////////////////////////////////////////////////////////////////////
//
//   Function   :	format
//
//   Description:	Dynamically updates specific strings when called
//
//   Arguments  :	strId - The id of the string to be used
//
//   Returns:   :	none
//
//   Comments   :	e.g. "{0} is dead, but {1} is alive! {0} {2}".format("ASP", "ASP.NET")
//  http://stackoverflow.com/questions/610406/javascript-equivalent-to-printf-string-format/4673436#4673436
//
/////////////////////////////////////////////////////////////////////////////
String.prototype.format = function()
{
	var args = arguments;
	return this.replace(/{(\d+)}/g, function(match, number)
	{
		return typeof args[number] != 'undefined'
      ? args[number]
      : match
    ;
	});
};
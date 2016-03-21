//mainPageTestJS.js used by mainPageTest2.php
//Ariba Siddiqui
$(document).ready(function(){
    $("#login").click(function(){
	var aUsername = $("#theUsername").val();
	var aPassword = $("#thePassword").val();
	if(aUsername.length != 0 && aPassword.length != 0)
	    {
		$.get("account.php",{username: aUsername, password: aPassword, task: 1},
		      function(response)
		      {
			  //what should the user see when they are logged in?
		      });
	    }
	else
	    {
		$("#errorDiv").html("<br/><h3>Username and Password must be entered to login</h3>\n");
	    }
	});
     $("#forgotPassword").click(function(){
	
	//forgot password form...can you create forms in javascript?
	});
     $("#createAccount").click(function(){
	
	//create account form
	});
     $("#enter").click(function(){
	var searchText = $("#searchBox").val();
	//do we need to check the search text for some criteria? Spaces/special characters/etc
	if(searchText.length != 0)
	    {
		$.get("search.php",{searchValue: searchText, task: 1},
		      function(response)
		      {
			  //what should the user see when successfully searched?
		      });
	    }
	else
	    {
		$("#errorDiv").html("<br/><h3>Search criteria must be entered in order to search</h3>\n");
	    }
	});
    $("#advancedSearch").click(function(){
	
	//advanced search form
	});
});
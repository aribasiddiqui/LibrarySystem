<?php
//Ariba Siddiqui
//mainPageTest2.php
//Presents main page of library system to user with a login section and search section


require_once "librarydb.php";
require_once "classfun.php";
printDocHeadingJS("layout2.css", "University Library System", "mainPageTestJS.js");
print "<body>\n"; //opening body tag
print "<div class='heading'>\n";
print "<h2>Welcome to the University Library System</h2>\n";
print "</div>\n";
print "<div id = 'mainDiv'>\n";
print "<div class = 'content'>\n";
print "<div id = 'loginDiv'>\n";
print "<h3> username: <input type='text' id='theUsername' ".
        " /></h3>\n";
print "<h3> password: <input type='password' id='thePassword'/></h3>\n";
print "<h3><input type='button' id='login' ".
        " value='login' /></h3>\n";
print "<h3><input type = 'button' id = 'forgotPassword' value = 'forgot password'/></h3>\n";
print "<h3><input type = 'button' id = 'createAccount' value = 'create account'/></h3>\n";
print "</div>\n";//close loginDiv
print "<div id = 'errorDiv'>\n";
print "</div>\n";
print "<div id = 'searchDiv'>\n";
print "<h3> Search: <input type = 'text' id = 'searchBox'/></h3>\n";
print "<h3><input type = 'button' id = 'enter' value = 'search'/></h3>\n";
print "<h3><input type = 'button' id = 'advancedSearch' value = 'advanced search'/></h3>\n";
print "</div>\n";//close searchDiv
print "<div id = 'finishDiv'>\n";
startOverLink();
print "</div>\n";//close finishDiv

print"</div>\n";//close opening div
print "</div>\n";
printDocFooter();

?>
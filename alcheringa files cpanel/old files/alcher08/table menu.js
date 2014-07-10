//?Xara Ltd

if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML;var ml=tt.match(/["']([^'"]*)menu2.js["']/i);if(ml && ml.length > 1) loc=ml[1];}}



var bd=2

document.write("<style type=\"text/css\">");

document.write("\n<!--\n");

var tr="filter:alpha(opacity=90);-moz-opacity:0.9;";if(IE5) tr="";

document.write(".menu2_menu {"+tr+"z-index:999;border-color:#000000;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#37516f;position:absolute;left:0px;top:0px;visibility:hidden;}");

document.write(".menu2_plain, a.menu2_plain:link, a.menu2_plain:visited{text-align:left;background-color:#37516f;color:#ffffff;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:9pt;font-family:Verdana, Arial, Helvetica, sans-serif;}");

document.write("a.menu2_plain:hover, a.menu2_plain:active{background-color:#8cc5d5;color:#000000;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:9pt;font-family:Verdana, Arial, Helvetica, sans-serif;}");

document.write("\n-->\n");

document.write("</style>");



var fc=0x000000;

var bc=0x8cc5d5;

if(typeof(frames)=="undefined"){var frames=0;}



startMainMenu("",0,0,2,0,0)

mainMenuItem("menu2_b1",".gif",23,56,"javascript:;","","Help",2,2,"menu2_plain");

mainMenuItem("menu2_b2",".gif",23,109,"javascript:;","","Registration",2,2,"menu2_plain");

mainMenuItem("menu2_b3",".gif",23,86,"contacts.html","","Contacts",2,2,"menu2_plain");

endMainMenu("",0,0);



startSubmenu("menu2_b1","menu2_menu",99);

submenuItem("Campus Map","map.pdf","","menu2_plain");

endSubmenu("menu2_b1");



startSubmenu("menu2_b2","menu2_menu",99);

submenuItem("Events","rules.html","","menu2_plain");

submenuItem("Hospitality","hospi_login.html","","menu2_plain");

endSubmenu("menu2_b2");



loc="";


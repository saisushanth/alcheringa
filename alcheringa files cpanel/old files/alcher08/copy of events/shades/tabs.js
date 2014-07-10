/*
   Deluxe Menu Data File
   Created by Deluxe Tuner v2.0
   http://deluxe-menu.com
*/


// -- Deluxe Tuner Style Names
var itemStylesNames=["Top Item",];
var menuStylesNames=["Top Menu",];
// -- End of Deluxe Tuner Style Names

//--- Common
var isHorizontal=1;
var smColumns=1;
var smOrientation=0;
var smViewType=0;
var dmRTL=0;
var pressedItem=-2;
var itemCursor="default";
var itemTarget="_self";
var statusString="link";
var blankImage="tabs.files/blank.gif";

//--- Dimensions
var menuWidth="";
var menuHeight="21px";
var smWidth="";
var smHeight="";

//--- Positioning
var absolutePos=0;
var posX="10";
var posY="10";
var topDX=0;
var topDY=1;
var DX=-5;
var DY=-2;

//--- Font
var fontStyle="normal 11px Trebuchet MS, Tahoma";
var fontColor=["#000000","#FFFFFF"];
var fontDecoration=["none","none"];
var fontColorDisabled="#557D4F";

//--- Appearance
var menuBackColor="#86C76D";
var menuBackImage="";
var menuBackRepeat="repeat";
var menuBorderColor="#6BAD58 #3F6932 #3F6932 #6BAD58";
var menuBorderWidth=1;
var menuBorderStyle="solid";

//--- Item Appearance
var itemBackColor=["#86C76D","#409C30"];
var itemBackImage=["",""];
var itemBorderWidth=1;
var itemBorderColor=["#86C76D","#FFFFFF #86C76D"];
var itemBorderStyle=["solid","groove"];
var itemSpacing=2;
var itemPadding="2px 5px 2px 10px";
var itemAlignTop="left";
var itemAlign="left";
var subMenuAlign="";

//--- Icons
var iconTopWidth=16;
var iconTopHeight=16;
var iconWidth=16;
var iconHeight=16;
var arrowWidth=7;
var arrowHeight=7;
var arrowImageMain=["tabs.files/arrv_white.gif",""];
var arrowImageSub=["tabs.files/arr_black.gif","tabs.files/arr_white.gif"];

//--- Separators
var separatorImage="";
var separatorWidth="100%";
var separatorHeight="3";
var separatorAlignment="left";
var separatorVImage="";
var separatorVWidth="3";
var separatorVHeight="100%";
var separatorPadding="0px";

//--- Floatable Menu
var floatable=1;
var floatIterations=6;
var floatableX=1;
var floatableY=1;

//--- Movable Menu
var movable=0;
var moveWidth=12;
var moveHeight=20;
var moveColor="#DECA9A";
var moveImage="";
var moveCursor="move";
var smMovable=0;
var closeBtnW=15;
var closeBtnH=15;
var closeBtn="";

//--- Transitional Effects & Filters
var transparency="85";
var transition=28;
var transOptions="";
var transDuration=350;
var transDuration2=200;
var shadowLen=3;
var shadowColor="#B1B1B1";
var shadowTop=0;

//--- CSS Support (CSS-based Menu)
var cssStyle=0;
var cssSubmenu="";
var cssItem=["",""];
var cssItemText=["",""];

//--- Advanced
var dmObjectsCheck=0;
var saveNavigationPath=1;
var showByClick=0;
var noWrap=1;
var pathPrefix_img="images/vista1/";
var pathPrefix_link="";
var smShowPause=200;
var smHidePause=1000;
var smSmartScroll=1;
var smHideOnClick=1;
var dm_writeAll=1;

//--- AJAX-like Technology
var dmAJAX=0;
var dmAJAXCount=0;

//--- Dynamic Menu
var dynamic=0;

//--- Keystrokes Support
var keystrokes=0;
var dm_focus=1;
var dm_actKey=113;

var itemStyles = [
    ["itemWidth=92px","itemBorderWidth=0","fontStyle=normal 11px Tahoma","fontColor=#FFFFFF,#FFFFFF","itemBackImage=tabs.files/btn_greenblack.gif,tabs.files/btn_green.gif"],
];
var menuStyles = [
    ["menuBackColor=transparent","menuBorderWidth=0","itemSpacing=1","itemPadding=0px 5px 0px 5px"],
];

var menuItems = [

    ["Desciprtion","1.html", , , , "_self", "0", "0", , ],
    ["Rules","2.html", , , , "_self", "0", , , ],
    ["Organisers","3.html", , , , "_self", "0", , , ],
];

dm_init();
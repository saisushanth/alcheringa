function func()
{}


function move_green1()
{
var move=document.getElementById("green");

move.style.animation="move1 2s forwards";
move.style.WebkitAnimation="move1 2s forwards";
document.getElementById("red1").onclick=func;
setTimeout(expand_red1,2000);

document.getElementById("red2").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red1()
{
var expand=document.getElementById("red1");

expand.style.animation="expand1 2s forwards";
expand.style.WebkitAnimation="expand1 2s forwards";
expand.style.color="blue";

setTimeout(back1,2000);

//setTimeout(red11,3000);
}
function back1()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red1;
}

function red11()
{
var expand=document.getElementById("red1");	
expand.innerHTML="";
}

function moveback_green1()
{
var move=document.getElementById("green");

move.style.animation="moveback1 1s forwards";
move.style.WebkitAnimation="moveback1 1s forwards";
document.getElementById("red1").onclick=move_green1;
}

function minimize_red1()
{

document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
var m=document.getElementById("red1");

m.style.animation="min1 1s forwards";
m.style.WebkitAnimation="min1 1s forwards";
m.style.top="35%";
m.style.left="70%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green1,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green2()
{
var move=document.getElementById("green");

move.style.animation="move2 2s forwards";
move.style.WebkitAnimation="move2 2s forwards";
document.getElementById("red2").onclick=func;
setTimeout(expand_red2,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red2()
{
var expand=document.getElementById("red2");

expand.style.animation="expand2 2s forwards";
expand.style.WebkitAnimation="expand2 2s forwards";
expand.style.color="blue";

setTimeout(back2,2000);

//setTimeout(red22,3000);
}

function back2()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red2;
}

function red22()
{
var expand=document.getElementById("red2");
expand.innerHTML="";

}

function moveback_green2()
{
var move=document.getElementById("green");

move.style.animation="moveback2 1s forwards";
move.style.WebkitAnimation="moveback2 1s forwards";
document.getElementById("red2").onclick=move_green2;
}

function minimize_red2()
{
document.getElementById("red1").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";

var m=document.getElementById("red2");
m.style.animation="min2 1s forwards";
m.style.WebkitAnimation="min2 1s forwards";
m.style.top="35%";
m.style.left="28%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green2,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green3()
{
var move=document.getElementById("green");

move.style.animation="move3 2s forwards";
move.style.WebkitAnimation="move3 2s forwards";
document.getElementById("red3").onclick=func;
setTimeout(expand_red3,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red3()
{
var expand=document.getElementById("red3");

expand.style.animation="expand3 2s forwards";
expand.style.WebkitAnimation="expand3 2s forwards";
expand.style.color="blue";
//setTimeout(red33,3000);
setTimeout(back3,2000);

}
function back3()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red3;
}
function red33()
{
var expand=document.getElementById("red3");
expand.innerHTML="";
}
function moveback_green3()
{
var move=document.getElementById("green");

move.style.animation="moveback3 1s forwards";
move.style.WebkitAnimation="moveback3 1s forwards";
document.getElementById("red3").onclick=move_green3;
}

function minimize_red3()
{
var m=document.getElementById("red3");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min3 1s forwards";
m.style.WebkitAnimation="min3 1s forwards";
m.style.top="25%";
m.style.left="60%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green3,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green4()
{
var move=document.getElementById("green");

move.style.animation="move4 2s forwards";
move.style.WebkitAnimation="move4 2s forwards";
document.getElementById("red4").onclick=func;
setTimeout(expand_red4,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red4()
{
var expand=document.getElementById("red4");

expand.style.animation="expand4 2s forwards";
expand.style.WebkitAnimation="expand4 2s forwards";
expand.style.color="blue";
//setTimeout(red44,3000);
setTimeout(back4,2000);
}
function back4()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red4;
}
function red44()
{
var expand=document.getElementById("red4");
expand.innerHTML="";
}

function moveback_green4()
{
var move=document.getElementById("green");

move.style.animation="moveback4 1s forwards";
move.style.WebkitAnimation="moveback4 1s forwards";
document.getElementById("red4").onclick=move_green4;
}

function minimize_red4()
{
var m=document.getElementById("red4");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min4 1s forwards";
m.style.WebkitAnimation="min4 1s forwards";
m.style.top="25%";
m.style.left="38%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green4,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green5()
{
var move=document.getElementById("green");

move.style.animation="move5 2s forwards";
move.style.WebkitAnimation="move5 2s forwards";
document.getElementById("red5").onclick=func;
setTimeout(expand_red5,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red5()
{
var expand=document.getElementById("red5");

expand.style.animation="expand5 2s forwards";
expand.style.WebkitAnimation="expand5 2s forwards";
expand.style.color="blue";
//setTimeout(red55,3000);
setTimeout(back5,2000);
}
function back5()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red5;
}
function red55()
{
var expand=document.getElementById("red5");
expand.innerHTML="";

}


function moveback_green5()
{
var move=document.getElementById("green");

move.style.animation="moveback5 1s forwards";
move.style.WebkitAnimation="moveback5 1s forwards";
document.getElementById("red5").onclick=move_green5;
}

function minimize_red5()
{
var m=document.getElementById("red5");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min5 1s forwards";
m.style.WebkitAnimation="min5 1s forwards";
m.style.top="65%";
m.style.left="70%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green5,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green6()
{
var move=document.getElementById("green");

move.style.animation="move6 2s forwards";
move.style.WebkitAnimation="move6 2s forwards";
document.getElementById("red6").onclick=func;
setTimeout(expand_red6,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red6()
{
var expand=document.getElementById("red6");

expand.style.animation="expand6 2s forwards";
expand.style.WebkitAnimation="expand6 2s forwards";
expand.style.color="blue";
//setTimeout(red66,3000);
setTimeout(back6,2000);
}
function back6()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red6;
}
function red66()
{
var expand=document.getElementById("red6");
expand.innerHTML="";

}


function moveback_green6()
{
var move=document.getElementById("green");

move.style.animation="moveback6 1s forwards";
move.style.WebkitAnimation="moveback6 1s forwards";
document.getElementById("red6").onclick=move_green6;
}

function minimize_red6()
{
var m=document.getElementById("red6");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min6 1s forwards";
m.style.WebkitAnimation="min6 1s forwards";
m.style.top="65%";
m.style.left="28%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green6,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green7()
{
var move=document.getElementById("green");

move.style.animation="move7 2s forwards";
move.style.WebkitAnimation="move7 2s forwards";
document.getElementById("red7").onclick=func;
setTimeout(expand_red7,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red7()
{
var expand=document.getElementById("red7");

expand.style.animation="expand7 2s forwards";
expand.style.WebkitAnimation="expand7 2s forwards";
expand.style.color="blue";
//setTimeout(red77,3000);
setTimeout(back7,2000);
}
function back7()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red7;
}
function red77()
{
var expand=document.getElementById("red7");
expand.innerHTML="";

}


function moveback_green7()
{
var move=document.getElementById("green");

move.style.animation="moveback7 1s forwards";
move.style.WebkitAnimation="moveback7 1s forwards";
document.getElementById("red7").onclick=move_green7;
}

function minimize_red7()
{
var m=document.getElementById("red7");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min7 1s forwards";
m.style.WebkitAnimation="min7 1s forwards";
m.style.top="75%";
m.style.left="60%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green7,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green8()
{
var move=document.getElementById("green");

move.style.animation="move8 2s forwards";
move.style.WebkitAnimation="move8 2s forwards";
document.getElementById("red8").onclick=func;
setTimeout(expand_red8,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red8()
{
var expand=document.getElementById("red8");

expand.style.animation="expand8 2s forwards";
expand.style.WebkitAnimation="expand8 2s forwards";
expand.style.color="blue";
//setTimeout(red88,3000);
setTimeout(back8,2000);
}
function back8()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red8;
}
function red88()
{
var expand=document.getElementById("red8");
expand.innerHTML="";
}


function moveback_green8()
{
var move=document.getElementById("green");

move.style.animation="moveback8 1s forwards";
move.style.WebkitAnimation="moveback8 1s forwards";
document.getElementById("red8").onclick=move_green8;
}

function minimize_red8()
{
var m=document.getElementById("red8");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min8 1s forwards";
m.style.WebkitAnimation="min8 1s forwards";
m.style.top="75%";
m.style.left="38%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green8,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green9()
{
var move=document.getElementById("green");

move.style.animation="move9 2s forwards";
move.style.WebkitAnimation="move9 2s forwards";
document.getElementById("red9").onclick=func;
setTimeout(expand_red9,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
document.getElementById("red10").style.visibility="hidden";
}

function expand_red9()
{
var expand=document.getElementById("red9");

expand.style.animation="expand9 2s forwards";
expand.style.WebkitAnimation="expand9 2s forwards";
expand.style.color="blue";
//setTimeout(red99,3000);
setTimeout(back9,2000);
}
function back9()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red9;
}
function red99()
{
var expand=document.getElementById("red9");
expand.innerHTML="";

}


function moveback_green9()
{
var move=document.getElementById("green");

move.style.animation="moveback9 1s forwards";
move.style.WebkitAnimation="moveback9 1s forwards";
document.getElementById("red9").onclick=move_green9;
}

function minimize_red9()
{
var m=document.getElementById("red9");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
document.getElementById("red10").style.visibility="visible";
m.style.animation="min9 1s forwards";
m.style.WebkitAnimation="min9 1s forwards";
m.style.top="15%";
m.style.left="49%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green9,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

function move_green10()
{
var move=document.getElementById("green");

move.style.animation="move10 2s forwards";
move.style.WebkitAnimation="move10 2s forwards";
document.getElementById("red10").onclick=func;
setTimeout(expand_red10,2000);

document.getElementById("red1").style.visibility="hidden";
document.getElementById("red3").style.visibility="hidden";
document.getElementById("red4").style.visibility="hidden";
document.getElementById("red5").style.visibility="hidden";
document.getElementById("red6").style.visibility="hidden";
document.getElementById("red7").style.visibility="hidden";
document.getElementById("red8").style.visibility="hidden";
document.getElementById("red9").style.visibility="hidden";
document.getElementById("red2").style.visibility="hidden";
}

function expand_red10()
{
var expand=document.getElementById("red10");

expand.style.animation="expand10 2s forwards";
expand.style.WebkitAnimation="expand10 2s forwards";
expand.style.color="blue";
//setTimeout(red1010,3000);
setTimeout(back10,2000);
}
function back10()
{
var b=document.getElementById("b");
b.innerHTML="BACK";
b.style.backgroundColor="green";
b.onclick=minimize_red10;
}
function red1010()
{
var expand=document.getElementById("red10");
expand.innerHTML="";
}


function moveback_green10()
{
var move=document.getElementById("green");

move.style.animation="moveback10 1s forwards";
move.style.WebkitAnimation="moveback10 1s forwards";
document.getElementById("red10").onclick=move_green10;
}

function minimize_red10()
{
var m=document.getElementById("red10");
document.getElementById("red2").style.visibility="visible";
document.getElementById("red3").style.visibility="visible";
document.getElementById("red4").style.visibility="visible";
document.getElementById("red5").style.visibility="visible";
document.getElementById("red6").style.visibility="visible";
document.getElementById("red7").style.visibility="visible";
document.getElementById("red8").style.visibility="visible";
document.getElementById("red9").style.visibility="visible";
document.getElementById("red1").style.visibility="visible";
m.style.animation="min10 1s forwards";
m.style.WebkitAnimation="min10 1s forwards";
m.style.top="85%";
m.style.left="49%";
m.style.height="12%";
m.style.width="6%";
setTimeout(moveback_green10,1000);
var b=document.getElementById("b");
b.innerHTML="";
b.style.backgroundColor="none";
}

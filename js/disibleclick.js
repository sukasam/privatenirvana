<!--

//Disable right mouse click Script
//By Maximus ( maximus@nsimail.comอีเมลนี้จะถูกป้องกันจากสแปมบอท แต่คุณต้องเปิดการใช้งานจาวาสคริปก่อน ) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com

var message="ห้าม copy น่ะ เจ้านาย";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
//alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
//alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")

// --> 

//Disable select-text script (IE4+, NS6+)
function disableselect(e){
return false
}
function reEnable(){
return true
}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}



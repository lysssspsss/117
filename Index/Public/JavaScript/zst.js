function DrawLineLq(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.innerText,"10");  
var b = parseInt(ojbPrevTd.innerText,"10");
var coordinate = (a - b) *21 -4;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',38" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLineTx(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *52 -10;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLineJy(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *62 -8;    
var newLine = document.createElement('<vle:line from="-6,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLineDs(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *144 -4;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLinebs(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *126 -4;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLineWs(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *76 -4;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" /></vle:Line>');    
ojbPrevTd.insertBefore(newLine);
}
function DrawLinewz(ojbCurrnetTd,ojbPrevTd)
{  
var a = parseInt(ojbCurrnetTd.value,"10");  
var b = parseInt(ojbPrevTd.value,"10");
var coordinate = (a - b) *166 -4;    
var newLine = document.createElement('<vle:line from="-4,7" to="'+coordinate+',32" strokecolor="#999999" StrokeWeight="1.0" />');    
ojbPrevTd.insertBefore(newLine);
}
function SelectNum(obj,color,num)					
{
if(obj.innerHTML.length<4)
{
obj.innerHTML = '<div class="SelectNum'+color+'">' + num + '</div>' ;
}
else
{
obj.innerHTML = num;
}
}
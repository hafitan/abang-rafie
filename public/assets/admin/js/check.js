var checkCount=0
//maximum number of allowed checked boxes
var maxChecks=3
function setChecks(obj){
//increment/decrement checkCount
if(obj.checked){
checkCount=checkCount+1
}else{
checkCount=checkCount-1
}
//if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
if (checkCount>maxChecks){
obj.checked=false
checkCount=checkCount-1
alert('you may only choose up to '+maxChecks+' options')
}
}
//-->
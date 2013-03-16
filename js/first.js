/* 
Первый js-файл
*/
i=true;
var j=4.67;
var J=7.67;
var s="4.67";
var n=null;
//console.log("тип i - "+(typeof i));
//console.log("тип j - "+(typeof j));
//console.log("тип s - "+(typeof s));
//console.log("тип d - "+(typeof d));
//console.log("тип n - "+(typeof n));
//console.log("parseInt = "+(parseFloat(s)));
function f1(){
  alert('Hello world!');
}
var f2 = function(){
  var j = "Валерий";
  console.log(j+" спит ...");
}
//f2();
//console.log(j);
//f1();
var o1 = new Object();
o1.name = "Виктор";
o1.hight = 158;
o1.sleep = function(){
  console.log(o1.name + " спит ...");
}
ilia=45;
//console.log(ilia);
//o1.sleep();
var o2 = {
  "my-name":"Дима",
  height:180,
  learn:function(){
    return this["my-name"]+" занимается достаточно неплохо!!!";
  }
};
//console.log(o2.learn());
var arr = new Array(12,34,"строка",true,56);
//console.log(arr[5]);

if(j!=s){
//  console.log("Кристина - молодец!");
}else{
  var ilia = "Илья";
//  console.log("Кристина - Не молодец!");
}
var test=5;
for(var count=0;count<5;count++){
  (function() {
    ttt = 65;
    test = 2;
//    console.log(test+"[" + count + "]=" + arr[count]);
  });
}
for (var elem in o2){
//  console.log(o2[elem]);
}
//console.log(ttt);
var sss = new String();
//console.log("Евгений".length);
var now = new Date();
var sochi = new Date(2014,1,14,17,15,12);
//console.log(Math.ceil((sochi-now)/(1000*60*60*24)));
function tow_digits(n){
  if((n>=0)&&(n<=9)){
    n = "0"+n;
  }
  return n;
}
function now_time(){
  var now = new Date();
  console.log(tow_digits(now.getHours())+":"+tow_digits(now.getMinutes())+":"+tow_digits(now.getSeconds()));
}
//setTimeout(now_time,3000);
var i_now_time = setInterval(now_time,1000);
setTimeout(function(){
  clearInterval(i_now_time);
},10001);
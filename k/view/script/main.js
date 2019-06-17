//グローバル変数
var today = new Date();
var year = today.getFullYear();
var month = today.getMonth();
var date = today.getDate();
var edit_year = year;
var edit_month = month;
var edit_date = date;
var days = ["日","月","火","水","木","金","土"];
//
//todo
function controller(){
	$("#before").on("click",function(){
  	setMonth(-1);
  });
  $("#next").on("click",function(){
  	setMonth(1);
  });
};
function setMonth(a){
  	month += a;
    if(month < 0){
    	year-=1;
      month = 11;
    }else if(month > 11){
    	year++;
      month = 0;
    }show();
}
function show(){
  $(".year").html(year);
  $(".month").html(month + 1);
  let lastDate = new Date(year,month+1,0).getDate();//翌月0日=当月ラストの日
  let firstDay = new Date(year,month,1).getDay();
}
$(function(){
  show();
  controller();
})

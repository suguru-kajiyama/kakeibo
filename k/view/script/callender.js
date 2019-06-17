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
var arr = {"2019,4,1":new date_balance("2019,04,01")};
$(function(){
  show_row1();
	show_row2();
  controller();
})
function setMonth(a){
	month += a;
  if(month < 0){
  	year-=1;
    month = 11;
  }else if(month > 11){
  	year++;
    month = 0;
  }
  show_row1();
}function setEditDate(i){
	edit_year = year;
	edit_month = month;
	edit_date = parseInt(i);
  show_row2();
}
function controller(){
	$("#mae").on("click",function(){
  	setMonth(-1);
  });
  $("#tugi").on("click",function(){
  	setMonth(1);
  });
	$("#dates").on("click",".editDay",function(){
		let i = $(this).children().val();
		setEditDate(i);
	});
};

function show_row1(){
	$("#year").html(year);
  $("#month").html(month + 1);
  let lastDate = new Date(year,month+1,0).getDate();//翌月0日=当月ラストの日
  let firstDay = new Date(year,month,1).getDay();
  let dom = "";
  for(let i = 1;i<=lastDate;i++){
  	dom +="<div class=date>";
		dom +="<p class='editDay'>" + i + days[firstDay] + "曜";
		let day = year + "," + (month+1) + "," + i;
		dom +="<input class='val'type='text'value="+ i + "></input></p>";
		dom += balance(i);
		dom +="</div>"+"\n";
		//controllerAdd(day);
    firstDay = (firstDay + 1) % 7;
  }$("#dates").html(dom);
}
function balance(i){
	let y = year;
	let m = month + 1;
	let d = i;
	in_money = 0;
	out_money = 0;
	if(arr[y+","+m+","+d]){
		console.log("found");
		in_money = arr[y+","+m+","+d].returnIn();
		out_money = arr[y+","+m+","+d].returnOut();
		console.log(in_money);
	}return "<p>支出<span>"+out_money+"円</span>収入<span>"+in_money+"円</span><p>";
}
function show_row2(){
	$("#edit_year").html(edit_year);
	$("#edit_month").html(edit_month + 1);
	$("#edit_date").html(edit_date);
}
function controllerAdd(i){
	$("#"+i).on("click",function(i){
	});
};

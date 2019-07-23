$(function(){
  controller();
})
function controller(){
  $("tr").click(function(){
    let y = $("#y").val();
    let m = $("#m").val();
    let d = $(this).children().eq(0).text();
    if(d<10){d="0"+d;}
    $("#kobetubalance").text(y + "年" + m + "月" + d + "日");
    $("#inputdate").val(y+m+d);
    $.ajax({
      url:'../controller/t.php',
      type:'POST',
      data:{
        'y':y,
        'm':m,
        'd':d
      }
    })
    .done( (data) => {
      let dom = "<tr>"+
        "<th class='io'>収支</th><th class='category'>種類</th><th class='money'>金額</th>" +
      "</tr>"
      dom+=data;
      $('#dayb').html(dom);
      console.log("succed");
    })
  })
}

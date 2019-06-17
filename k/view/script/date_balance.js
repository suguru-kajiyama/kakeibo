class date_balance{
  constructor(date){
    this.date = date;
    this.in_money = {1:10,2:10};
    this.out_money = {3:100};
    console.log(this.in_money);
  }returnIn(){
    let money = 0;
    console.log(in_money);
    for(var key in this.in_money){
      money += this.in_money[key];
    }console.log(money);
    return money;
  }returnOut(){
    let money = 0;
    for(var key in this.out_money){
      money += this.out_money[key];
    }return money;
  }
}

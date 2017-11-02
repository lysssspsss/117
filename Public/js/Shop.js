$(function(){	
/* 商品购买数量增减js */
// 增加
$('.increase').click(function(){
num = parseInt($('#quantity').val());
max = parseInt($('#goods_stock').text());
if(num < max){
$('#quantity').val(num+1);
}
});
//减少
$('.decrease').click(function(){
num = parseInt($('#quantity').val());
if(num > 1){
$('#quantity').val(num-1);
}
});
});
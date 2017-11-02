//=======================获取数据
function Get_ssq(){
var title= $('#ssq_title').text();//赋值给
jQuery.ajax({
url: "caipiao/kaijiang",
dataType:"json",
type: "Post",
data:{Action:"ssq",title:title},//传输的数据
success:function(data) {
if (data.nums1!='') {$("#ssq_nums1").html(data.nums1);}
if (data.nums2!='') {$("#ssq_nums2").html(data.nums2);}
if (data.nums3!='') {$("#ssq_nums3").html(data.nums3);}
if (data.nums4!='') {$("#ssq_nums4").html(data.nums4);}
if (data.nums5!='') {$("#ssq_nums5").html(data.nums5);}
if (data.nums6!='') {$("#ssq_nums6").html(data.nums6);}
if (data.nums7!='') {$("#ssq_nums7").html(data.nums7);}
if (data.title!='') {$("#ssq_title").html(data.title);}
if (data.begtime!='') {$("#ssq_time").html(data.begtime);}
}
});
setTimeout("Get_ssq()",10000);
}

function Get_3d(){
var title= $('#3d_title').text();//赋值给
jQuery.ajax({
url: "caipiao/kaijiang",
dataType:"json",
type: "Post",
data:{Action:"3d",title:title},//传输的数据
success:function(data) {
if (data.nums1!='') {$("#3d_nums1").html(data.nums1);}
if (data.nums2!='') {$("#3d_nums2").html(data.nums2);}
if (data.nums3!='') {$("#3d_nums3").html(data.nums3);}
if (data.title!='') {$("#3d_title").html(data.title);}
if (data.begtime!=''){$("#3d_time").html(data.begtime);}
}
});
setTimeout("Get_3d()",10000);
}


function Get_qlc(){
var title= $('#ssq_title').text();//赋值给
jQuery.ajax({
url: "caipiao/kaijiang",
dataType:"json",
type: "Post",
data:{Action:"qlc",title:title},//传输的数据
success:function(data) {
if (data.nums1!='')  {$("#qlc_nums1").html(data.nums1);}
if (data.nums2!='')  {$("#qlc_nums2").html(data.nums2);}
if (data.nums3!='')  {$("#qlc_nums3").html(data.nums3);}
if (data.nums4!='')  {$("#qlc_nums4").html(data.nums4);}
if (data.nums5!='')  {$("#qlc_nums5").html(data.nums5);}
if (data.nums6!='')  {$("#qlc_nums6").html(data.nums6);}
if (data.nums7!='')  {$("#qlc_nums7").html(data.nums7);}
if (data.nums8!='')  {$("#qlc_nums8").html(data.nums7);}
if (data.title!='')  {$("#qlc_title").html(data.title);}
if (data.begtime!=''){$("#qlc_time").html(data.begtime);}
}
});
setTimeout("Get_qlc()",10000);
}

function Get_dlt(){
var title= $('#dlt_title').text();//赋值给
jQuery.ajax({
url: "caipiao/kaijiang",
dataType:"json",
type: "Post",
data:{Action:"dlt",title:title},//传输的数据
success:function(data) {
if (data.nums1!='')  {$("#dlt_nums1").html(data.nums1);}
if (data.nums2!='')  {$("#dlt_nums2").html(data.nums2);}
if (data.nums3!='')  {$("#dlt_nums3").html(data.nums3);}
if (data.nums4!='')  {$("#dlt_nums4").html(data.nums4);}
if (data.nums5!='')  {$("#dlt_nums5").html(data.nums5);}
if (data.nums6!='')  {$("#dlt_nums6").html(data.nums6);}
if (data.nums7!='')  {$("#dlt_nums7").html(data.nums7);}
if (data.title!='')  {$("#dlt_title").html(data.title);}
if (data.begtime!=''){$("#dlt_time").html(data.begtime);}
}
});
setTimeout("Get_dlt()",10000);
}


function Get_pl5(){
var title= $('#pl5_title').text();//赋值给
jQuery.ajax({
url: "caipiao/kaijiang",
dataType:"json",
type: "Post",
data:{Action:"pl5",title:title},//传输的数据
success:function(data) {
if (data.nums1!='')  {$("#pl5_nums1").html(data.nums1);}
if (data.nums2!='')  {$("#pl5_nums2").html(data.nums2);}
if (data.nums3!='')  {$("#pl5_nums3").html(data.nums3);}
if (data.nums4!='')  {$("#pl5_nums4").html(data.nums4);}
if (data.nums5!='')  {$("#pl5_nums5").html(data.nums5);}
if (data.title!='')  {$("#pl5_title").html(data.title);}
if (data.begtime!=''){$("#pl5_time").html(data.begtime);}
}
});
setTimeout("Get_pl5()",10000);
}


function Get_qxc(){
url: "caipiao/kaijiang",
jQuery.ajax({
url: "query.data.php",
dataType:"json",
type: "Post",
data:{Action:"qxc",title:title},//传输的数据
success:function(data) {
if (data.nums1!='')  {$("#qxc_nums1").html(data.nums1);}
if (data.nums2!='')  {$("#qxc_nums2").html(data.nums2);}
if (data.nums3!='')  {$("#qxc_nums3").html(data.nums3);}
if (data.nums4!='')  {$("#qxc_nums4").html(data.nums4);}
if (data.nums5!='')  {$("#qxc_nums5").html(data.nums5);}
if (data.nums6!='')  {$("#qxc_nums6").html(data.nums6);}
if (data.nums7!='')  {$("#qxc_nums7").html(data.nums7);}
if (data.title!='')  {$("#qxc_title").html(data.title);}
if (data.begtime!=''){$("#qxc_time").html(data.begtime);}
}
});
setTimeout("Get_qxc()",10000);
}


Get_ssq();
Get_3d();
Get_qlc();
Get_dlt();
Get_pl5();
Get_qxc();
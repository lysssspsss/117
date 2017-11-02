
var moonglk=new Array('孟春','仲春','季春','孟夏','仲夏','季夏','孟秋','仲秋','季秋','孟冬','仲冬','季冬');
var dayglk = new Array('寅','卯','巳','午','巳','午','申','酉','亥','子');
var Kou = new Array(3);
var Sek = new Array(3);
var hour,min;
var nlm = new Array('寅','卯','辰','巳','午','未','申','酉','戌','亥','子','丑');
var Sukuyou = new Array('东方','东方','东方','东方','东方','东方','东方','北方','北方','北方','北方','北方','北方','北方','西方','西方','西方','西方','西方','西方','西方','南方','南方','南方','南方','南方','南方','南方'); 
var Sukuyou2 = new Array('角木蛟-吉','亢金龍-凶','氐土貉-凶','房日兔-吉','心月狐-凶','尾火虎-吉','箕水豹-吉','斗木獬-吉','牛金牛-凶','女土蝠-凶','虚日鼠-凶','危月燕-凶','室火豬-吉','壁水貐-吉','奎木狼-凶','娄金狗-吉','胃土雉-吉','昴日雞-凶','毕月乌-吉','觜火猴-凶','参水猿-凶','井木犴-吉','鬼金羊-凶','柳土獐-凶','星日馬-凶','张月鹿-吉','翼火蛇-凶','轸水蚓-吉'); 
var Sukuyou4 = new Array('角','亢','氐','房','心','尾','箕','斗','牛','女','虚','危','室','壁','奎','娄','胃','昴','毕','觜','参','井','鬼','柳','星','张','翼','轸'); 
var KyuuseiJD = new Array(2404030,2404600,2404810,2408800,2409010,2413000,2413210,2417200,2417410,2421220,2421400,2421610,2425420,2425630,2429620,2429800,2430010,2433820,2434030,2438020,2438230,2442220,2442430,2446420,2446630,2450620,2450830,2454820,2455030,2458840,2459020,2459230,2463250,2467240,2467420,2467630,2471440,2471650,2475640,2475850,2477650); 
var KyuuseiJDF= new Array(1,-3,1,7,-9,-3,1,7,-9,7,-3,1,-3,1,7,-3,1,-3,1,7,-9,-3,1,7,-9,-3,1,7,-9,7,-3,1,1,7,-3,1,-3,1,7,-9,-9); 
var KyuuseiName = new Array('一白','二黒','三碧','四緑','五黄','六白','七赤','八白','九紫'); 
var KyuuseiName2= new Array('-太乙星(水)-吉神','-摄提星(土)-凶神','-轩辕星(木)-安神','-招摇星(木)-安神','-天符星(土)-凶神','-青龍星(金)-吉神','-咸池星(金)-凶神','-太阴星(土)-吉神','-天乙星(火)-吉神'); 
var NKyuusei = new Array(-1,-1,-1);
var Rokuyou = new Array("<font color=#804000>先胜</font>","<font color=#804000>友引</font>","<font color=#804000>先負</font>","<font color=#0000A0>佛灭</font>","<font color=#FF8C1A>大安</font>","<font color=#804000>赤口</font>");
var NongliData=new Array("19416","19168","42352","21717","53856","55632","21844","22191","39632","21970","19168","42422","42192","53840","53909","46415","54944","44450","38320","18807","18815","42160","46261","27216","27968","43860","11119","38256","21234","18800","25958","54432","59984","27285","23263","11104","34531","37615","51415","51551","54432","55462","46431","22176","42420","9695","37584","53938","43344","46423","27808","46416","21333","19887","42416","17779","21183","43432","59728","27296","44710","43856","19296","43748","42352","21088","62051","55632","23383","22176","38608","19925","19152","42192","54484","53840","54616","46400","46752","38310","38335","18864","43380","42160","45690","27216","27968","44870","43872","38256","19189","18800","25776","29859","59984","27480","23232","43872","38613","37600","51552","55636","54432","55888","30034","22176","43959","9680","37584","51893","43344","46240","47780","44368","21977","19360","42416","20854","21183","43312","31060","27296","44368","23378","19296","42726","42208","53856","60005","54576","23200","30371","38608","19195","19152","42192","53430","53855","54560","56645","46496","22224","21938","18864","42359","42160","43600","45653","27951","44448","19299","37759","18936","18800","25776","26790","59999","27424","42692","43759","37600","53987","51552","54615","54432","55888","23893","22176","42704","21972","21200","43448","43344","46240","46758","44368","21920","43940","42416","21168","45683","26928","29495","27296","44368","19285","19311","42352","21732","53856","59752","54560","55968","27302","22239","19168","43476","42192","53584","62034","54560"); 
var solarMonth=new Array(31,28,31,30,31,30,31,31,30,31,30,31); 
var Gan=new Array("甲","乙","丙","丁","戊","己","庚","辛","壬","癸"); 
var Gan5=new Array("戊","己","庚","辛","壬","癸","甲","乙","丙","丁"); 
var sfw=new Array("南","东","北","西","南","东","北","西","南","东","北","西"); 
var Zhi=new Array("子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"); 
var Zhi3=new Array("午","未","申","酉","戌","亥","子","丑","寅","卯","辰","巳"); 
AnimalIdx=["鼠","牛","虎","兔","龍","蛇","馬","羊","猴","雞","狗","豬"]; 
AnimalIdx2=["馬","羊","猴","雞","狗","豬","鼠","牛","虎","兔","龍","蛇"]; 
var Gan3=new Array("甲子 乙丑 丙寅 丁卯 戊辰 己巳 庚午 辛未 壬申 癸酉 甲戌 乙亥","丙子 丁丑 戊寅 己卯 庚辰 辛巳 壬午 癸未 甲申 乙酉 丙戌 丁亥","戊子 己丑 庚寅 辛卯 壬辰 癸巳 甲午 乙未 丙申 丁酉 戊戌 己亥","庚子 辛丑 壬寅 癸卯 甲辰 乙巳 丙午 丁未 戊申 己酉 庚戌 辛亥","壬子 癸丑 甲寅 乙卯 丙辰 丁巳 戊午 己未 庚申 辛酉 壬戌 癸亥","甲子 乙丑 丙寅 丁卯 戊辰 己巳 庚午 辛未 壬申 癸酉 甲戌 乙亥","丙子 丁丑 戊寅 己卯 庚辰 辛巳 壬午 癸未 甲申 乙酉 丙戌 丁亥","戊子 己丑 庚寅 辛卯 壬辰 癸巳 甲午 乙未 丙申 丁酉 戊戌 己亥","庚子 辛丑 壬寅 癸卯 甲辰 乙巳 丙午 丁未 戊申 己酉 庚戌 辛亥","壬子 癸丑 甲寅 乙卯 丙辰 丁巳 戊午 己未 庚申 辛酉 壬戌 癸亥"); 
var Gan2=new Array('甲不开仓','乙不栽植','丙不修灶','丁不剃头','戊不受田','己不破券','庚不经络','辛不合酱','壬不泱水','癸不词讼');
var Gan4=new Array("<font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font>","<font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font>","<font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font>","<font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font>","<font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font>","<font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font>","<font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font>","<font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font>","<font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font>","<font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font>","<font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font> <font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font>","<font color=#0000A0>白虎</font> <font color=#FF8C1A>玉堂</font> <font color=#0000A0>天牢</font> <font color=#0000A0>玄武</font> <font color=#FF8C1A>司命</font> <font color=#0000A0>勾陈</font> <font color=#FF8C1A>青龍</font> <font color=#FF8C1A>明堂</font> <font color=#0000A0>天刑</font> <font color=#0000A0>朱雀</font> <font color=#FF8C1A>金匮</font> <font color=#FF8C1A>天德</font>");
var jcName0 = new Array('建','除','满','平','定','执','破','危','成','收','开','闭'); 
var jcName1 = new Array('闭','建','除','满','平','定','执','破','危','成','收','开'); 
var jcName2 = new Array('开','闭','建','除','满','平','定','执','破','危','成','收'); 
var jcName3 = new Array('收','开','闭','建','除','满','平','定','执','破','危','成'); 
var jcName4 = new Array('成','收','开','闭','建','除','满','平','定','执','破','危'); 
var jcName5 = new Array('危','成','收','开','闭','建','除','满','平','定','执','破'); 
var jcName6 = new Array('破','危','成','收','开','闭','建','除','满','平','定','执'); 
var jcName7 = new Array('执','破','危','成','收','开','闭','建','除','满','平','定'); 
var jcName8 = new Array('定','执','破','危','成','收','开','闭','建','除','满','平'); 
var jcName9 = new Array('平','定','执','破','危','成','收','开','闭','建','除','满'); 
var jcName10 = new Array('满','平','定','执','破','危','成','收','开','闭','建','除'); 
var jcName11 = new Array('除','满','平','定','执','破','危','成','收','开','闭','建');
var Zhi2=new Array('子不问卜','丑不冠带','寅不祭祀','卯不穿井','辰不哭泣','巳不远行','午不苫盖','未不服药','申不安床','酉不会客','戌不吃犬','亥不嫁娶');
var Animals=new Array("鼠","牛","虎","兔","龍","蛇","馬","羊","猴","雞","狗","豬");
var solarTerm = new Array("小寒","大寒","立春","雨水","惊蛰","春分","清明","谷雨","立夏","小满","芒种","夏至","小暑","大暑","立秋","处暑","白露","秋分","寒露","霜降","立冬","小雪","大雪","冬至[冬节]"); 
var mla = new Array(481267.8809,218.3162,6.2888,1.2740,0.6583,0.2136,0.1851,0.1144,0.0588,0.0571,0.0533,0.0458,0.0409,0.0347,0.0304,0.0154,0.0125,0.0110,0.0107,0.0100,0.0085,0.0079,0.0068,0.0052,0.0050,0.0040,0.0040,0.0040,0.0038,0.0037,0.0028,0.0027,0.0026,0.0024,0.0023,0.0022,0.0021,0.0021,0.0021,0.0018,0.0016,0.0012,0.0011,0.0009,0.0008,0.0007,0.0007,0.0007,0.0007,0.0006,0.0006,0.0005,0.0005,0.0005,0.0004,0.0004,0.0003,0.0003,0.0003,0.0003,0.0003,0.0003,0.0003);
var mlb = new Array(0,0,477198.868,413335.35,890534.22,954397.74,35999.05,966404,63863.5,377336.3,1367733.1,854535.2,441199.8,445267.1,513197.9,75870,1443603,489205,1303870,1431597,826671,449334,926533,31932,481266,1331734,1844932,133,1781068,541062,1934,918399,1379739,99863,922466,818536,990397,71998,341337,401329,1856938,1267871,1920802,858602,1403732,790672,405201,485333,27864,111869,2258267,1908795,1745069,509131,39871,12006,958465,381404,349472,1808933,549197,4067,2322131);
var mlc = new Array(0,0,44.963,10.74,145.7,179.93,87.53,276.5,124.2,13.2,280.7,148.2,47.4,27.9,222.5,41,52,142,246,315,111,188,323,107,205,283,56,29,21,259,145,182,17,122,163,151,357,85,16,274,152,249,186,129,98,114,50,186,127,38,156,90,24,242,223,187,340,354,337,58,220,70,191);
var maa = new Array(5.1281,0.2806,0.2777,0.1733,0.0554,0.0463,0.0326,0.0172,0.0093,0.0088,0.0082,0.0043,0.0042,0.0034,0.0025,0.0022,0.0022,0.0021,0.0019,0.0018,0.0018,0.0018,0.0015,0.0015,0.0015,0.0014,0.0013,0.0013,0.0011,0.0010,0.0009,0.0008,0.0007,0.0006,0.0006,0.0005,0.0005,0.0005,0.0004,0.0004,0.0003,0.0003,0.0003,0.0003,0.0003);
var mab = new Array(483202.019,960400.89,6003.15,407332.2,896537.4,69866.7,1373736.2,1437599.8,884531,471196,371333,547066,1850935,443331,860538,481268,1337737,105866,924402,820668,519201,1449606,42002,928469,996400,29996,447203,37935,1914799,1297866,1787072,972407,1309873,559072,1361730,848352,419339,948395,2328134,1024264,932536,1409735,2264270,1814936,335334);
var mac = new Array(3.273,138.24,48.31,52.43,104,82.5,239,273.2,187,87,55,217,14,230,106,308,241,80,141,153,181,10,46,121,316,129,6,65,48,288,340,235,205,134,322,190,149,222,149,352,282,57,115,16,57);
var mha = new Array(0.950725,0.051820,0.009530,0.007842,0.002824,0.000858,0.000531,0.000400,0.000319,0.000271,0.000263,0.000197,0.000173,0.000167,0.000111,0.000103,0.000084,0.000083,0.000078,0.000073,0.000064,0.000063,0.000041,0.000034,0.000033,0.000031,0.000030,0.000029,0.000026,0.000023,0.000019,0.000013,0.000013,0.000013,0.000012,0.000011,0.000011,0.000010,0.000009,0.000007,0.000007,0.000006,0.000006,0.000005);
var mhb = new Array(0,477198.868,413335.35,890534.22,954397.74,1367733.1,854535.2,377336.3,441199.8,445267,513198,489205,1431597,1303870,35999,826671,63864,926533,1844932,1781068,1331734,449334,481266,918399,541062,922466,75870,990397,818536,553069,1267871,1403732,341337,2258267,2258267,1908795,858602,1745069,790672,2322131,1808933,485333,99863,405201);
var mhc = new Array(0,134.963,100.74,235.7,269.93,10.7,238.2,103.2,137.4,118,312,232,45,336,178,201,214,53,146,111,13,278,295,272,349,253,131,87,241,266,339,188,106,246,246,180,219,114,204,281,148,276,212,140);
var sTermInfo = new Array(0,21208,42467,63836,85337,107014,128867,150921,173149,195551,218072,240693,263343,285989,308563,331033,353350,375494,397447,419210,440795,462224,483532,504758); 
var nStr1 = new Array('日','一','二','三','四','五','六','七','八','九','十'); 
var nStr2 = new Array('初','十','廿','卅','　');
var monthName = new Array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");

var sFtv = new Array( "0101*元旦", "0214 情人节", "0308 妇女节", "0312 植树节", "0315 消费者权益日", "0401 愚人节", "0501 劳动节", "0504 青年节", "0512 护士节", "0601 儿童节", "0701 建党节 香港回归纪念日", "0801 建军节", "0909 毛泽东逝世纪念日", "0910 教师节", "0928 孔子诞辰", "1001*国庆节", "1006 老人节", "1024 联合国日", "1031 万圣节（鬼节）", "1112 孙中山诞辰纪念日", "1220 澳门回归纪念日", "1224*平安夜", "1225*圣诞节", "1226 毛泽东诞辰纪念日");
var lFtv = new Array( "0101*春节", "0107*人日", "0115*元宵节", "0125 填仓节", "0126 生菜会", "0202 龍头节", "0206 东华帝君诞", "0215 涅槃节", "0219 观音诞", "0323 妈祖诞、天后诞", "0408 牛王诞", "0505*端午节", "0508 龍母诞", "0520 分龍节", "0606 姑姑节", "0616 鲁班节", "0624 关帝节", "0630 围香节","0707 七夕情人节", "0715 中元节(鬼节)", "0802 灶君诞", "0827 先师诞", "0815*中秋节", "0909 重阳节", "1001 祭祖节、祀靴节", "1025 感天上帝诞", "1208 腊八节", "1220 鲁班公诞", "1224 小年（祀灶）", "0100*除夕");
var wFtv = new Array( "0231 总统日","0520 母亲节", "0531 胜利日", "0630 父亲节", "0716 合作节", "0730 被奴役国家周", "0911 西方劳动节", "1011 世界住房日", "1021 美国哥伦布纪念日", "1144 感恩节");

function lYearDays(y) {
	var i, sum = 348;
	for(i=0x8000; i>0x8; i>>=1) sum += (NongliData[y-1900] & i)? 1: 0;
	return(sum+leapDays(y));
}

function lYearDays(y) {
	var i, sum = 348;
	for(i=0x8000; i>0x8; i>>=1) sum += (NongliData[y-1900] & i)? 1: 0;
	return(sum+leapDays(y));
}

function leapDays(y) {
	if(leapMonth(y)) return( (NongliData[y-1899]&0xf)==0xf? 30: 29);
	else return(0);
}

function leapMonth(y) {
	var lm = NongliData[y-1900] & 0xf;
	return(lm==0xf?0:lm);
}

function monthDays(y,m) {
	return( (NongliData[y-1900] & (0x10000>>m))? 30: 29 )
}

function Lunar(objDate) {
	var i, leap=0, temp=0;
	var offset   = (Date.UTC(objDate.getFullYear(),objDate.getMonth(),objDate.getDate()) - Date.UTC(1900,0,31))/86400000;
	for(i=1900; i<2100 && offset>0; i++) { 
		temp=lYearDays(i); offset-=temp; 
	}
	if(offset<0) { 
		offset+=temp; i--; 
	}
	this.year = i;
	leap = leapMonth(i);
	this.isLeap = false;
	for(i=1; i<13 && offset>0; i++) {
		if(leap>0 && i==(leap+1) && this.isLeap==false) { 
			--i; 
			this.isLeap = true; 
			temp = leapDays(this.year); 
		} else { 
			temp = monthDays(this.year, i); 
		}
		if(this.isLeap==true && i==(leap+1)) this.isLeap = false;
		offset -= temp;
	}
	if(offset==0 && leap>0 && i==leap+1)
	if(this.isLeap){ 
		this.isLeap = false; 
	} else { 
		this.isLeap = true; --i; 
	}
	if(offset<0){ 
		offset += temp; --i; 
	}
	this.month = i;
	this.day = offset + 1;
}

function solarDays(y,m) {
	if(m==1)
		return(((y%4 == 0) && (y%100 != 0) || (y%400 == 0))? 29: 28)
	else
		return(solarMonth[m])
}

function cyclical(num) {
	return(Gan[num%10]+Zhi[num%12])
}
function cyclical4(num) {
	return(Gan3[num%10])
}
function cyclical5(num) {
	return(Gan4[num%12])
}
function cyclical3(num) {
	return('<font color="#804000">彭祖百忌：</font>['+Gan2[num%10]+' '+Zhi2[num%12]+']')
}

function calElement(sYear,sMonth,sDay,week,lYear,lMonth,lDay,isLeap,cYear,cMonth,cDay) {
      this.isToday    = false;

      this.sYear      = sYear;
      this.sMonth     = sMonth;
      this.sDay       = sDay;
      this.week       = week;

      this.lYear      = lYear;
      this.lMonth     = lMonth;
      this.lDay       = lDay;
      this.isLeap     = isLeap;

      this.cYear      = cYear;
      this.cMonth     = cMonth;
      this.cDay       = cDay;

      this.color      = '';
      this.solarTerms    = '';  
      this.solarFestival = ''; 
      this.lunarFestival = ''; 
}

function sTerm(y,n) {
   var offDate = new Date( ( 31556925974.7*(y-1900) + sTermInfo[n]*60000  ) + Date.UTC(1900,0,6,2,5) )
   return(offDate.getUTCDate())
}

function cyclical6(num,num2) { 
	if (num==0) return(jcName0[num2]); 
	if (num==1) return(jcName1[num2]); 
	if (num==2) return(jcName2[num2]); 
	if (num==3) return(jcName3[num2]); 
	if (num==4) return(jcName4[num2]); 
	if (num==5) return(jcName5[num2]); 
	if (num==6) return(jcName6[num2]); 
	if (num==7) return(jcName7[num2]); 
	if (num==8) return(jcName8[num2]); 
	if (num==9) return(jcName9[num2]); 
	if (num==10) return(jcName10[num2]); 
	if (num==11) return(jcName11[num2]); 
} 

function calendar(y,m) {

   var sDObj, lDObj, lY, lM, lD=1, lL, lX=0, tmp1, tmp2,lM2,lY2,lD2,tmp3,dayglus,bsg,xs,xs1,fs,fs1,cs,cs1
   var lDPOS = new Array(3)
   var n = 0
   var firstLM = 0

   sDObj = new Date(y,m,1,0,0,0,0);           
   this.length    = solarDays(y,m)    
   this.firstWeek = sDObj.getDay()   
	if(m<2) {
		cY=cyclical(y-1900+36-1);lY2=(y-1900+36-1);
	} else { 
		cY=cyclical(y-1900+36);lY2=(y-1900+36);
	}
	var term2=sTerm(y,2);
	var firstNode = sTerm(y,m*2)
	cM = cyclical((y-1900)*12+m+12);
	lM2= (y-1900)*12+m+12;
	var dayCyclical = Date.UTC(y,m,1,0,0,0,0)/86400000+25567+10;

	for(var i=0;i<this.length;i++) {
		if(lD>lX) {     	
			sDObj = new Date(y,m,i+1)   
			lDObj = new Lunar(sDObj)    
			lY    = lDObj.year          
			lM    = lDObj.month         
			lD    = lDObj.day          
			lL    = lDObj.isLeap        
			lX    = lL? leapDays(lY): monthDays(lY,lM) 
			if(n==0) firstLM = lM
			lDPOS[n++] = i-lD+1
		}
		if(m==1 && (i+1)==term2){ 
			cY=cyclical(y-1900+36);
			lY2=(y-1900+36);
		}
		if((i+1)==firstNode) {
			cM = cyclical((y-1900)*12+m+13);
			lM2=(y-1900)*12+m+13;
		}
		cD = cyclical(dayCyclical+i);
		lD2=(dayCyclical+i);
		this[i] = new calElement(y, m+1, i+1, nStr1[(i+this.firstWeek)%7], lY, lM, lD++, lL, cY ,cM, cD );
		bsg=(lD2)%12;
		cs1=i+1;
		if(m==0){
			if(cs1<sTerm(y,m*2  )-1){xs1='水泉动';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3) {xs1='雁北乡';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8) {xs1='鹊始巢';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='鳺始鴝';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='雞始乳';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='征鸟厉疾';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='水泽腹坚';}
		}
		if(m==1){
			if(cs1<sTerm(y,m*2  )-1){xs1='水泽腹坚';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='东风解冻';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='蛰虫始振';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='鱼上冰';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='獭祭鱼';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='候雁北';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='草木萌动';}
		}
		if(m==2){
			if(cs1<sTerm(y,m*2  )-1){xs1='草木萌动';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='桃始华';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='仓庚鸣';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='鹰化为鸠';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='玄鸟至';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='雷乃发声';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='始电';}
		}
		if(m==3){
			if(cs1<sTerm(y,m*2  )-1){xs1='始电';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='桐始华';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='田鼠化为鴽';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='虹始见';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='萍始生';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='鸣鸠拂其羽';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='戴胜降于桑';}
		}
		if(m==4){
			if(cs1<sTerm(y,m*2  )-1){xs1='戴胜降于桑';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='蝼蝈鸣';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='蚯蚓出';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='王瓜生';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='苦菜秀';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='靡草死';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='麦秋至';}
		}
		if(m==5){
			if(cs1<sTerm(y,m*2  )-1){xs1='麦秋至';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='螳螂生';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='鵙始鸣';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='反舌无声';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='鹿角解';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='蜩始鸣';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='半夏生';}
		}
		if(m==6){
			if(cs1<sTerm(y,m*2  )-1){xs1='半夏生';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='温风至';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='蟀蟋居壁';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='鹰如鸷';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='腐草为萤';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='土润溽暑';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='大雨时行';}
		}
		if(m==7){
			if(cs1<sTerm(y,m*2  )-1){xs1='大雨时行';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='凉风至';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='白露降';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='寒蝉鸣';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='鹰乃祭鸟';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='天地始肃';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='禾乃登';}
		}
		if(m==8){
			if(cs1<sTerm(y,m*2  )-1){xs1='禾乃登';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='鸿雁来';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='玄鸟归';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='群鸟养羞';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='雷乃收声';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='蛰虫坯户';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='水始涸';}
		}
		if(m==9){
			if(cs1<sTerm(y,m*2  )-1){xs1='水始涸';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='鸿雁来宾';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='雀入大水为蛤';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='菊有黄花';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='豺乃祭兽';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='草木黄落';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='蛰虫咸俯';}
		}
		if(m==10){
			if(cs1<sTerm(y,m*2  )-1){xs1='蛰虫咸俯';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='水始冰';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='地始冻';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='雉入大水为蜃';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='虹藏不见';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='天气腾地气降';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='闭塞成冬';}
		}
		if(m==11){
			if(cs1<sTerm(y,m*2  )-1){xs1='闭塞成冬';}
			else if(cs1>=sTerm(y,m*2  )-1 && cs1<=sTerm(y,m*2  )+3){xs1='鹖鴠不鸣';}
			else if(cs1>sTerm(y,m*2  )+3 && cs1<=sTerm(y,m*2  )+8){xs1='虎始交';}
			else if(cs1>sTerm(y,m*2  )+8 && cs1<sTerm(y,m*2+1)-1){xs1='荔挺出';}
			else if(cs1>=sTerm(y,m*2+1)-1 && cs1<=sTerm(y,m*2+1)+3){xs1='蚯蚓结';}
			else if(cs1>sTerm(y,m*2+1)+3 && cs1<=sTerm(y,m*2+1)+8){xs1='麋鹿解';}
			else if(cs1>sTerm(y,m*2+1)+8){xs1='水泉动';}
		}
		if(bsg==0){dayglus=Gan[9]+'命进禄 ';}
		else if(bsg==2){dayglus=Gan[0]+'命进禄 ';}
		else if(bsg==3){dayglus=Gan[1]+'命进禄 ';}
		else if(bsg==5){dayglus=Gan[2]+','+Gan[4]+'命进禄 ';}
		else if(bsg==6){dayglus=Gan[3]+','+Gan[5]+'命进禄 ';}
		else if(bsg==8){dayglus=Gan[6]+'命进禄 ';}
		else if(bsg==9){dayglus=Gan[7]+'命进禄 ';}
		else if(bsg==11){dayglus=Gan[8]+'命进禄 ';}
		else {dayglus='';}
		if((lD2)%10==0 || (lD2)%10==5){xs='东北';}
		else if((lD2)%10==1 || (lD2)%10==6){xs='西北';}
		else if((lD2)%10==2 || (lD2)%10==7){xs='西南';}
		else if((lD2)%10==3 || (lD2)%10==8){xs='正南';}
		else if((lD2)%10==4 || (lD2)%10==9){xs='东南';}
		if((lD2)%10==0 || (lD2)%10==1){fs='东南';}
		else if((lD2)%10==2 || (lD2)%10==3){fs='正东';}
		else if((lD2)%10==4){fs='正北';}
		else if((lD2)%10==5){fs='正南';}
		else if((lD2)%10==6 || (lD2)%10==7){fs='西南';}
		else if((lD2)%10==8){fs='西北';}
		else if((lD2)%10==9){fs='正西';}
		if((lD2)%10==0 || (lD2)%10==1){cs='东北';}
		else if((lD2)%10==2 || (lD2)%10==3){cs='西南';}
		else if((lD2)%10==4 || (lD2)%10==5){cs='正北';}
		else if((lD2)%10==6 || (lD2)%10==7){cs='正东';}
		else if((lD2)%10==8 || (lD2)%10==9){cs='正南';}
		this[i].pgday =cyclical3(lD2);
		this[i].dGz = '时辰：'+cyclical4(lD2);
		this[i].sgz ='<font color=#FF8C1A>吉</font><font color=#0000A0>凶</font>：'+ cyclical5(lD2);
		this[i].sgz2 =jzny([lD2]%10+''+[lD2]%12);
		this[i].sgz4 =CalConv((lD2)%10,(lD2)%12);
		this[i].sgz5 =CalConv2(lY2%12,lM2%12,(lD2)%12,lY2%10,(lD2)%10,lM,lD-1,m+1,cs1);
		this[i].sgz6 =cyclical7(lM2%12,(lD2)%12);
		this[i].sgz7 =jznyy([lD2]%10+''+[lD2]%12);

		this[i].sgz8 =jznyy([lM2]%10+''+[lM2]%12);
		this[i].sgz9 =jznyy([lY2]%10+''+[lY2]%12);
		this[i].sgz3 =cyclical6(lM2%12,(lD2)%12);
		this[i].dayglu ='◇是日命禄：<font color=red>'+dayglk[(lD2)%10]+'命互禄 '+dayglus+'</font>';
		this[i].ssfw ='◇喜神：<font color=red>'+xs+'</font> ◇福神：<font color=red>'+fs+'</font> ◇财神：<font color=red>'+cs;
		this[i].fs1 ='本日物候：'+xs1
		if((i+this.firstWeek)%7==0)   this[i].color = 'red'
		if((i+this.firstWeek)%14==13) this[i].color = 'red'
		this[i].sgzzm2 = '◆'+sTerm(y,m*2  )+'日'+ solarTerm[m*2]+'  '+'◆'+sTerm(y,m*2+1)+'日'+ solarTerm[m*2+1]
	}
	if(y==tY && m==tM) this[tD-1].solarTerms +='今天'

	tmp1=sTerm(y,m*2  )-1
	tmp2=sTerm(y,m*2+1)-1
	this[tmp1].solarTerms = solarTerm[m*2]
	this[tmp2].solarTerms = solarTerm[m*2+1]

	if(m==3) this[tmp1].color = '#CC4AF7'
	for(i in sFtv)
		if(sFtv[i].match(/^(\d{2})(\d{2})([\s\*])(.+)$/))
			if(Number(RegExp.$1)==(m+1)) {
				this[Number(RegExp.$2)-1].solarFestival += RegExp.$4 + ' '
				if(RegExp.$3=='*') this[Number(RegExp.$2)-1].color = '#BC02D7'
			}
	for(i in wFtv)
		if(wFtv[i].match(/^(\d{2})(\d)(\d)([\s\*])(.+)$/))
			if(Number(RegExp.$1)==(m+1)) {
				tmp1=Number(RegExp.$2);
				tmp2=Number(RegExp.$3);
				if(tmp1<5)
					this[((this.firstWeek>tmp2)?7:0) + 7*(tmp1-1) + tmp2 - this.firstWeek].solarFestival += RegExp.$5 + ' ';
				else {
					tmp1 -= 5;
					tmp3 = (this.firstWeek+this.length-1)%7;
					this[this.length - tmp3 - 7*tmp1 + tmp2 - (tmp2>tmp3?7:0) - 1 ].solarFestival += RegExp.$5 + ' ';
				}
			}
	
	for(i in lFtv)
		if(lFtv[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
			tmp1=Number(RegExp.$1)-firstLM
			if(tmp1==-11) tmp1=1
			if(tmp1 >=0 && tmp1<n) {
				tmp2 = lDPOS[tmp1] + Number(RegExp.$2) -1
				if( tmp2 >= 0 && tmp2<this.length) {
					this[tmp2].lunarFestival += RegExp.$4 + ' '
					if(RegExp.$3=='*') this[tmp2].color = '#FF00FF'
				}
			}
		}
	if(m==2 || m==3) {
		var estDay = new easter(y);
		if(m == estDay.m)
		this[estDay.d-1].solarFestival = this[estDay.d-1].solarFestival+'复活节';
	}
	if((this.firstWeek+12)%7==5) this[12].solarFestival += '黑色星期五'
	if(y==tY && m==tM) this[tD-1].isToday = true;
}

function CalConv(d,dd) {	
	return '岁煞'+sfw[dd]+' '+AnimalIdx[dd]+'日冲('+Gan5[d]+Zhi3[dd]+')'+AnimalIdx2[dd];
}

function jzny(d){
	var ny;
	if(d=='00' || d=='11') ny='海中金';
	if(d=='22' || d=='33') ny='炉中火';
	if(d=='44' || d=='55') ny='大林木';
	if(d=='66' || d=='77') ny='路旁土';
	if(d=='88' || d=='99') ny='剑锋金';
	if(d=='010' || d=='111') ny='山头火';
	if(d=='20' || d=='31') ny='洞下水';
	if(d=='42' || d=='53') ny='城墙土';
	if(d=='64' || d=='75') ny='白腊金';
	if(d=='86' || d=='97') ny='杨柳木';
	if(d=='08' || d=='19') ny='泉中水';
	if(d=='210' || d=='311') ny='屋上土';
	if(d=='40' || d=='51') ny='霹雷火';
	if(d=='62' || d=='73') ny='松柏木';
	if(d=='84' || d=='95') ny='常流水';
	if(d=='06' || d=='17') ny='沙中金';
	if(d=='28' || d=='39') ny='山下火';
	if(d=='410' || d=='511') ny='平地木';
	if(d=='60' || d=='71') ny='壁上土';
	if(d=='82' || d=='93') ny='金箔金';
	if(d=='04' || d=='15') ny='佛灯火';
	if(d=='26' || d=='37') ny='天河水';
	if(d=='48' || d=='59') ny='大驿土';
	if(d=='610' || d=='711') ny='钗钏金';
	if(d=='80' || d=='91') ny='桑柘木';
	if(d=='02' || d=='13') ny='大溪水';
	if(d=='24' || d=='35') ny='沙中土';
	if(d=='46' || d=='57') ny='天上火';
	if(d=='68' || d=='79') ny='石榴木';
	if(d=='810' || d=='911') ny='大海水';
	return(ny);
}

function jznyy(d){
	var nyy;
	if(d=='00' || d=='11') nyy='金';
	if(d=='22' || d=='33') nyy='火';
	if(d=='44' || d=='55') nyy='木';
	if(d=='66' || d=='77') nyy='土';
	if(d=='88' || d=='99') nyy='金';
	if(d=='010' || d=='111') nyy='火';
	if(d=='20' || d=='31') nyy='水';
	if(d=='42' || d=='53') nyy='土';
	if(d=='64' || d=='75') nyy='金';
	if(d=='86' || d=='97') nyy='木';
	if(d=='08' || d=='19') nyy='水';
	if(d=='210' || d=='311') nyy='土';
	if(d=='40' || d=='51') nyy='火';
	if(d=='62' || d=='73') nyy='木';
	if(d=='84' || d=='95') nyy='水';
	if(d=='06' || d=='17') nyy='金';
	if(d=='28' || d=='39') nyy='火';
	if(d=='410' || d=='511') nyy='木';
	if(d=='60' || d=='71') nyy='土';
	if(d=='82' || d=='93') nyy='金';
	if(d=='04' || d=='15') nyy='火';
	if(d=='26' || d=='37') nyy='水';
	if(d=='48' || d=='59') nyy='土';
	if(d=='610' || d=='711') nyy='金';
	if(d=='80' || d=='91') nyy='木';
	if(d=='02' || d=='13') nyy='水';
	if(d=='24' || d=='35') nyy='土';
	if(d=='46' || d=='57') nyy='火';
	if(d=='68' || d=='79') nyy='木';
	if(d=='810' || d=='911') nyy='水';
	return(nyy);
}

function easter(y) {
	var term2=sTerm(y,5);
	var dayTerm2 = new Date(Date.UTC(y,2,term2,0,0,0,0)); 
	var lDayTerm2 = new Lunar(dayTerm2); 

	if(lDayTerm2.day<15)
		var lMlen= 15-lDayTerm2.day;
	else
		var lMlen= (lDayTerm2.isLeap? leapDays(y): monthDays(y,lDayTerm2.month)) - lDayTerm2.day + 15;
	var l15 = new Date(dayTerm2.getTime() + 86400000*lMlen ); 
	var dayEaster = new Date(l15.getTime() + 86400000*( 7-l15.getUTCDay() ) ); 
	this.m = dayEaster.getUTCMonth();
	this.d = dayEaster.getUTCDate();
}

function cDay(d){
	var s;

	switch (d) {
		case 10:
			s = '初十'; break;
		case 20:
			s = '二十'; break;
		case 30:
			s = '三十'; break;
		default :
			s = nStr2[Math.floor(d/10)];
			s += nStr1[d%10];
	}
	return(s);
}

function cDay2(d){
	var s2;

	switch (d) {
		case 1:
			s2 = '正'; break;
		case 2:
			s2 = '二'; break;
		case 3:
			s2 = '三'; break;
		case 4:
			s2 = '四'; break;
		case 5:
			s2 = '五'; break;
		case 6:
			s2 = '六'; break;
		case 7:
			s2 = '七'; break;
		case 8:
			s2 = '八'; break;
		case 9:
			s2 = '九'; break;
		case 10:
			s2 = '十'; break;
		case 11:
			s2 = '十一'; break;
		case 12:
			s2 = '十二'; break;
		default :
	}
	return(s2);
}

var cld;

function drawCld(SY,SM) {
	var i,sD,s,size,bsms,rmms,SY2;
	cld = new calendar(SY,SM);
	if(SM==0){SY2=SY-1;}else{SY2=SY;}
	GZ.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <font color=#FFCC00>●</font>&nbsp;' + Animals[(SY2 - 4) % 12] + '年[农历' + cyclical(SY2 - 1900 + 36) + '年]' + '</a>&nbsp;<img src="/Index/Public/css/images/' + ((SY2 - 4) % 12 + 1) + '.gif">&nbsp;';
	YMBG.innerHTML = monthName[SM]+"&nbsp;" +SY+"</a>"  ;
	for(i=0;i<42;i++) {
		sObj=eval('SD'+ i);
		lObj=eval('LD'+ i);
		sObj.parentElement.parentElement.background = '';
		sD = i - cld.firstWeek;
		if(sD>-1 && sD<cld.length) { 
			sObj.innerHTML = sD+1;
			if(cld[sD].isToday) sObj.parentElement.parentElement.background = 'images/img_Calendar/img_Other/bk.gif'; 
			sObj.style.color = cld[sD].color; 
			if(cld[sD].lDay==1) {
				rmms=(cld[sD].isLeap?'闰':'');
				if(rmms!=''){
					bsms='';
				} else {
					bsms=(monthDays(cld[sD].lYear,cld[sD].lMonth)==29?'小':'大');
				}
				lObj.innerHTML = '<b>'+rmms + cld[sD].lMonth + '月' + bsms+'</b>';
			} else {
				lObj.innerHTML = cDay(cld[sD].lDay);
			}
			s=cld[sD].lunarFestival;
			if(s.length>0) {
				if(s.length>4) s = s.substr(0, 3)+'…';
				s = s.fontcolor('#C49402');
			} else {
				s=cld[sD].solarFestival;
				if(s.length>0) {
					size = (s.charCodeAt(0)>0 && s.charCodeAt(0)<128)?8:4;
					if(s.length>size+1) s = s.substr(0, size-1)+'…';
					s = s.fontcolor('#FF8000');
				} else { 
					s=cld[sD].solarTerms;
					if(s.length>0) s = s.fontcolor('#309F00');
				}
			}
			if(s.length>0) lObj.innerHTML = s;
		} else { 
			sObj.innerHTML = '';
			lObj.innerHTML = '';
		}
	}
}

function changeCld() {
	var y,m;
	y=CLD.SY.selectedIndex+1900;
	m=CLD.SM.selectedIndex;
	drawCld(y,m);
}

function pushBtm(K) {
	switch (K){
		case 'YU' :
			if(CLD.SY.selectedIndex>0) CLD.SY.selectedIndex--;
			break;
		case 'YD' :
			if(CLD.SY.selectedIndex<149) CLD.SY.selectedIndex++;
			break;
		case 'MU' :
			if(CLD.SM.selectedIndex>0) {
				CLD.SM.selectedIndex--;
			} else {
				CLD.SM.selectedIndex=11;
				if(CLD.SY.selectedIndex>0) CLD.SY.selectedIndex--;
			}
			break;
		case 'MD' :
			if(CLD.SM.selectedIndex<11) {
				CLD.SM.selectedIndex++;
			} else {
				CLD.SM.selectedIndex=0;
				if(CLD.SY.selectedIndex<200) CLD.SY.selectedIndex++;
			}
			break;
		default :
			CLD.SY.selectedIndex=tY-1900;
			CLD.SM.selectedIndex=tM;
	}
	changeCld();
}

var Today = new Date();
var tY = Today.getFullYear();
var tM = Today.getMonth();
var tD = Today.getDate();
var tD1 = tD
var ybm1 = tM+1;
var azz = new Date()
azz = azz.valueOf()
var tD2 = new Date((azz + 1 * 24 * 60 * 60 * 1000)).getDate();
var ybm2 = new Date((azz + 1 * 24 * 60 * 60 * 1000)).getMonth()+1;
var tD3 = new Date((azz + 2 * 24 * 60 * 60 * 1000)).getDate();
var ybm3 = new Date((azz + 3 * 24 * 60 * 60 * 1000)).getMonth()+1;
var d2r = Math.PI / 180.0;
var width = "130";
var offsetx = 2;
var offsety = 16;
var snow = 0;
var snow2 = 0;

function Ymd2Jd(yy,mm,dd) {
	var days,tmp,yym1;
	yym1 = yy - 1;
	days = 1721422;
	solarMonth[1] = 28;
	if (yy % 4 == 0) {
		solarMonth[1] = 29;
		if (yy > 1582) {
			if (yy % 100 == 0) {
				solarMonth[1] = 28;
				if (yy %400 == 0) {
					solarMonth[1] = 29;
				}
			}
		}
	}
	days += Math.floor(365.25 * yym1 + 0.1);
	for (m = 0; m < (mm - 1) ; m++) {
		days += solarMonth[m];
	}
	days += dd;
	if (days >= 2299160) days -= 10;
	if (yym1 >= 1600) {
		days -= Math.floor((yym1 - 1600 + 0.1) / 100);
		days += Math.floor((yym1 - 1600 + 0.1) / 400);
	}
	return days;
}

function GetSukuD(dd) {
	var s;
	s = (dd + SukuDofs) % 28;
	return Sukuyou[s];
}

function GetSuku2D(dd) {
	var s;
	s = (dd + SukuDofs) % 28;
	return Sukuyou2[s];
}

function GetSuku3D(dd) {
	var s;
	s = (dd + SukuDofs) % 28;
	return Sukuyou3[s];
}

function GetSuku4D(dd) {
	var s;
	s = (dd + SukuDofs) % 28;
	return Sukuyou4[s];
}

function Get6you(omm,odd) {
	var k;
	k = (omm + odd + 4) % 6;
	return Rokuyou[k];
}

function mOvr(v) {	
	var s,festival,bt,imgsr,rqcolor,jcrnmu,jy,rmm,bsm;
	var sObj=eval('SD'+ v);
	var d=sObj.innerHTML-1;
	if (snow == 0) {
		d = tD-1;
		snow = 1;
	}
	if(sObj.innerHTML!='') {
		sObj.style.cursor = 'help';
		if(cld[d].solarTerms!='' && cld[d].isToday == true) {
			bt='tablebody2';
			if(cld[d].solarTerms!='今天'){imgsr='今天：';}else{imgsr='';}
		} else {
			bt='tablebody1';
			imgsr='是日：'
		}

		if(cld[d].solarTerms == '' && cld[d].solarFestival == '' && cld[d].lunarFestival == '') { 
			festival = cld[d].sgzzm2;
		} else {
			festival = imgsr + cld[d].solarTerms + ' '+ cld[d].solarFestival + ' ' + cld[d].lunarFestival;
		}
		if(cld[d].sgz5!=0){jy=cld[d].sgz5;}else{jy=jcr(cld[d].sgz3);}
		rmm=(cld[d].isLeap?'闰':'');
		if(rmm!=''){bsm='';}else{bsm=(monthDays(cld[d].lYear,cld[d].lMonth)==29?'小':'大');}
		if(cld[d].week=='日'){rqcolor='<font color=#FF8040>'}else{rqcolor=''}
		s= '<table border="0" cellpadding="1" cellspacing="1" class=tableborder1 style="table-layout: fixed;height:305;width:100%">' +
			'<tr height=25><th>'+ festival +'</th></tr>' + 
			'<tr><td class='+bt+'>' +
				'<table WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0>' +
				'<tr><td ALIGN="center">' +
					'<font COLOR="#004000" face="Arial"><b><span style="letter-spacing: 5px;font-size:11pt;">'+rqcolor+cld[d].sYear+'年'+cld[d].sMonth+'月</span></font>' +
					'<br>' +
					'<font style="font-size:19pt;line-height:24px">'+cld[d].sDay+'</font>' +
					'<br>' +
					'<font STYLE="font-size:14px;line-height:28px">星期'+cld[d].week+'</b></font>' +
					'<br>' +
					'<font color="#800080">农历'+cld[d].cYear+cld[d].sgz9+'年 '+rmm+cDay2(cld[d].lMonth)+'月'+bsm+'  '+cDay(cld[d].lDay)+'日</font>' +
					'<br>' +
					'<font color="#800080">'+cld[d].cMonth+cld[d].sgz8+'(</font>' +
					'<font color=#008000>'+moonglk[cld[d].lMonth-1]+'</font>' +
					'<font color="#800080">)月 '+cld[d].cDay+cld[d].sgz7+GetSuku4D(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+cld[d].sgz3+'日</font>' +
					'<br>' +
					'<font color=#008000 style="line-height: 25px">'+cld[d].fs1+ '</font>' +
					'<br>' +
					'<font color=#0000A0>'+cld[d].sgz4 +'</font>' +
					'<br>' +
					'<a style="cursor: help" onmouseout="hidetip2()" onmouseover=showtip2(this,event,"'+Jd2KyuuseiNameL(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+'","'+Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay)+'","宿名：'+GetSuku2D(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+'('+GetSukuD(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+')")>' + Jd2KyuuseiNameL(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+'<br>宿名：'+GetSukuD(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+GetSuku2D(Ymd2Jd(cld[d].sYear,cld[d].sMonth,cld[d].sDay))+' 六曜：'+Get6you(cld[d].sMonth,cld[d].sDay) +
					'<br>' +
					'值日：'+cld[d].sgz6+' 五行：'+cld[d].sgz2 +
					'<br>' +
					cld[d].pgday +
					'</a>' +
				'</td></tr></table>' +
			'</td></tr>' +
			'<tr><td height=38 class='+bt+' align=center>' +
				'<table border="0" cellpadding="4" cellspacing="0"><tr>' +
				'<td><font color="#800080">'+cld[d].cDay+'<br>'+cld[d].sgz3+'日</td>' +
				'<td>'+jy+'</td>' +
				'</tr></table>' +
			'</td></tr></table>';
	
		sg2.innerHTML =s;
		sg3.innerHTML =cld[d].dGz;
		sg4.innerHTML =cld[d].sgz;
		dayglu1.innerHTML =cld[d].dayglu+' &nbsp;'+cld[d].ssfw;
	}
}

function Main(v,T) {
	var OutString = "";
	var quady = new Array;
	var sunp = new Array;
	var moonp = new Array;
	var y, m, day, glong, glat, tz, numday, mj, lst1, i,jwnum,jing,jings,wei,weis,XZ,hb,yb1,yb2;
	var rads = 0.0174532925, sinmoonalt;  
	var sObj=eval('SD'+ v);
	var d=sObj.innerHTML-1;     
	if(sObj.innerHTML!='') {
		y=cld[d].sYear; 
		m=cld[d].sMonth;
			jing='113';
			jings='07';
			wei='23';
			weis='02';
			hb=0;
			yb1=37;
		
		if(T==7){
			today = new Date () ; 
			day =today.getDate();
		} else {
			day =cld[d].sDay;
		}
		glong = parseInt(jing)+parseFloat(jings)/60;
		glat = parseInt(wei)+parseFloat(weis)/60;
		tz = parseFloat(8);
		mj = mjd(day, m, y, 0.0);
	}
}

function hrsmin(hours) {
	var hrs, h, m, dum;
	hrs = Math.floor(hours * 60 + 0.5)/ 60.0;
	h = Math.floor(hrs);
	m = Math.floor(60 * (hrs - h) + 0.5);
	if(h<10)h="0"+h;
	if(m<10)m="0"+m;
	dum = h +"时"+ m+"分";
	if (dum < 1000) dum = "0" + dum;
	if (dum <100) dum = "0" + dum;
	if (dum < 10) dum = "0" + dum;
	return dum;
}

function ipart(x) {
	var a;
	if (x> 0) {
		a = Math.floor(x);
	} else {
		a = Math.ceil(x);
	}
	return a;
}

function frac(x) {
	var a;
	a = x - Math.floor(x);
	if (a < 0) a += 1;
	return a;
}

function round(num, dp) {
	return Math.round (num * Math.pow(10, dp)) / Math.pow(10, dp);
}

function range(x) {
	var a, b;
	b = x / 360;
	a = 360 * (b - ipart(b));
	if (a  < 0 ) {
		a = a + 360
	}
	return a
}

function mjd(day, month, year, hour) {
	var a, b;
	if (month <= 2) {
		month = month + 12;
		year = year - 1;
	}
	a = 10000.0 * year + 100.0 * month + day;
	if (a <= 15821004.1) {
		b = -2 * Math.floor((year + 4716)/4) - 1179;
	} else {
		b = Math.floor(year/400) - Math.floor(year/100) + Math.floor(year/4);
	}
	a = 365.0 * year - 679004.0;
	return (a + b + Math.floor(30.6001 * (month + 1)) + day + hour/24.0);
}

function quad(ym, yz, yp) {
	var nz, a, b, c, dis, dx, xe, ye, z1, z2, nz;
	var quadout = new Array;

	nz = 0;
	a = 0.5 * (ym + yp) - yz;
	b = 0.5 * (yp - ym);
	c = yz;
	xe = -b / (2 * a);
	ye = (a * xe + b) * xe + c;
	dis = b * b - 4.0 * a * c;
	if (dis > 0)	{
		dx = 0.5 * Math.sqrt(dis) / Math.abs(a);
		z1 = xe - dx;
		z2 = xe + dx;
		if (Math.abs(z1) <= 1.0) nz += 1;
		if (Math.abs(z2) <= 1.0) nz += 1;
		if (z1 < -1.0) z1 = z2;
	}
	quadout[0] = nz;
	quadout[1] = z1;
	quadout[2] = z2;
	quadout[3] = xe;
	quadout[4] = ye;
	return quadout;
}


function lmst(mjd, glong) {
	var lst, t, d;
	d = mjd - 51544.5
	t = d / 36525.0;
	lst = range(280.46061837 + 360.98564736629 * d + 0.000387933 *t*t - t*t*t / 38710000);
	return (lst/15.0 + glong/15);
}


function minisun(t) {
	var p2 = 6.283185307, coseps = 0.91748, sineps = 0.39778;
	var L, M, DL, SL, X, Y, Z, RHO, ra, dec;
	var suneq = new Array;

	M = p2 * frac(0.993133 + 99.997361 * t);
	DL = 6893.0 * Math.sin(M) + 72.0 * Math.sin(2 * M);
	L = p2 * frac(0.7859453 + M / p2 + (6191.2 * t + DL)/1296000);
	SL = Math.sin(L);
	X = Math.cos(L);
	Y = coseps * SL;
	Z = sineps * SL;
	RHO = Math.sqrt(1 - Z * Z);
	dec = (360.0 / p2) * Math.atan(Z / RHO);
	ra = (48.0 / p2) * Math.atan(Y / (X + RHO));
	if (ra <0 ) ra += 24;
	suneq[1] = dec;
	suneq[2] = ra;
	return suneq;
}

function sin_alt(iobj, mjd0, hour, glong, cglat, sglat) {
	var mjd, t, ra, dec, tau, salt, rads = 0.0174532925;
	var objpos = new Array;
	mjd = mjd0 + hour/24.0;
	t = (mjd - 51544.5) / 36525.0;
	if (iobj == 1) {
		objpos = minimoon(t);
	} else {
		objpos = minisun(t);
	}
	ra = objpos[2];
	dec = objpos[1];
	tau = 15.0 * (lmst(mjd, glong) - ra);
	salt = sglat * Math.sin(rads*dec) + cglat * Math.cos(rads*dec) * Math.cos(rads*tau);
	return salt;
}

function getzttime(mjd, tz, glong) {
	var sglong, sglat, date, ym, yz, utrise, utset, j;
	var yp, nz, hour, z1, z2, iobj, rads = 0.0174532925;
	var quadout = new Array;
   
	sinho = Math.sin(rads * -0.833);		
	date = mjd - tz/24;
	hour = 1.0;
	ym = sin_alt(2, date, hour - 1.0, glong, 1, 0) - sinho;

	while(hour < 25) {
		yz = sin_alt(2, date, hour, glong, 1, 0) - sinho;
		yp = sin_alt(2, date, hour + 1.0, glong, 1, 0) - sinho;
		quadout = quad(ym, yz, yp);
		nz = quadout[0];
		z1 = quadout[1];
		z2 = quadout[2];
		xe = quadout[3];
		ye = quadout[4];

		if (nz == 1) {
			if (ym < 0.0) 
				utrise = hour + z1;			
			else 
				utset = hour + z1;
			
		} 
		if (nz == 2) {
			if (ye < 0.0) {
				utrise = hour + z2;
				utset = hour + z1;
			}
			else {
				utrise = hour + z1;
				utset = hour + z2;
			}
		} 
		ym = yp;
		hour += 2.0;
	} 
	var zt=(utrise+utset)/2;
	if(zt<utrise)
		zt=(zt+12)%24;
	return zt;
}


function tick() {
	var today,z1,z2,z3,z4,z5,z6,z7,z8,z9,z10,z11,z12,ztx,scolor;
	var sccolor=new Array("red","#00FF00");
	today = new Date()
	var hours = today.getHours();
	var minutes = today.getMinutes();
	var seconds = today.getSeconds();
	var stM =tM+1
	if(hours<10) hours='0'+hours
	if(minutes<10) minutes='0'+minutes
	if(seconds<10) seconds='0'+seconds
	scolor=sccolor[seconds%2]
	Clock.innerHTML =tY+'年'+stM+'月'+tD+'日&nbsp;'+hours+':'+minutes+':'+seconds;
	if (( hours >= 1 ) && (hours < 3 )){
		z1=scolor;
		ztx="丑";
	} else {
		z1="#c0c0c0";
	}
	if (( hours >= 3 ) && (hours < 5 )) {
		z2=scolor;
		ztx="寅";
	} else {
		z2="#c0c0c0";
	}
	if (( hours >= 5 ) && (hours < 7 )) {
		z3=scolor;
		ztx="卯";
	} else {
		z3="#c0c0c0";
	}
	if (( hours >= 7 ) && (hours < 9 )){
		z4=scolor;
		ztx="辰";
	} else {
		z4="#c0c0c0";
	}
	if (( hours >= 9 ) && (hours < 11)) {
		z5=scolor;
		ztx="巳";
	} else {
		z5="#c0c0c0";
	}
	if (( hours >= 11) && (hours < 13)) {
		z6=scolor;
		ztx="午";
	} else {
		z6="#c0c0c0";
	}
	if (( hours >= 13) && (hours < 15)){
		z7=scolor;
		ztx="未";
	} else {
		z7="#c0c0c0";
	}
	if (( hours >= 15) && (hours < 17)){
		z8=scolor;
		ztx="申";
	} else {
		z8="#c0c0c0";
	}
	if (( hours >= 17) && (hours < 19)){
		z9=scolor;
		ztx="酉";
	} else {
		z9="#c0c0c0";
	}
	if (( hours >= 19) && (hours < 21)){
		z10=scolor;
		ztx="戌";
	} else {
		z10="#c0c0c0";
	}
	if (( hours >= 21) && (hours < 23)){
		z11=scolor;
		ztx="亥";
	} else {
		z11="#c0c0c0";
	}
	if (((hours >= 23) || (hours < 1))) {
		z12=scolor;
		ztx="子";
	} else {
		z12="#c0c0c0";
	}
	tim.innerHTML='<table border="0" cellpadding="0" cellspacing="0" width="100%">'+'<tr><td width=48></td><td height=2 width=20 bgcolor='+z12+'></td>'+'<td width=20 bgcolor='+z1+'></td><td width=21 bgcolor='+z2+'></td><td width=21 bgcolor='+z3+'></td>'+'<td width=20 bgcolor='+z4+'></td><td width=20 bgcolor='+z5+'></td>'+'<td width=20 bgcolor='+z6+'></td><td width=20 bgcolor='+z7+'></td>'+'<td width=20 bgcolor='+z8+'></td><td width=20 bgcolor='+z9+'></td>'+'<td width=20 bgcolor='+z10+'></td><td width=20 bgcolor='+z11+'></td>'+'<td width=22></td></tr></td></tr></table>';
	tim2.innerHTML=ztx;
	window.setTimeout("tick()", 1000);
}

function initial() {
   CLD.SY.selectedIndex=tY-1900;
   CLD.SM.selectedIndex=tM;
   drawCld(tY,tM);
   tick();
}

function getString(isString,n){
       var isResult=isString.substr(isString.length-n,1);
      return  isResult;
}


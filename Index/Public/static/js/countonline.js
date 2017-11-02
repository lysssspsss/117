//全角转换为半角函数
function ToCDB(str0)   
{
    var str = str0.replace(/[a-zA-Z\.\s\-、　。，；,':：()【】＝=（）\r\n\t]{1,}/g, ",");//替换常见分隔符[\.\s、　。，；-+]为统一分隔符','
    var tmp = "";
    for(var i=0;i<str.length;i++)
    {
        if(str.charCodeAt(i)>65248&&str.charCodeAt(i)<65375)
        {
            tmp += String.fromCharCode(str.charCodeAt(i)-65248);
        }
        else
        {
            tmp += String.fromCharCode(str.charCodeAt(i)); 
        }
    }
    return tmp;
} 

//按钮点击后向统计框输入
function addText(vtxt)
{
    var oldstr = ","+document.form.inputtxt.value;
    if(oldstr.charAt(oldstr.length - 1) != ",")
    {
        document.form.inputtxt.value += ","+vtxt;
    }
    else
    {
        document.form.inputtxt.value += vtxt;
    }
}

//输入号段
function addteduan()
{
    var hao_from = document.form.hao_from.value;
    var hao_to = document.form.hao_to.value;
    if(hao_from == null || hao_to == null)
    {
        alert("输入号码段错误！null\n如：01-08 或 20-49 或 31-41 等\n请按自己须要输入号码段");
        return false ;
    }    
    if(hao_from.length <=0 || hao_to.length <=0)
    {
        alert("输入号码段错误！0\n如：01-08 或 20-49 或 31-41 等\n请按自己须要输入号码段");
        return false ;
    }
    var from = parseInt(hao_from,10);
    var to = parseInt(hao_to,10);
    if(from < to && from >0 && to <=49)
    {
        var instr ="";
        for (var i=from; i<= to; i++)
        {
            instr += i+",";
        }
        addText(instr);
    }
    else
    {
        alert("输入号码段错误！d\n如：01-08 或 20-49 或 31-41 等\n请按自己须要输入号码段");
        return false ;
    }
}
//清空
function resetinput()
{
    document.form.inputtxt.value = "";
}

function strtoarr(inputstr)
{
    var a= 'aaa';
}
//
//去掉数组重复
function unique(data){
    data = data || [];
    var a = {};
    for (var i=0; i<data.length; i++) {
        var v = data[i];
        if (typeof(a[v]) == 'undefined'){
            a[v] = 1;
        }
    };
    data.length=0; 
    for (var i in a){
        data[data.length] = i;
    }
    return data;
}
//数字升序排序
function compareNumbers(a, b) {
    return a - b;// 降序 return b - a;
}

//统计
function tongji(allmastr){
    var ma_arr = allmastr.split(",");
    //
    var manum2 = new Array(50);//保存1－49对应的个数
    for(var i =0;i < manum2.length ; i++)
    {
        manum2[i] = 0;
    }
    //累加统计个数
    for(var i =0;i < ma_arr.length ; i++)
    {
        var i2 = parseInt(ma_arr[i],10);
        manum2[i2]+=1;
    }
    //获取次数列表
    var numarr = new Array();
    for(var i =1;i<=49 ; i++)
    {
        numarr.push(manum2[i]);
    }
    //去掉重复次数
    numarr = unique(numarr);
    //次数从低到高排序
    numarr.sort(compareNumbers);
    //
    var tjstr = "六合彩历史查询【在线统计器】http://www.117kj.com/tongji\n统计结果：\n";
    for(var i=0;i< numarr.length;i++)
    {
        var ci = numarr[i];
        var cistr = "〖"+ci+"次〗:";
        var mashu = 0;
        for(var j =1;j<=49 ; j++)
        {
            if(manum2[j] == ci)
            {
                mashu +=1 ;
                if(j < 10)
                {
                    j = "0"+j;
                }
                cistr += j+',' ;
            }
        }
        cistr += '（共'+ mashu +'个）\n' ;
        tjstr += cistr ;
    }
    tjstr += "\n";
    return tjstr;
}

var lianstr = "红绿蓝兰金木水火土鼠牛虎兔龙蛇马羊猴鸡狗猪大小单双";
//统计码数
function countma()
{
    var inputstr = document.form.inputtxt.value;
    if(inputstr.length >0 )
    {
        inputstr += ",";
        inputstr = ToCDB(inputstr);//转全角为半角
        //
        var allmastr = "";
        //专门提取数字
        var ma_str0 = inputstr.match(/\d{1,}\b[^次码个头尾合门段余]/g);//忽略掉数字后面包含的文字集
        if(ma_str0 != null)
        {
            var ma_str1 = ma_str0.join(",")+",";
            var ma_str = ma_str1.match(/\d{1,}/g);
            if(ma_str != null)
            {
                var tmparr = new Array();
                for(var i=0; i< ma_str.length; i++)
                {
                    var shuxing = "n_"+ma_str[i];
                    if(shuxing in document.form2 )
                    {
                        allmastr += document.form2[shuxing].title;
                    }                    
                }
            }
        }
        //
        inputstr = inputstr.split(",");
        //过滤元素
        for(var i =0;i< inputstr.length;i++)
        {
            var shuxing = "n_"+inputstr[i];
            if(shuxing in document.form)
            {
                allmastr += document.form[shuxing].title;
            }
            else
            {
                //连续中文字
                for(var j = 2;j< shuxing.length;j++)
                {
                    var tmpstr = shuxing.charAt(j);
                    if(lianstr.indexOf(tmpstr) != -1)
                    {
                        allmastr += document.form["n_"+tmpstr].title;
                    }
                }
            }
        }
        //
        document.form.resultstxt.value = tongji(allmastr);
    }
}
///


//其它类型统计
function countstyle(tjstylestr)
{
    //var tjstylestr = '鼠,牛,虎,兔,龙,蛇,马,羊,猴,鸡,狗,猪' ;
    var tjstyle = tjstylestr.split(",");
    var inputstr = document.form.inputtxt.value;
    if(inputstr.length >0 )
    {
        inputstr = ToCDB(inputstr+",");
        var tmpinputarr = inputstr.split(",");
        var inputarr = new Array();
        //判断连续的中文，并分隔
        for(var i =0;i< tmpinputarr.length;i++)
        {
            var shuxing = "n_"+tmpinputarr[i];
            if(shuxing in document.form)
            {
                inputarr.push(tmpinputarr[i]);
            }
            else
            {
                //连续中文字
                for(var j = 2;j< shuxing.length;j++)
                {
                    var tmpstr = shuxing.charAt(j);
                    if(lianstr.indexOf(tmpstr) != -1)
                    {
                        inputarr.push(tmpstr);
                    }                    
                }
            }
        }
        //初始化次数
        var sxnum = new Array(tjstyle.length);
        for(var i=0;i < tjstyle.length;i++)
        {
            sxnum[i] = 0;
        }
        //
        for(var j=0;j< inputarr.length;j++)
        {
            if(tjstylestr.indexOf(inputarr[j]) != -1)
            {
                for(var i=0;i < tjstyle.length;i++)
                {
                    var sxn = tjstyle[i];
                    var inputvalue = inputarr[j];
                    if(inputvalue.length == 1 && "红绿蓝".indexOf(inputvalue) != -1)
                    {
                        inputvalue += "波";
                    }
                    if(sxn == inputvalue )
                    {
                        sxnum[i] += 1;//累加统计
                        break;
                    }
                }
            }
        }
        //次数列表
        var cinumarr = new Array();
        for(var i=0;i < tjstyle.length;i++)
        {
            cinumarr.push(sxnum[i]);
        }
        //去掉重复次数
        cinumarr = unique(cinumarr);
        //次数从低到高排序
        cinumarr.sort(compareNumbers);        
        //转化为输出字符串
        var tjstr = "六合彩历史查询【在线统计器】http://www.117kj.com/tongji\n统计结果：\n";
        for(var i=0;i< cinumarr.length;i++)
        {
            var ci = cinumarr[i];
            var cistr = "〖"+ci+"次〗:";
            var geshu = 0;
            for(var j =0;j< tjstyle.length ; j++)
            {
                if(sxnum[j] == ci)
                {
                    geshu += 1;
                    cistr += tjstyle[j]+",";
                }                
            }
            cistr += '（共'+ geshu +'个）\n' ;
            tjstr += cistr ;            
        }
        tjstr += "\n";
        document.form.resultstxt.value = tjstr;
        //return tjstr;        
    }
}

<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
class CaijiController extends AuthController {
//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用首页内容
public function index(){
$Article=D("Home/caiji_url");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','biaoti','begtime','ssfl','bianma','url','api','directory4','sorting'))->where("ssfl=0")->order("sorting desc")->limit($Page->limit)->select();
$Start = $Article->field(array('sorting'))->where($search)->order("sorting desc,begtime desc")->limit(1)->select();
$End   = $Article->field(array('sorting'))->where($search)->order("sorting asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();	
}

public function pic(){
$Article=D("Home/caiji_url");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','biaoti','begtime','ssfl','bianma','url','api','directory4','zhuangtai','sorting'))->where("ssfl=1")->order("sorting desc")->limit($Page->limit)->select();
$Start = $Article->field(array('sorting'))->where($search)->order("sorting desc,begtime desc")->limit(1)->select();
$End   = $Article->field(array('sorting'))->where($search)->order("sorting asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();	
}
public function bbsx(){
$Article=D("Home/caiji_url");
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','biaoti','begtime','ssfl','bianma','url','api','directory4','zhuangtai','sorting'))->where("ssfl=2")->order("sorting desc")->limit($Page->limit)->select();
$Start = $Article->field(array('sorting'))->where($search)->order("sorting desc,begtime desc")->limit(1)->select();
$End   = $Article->field(array('sorting'))->where($search)->order("sorting asc,begtime desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();	
}


public function kj(){
$this->display();	
}

public function zxkj(){
$this->display();	
}



    public function kjcj(){
    	//引入QueryList
        import('Org.QueryList.QueryList');
		//采集OSC的代码分享列表，标题 链接 作者
		//采集地址
		$cjurl = "http://18kj.com/history_2017.html";
		//采集内容
		$cjnr= array("riqi"=>array("td:eq(1)","text"),
			"title"=>array("td:eq(2)","text","-div"),
			"tit1"=>array("td:eq(3) .p:eq(0) .hm","text"),
			"tit01"=>array("td:eq(3) .p:eq(0) .sx","text"),
			"tit2"=>array("td:eq(3) .p:eq(1) .hm","text"),
			"tit02"=>array("td:eq(3) .p:eq(1) .sx","text"),
			"tit3"=>array("td:eq(3) .p:eq(2) .hm","text"),
			"tit03"=>array("td:eq(3) .p:eq(2) .sx","text"),
			"tit4"=>array("td:eq(3) .p:eq(3) .hm","text"),
			"tit04"=>array("td:eq(3) .p:eq(3) .sx","text"),
			"tit5"=>array("td:eq(3) .p:eq(4) .hm","text"),
			"tit05"=>array("td:eq(3) .p:eq(4) .sx","text"),
			"tit6"=>array("td:eq(3) .p:eq(5) .hm","text"),
			"tit06"=>array("td:eq(3) .p:eq(5) .sx","text"),
			"tit7"=>array("td:eq(4) .p:eq(0) .hm","text"),
			"tit07"=>array("td:eq(4) .p:eq(0) .sx","text"),
			"tit8"=>array("td:eq(9)","text"),
			"tit9"=>array("td:eq(10)","text"),
			"tit10"=>array("td:eq(11)","text"),
			"tit11"=>array("td:eq(13)","text"),
			"tit12"=>array("td:eq(14)","text"),
			"tit13"=>array("td:eq(15)","text"),
			"tit14"=>array("td:eq(16)","text"),
			"tit15"=>array("td:eq(17)","text"),
			"tit16"=>array("td:eq(18)","text"),
			"tit17"=>array("td:eq(19)","text"),
			"tit18"=>array("td:eq(20)","text"),
			"tit19"=>array("td:eq(21)","text"),
			"tit20"=>array("td:eq(22)","text"),
			"tit21"=>array("td:eq(23)","text"),
			"tit22"=>array("td:eq(12)","text"),
			"bands"=>array("td:eq(7)","text")
			);
		//采集范围
		$fanwei= ".bd .infolist:lt(0)";
		//使用curl抓取源码并以GB2312编码格式输出
		$hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl','utf-8');
		$arr = $hj->jsonArr;
        foreach ($arr as $key => $value) {
			$value['title']=str_replace('期','',$value['title']);
         //如果文章表中已经存在采集的数据，将不执行写入程序.
         if(D('Home/kaijiang')->where("title like '{$value[title]}' and FROM_UNIXTIME(begtime, '%Y-%m-%d') BETWEEN '2017-01-01' AND '2017-12-31'")->find()){

         }else{

		 //print_r($wznr);
         //循环采集文章内容，写入数据库
          //判断如果采集内容不为空，就写入数据库。

            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
			$value['tit9']=str_replace('头','',$value['tit9']);
			$value['tit10']=str_replace('尾','',$value['tit10']);
			$value['tit12']=str_replace('门','',$value['tit12']);
			$value['tit13']=str_replace('段','',$value['tit13']);
			$value['title']=str_replace('期','',$value['title']);
			$value['riqi']=str_replace('-','',$value['riqi']);
            $crsj['title']=$value['title'];
			$crsj['tit1']=$value['tit1'];
			$crsj['tit01']=$value['tit01'];
			$crsj['tit2']=$value['tit2'];
			$crsj['tit02']=$value['tit02'];
			$crsj['tit3']=$value['tit3'];
			$crsj['tit03']=$value['tit03'];
			$crsj['tit4']=$value['tit4'];
			$crsj['tit04']=$value['tit04'];
			$crsj['tit5']=$value['tit5'];
			$crsj['tit05']=$value['tit05'];
			$crsj['tit6']=$value['tit6'];
			$crsj['tit06']=$value['tit06'];
			$crsj['tit7']=$value['tit7'];
			$crsj['tit07']=$value['tit07'];
			$crsj['tit8']=$value['tit8'];
			$crsj['tit9']=$value['tit9'];
			$crsj['tit10']=$value['tit10'];
			$crsj['tit11']=$value['tit11'];
			$crsj['tit12']=$value['tit12'];
			$crsj['tit13']=$value['tit13'];
			$crsj['tit14']=$value['tit14'];
			$crsj['tit15']=$value['tit15'];
			$crsj['tit16']=$value['tit16'];
			$crsj['tit17']=$value['tit17'];
			$crsj['tit18']=$value['tit18'];
			$crsj['tit19']=$value['tit19'];
			$crsj['tit20']=$value['tit20'];
			$crsj['tit21']=$value['tit21'];
			$crsj['tit22']=$value['tit22'];
			$crsj['bands']=$value['bands'];
			$crsj['riqi']=$value['riqi'];
			$crsj['times']=2017; // 为2016的开奖.
			$crsj['begtime']=time();
            D('Home/kaijiang')->add($crsj);

          //写入数据库完毕
         }
          //判断为新数据执行程序完毕 
        }
		echo "采集数据完成"; 
    }

     //文章单个采集
    public function bbscj(){
			$Form   =   D("Home/caiji_url");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();		
    		$this->display();	

    	
    } 	
   
  //文章单个执行采集
   public function zxbbscj(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      $id=$_GET['id'];
      $cjsj=D('Home/caiji_url')->where("id = $id")->limit(1)->select();		   		   
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
			"cjmc"=>array($v['cjmc'],"text"),
			"picurl"=>array($v['picurl'],"text"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 //echo "<pre>";
		 //print_r($arr);die;
		 //echo "</pre><hr/>";
         //循环存放采集数据
        foreach ($arr as $key => $value) {
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/bbs')->where("curl like '{$value[url]}'")->find()){

         }else{
          if($v['wangzhi']){
            $nrurl=$v['wangzhi'].$value['url'];
          }else{
            $nrurl=$value['url'];
          }
         //采集内容
         $cjwz= array("content"=>array($v['nrgz'],"html","a"));
         //采集内容范围
         $fw=$v['nrfw'];
          //采集文章内容页面
        $wzsj = \QueryList::Query($nrurl,$cjwz,$fw,'curl',$v['bianma']);
         $wznr= $wzsj->jsonArr;
		 //print_r($wznr);
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
             //判断采集表中的glzd内容是否为空，不为空将进行过滤
             if($v['glzd']){
              $wzk['content']=str_replace($v['glzd'],'',$wzk['content']);
             }
			 //判断采集表中的glbt标题是否为空，不为空将进行过滤
             if($v['glbt']){
              $value['title']=str_replace($v['glbt'],'',$value['title']);
             }
			$rand_num = rand(123,371);//内容浏览量随机设置
			$value['cjmc']=str_replace('发表者:','',$value['cjmc']);	
            $crsj['title']=$value['title'];
			$crsj['curl']=red;
            $crsj['content']=$wzk['content'];
			$crsj['picurl']=$value['picurl'];
            $crsj['zuozhe']=$value['cjmc'];
            $crsj['directory1']=$v['directory1'];
			$crsj['directory2']=$v['directory2'];
			$crsj['directory3']=$v['directory3'];
			$crsj['directory4']=$v['directory4'];
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;
            D('Home/bbs')->add($crsj);		
          }
            
          } 
  
         }
          //判断为新数据执行程序完毕 
					  
        }		
      }

      //循环采集程序完毕
	echo "采集数据完成"; 
   }   	
	
	
    public function fy(){
    import('Org.QueryList.QueryList');
//采集OSC的代码分享列表，标题 链接 作者
$url = "http://mini.eastday.com/";
$reg = array("title"=>array("a:eq(0)","text"),
	"tp"=>array("img","src"),
	"js"=>array("p","text"),
	"url"=>array("a:eq(0)","href")
	);
$rang=".hnt-list li:eq(1)";
//使用curl抓取源码并以GB2312编码格式输出
$hj = \QueryList::Query($url,$reg,$rang,'curl','utf-8');
$arr = $hj->jsonArr;
echo "<pre>";
print_r($arr);
echo "</pre><hr/>";
$nrurl =$arr[0][url]; 
$nrx='';
do {
  $gz = array("content"=>array(".contain_detail_cnt","html"),
	"xyy"=>array('.pagination a:last','href'));
	$fw=".detail_cnt";
	$content = \QueryList::Query($nrurl,$gz,$fw,'curl','utf-8');
	$wznr = $content->jsonArr;
	$nrurl='http://mini.eastday.com/a/'.$wznr[0]['xyy'];
$xx=$wznr[0]['content'];
$nrx=$nrx.$xx;
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
			$rand_num = rand(123,371);//内容浏览量随机设置	
			$crsj['curl']=$value['url'];
			$crsj['picurl']=$value['tp'];
            $crsj['content']=$nrx;
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;	
          }
            
          }
} while ($wznr[0]['content']);
    $crsj['title']=$value['title'];
      D('Home/pic')->add($crsj);  
//print_r($nrx);
echo "</pre><hr/>";
         }


  //图片单个执行采集
   public function zxcjpic(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      $id=$_GET['id'];
      $cjsj=D('Home/caiji_url')->where("id = $id")->limit(1)->select();		   		   
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
			"picurl"=>array($v['picurl'],"src"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 //echo "<pre>";
		 //print_r($arr);die;
		 //echo "</pre><hr/>";
         //循环存放采集数据
		$nrurl =$arr[0][url]; 
		$nrx='';	
        foreach ($arr as $key => $value) {
			
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/pic')->where("picurl like '{$value[picurl]}'")->find()){

         }else{
          if($v['wangzhi']){
            $nrurl=$v['wangzhi'].$value['url'];
          }else{
            $nrurl=$value['url'];
          }
		  do {
		if($v['zhuangtai']==1){	  //是否下载图片		  
         //采集内容
         $cjwz= array("content"=>array($v['nrgz'],"html","a",function($content){
            //利用回调函数下载文章中的图片并替换图片路径为本地路径
            //使用本例请确保当前目录下有image文件夹，并有写入权限
            //由于QueryList是基于phpQuery的，所以可以随时随地使用phpQuery，当然在这里也可以使用正则或者其它方式达到同样的目的
            $doc = \phpQuery::newDocumentHTML($content);
            $imgs = pq($doc)->find('img');
            foreach ($imgs as $img) {
				$save_path = $_SERVER['DOCUMENT_ROOT'].'/Upload/image/';
				$ymd = date("Ymd");
				$save_path .= $ymd . "/";
				if (!file_exists($save_path)) {
					mkdir($save_path);
				}					
                $src = pq($img)->attr('src');
				//文件保存目录路径			
                $localSrc = 'Upload/image/'.$ymd.'/'.md5($src).'.jpg';
                $stream = file_get_contents($src);
                file_put_contents($localSrc,$stream);
                pq($img)->attr('src','/'.$localSrc.'');
            }
            return $doc->htmlOuter();
    }),"xyy"=>array($v['page'],'href')); //xxyy分页
	
		}else{
		$cjwz= array("content"=>array($v['nrgz'],"html","a"),"xyy"=>array($v['page'],'href'));		
		
	}
	
         //采集内容范围
         $fw=$v['nrfw'];
          //采集文章内容页面
        $content = \QueryList::Query($nrurl,$cjwz,$fw,'curl',$v['bianma']);
        $wznr= $content->jsonArr;
		$nrurl=$wznr[0]['xyy'];
		$xx=$wznr[0]['content'];
		$nrx=$nrx.$xx;			
		 //print_r($wznr);
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
			$rand_num = rand(123,371);//内容浏览量随机设置	
			$crsj['curl']=$value['url'];
			$crsj['picurl']=$value['picurl'];
            $crsj['content']=$nrx;
            $crsj['zuozhe']=$v['cjmc'];
            $crsj['directory1']=$v['directory1'];
			$crsj['directory2']=$v['directory2'];
			$crsj['directory3']=$v['directory3'];
			$crsj['directory4']=$v['directory4'];
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;	
          }
            
          }
		
  } while ($wznr[0]['content']);
    $crsj['title']=$value['title'];
      D('Home/pic')->add($crsj);  
         }
          //判断为新数据执行程序完毕 
					  
        }		
      }

      //循环采集程序完毕
	echo "采集数据完成"; 
   }  





     //图片单个采集
    public function cjpic(){
			$Form   =   D("Home/caiji_url");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();		
    		$this->display();	

    	
    } 	
   
  //图片单个执行采集
   public function zxcjpic1111(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      $id=$_GET['id'];
      $cjsj=D('Home/caiji_url')->where("id = $id")->limit(1)->select();		   		   
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
			"picurl"=>array($v['picurl'],"src"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 //echo "<pre>";
		 //print_r($arr);die;
		 //echo "</pre><hr/>";
         //循环存放采集数据
        foreach ($arr as $key => $value) {
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/pic')->where("picurl like '{$value[picurl]}'")->find()){

         }else{
          if($v['wangzhi']){
            $nrurl=$v['wangzhi'].$value['url'];
          }else{
            $nrurl=$value['url'];
          }
         //采集内容
		 
	if($v['zhuangtai']==1){	  //是否下载图片
        $cjwz= array("content"=>array($v['nrgz'],"html","a",function($content){
            //利用回调函数下载文章中的图片并替换图片路径为本地路径
            //使用本例请确保当前目录下有image文件夹，并有写入权限
            //由于QueryList是基于phpQuery的，所以可以随时随地使用phpQuery，当然在这里也可以使用正则或者其它方式达到同样的目的
            $doc = \phpQuery::newDocumentHTML($content);
            $imgs = pq($doc)->find('img');
            foreach ($imgs as $img) {
				$save_path = $_SERVER['DOCUMENT_ROOT'].'/Upload/image/';
				$ymd = date("Ymd");
				$save_path .= $ymd . "/";
				if (!file_exists($save_path)) {
					mkdir($save_path);
				}					
                $src = pq($img)->attr('src');
				//文件保存目录路径			
                $localSrc = 'Upload/image/'.$ymd.'/'.md5($src).'.jpg';
                $stream = file_get_contents($src);
                file_put_contents($localSrc,$stream);
                pq($img)->attr('src','/'.$localSrc.'');
            }
            return $doc->htmlOuter();
		}));		 
	
		}else{
		$cjwz= array("content"=>array($v['nrgz'],"html","a"));		
		
	}
         //采集内容范围
         $fw=$v['nrfw'];
          //采集文章内容页面
        $wzsj = \QueryList::Query($nrurl,$cjwz,$fw,'curl',$v['bianma']);
         $wznr= $wzsj->jsonArr;
		 //print_r($wznr);
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
             //判断采集表中的glzd内容是否为空，不为空将进行过滤
             if($v['glzd']){
              $wzk['content']=str_replace($v['glzd'],'',$wzk['content']);
             }
			 //判断采集表中的glbt标题是否为空，不为空将进行过滤
             if($v['glbt']){
              $value['title']=str_replace($v['glbt'],'',$value['title']);
             }
			$rand_num = rand(123,371);//内容浏览量随机设置	
            $crsj['title']=$value['title'];
			$crsj['curl']=$value['url'];
			$crsj['picurl']=$value['picurl'];
            $crsj['content']=$wzk['content'];
            $crsj['zuozhe']=$v['cjmc'];
            $crsj['directory1']=$v['directory1'];
			$crsj['directory2']=$v['directory2'];
			$crsj['directory3']=$v['directory3'];
			$crsj['directory4']=$v['directory4'];
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;
            D('Home/pic')->add($crsj);		
          }
            
          } 
  
         }
          //判断为新数据执行程序完毕 
					  
        }		
      }

      //循环采集程序完毕
	echo "采集数据完成"; 
   }   




    public function tkcj(){  //图库期数采集
    	//引入QueryList
        import('Org.QueryList.QueryList');
		//采集OSC的代码分享列表，标题 链接 作者
		//采集地址
		$cjurl = "http://www.100tk.com/col/";
		//采集内容
		$cjnr= array("title"=>array("label:eq(1)","text")
			);
		//采集范围
		$fanwei= ".a_list:lt(1)";
		//使用curl抓取源码并以GB2312编码格式输出
		$hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl','utf-8');
		$arr = $hj->jsonArr;
        foreach ($arr as $key => $value) {
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/qs')->where("title like '{$value[title]}'")->find()){

         }else{

		 //print_r($wznr);
         //循环采集文章内容，写入数据库
          //判断如果采集内容不为空，就写入数据库。

            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
            $crsj['title']=$value['title'];
            $crsj['directory1']=0001;
			$crsj['begtime']=time();
            D('Home/qs')->add($crsj);
            

          //写入数据库完毕
         }
          //判断为新数据执行程序完毕 
        }
    }



//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用首页内容


  //添加采集

    public function tjcj(){
    	if (IS_POST) {
    		
    		$collect=D('Home/caiji_url');
    		$_POST['begtime']=mktime();
    		$val=$collect->add($_POST);
    		if ($val) {
    			$this->success('添加采集成',U('Caiji/index'),5);
    		}else{
    			$this->error('添加失败');
    		}
    	}else{
    		$this->display();	
    	}
    	
    }   

  //采集测试
    public function cjcs(){
			$Form   =   D("Home/caiji_url");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();		
    		$this->display();	

    	
    } 	
	

  //执行采集测试
   public function zxcjcs(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      //读取采集表中状态为0的数据，条数为1条
	  $id=$_GET['id'];
      $cjsj=D('Home/caiji_url')->where("id = $id")->limit(1)->select();
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
			"picurl"=>array($v['picurl'],"src"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 echo "<pre>";
		 print_r($arr);die;
		 echo "</pre><hr/>";		
      }
   }

  //批量执行采集
   public function plzxcj(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      //读取采集表中状态为0的数据，条数为1条
      $cjsj=D('Home/caiji_url')->where('zhuangtai=0')->limit(1)->select();
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 //echo "<pre>";
		 //print_r($arr);die;
		 //echo "</pre><hr/>";
         //循环存放采集数据
        foreach ($arr as $key => $value) {
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/article')->where("title like '{$value[title]}'")->find()){

         }else{
          if($v['wangzhi']){
            $nrurl=$v['wangzhi'].$value['url'];
          }else{
            $nrurl=$value['url'];
          }
         //采集内容
         $cjwz= array("content"=>array($v['nrgz'],"html","a"));
         //采集内容范围
         $fw=$v['nrfw'];
          //采集文章内容页面
        $wzsj = \QueryList::Query($nrurl,$cjwz,$fw,'curl',$v['bianma']);
         $wznr= $wzsj->jsonArr;
		 //print_r($wznr);
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
             //判断采集表中的glzd内容是否为空，不为空将进行过滤
             if($v['glzd']){
              $wzk['content']=str_replace($v['glzd'],'',$wzk['content']);
             }
			 //判断采集表中的glbt标题是否为空，不为空将进行过滤
             if($v['glbt']){
              $value['title']=str_replace($v['glbt'],'',$value['title']);
             }
			$rand_num = rand(123,371);//内容浏览量随机设置	
            $crsj['title']=$value['title'];
            $crsj['content']=$wzk['content'];
			$crsj['curl']=$value['url'];
            $crsj['zuozhe']=$v['cjmc'];
            $crsj['directory1']=$v['directory1'];
			$crsj['directory2']=$v['directory2'];
			$crsj['directory3']=$v['directory3'];
			$crsj['directory4']=$v['directory4'];
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;
            D('Home/article')->add($crsj);
          }
            
          } 
          //写入数据库完毕
         }
          //判断为新数据执行程序完毕 
        }
        //循环采集文章完毕
        //将当前采集表中的网站状态改为1
        $zt['id']=$v['id'];
        $zt['zhuangtai']=1;
        D('Home/caiji_url')->save($zt);		
      }
      //循环采集程序完毕
      $zhzt=D('caiji_url')->order('id desc')->find();
      //判断最后一条数据状态是否为1，如果为1，将当前采集表中的数据状态全部改为0
      if($zhzt['zhuangtai']>0){
         $cjbsj=D('Home/caiji_url')->select();
         foreach ($cjbsj as $key => $va) {
           $ggzt['id']=$va['id'];
           $ggzt['zhuangtai']=0;
           D('Home/caiji_url')->save($ggzt);
         }
      }
			  $this->success('采集完毕',U('Caiji/index'),5);    
   }


     //文章单个采集
    public function cj(){
			$Form   =   D("Home/caiji_url");
             // 读取数据
             $id=$_GET['id'];
             $data =   $Form->where("id=$id")->find();
             if($data) {
                 $this->data =   $data;// 模板变量赋值
             }else{
                 $this->error('数据错误');
             }
             $Form->getLastSql();		
    		$this->display();	

    	
    } 	
   
  //文章单个执行采集
   public function zxcj(){
      //引入QueryList
        import('Org.QueryList.QueryList');
      $id=$_GET['id'];
      $cjsj=D('Home/caiji_url')->where("id = $id")->limit(1)->select();		   		   
      foreach ($cjsj as $key => $v) {
         //采集地址
         $cjurl = $v['url'];
         //采集内容
         $cjnr= array("title"=>array($v['title'],"text"),
            "url"=>array($v['cjurl'],"href"),
            "content"=>array($v['content'],"text")
            );
         //采集范围
         $fanwei=$v['fanwei'];
         //使用curl抓取源码并以GB2312编码格式输出
         $hj = \QueryList::Query($cjurl,$cjnr,$fanwei,'curl',$v['bianma']);
         $arr = $hj->jsonArr;
		 //echo "<pre>";
		 //print_r($arr);die;
		 //echo "</pre><hr/>";
         //循环存放采集数据
        foreach ($arr as $key => $value) {
         //如果文章表中已经存在采集的数据，将不执行写入程序
         if(D('Home/article')->where("curl like '{$value[url]}'")->find()){

         }else{
          if($v['wangzhi']){
            $nrurl=$v['wangzhi'].$value['url'];
          }else{
            $nrurl=$value['url'];
          }
         //采集内容
         $cjwz= array("content"=>array($v['nrgz'],"html","a"));
         //采集内容范围
         $fw=$v['nrfw'];
          //采集文章内容页面
        $wzsj = \QueryList::Query($nrurl,$cjwz,$fw,'curl',$v['bianma']);
         $wznr= $wzsj->jsonArr;
		 //print_r($wznr);
         //循环采集文章内容，写入数据库
         foreach ($wznr as $key => $wzk) {
          //判断如果采集内容不为空，就写入数据库。
          if($wzk['content']){
            //如果slt存在，写入数据库
             if($value['title']){
               $crsj['title']=$value['title'];
             }
             //判断采集表中的glzd内容是否为空，不为空将进行过滤
             if($v['glzd']){
              $wzk['content']=str_replace($v['glzd'],'',$wzk['content']);
             }
			 //判断采集表中的glbt标题是否为空，不为空将进行过滤
             if($v['glbt']){
              $value['title']=str_replace($v['glbt'],'',$value['title']);
             }
			$rand_num = rand(123,371);//内容浏览量随机设置	
            $crsj['title']=$value['title'];
			$crsj['curl']=$value['url'];
            $crsj['content']=$wzk['content'];
            $crsj['zuozhe']=$v['cjmc'];
            $crsj['directory1']=$v['directory1'];
			$crsj['directory2']=$v['directory2'];
			$crsj['directory3']=$v['directory3'];
			$crsj['directory4']=$v['directory4'];
			$crsj['begtime']=time();
			$crsj['hits']=$rand_num;
            D('Home/article')->add($crsj);		
          }
            
          } 
  
         }
          //判断为新数据执行程序完毕 
					  
        }		
      }

      //循环采集程序完毕
	echo "采集数据完成"; 
   }   

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息列表显示内容
public function bbs_info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$ssfl=I('post.ssfl','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16);
session(article_class,$ClassID);
$Article=D("Home/caiji_url");
$Article->title=$title;
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->ssfl=2;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->picurl=$picurl;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息列表显示内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息修改内容
public function bbs_info_edit(){
	
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');
$Article=D("Home/caiji_url")->find($id);
$this->assign('info',$Article);
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16); 
$Article=D("Home/caiji_url"); 
$Article->title=I('post.title','','strip_tags');
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->picurl=$picurl;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息修改内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息列表显示内容
public function pic_info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$ssfl=I('post.ssfl','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$zhuangtai=I('post.zhuangtai','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$page=I('post.page','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16);
session(article_class,$ClassID);
$Article=D("Home/caiji_url");
$Article->title=$title;
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->ssfl=1;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->zhuangtai=$zhuangtai;
$Article->picurl=$picurl;
$Article->page=$page;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息列表显示内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息修改内容
public function pic_info_edit(){
	
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');
$Article=D("Home/caiji_url")->find($id);
$this->assign('info',$Article);
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$zhuangtai=I('post.zhuangtai','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$page=I('post.page','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16); 
$Article=D("Home/caiji_url"); 
$Article->title=I('post.title','','strip_tags');
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->zhuangtai=$zhuangtai;
$Article->picurl=$picurl;
$Article->page=$page;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息修改内容   
   
   

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息列表显示内容
public function info_add(){
if ($_POST['Action']==''){
$this->display();	
}else{
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$ssfl=I('post.ssfl','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16);
session(article_class,$ClassID);
$Article=D("Home/caiji_url");
$Article->title=$title;
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->ssfl=0;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->picurl=$picurl;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$Article->begtime=begtime();
$request=$Article->add();
$Article->where('id='.$request)->save(array("sorting"=>$request));
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息列表显示内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下调用信息修改内容
public function info_edit(){
	
if ($_POST['Action']==''){
$id=I('get.Id',0,'intval');
$Article=D("Home/caiji_url")->find($id);
$this->assign('info',$Article);
$this->display();	
}elseif($_POST['Action']=='Edit'){
$Id=I('post.Id',0,'intval');
$title=I('post.title','','strip_tags');
$biaoti=I('post.biaoti','','strip_tags');
$url=I('post.url','','strip_tags');
$cjmc=I('post.cjmc','','strip_tags');
$cjurl=I('post.cjurl','','strip_tags');
$content=I('post.content','','strip_tags');
$glzd=I('post.glzd','','strip_tags');
$glbt=I('post.glbt','','strip_tags');
$nrgz=I('post.nrgz','','strip_tags');
$nrfw=I('post.nrfw','','strip_tags');
$picurl=I('post.picurl','','strip_tags');
$fanwei=I('post.fanwei','','strip_tags');
$bianma=I('post.bianma','','strip_tags');
$ClassID=I('post.ClassID','','strip_tags');
$directory1=substr($ClassID,0,4);
$directory2=substr($ClassID,0,8);
$directory3=substr($ClassID,0,12);
$directory4=substr($ClassID,0,16); 
$Article=D("Home/caiji_url"); 
$Article->title=I('post.title','','strip_tags');
$Article->biaoti=$biaoti;
$Article->url=$url;
$Article->cjmc=$cjmc;
$Article->cjurl=$cjurl;
$Article->content=$content;
$Article->glzd=$glzd;
$Article->glbt=$glbt;
$Article->nrgz=$nrgz;
$Article->nrfw=$nrfw;
$Article->picurl=$picurl;
$Article->fanwei=$fanwei;
$Article->bianma=$bianma;
$Article->directory1=$directory1;
$Article->directory2=$directory2;
$Article->directory3=$directory3;
$Article->directory4=$directory4;
$begtime->begtime=$begtime;
$request=$Article->where('id='.$Id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上调用信息修改内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓执行数据的删除
public function infodelete(){
$id=$_POST['id'];
$Article=D("Home/caiji_url");
if ($_POST['Action']=='del'){
$request=$Article->where('id='.$id)->delete();
}else{
$request=$Article->where(array('id'=>array('in',$id)))->delete();
}
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0));
}else{
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：可能该信息已经被删除<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1));
}

}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的删除内容

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的排序功能
public function sorting(){
cz_sorting("cz_caiji_url","1",$_GET['Point'],$_GET['id'],$_GET['sid'],$config);
echo "<script>self.location=document.referrer;</script>";
exit();	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的排序功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的排序功能
public function class_sorting(){
cz_class_sorting("cz_article_class","0",$_GET['Point'],$_GET['id'],$_GET['sid'],$_GET['numberid'],$config);
echo "<script>self.location=document.referrer;</script>";
exit();	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行信息的排序功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据的目录显示功能
public function directory(){
$NumberID=I('get.NumberID','','strip_tags'); 
$NumberID1 = substr ("$NumberID",0,4);
$NumberID2 = substr ("$NumberID",0,8);
$NumberID3 = substr ("$NumberID",0,12);
$NumberID4 = substr ("$NumberID",0,16);
$len=strlen($NumberID);
$this->assign('len',$len);
$this->assign('NumberID',$NumberID);
$this->assign('NumberID1',$NumberID1);
$this->assign('NumberID2',$NumberID2);
$this->assign('NumberID3',$NumberID3);
$this->assign('NumberID4',$NumberID4);
$this->display();
}
public function directory1(){
$NumberID=I('get.NumberID','','strip_tags'); 
$NumberID1 = substr ("$NumberID",0,4);
$NumberID2 = substr ("$NumberID",0,8);
$NumberID3 = substr ("$NumberID",0,12);
$NumberID4 = substr ("$NumberID",0,16);
$len=strlen($NumberID);
$this->assign('len',$len);
$this->assign('NumberID',$NumberID);
$this->assign('NumberID1',$NumberID1);
$this->assign('NumberID2',$NumberID2);
$this->assign('NumberID3',$NumberID3);
$this->assign('NumberID4',$NumberID4);
$this->display();
}
public function directory2(){
$NumberID=I('get.NumberID','','strip_tags'); 
$NumberID1 = substr ("$NumberID",0,4);
$NumberID2 = substr ("$NumberID",0,8);
$NumberID3 = substr ("$NumberID",0,12);
$NumberID4 = substr ("$NumberID",0,16);
$len=strlen($NumberID);
$this->assign('len',$len);
$this->assign('NumberID',$NumberID);
$this->assign('NumberID1',$NumberID1);
$this->assign('NumberID2',$NumberID2);
$this->assign('NumberID3',$NumberID3);
$this->assign('NumberID4',$NumberID4);
$this->display();
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据的目录显示功能

public function index_class(){
$Article=D("Home/article_class");
$Action=I('get.Action','','strip_tags');
$SId=I('get.SId','','strip_tags');
if     ($Action=='close'){
$Article->locks=1;
$Article->where('id='.$SId)->save();
echo "<script>self.location=document.referrer;</script>";exit();	
}elseif($Action=='open'){
$Article->locks=0;
$Article->where('id='.$SId)->save();
echo "<script>self.location=document.referrer;</script>";exit();	
}elseif($Action==''){	
$NumberID=I('get.Id','','strip_tags');
$len=strlen($NumberID);
$search="1=1"; 
if ($NumberID==''){
$search=" LagID=0 ";
}elseif($len==4 and $NumberID!=''){
$search=" LagID=1 and Root1='$NumberID'";
}elseif($len==8 and $NumberID!=''){
$search=" LagID=2 and Root2='$NumberID'";
}elseif($len==12 and $NumberID!=''){
$search=" LagID=3 and Root3='$NumberID'";
}
if ($Id!='')$search.="  and title  like '%$keywords%' "; 
$count  =$Article->count();
$Page   = new  \Common\Page($count,30);
$show   = $Page->paging();
$list = $Article->field(array('id','title','NumberID','sorting','locks','id','lagid'))->where($search)->order("sorting asc")->limit($Page->limit)->select();
$Start = $Article->field(array('sorting'))->where($search)->order("sorting asc,id desc")->limit(1)->select();
$End   = $Article->field(array('sorting'))->where($search)->order("sorting desc,id desc")->limit(1)->select();
$this->assign('Startid',$Start[0]['sorting']);
$this->assign('Endid',$End[0]['sorting']);
$this->assign('NumberID',$NumberID);
$this->assign('list',$list);
$this->assign('page',$show);
$this->display();
}
}

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的添加显示页面
public function index_class_add(){
$Id=I('get.Id','','strip_tags');
$Article=D("Home/article_class");
#--------------------------------------------------------------------主目录添加
if ($Id==''){
$total  =$Article->count();
#--------------------------------------------------------------------判断大目录是否有数据
if ($total<>0){
$list = $Article->field(array('NumberID'))->where("LagID=0")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],1,20);
$J=$MJ+1;
}else{
$J=0+1;
}
#--------------------------------------------------------------------判断大目录是否有数据 THE END
$RootID=0;  
$PartID=0;
$LagID=0;
$len=strlen($J);
if ($len==1){
$JJ="000$J";
}elseif ($len==2){
$JJ="00$J";
}elseif ($len==3){
$JJ="0$J";
}elseif ($len==4){
$JJ="$J";
}
#--------------------------------------------------------------------主目录添加
}else{
$len=strlen($Id);
#--------------------------------------------------------------------二级目录添加
if ($len==4){
$total  =$Article->where("LagID=1 and PartID='$Id'")->count();
if ($total!='0'){
$list = $Article->field(array('NumberID'))->where("LagID=1 and PartID='$Id'")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],4,20);
$J=$MJ+1;
}else{
$J=0+1;
} 
$RootID="$Id";
$PartID="$Id";
$LagID=1;
#--------------------------------------------------------------------三级目录添加
}elseif ($len==8){
$total  =$Article->where("LagID=2 and PartID='$Id'")->count();
if ($total!='0'){
$list = $Article->field(array('NumberID'))->where("LagID=2 and PartID='$Id'")->order("NumberID desc,id desc")->limit(1)->select();
$MJ=substr($list[0]['numberid'],8,20);
$J=$MJ+1;
}else{
$J=0+1;
} 
$RootID="$Id";
$PartID="$Id";
$LagID=2;
}

$lmyen=strlen($J);
if ($lmyen==1){
$JJ=$Id."000".$J;
}elseif ($lmyen==2){
$JJ=$Id."00".$J;
}elseif ($lmyen==3){
$JJ=$Id."0".$J;
}elseif ($lmyen==4){
$JJ=$Id.$J;
}
}
$this->assign('RootID',$RootID);
$this->assign('PartID',$PartID);
$this->assign('LagID',$LagID);
$this->assign('JJ',$JJ);
$this->assign('J',$J);
$this->display();
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录添加显示页面

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的添加保存功能
public function index_class_add_save(){
$title=I('post.title','','strip_tags');
$PartID=I('post.PartID','','strip_tags');
$RootID=I('post.RootID','','strip_tags');
$LagID=I('post.LagID','','strip_tags');
$sorting=I('post.sorting','','strip_tags');
$NumberID=I('post.NumberID','','strip_tags');
$Root1=substr($RootID,0,4);
$Root2=substr($RootID,0,8);
$Root3=substr($RootID,0,12);
$Root4=substr($RootID,0,16);
$len=strlen($NumberID);
if ($len<=4){$url="";}elseif($len<=8){$url=$Root1;}elseif($len<=12){$url=$Root2;}elseif($len<=16){$url=$Root3;}
if ($title=='' || $NumberID=='' || $LagID=='' || $Root1==''  || $PartID==''){
$msg="<div class='Yoerror1'>操作失败！产生错误的原因：您没有输入资料呀<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1,"url"=>$url));
}else{
$Article=D("Home/article_class");
$Article->sorting=$sorting;
$Article->NumberID=$NumberID;
$Article->Root1=$Root1;
$Article->Root2=$Root2;
$Article->Root3=$Root3;
$Article->Root4=$Root4;
$Article->PartID=$PartID;
$Article->LagID=$LagID;
$Article->title=$title;
$request=$Article->add();
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0,"url"=>$url));
}
}

//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录添加保存功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录修改页面
public function index_class_edit(){
$id=I('get.Id',0,'intval');
$Article=D("Home/article_class")->find($id);
$this->assign('info',$Article);
$this->display();
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录修改页面

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录编辑保存功能
public function index_class_edit_save(){
$id=I('post.id',0,'intval');
$PartID=I('post.PartID','','strip_tags');
$Article=D("Home/article_class");
$Article->title=I('post.title','','strip_tags');
$Article->sorting=I('post.sorting','','strip_tags');
$request=$Article->where('id='.$id)->save();
if ($request>0){
$msg="<div class='Yoerror3'>操作成功！<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";
echo json_encode(array("msg"=>$msg,"error"=>0,"url"=>$PartID));
}else{
$msg=$PartID."<div class='Yoerror1'>操作失败！产生错误的原因：可能是您没有输入信息<br>系统将在 <span id=\"mes\">3</span> 秒钟后返回！</div>";	
echo json_encode(array("msg"=>$msg,"error"=>1,"url"=>$PartID));
}
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录编辑保存功能

//↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓以下执行数据目录的一些操作
public function Action(){
$DID=I('post.DID','','strip_tags');
$Del=I('post.Del','','strip_tags');
if     ($Del=='开通'){
$Article=D("Home/article_class");
$Article->locks=0;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='删除'){
$Article=D("Home/article_class");
foreach($DID as $value){
//**************************获取数据判断是只删除一个目录还是包含子目录也删除
$list = $Article->field(array('LagID','NumberID'))->where("id='$value'")->limit(1)->select();
//--------------------------------------------------------------->>删除一级目录
if      ($list[0]['lagid']=='0'){
$articlel=D("Home/caiji_url");
$articlel->where("directory1='".$list[0][numberid]."'")->delete();
$Article->where("Root1='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除二级目录
}elseif ($list[0]['lagid']=='1'){
$articlel=D("Home/caiji_url");
$articlel->where("directory2='".$list[0][numberid]."'")->delete();
$Article->where("Root2='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='2'){
$articlel=D("Home/caiji_url");
$articlel->where("directory3='".$list[0][numberid]."'")->delete();
$Article->where("Root3='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
//--------------------------------------------------------------->>删除三级目录
}elseif ($list[0]['lagid']=='3'){
$articlel=D("Home/caiji_url");
$articlel->where("directory4='".$list[0][numberid]."'")->delete();
$Article->where("Root4='".$list[0][numberid]."'")->delete();
$Article->where("id='$value'")->delete();
}else{
$Article->where("id='$value'")->delete();
}
}
echo "<script>self.location=document.referrer;</script>";
exit();
}elseif($Del=='禁用'){
$Article=D("Home/article_class");
$Article->locks=1;
$Article->where(array('id'=>array('in',$DID)))->save();
echo "<script>self.location=document.referrer;</script>";
exit();
}	
}
//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑以上执行数据目录的一些操作


public function _empty(){
echo "<div style='text-align:center;width:100%;padding-top:100px;float:left'><img src='".IMG_URL."404.png'></div>";
}



}
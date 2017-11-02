<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Auth;
use Think\Db;
use OT\Database;

class SysController extends AuthController {
 

	
    //站点设置
    public function sys(){
    	$config=M('config')->where(array('id'=>1))->find();
    	$this->assign('config',$config)->display();
    }
    
    //保存站点设置
    public function runsys(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$config=M('config');
    		if (!$config->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sl_data=array(
    					'id'=>I('id'),
    					'site_name'=>I('site_name'),
    					'site_url'=>I('site_url'),
    					'site_title'=>I('site_title'),
    					'site_keywords'=>I('site_keywords'),
    					'site_describe'=>I('site_describe'),
						'site_wap'=>I('site_wap'),
    					'site_copyright'=>I('site_copyright','','htmlspecialchars'),
						'javascript'=>I('javascript','','htmlspecialchars'),
						'wap_tj'=>I('wap_tj','','htmlspecialchars'),
						'site_qq'=>I('site_qq','','htmlspecialchars'),						
    			);
	    		$config->field('id,site_name,site_url,site_title,site_keywords,site_wap,site_describe,javascript,wap_tj,site_qq,site_copyright')->save($sl_data);
	    		$this->success('站点设置保存成功',U('config'),1);
    		}
    		
    	}
    }


	

    //评论设置
    public function syspl(){
    	$config=M('config')->where(array('id'=>1))->find();
    	$this->assign('config',$config)->display();
    }
    
    //保存评论设置
    public function runsyspl(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$config=M('config');
    		if (!$config->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sl_data=array(
    					'id'=>I('id'),
    					'pl_index'=>I('pl_index','','htmlspecialchars'),
						'pl_detail'=>I('pl_detail','','htmlspecialchars'),
    			);
	    		$config->field('id,pl_detail,pl_index')->save($sl_data);
	    		$this->success('评论设置保存成功',U('config'),1);
    		}
    		
    	}
    }		


/*
 * 手机跳转模式操作
 */
 
    public function wap(){
    		$this->display();

    } 
 
    public function plug_wap_edit(){
    		$plug_waptype_list=M('plug_waptype')->select();
    		$plug_wap_id=I('plug_wap_id');
    		$plug_wap=M('plug_wap')->where(array('plug_wap_id'=>$plug_wap_id))->find();
    		$this->assign('plug_waptype_list',$plug_waptype_list);
			$this->assign('plug_wap',$plug_wap);
    		$this->display();

    }
    
/*
 * 修改手机跳转模式操作
 */
    public function plug_wap_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{  		
    		$sl_data=array(
    				'plug_wap_id'=>I('plug_wap_id'),
    				'plug_wap_adtypeid'=>I('plug_wap_adtypeid'),
    		);
    		M('plug_wap')->save($sl_data);
    		$this->success('开关设置修改成功',U('wap'),1);
    	}
    }	
		
	
/************************************管理员模块****************************************/
    
	public function admin_list(){
		$admin=M('admin');
		$val=I('val');
		$auth = new Auth();
		$this->assign('testval',$val);
		if($val){
			$map['admin_username']= array('like',"%".$val."%");
		}
		
		if ($_SESSION['aid']!=1){
			$map['admin_id']=$_SESSION['aid'];
		}
		
		$count= $admin->where($map)->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,C('DB_PAGENUM_20'));// 实例化分页类 传入总记录数和每页显示的记录数

		foreach($map as $key=>$val) {
			$Page->parameter[$key]=urlencode($val);
		}
		$show= $Page->show();// 分页显示输出

		$admin_list=$admin->where($map)->order('admin_id')->limit($Page->firstRow.','.$Page->listRows)->select();

		foreach ($admin_list as $k=>$v){
			$group = $auth->getGroups($v['admin_id']);
			$admin_list[$k]['group'] = $group[0]['title'];
		}
		
		$this->assign('admin_list',$admin_list);
		$this->assign('page',$show);
		
		$this->display();
	}
    
    public function admin_list_add(){
		$auth_group=M('auth_group')->select();
		$this->assign('auth_group',$auth_group);
		$this->display();
	}

	public function admin_group_add(){
		$this->display();
	}
	
	
	public function admin_list_runadd(){
		if (!IS_AJAX){
			$this->error('提交方式不正确',0,0);
		}else{
			$admin=M('admin');
			if (!$admin->autoCheckToken($_POST)){
				$this->error('表单令牌错误',0,0);
			}else{
				$admin_access=M('auth_group_access');
				$check_user=$admin->where(array('admin_username'=>I('admin_username')))->find();
				if ($check_user){
					$this->error('用户已存在，请重新输入用户名',0,0);
				}
				$sldata=array(
						'admin_username'=>I('admin_username'),
						'admin_pwd'=>I('admin_pwd','','md5'),
						'admin_email'=>I('admin_email'),
						'admin_tel'=>I('admin_tel'),
						'admin_open'=>I('admin_open'),
						'admin_realname'=>I('admin_realname'),
						'admin_ip'=>get_client_ip(),
						'admin_addtime'=>time(),
				);
				$result=$admin->field('admin_username,admin_pwd,admin_email,admin_tel,admin_open,admin_realname,admin_ip,admin_addtime')->add($sldata);
				$accdata=array(
						'uid'=>$result,
						'group_id'=>I('group_id'),
				);
				$admin_access->field('uid,group_id')->add($accdata);
				$this->success('管理员添加成功',U('admin_list'),1);
			}
		}
	}
	
	public function admin_list_edit(){
		$auth_group=M('auth_group')->select();
		$admin_list=M('admin')->where(array('admin_id'=>I('admin_id')))->find();
		$auth_group_access=M('auth_group_access')->where(array('uid'=>$admin_list['admin_id']))->getField('group_id');
		$this->assign('admin_list',$admin_list);
		$this->assign('auth_group',$auth_group);
		$this->assign('auth_group_access',$auth_group_access);
		$this->display();
	}
	
	public function admin_list_runedit(){
		if (!IS_AJAX){
			$this->error('提交方式不正确',0,0);
		}else{
			$admin=M('admin');
			if (!$admin->autoCheckToken($_POST)){
				$this->error('表单令牌错误',0,0);
			}else{
				$admin_list=M('admin');
				$admin_pwd=I('admin_pwd');
				$group_id=I('group_id');
				$admindata['admin_id']=I('admin_id');
				if ($admin_pwd){
					$admindata['admin_pwd']=I('admin_pwd','','md5');
				}
				$admindata['admin_email']=I('admin_email');
				$admindata['admin_tel']=I('admin_tel');
				$admindata['admin_realname']=I('admin_realname');
				$admindata['admin_open']=I('admin_open');
				$admin_list->field('admin_id,admin_pwd,admin_email,admin_tel,admin_realname,admin_open')->save($admindata);
				//修改用户组
				M('auth_group_access')->where(array('uid'=>I('admin_id')))->setField('group_id',$group_id);
				$this->success('管理员修改成功',U('admin_list'),1);
			}
		}

	}
    
    public function admin_list_del(){
    	$admin_id=I('admin_id');
    	if ($_SESSION['aid']==1){
    		if (empty($admin_id)){
    			$this->error('用户ID不存在',U('admin_list'),1);
    		}
    		M('admin')->where(array('admin_id'=>I('admin_id')))->delete();
    		M('auth_group_access')->where(array('uid'=>I('admin_id')))->delete();
    		$this->redirect('admin_list');
    	}
    }
    
    public function admin_list_state(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$id=I('x');
    		if (empty($id)){
    			$this->error('用户ID不存在',U('admin_list'),1);
    		}
    		$status=M('admin')->where(array('admin_id'=>$id))->getField('admin_open');//判断当前状态情况
    		if($status==1){
    			$statedata = array('admin_open'=>0);
    			$auth_group=M('admin')->where(array('admin_id'=>$id))->setField($statedata);
    			$this->success('状态禁止',1,1);
    		}else{
    			$statedata = array('admin_open'=>1);
    			$auth_group=M('admin')->where(array('admin_id'=>$id))->setField($statedata);
    			$this->success('状态开启',1,1);
    		}
    	}
    }
    
    //用户组管理
    public function admin_group(){
    	$auth_group=M('auth_group')->select();
    	$this->assign('auth_group',$auth_group);
    	$this->display();
    }
    
    public function admin_group_runadd(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$auth_group=M('auth_group');
    		if (!$$auth_group->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sldata=array(
    					'title'=>I('title'),
    					'status'=>I('status'),
    					'addtime'=>time(),
    			);
    			$auth_group->field('title,status,addtime')->add($sldata);
    			$this->success('用户组添加成功',U('admin_group'),1);
    		}
    	}
    }
    
    public function admin_group_del(){
    	M('auth_group')->where(array('id'=>I('id')))->delete();
    	$this->redirect('admin_group');
    }
    
    public function admin_group_edit(){
    	$group=M('auth_group')->where(array('id'=>I('id')))->find();
    	$this->assign('group',$group);
    	$this->display();
    }

    public function admin_group_runedit(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$auth_group=M('auth_group');
    		if (!$$auth_group->autoCheckToken($_POST)){
    			$this->error('表单令牌错误',0,0);
    		}else{
    			$sldata=array(
    					'id'=>I('id'),
    					'title'=>I('title'),
    					'status'=>I('status'),
    			);
    			M('auth_group')->field('id,title,status')->save($sldata);
    			$this->success('用户组修改成功',U('admin_group'),1);
    		}
    	}
    }
    
    public function admin_group_state(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$id=I('x');
    		$status=M('auth_group')->where(array('id'=>$id))->getField('status');//判断当前状态情况
    		if($status==1){
    			$statedata = array('status'=>0);
    			$auth_group=M('auth_group')->where(array('id'=>$id))->setField($statedata);
    			$this->success('状态禁止',1,1);
    		}else{
    			$statedata = array('status'=>1);
    			$auth_group=M('auth_group')->where(array('id'=>$id))->setField($statedata);
    			$this->success('状态开启',1,1);
    		}
    	}
    }
    
    public function admin_rule(){
    	$nav = new \Org\Util\Leftnav;
    	$admin_rule=M('auth_rule')->order('sort')->select();
    	$arr = $nav::rule($admin_rule);
	   	$this->assign('admin_rule',$arr);//权限列表
    	$this->display();
    }
    
    public function admin_rule_add(){
    	if(!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$admin_rule=M('auth_rule');
    			$sldata=array(
    					'name'=>I('name'),
    					'title'=>I('title'),
    					'status'=>1,
    					'menustatus'=>I('status'),
    					'sort'=>I('sort'),
    					'addtime'=>time(),
    					'pid'=>I('pid'),
    					'css'=>I('css'),
    			);
    			$admin_rule->field('name,title,status,menustatus,sort,addtime,pid,css')->add($sldata);
    			$this->success('权限添加成功',U('admin_rule'),1); 		
    	}
    }
    
    public function admin_rule_state(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$id=I('x');
    		$statusone=M('auth_rule')->where(array('id'=>$id))->getField('menustatus');//判断当前状态情况
    		if($statusone==1){
    			$statedata = array('menustatus'=>0);
    			$auth_group=M('auth_rule')->where(array('id'=>$id))->setField($statedata);
    			$this->success('状态禁止',1,1);
    		}else{
    			$statedata = array('menustatus'=>1);
    			$auth_group=M('auth_rule')->where(array('id'=>$id))->setField($statedata);
    			$this->success('状态开启',1,1);
    		}
    	}
    }


    public function admin_rule_tz(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$id=I('x');//1=无需验证  0=需要验证
    		$statusone=M('auth_rule')->where(array('id'=>$id))->getField('authopen');//判断当前状态情况
    		if($statusone==1){
    			$statedata = array('authopen'=>0);
    			$auth_group=M('auth_rule')->where(array('id'=>$id))->setField($statedata);
    			$this->success('需要验证',1,1);
    		}else{
    			$statedata = array('authopen'=>1);
    			$auth_group=M('auth_rule')->where(array('id'=>$id))->setField($statedata);
    			$this->success('无需验证',1,1);
    		}
    	}
    }
    
    public function ruleorder(){
    	if (!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$auth_rule=M('auth_rule');
    		foreach ($_POST as $id => $sort){
    			$auth_rule->where(array('id' => $id ))->setField('sort' , $sort);
    		}
    		$this->success('排序更新成功',U('admin_rule'),1);
    	}
    }
    
    public function admin_rule_edit(){
    	$admin_rule=M('auth_rule')->where(array('id'=>I('id')))->find();
    	$this->assign('rule',$admin_rule);
    	$this->display();
    }

    public function admin_rule_runedit(){
        if(!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
    		$admin_rule=M('auth_rule');
    		$sldata=array(
    				'id'=>I('id'),
    				'name'=>I('name'),
    				'title'=>I('title'),
    				'status'=>1,
    				'menustatus'=>I('status'),
    				'css'=>I('css'),
    				'sort'=>I('sort'),
    		);
    		$admin_rule->save($sldata);
    		$this->success('权限修改成功',U('admin_rule'),1);
    	}
    }
    
    public function admin_rule_del(){
    	M('auth_rule')->where(array('id'=>I('id')))->delete();
    	$this->redirect('admin_rule');
    }
    
    //三重权限配置
    public function admin_group_access(){
        $admin_group=M('auth_group')->where(array('id'=>I('id')))->find();
        $m = M('auth_rule');
        $data = $m->field('id,name,title')->where(array('pid'=>0,'authopen'=>0))->order('sort')->select();
        foreach ($data as $k=>$v){
            $data[$k]['sub'] = $m->field('id,name,title')->where(array('pid'=>$v['id'],'authopen'=>0))->order('sort')->select();
            foreach ($data[$k]['sub'] as $kk=>$vv){
                $data[$k]['sub'][$kk]['sub'] = $m->field('id,name,title')->where(array('pid'=>$vv['id'],'authopen'=>0))->order('sort')->select();
                foreach ($data[$k]['sub'][$kk]['sub'] as $kkk=>$vvv){
                    $data[$k]['sub'][$kk]['sub'][$kkk]['sub'] = $m->field('id,name,title')->where(array('pid'=>$vvv['id'],'authopen'=>0))->order('sort')->select();
                }
            }
        }
        //p($data);die;
        $this->assign('admin_group',$admin_group);	// 顶级
        $this->assign('datab',$data);	// 顶级
        $this->display();
    }
    
    public function admin_group_runaccess(){
    	if(!IS_AJAX){
    		$this->error('提交方式不正确',0,0);
    	}else{
	    	$m = M('auth_group');
	    	$new_rules = I('new_rules');
	    	$imp_rules = implode(',', $new_rules).',';
	    	$sldata=array(
	    		'id'=>I('id'),
	    		'rules'=>$imp_rules,	
	    	);
	    	if($m->save($sldata)){
	    		$this->success('权限配置成功',U('admin_group'),1);
	    	}else{
	    		$this->error('配置没有改变，无需保存');
	    	}
    	}
    }	
	
    public function export(){
        $Db    = Db::getInstance();
        $list  = $Db->query('SHOW TABLE STATUS');
        $list  = array_map('array_change_key_case', $list);
        $title = '数据备份';
        $this->assign('meta_title', $title);
        $this->assign('list', $list);
        $this->display();
    }

    /**
     * 备份数据库
     * @param  String  $tables 表名
     * @param  Integer $id     表ID
     * @param  Integer $start  起始行数
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function goExport($tables = null, $id = null, $start = null){
        if(IS_POST && !empty($tables) && is_array($tables)){ //初始化
            //读取备份配置
            $config = array(
                //'path'     => realpath(C('DATA_BACKUP_PATH')) . DIRECTORY_SEPARATOR,
                'path'     =>'./Data/',
                //'part'     => C('DATA_BACKUP_PART_SIZE'),
                'part'     => 20971520,
                //'compress' => C('DATA_BACKUP_COMPRESS'),
                'compress' => 1,
                //'level'    => C('DATA_BACKUP_COMPRESS_LEVEL'),
                'level'    => 4,
            );

            //检查是否有正在执行的任务
            $lock = "{$config['path']}backup.lock";
            if(is_file($lock)){
                $this->error('检测到有一个备份任务正在执行，请稍后再试！');
            } else {
                //创建锁文件
                file_put_contents($lock, NOW_TIME);
            }

            //检查备份目录是否可写
            is_writeable($config['path']) || $this->error('备份目录不存在或不可写，请检查后重试！');
            session('backup_config', $config);

            //生成备份文件信息
            $file = array(
                'name' => date('Ymd-His', NOW_TIME),
                'part' => 1,
            );
            session('backup_file', $file);

            //缓存要备份的表
            session('backup_tables', $tables);

            //创建备份文件
            $Database = new Database($file, $config);
            if(false !== $Database->create()){
                $tab = array('id' => 0, 'start' => 0);
                $this->success('初始化成功！', '', array('tables' => $tables, 'tab' => $tab));
            } else {
                $this->error('初始化失败，备份文件创建失败！');
            }
        } elseif (IS_GET && is_numeric($id) && is_numeric($start)) { //备份数据
            $tables = session('backup_tables');
            //备份指定表
            $Database = new Database(session('backup_file'), session('backup_config'));
            $start  = $Database->backup($tables[$id], $start);
            if(false === $start){ //出错
                $this->error('备份出错！');
            } elseif (0 === $start) { //下一表
                if(isset($tables[++$id])){
                    $tab = array('id' => $id, 'start' => 0);
                    $this->success('备份完成！', '', array('tab' => $tab));
                } else { //备份完成，清空缓存
                    unlink(session('backup_config.path') . 'backup.lock');
                    session('backup_tables', null);
                    session('backup_file', null);
                    session('backup_config', null);
                    $this->success('备份完成！');
                }
            } else {
                $tab  = array('id' => $id, 'start' => $start[0]);
                $rate = floor(100 * ($start[0] / $start[1]));
                $this->success("正在备份...({$rate}%)", '', array('tab' => $tab));
            }

        } else { //出错
            $this->error('参数错误！');
        }
    }


    /**
     * 优化表
     * @param  String $tables 表名
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
        public function optimize($tables = null){
        if($tables) {
            $Db   = Db::getInstance();
            if(is_array($tables)){
                $tables = implode('`,`', $tables);
                $list = $Db->query("OPTIMIZE TABLE `{$tables}`");

                if($list){
                    $this->success("数据表优化完成！");
                } else {
                    $this->error("数据表优化出错请重试！");
                }
            } else {
                $list = $Db->query("OPTIMIZE TABLE `{$tables}`");
                if($list){
                    $this->success("数据表'{$tables}'优化完成！");
                } else {
                    $this->error("数据表'{$tables}'优化出错请重试！");
                }
            }
        } else {
            $this->error("请指定要优化的表！");
        }
    }
    /**
     * 修复表
     * @param  String $tables 表名
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function repair($tables = null){
        if($tables) {
            $Db   = Db::getInstance();
            if(is_array($tables)){
                $tables = implode('`,`', $tables);
                $list = $Db->query("REPAIR TABLE `{$tables}`");

                if($list){
                    $this->success("数据表修复完成！");
                } else {
                    $this->error("数据表修复出错请重试！");
                }
            } else {
                $list = $Db->query("REPAIR TABLE `{$tables}`");
                if($list){
                    $this->success("数据表'{$tables}'修复完成！");
                } else {
                    $this->error("数据表'{$tables}'修复出错请重试！");
                }
            }
        } else {
            $this->error("请指定要修复的表！");
        }
    }



    //恢复数据
    public  function import(){
        //列出备份文件列表
        //$path = realpath(C('DATA_BACKUP_PATH'));
        $path = './Data/';
        $flag = \FilesystemIterator::KEY_AS_FILENAME;
        $glob = new \FilesystemIterator($path,  $flag);

        $list = array();
        foreach ($glob as $name => $file) {
            if(preg_match('/^\d{8,8}-\d{6,6}-\d+\.sql(?:\.gz)?$/', $name)){
                $name = sscanf($name, '%4s%2s%2s-%2s%2s%2s-%d');

                $date = "{$name[0]}-{$name[1]}-{$name[2]}";
                $time = "{$name[3]}:{$name[4]}:{$name[5]}";
                $part = $name[6];

                if(isset($list["{$date} {$time}"])){
                    $info = $list["{$date} {$time}"];
                    $info['part'] = max($info['part'], $part);
                    $info['size'] = $info['size'] + $file->getSize();
                } else {
                    $info['part'] = $part;
                    $info['size'] = $file->getSize();
                }
                $extension        = strtoupper(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
                $info['compress'] = ($extension === 'SQL') ? '-' : $extension;
                $info['time']     = strtotime("{$date} {$time}");

                $list["{$date} {$time}"] = $info;
            }
        }
        $title = '数据还原';
        $this->assign('meta_title', $title);
        $this->assign('list', $list);
        $this->display();
    }
    /**
     * 还原数据库
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function goImport($time = 0, $part = null, $start = null){
        if(is_numeric($time) && is_null($part) && is_null($start)){ //初始化
            //获取备份文件信息
            $name  = date('Ymd-His', $time) . '-*.sql*';
            $path  = './Data/'. DIRECTORY_SEPARATOR . $name;
            $files = glob($path);
            $list  = array();
            foreach($files as $name){
                $basename = basename($name);
                $match    = sscanf($basename, '%4s%2s%2s-%2s%2s%2s-%d');
                $gz       = preg_match('/^\d{8,8}-\d{6,6}-\d+\.sql.gz$/', $basename);
                $list[$match[6]] = array($match[6], $name, $gz);
            }
            ksort($list);

            //检测文件正确性
            $last = end($list);
            if(count($list) === $last[0]){
                session('backup_list', $list); //缓存备份列表
                $this->success('初始化完成！', '', array('part' => 1, 'start' => 0));
            } else {
                $this->error('备份文件可能已经损坏，请检查！');
            }
        } elseif(is_numeric($part) && is_numeric($start)) {
            $list  = session('backup_list');
            $db = new Database($list[$part], array(
                'path'     => './Data/' . DIRECTORY_SEPARATOR,
                'compress' => $list[$part][2]));

            $start = $db->import($start);

            if(false === $start){
                $this->error('还原数据出错！');
            } elseif(0 === $start) { //下一卷
                if(isset($list[++$part])){
                    $data = array('part' => $part, 'start' => 0);
                    $this->success("正在还原...#{$part}", '', $data);
                } else {
                    session('backup_list', null);
                    $this->success('还原完成！');
                }
            } else {
                $data = array('part' => $part, 'start' => $start[0]);
                if($start[1]){
                    $rate = floor(100 * ($start[0] / $start[1]));
                    $this->success("正在还原...#{$part} ({$rate}%)", '', $data);
                } else {
                    $data['gz'] = 1;
                    $this->success("正在还原...#{$part}", '', $data);
                }
            }

        } else {
            $this->error('参数错误！');
        }
    }

	
    //备份下载
    public  function xzimport(){
        //列出备份文件列表
        //$path = realpath(C('DATA_BACKUP_PATH'));
        $path = './Data/';
        $flag = \FilesystemIterator::KEY_AS_FILENAME;
        $glob = new \FilesystemIterator($path,  $flag);

        $list = array();
        foreach ($glob as $name => $file) {
            if(preg_match('/^\d{8,8}-\d{6,6}-\d+\.sql(?:\.gz)?$/', $name)){
                $name = sscanf($name, '%4s%2s%2s-%2s%2s%2s-%d');

                $date = "{$name[0]}-{$name[1]}-{$name[2]}";
                $time = "{$name[3]}:{$name[4]}:{$name[5]}";
                $part = $name[6];

                if(isset($list["{$date} {$time}"])){
                    $info = $list["{$date} {$time}"];
                    $info['part'] = max($info['part'], $part);
                    $info['size'] = $info['size'] + $file->getSize();
                } else {
                    $info['part'] = $part;
                    $info['size'] = $file->getSize();
                }
                $extension        = strtoupper(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
                $info['compress'] = ($extension === 'SQL') ? '-' : $extension;
                $info['time']     = strtotime("{$date} {$time}");

                $list["{$date} {$time}"] = $info;
            }
        }
        $title = '数据下载';
        $this->assign('meta_title', $title);
        $this->assign('list', $list);
        $this->display();
    }	

	
    /**
     * 删除备份文件
     * @param  Integer $time 备份时间
     * @author slackck<4501870@qq.com>
     */
    public function del($time = 0){
        if($time){
            $name  = date('Ymd-His', $time) . '-*.sql*';
            $path  = './Data/'. DIRECTORY_SEPARATOR . $name;
            array_map("unlink", glob($path));
            if(count(glob($path))){
                $this->success('备份文件删除成功！');
            }
        } else {
            $this->error('参数错误！');
        }
    }	

public function cache(){

$this->display();	
}	

public function deltree($pathdir)
    {

        if($this->is_empty_dir($pathdir)){//如果是空的
            rmdir($pathdir);//直接删除
        }else{//否则读这个目录，除了.和..外
              $d=dir($pathdir);
              while($a=$d->read())
              {
                  if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);}
                  //如果是文件就直接删除
                  if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..'))
                  {//如果是目录
                      if(!$this->is_empty_dir($pathdir.'/'.$a))//是否为空
                      {//如果不是，调用自身，不过是原来的路径+他下级的目录名
                          $this->deltree($pathdir.'/'.$a);
                      }
                      if($this->is_empty_dir($pathdir.'/'.$a))
                      {//如果是空就直接删除
                      rmdir($pathdir.'/'.$a);
                      }
                  }
              }
            $d->close();          
			  $this->assign("jumpUrl","index");
			  $this->success('系统缓存清除成功！');
        }
    }
    public function is_empty_dir($pathdir)
    {
        //判断目录是否为空，我的方法不是很好吧？只是看除了.和..之外有其他东西不是为空
        $d=opendir($pathdir);
        $i=0;
          while($a=readdir($d))
          {
            $i++;
          }
        closedir($d);
        if($i>2){return false;}
        else return true;
    }
    public function runtime(){
        $pathdir ="./Index/Runtime";
        $a = $this->deltree($pathdir);
        dump($a);
    }	

}
<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
       /* //使用数组查询最高效
        $User = M("User"); // 实例化User对象
        $condition['name'] = 'thinkphp';
        $condition['account'] = 'thinkphp';
        $condition['_logic'] = 'OR';
        // 把查询条件传入查询方法
        $User->where($condition)->select(); */
        
//         $Data=M('Data');
//         $data['name']='ThinkPHP';
//         $data['id']=array('exp','id+1');
//         $Data->where('data=thinkphp')->save($data);   
         
       
	    $Data=M('Data');//实例化Data数据模型
	    $this->data=$Data->select();        
        $this->display();   
        #$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function Form(){
        $this->display();
    }
  
    public function insert()
    {
        $Form = D('Form');
        if ($Form->create()) {
            $_POST[create_time] = time();
            $result = $Form->add();
            if ($result) {
                $this->success('操作成功！');
            } else {
                $this->error('写入错误！');
            }
        } else {
            $this->error($Form->getError());
        }
        // $Form->delete("title=ddw");
    
        // $this->display();
    }
   
    
    
    
    
    
}
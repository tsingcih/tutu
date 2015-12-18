<?php

class FormAction extends Action
{

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

    public function read($id = 0)
    {
        $Form = M('Form');
        // $id=1;
        $data = $Form->find($id = 1);
        
        if ($data) {
            $this->data = $data;
            $this->assign($data);
        } else {
            $this->error('数据错误');
        }
        // $title=$Form->where('id=1')->getField('title');
        // $this->assign('data',$title);
        $this->display();
    }

    /*public function select($id = 0)
    {
        $Form = M('Form');
//         print_r($Form);
//         exit();   
//      $Model=$new Model();//对于有具体模型的不要new Model了，直接用相关的数据Model就可以了。
 
        $list = $Form->join('think_data on think_form.id=think_data.id')->select();
        
        $volist = $Form->query($list);
        if ($list) {
            //$this->success('操作成功');//这个如果执行完了就会退出相关函数，所以不能这么写，在要显示的情况下不要加这句话；
            $this->assign('list', $list);
            //$this->assign(array(list=>$list,data=>$data));//数组类型的输出格式
        } else {
            $this->error($Form->getError());
        }
        
        $this->display();
//         $article=$music->table('music_music,music_music_url')->where('music_music.id=music_music_url.id and locate(\'mp3\',music_music_url.url)>0')->limit(0,10)->select();
        // $this->assign($name);
        // $Form=M('Form');
        // $Data=M('Data');
        // $sql='select * from think_Form,think_Data where think_Form.id=think_Data.id'.$map.'order by think_Form.id'.$sort.'limit'.$p->firstRow.','.$p->listRows;
    }*/
    public  function select(){
        $Data=M('Data');
        $list=$Data->join('think_form on think_data.id=think_form.id')->select();
        $volist=$Data->query($list);
        if ($list){
            $this->assign('list',$list);
        }else {
            $this->error('查询失败');
        }
        $this->display();
    }

    public function edit($id = 0)
    {
        $Form = M('Form');
        $this->vo = $Form->find($id);
        $this->display();
    }

    public function update()
    {
        $Form = D('Form');
        if ($Form->create()) {
            $result = $Form->save();
            if ($result) {
                $this->success('操作成功');
            }
        } else {
            $this->error('写入错误！');
        }
        $this->error($Form->getError());
    }

    public function delete()
    {
        $Form = M('Form');
        
        if ($Form->delete('id=1')) {
            $this->success('操作成功');
        } else {
            $this->error('删除未成功');
        }
        $this->error($Form->getError());
        // $this->assign('data',$id);
        $this->display();
    }
}
?>
<?php
    class FormAction extends Action{
        public function insert(){
            $Form=D('Form');
            if ($Form->create()){
                $result=$Form->add();
                if ($result){
                    $this->success('操作成功！');
                }else{
                    $this->error('写入错误！');
                }                
            }else {
                $this->error($Form->getError());
            }
            $Form->delete("title=ddw");
            
            $this->display();
        }
        
        public function read($id=0){
            $Form=M('Form');
           # $id=1;
            $data=$Form->find($id=4);
            if ($data){
                $this->data=$data;
                $this->assign($data);
            }else{
                $this->error('数据错误');
            }
           # $title=$Form->where('id=1')->getField('title');
           # $this->assign('data',$title);
            $this->display();
        }
        public function edit($id=0){
            $Form=M('Form');
            $this->vo=$Form->find($id);
            $this->display();
        }
        public function update(){
            $Form=D('Form');
            if ($Form->create()){
                $this->success('操作成功');
            }else {
                $this->error('写入错误！');
            }
            $this->error($Form->getError());
        }
        public function delete(){
            $Form=M('Form');
            
           if( $Form->delete('id=1')){
               $this->success('操作成功');
           }else{
               $this->error('删除未成功');
           }
           $this->error($Form->getError());
            #$this->assign('data',$id);
            $this->display();
            
        }
   
    }
?>
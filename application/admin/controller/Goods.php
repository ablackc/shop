<?php
namespace app\admin\controller;
use think\Controller;
class Goods extends Controller
{
    public function classify()
    {
        return $this->fetch();
    }
    public function add_classify()
    {
        return $this->fetch();
    }
    public function goods_list()
    {
    	return $this->fetch();
    }
    public function goods_add()
    {
    	return $this->fetch();
    }
}

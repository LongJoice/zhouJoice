<?php
namespace Admin\Model;
use Think\Model;
/**
 * Created by PhpStorm.
 * User: Joice
 * Date: 2017/7/28
 * Time: 16:54
 */
class CategoryModel extends Model{
    /**
     * @param $data   添加
     * @return mixed
     */
    public function insert($data){
            return M('blog_category')->add($data);
        }

    /**
     *   查询
     * @return mixed
     */
    public function show(){
        return M('blog_category')->select();
    }
}
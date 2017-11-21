<?php

namespace backend\models;

use Yii;

/*
* rbac类
*/

class Rbac extends \yii\db\ActiveRecord
{
    /*处理数据*/
    public static function getOptions($data,$parent)
    {
        $return = [];
        foreach($data as $obj){
            /*判断角色的子节点不为空&&不等于自身&&Yii内置方法判断是否能创建*/
            if(!empty($parent) && $parent->name != $obj->name && Yii::$app->authManager->canAddChild($parent,$obj)){
                $return[$obj->name] = $obj->description;
            }
        }
        return $return;
    }
    /*分配权限*/
    public static function addChild($children,$name)
    {
        $auth = Yii::$app->authManager;
        /*拿到$name的对象，执行addchildren操作*/
        $itemObj = $auth->getRole($name);
        if(empty($itemObj)){
            return false;
        }
        $trans = Yii::$app->db->beginTransaction();
        try{
            /*先移除所有授权*/
            $auth->removeChildren($itemObj);
            foreach($children as $item){
                $obj = empty($auth->getRole($item))?$auth->getPermission($item):$auth->getRole($item);
                $auth->addChild($itemObj,$obj);
            }
            $trans->commit();
            return true;
        }catch(\Exception $e){
            $trans->rollback();
            return false;
        }

        return true;

    }

    /*获取已有的权限（显示使用）*/
    public static function getChildrenByName($name)
    {
        if(empty($name)){
            return false;
        }
        $return = [];
        $return['roles'] = [];
        $return['permissions'] = [];

        $auth = Yii::$app->authManager;

        $children = $auth->getChildren($name);
        foreach($children as $obj){
            if($obj->type==1){
                $return['roles'][]=$obj->name;
            }else{
                $return['permissions'][]=$obj->name;
            }
        }

        return $return;

    }

    /*获取角色列表*/
    public static function getRoles()
    {
        $return = [];
        $auth = Yii::$app->authManager;
        $roles = $auth->getRoles();
        foreach ($roles as $role) {
            if($role->type==1){
                $return[$role->name] = $role->description;
            }
        }

        return $return;
    }

    public static function getUserRole($obj)
    {
        /*获取角色状态*/
        $return  = '';
        foreach ($obj as $role) {
            $return = $role->name;
        }

        return $return;
    }
}
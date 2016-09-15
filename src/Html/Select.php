<?php
namespace Reheat\Html;

/**
 *  Html标签Select辅助类
 *
 *  @author  jmj <yang.jmj@gmail.com>
 *  @link http://www.weixiaodeyu.com
 *  @version 1.0
 */
class Select
{
    /**
     * 获取一个年份数组（常用于下拉框选择年份）
     *
     * @return array
     */
    public static function getYearList()
    {
        $years = [];
        $startYear = 1970;
        $endYear = date('Y',time());
        for($i = $startYear; $i <= $endYear; $i++){
            $years[$i] = $i;
        }
        return $years;
    }
}
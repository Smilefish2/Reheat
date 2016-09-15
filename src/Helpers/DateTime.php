<?php
namespace Reheat\Helpers;

/**
 *  日期时间帮助类
 *
 *  @author  jmj <yang.jmj@gmail.com>
 *  @link http://www.weixiaodeyu.com
 *  @version 1.0
 */
class DateTime
{
    /**
     * 判断是否为一个合法的时间戳
     *
     * @param $timestamp
     * @return bool
     */
    public static function is_timestamp($timestamp)
    {
        if(strtotime(date('Y-m-d H:i:s',$timestamp)) === abs($timestamp)) {
            return true;
        }
        return false;
    }
    /**
     * 格式化时间日期（时间戳参数）
     *
     * @param  string  $date
     * @param  string  $format
     * @return string
     */
    public static function date($date, $format = 'Y-m-d H:i:s')
    {
        return date($format,$date);
    }
    /**
     * 格式化时间日期(日期参数)
     *
     * @param  string  $date
     * @param  string  $format
     * @return string
     */
    public static function fdate($date, $format = 'Y-m-d H:i:s')
    {
        return date($format,strtotime($date));
    }
}
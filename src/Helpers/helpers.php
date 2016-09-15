<?php
if (!function_exists('dd')) {
    /**
     * 断点调试
     *
     * @param string $input
     * @return void
     */
    function dd($input)
    {
        var_dump($input);
        exit();
    }
}
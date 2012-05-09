<?php
    class Timer 
    {
        public var $m_time = 0;
    };
    
    //$m_time = 0;
    
    function get_date() {
        $today = date("l F j, Y, g:i a");
        return $today;
    }

    function explode_time($obj) {
        $obj->m_time = explode(" ", microtime());
        $obj->m_time = $obj->m_time[0] + $obj->m_time[1];
    }

    function page_load_start($obj) {
        explode_time();
        $starttime = $obj->m_time;
        $inTwoMonths = 60 * 60 * 24 * 60 + time();
    }

    function get_page_load_time($obj) {
        $round = 3;
        explode_time($obj);
        $endtime = $obj->m_time;
        $totaltime = ($endtime - $starttime);
        return $totaltime;
    }
?>

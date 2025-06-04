<?php

namespace Ngomafortuna\DateFormatter;


class DateFormatter
{
    public static function date(string $date):object  
    {
        $month = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 
            'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro',
            'Novembro', 'Dezembro',
        ];  
                
        $d = date("d", strtotime($date));
        $m = $month[date("m", strtotime($date)) - 1];
        $Y = date("Y", strtotime($date));
        $time = date("H:i:s", strtotime($date));
        
        return (object)[
            "date" => "$d $m $Y",
            "time" => "$time",
            "datetime" => "$d $m $Y, $time",
            "monthYear" => "$m $Y",
        ];
    }

    public static function dateShort(string $date):object 
    {
        $month = [
            'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 
            'Jun', 'Jul', 'Ago', 'Set', 'Out',
            'Nov', 'Dez',
        ];              
                    
        $d = date("d", strtotime($date));
        $m = $month[date("m", strtotime($date)) - 1];
        $Y = date("Y", strtotime($date));
        $time = date("H:i:s", strtotime($date));
        
        return (object)[
            "date" => "$d $m $Y",
            "time" => "$time",
            "month" => "$m",
            "datetime" => "$d $m $Y, $time",
            "monthYear" => "$m $Y",
        ];
    }
}
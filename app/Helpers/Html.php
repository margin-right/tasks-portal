<?php


namespace App\Helpers;

class Html{


    public static function alert($message, $type){

        /* Запись сообщения в сессию для вывода на страницу */

        session(['alert' => $message, 'alert_type' => $type]);
    }

    public static function dateParse($date){

        /* парсинг даты и времени */

        $Full_Date_Array = explode(' ', $date);
        $Date_Array = explode('-', $Full_Date_Array[0]);
        $Time_Array = explode(':', $Full_Date_Array[1]);

        /* дата */
        $year = $Date_Array[0];
        $month = $Date_Array[1];
        $day = $Date_Array[2];

        /* время */
        $hour = $Time_Array[0];
        $minute = $Time_Array[1];
        $second = $Time_Array[2];

        return [
            'year' => $year, 
            'month' => $month, 
            'day' => $day, 
            'hour' => $hour, 
            'minute' => $minute, 
            'second' => $second, 
        ];
    }

}

?>

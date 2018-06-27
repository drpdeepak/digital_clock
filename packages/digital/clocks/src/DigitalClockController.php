<?php

namespace Digital\Clock;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DigitalClockController extends Controller
{
    //

    protected $format_array = ['dmY'=>'d-m-Y',"mdY"=>'m-d-Y','Ymd'=>'Y-m-d','DmY'=>'D-m-Y','DMY'=>'D-M-Y'];
    protected $date=date("Y-m-d");


    public function dateAdd($days, $format){
    	$new_date = date_create($date);
    	$new_days= $days." days";
    	if(array_key_exists($format,$format_array)){
    		date_add($new_date,date_interval_create_from_date_string($new_days));
			echo date_format($new_date,$format_array[$format]);
    	}else{
    		echo "Invalid format";
    	}
		
    }

    public function dateSub($days, $format){
    	$new_date = date_create($date);
    	$new_days= $days." days";
    	if(array_key_exists($format,$format_array)){
    		date_sub($new_date,date_interval_create_from_date_string($new_days));
			echo date_format($new_date,$format_array[$format]);
    	}else{
    		echo "Invalid format";
    	}
    }

    public function dateDiff($date1, $date2){
    	$new_date1 = date_create($date1);
    	$new_date2 = date_create($date2);
    	$diff = date_diff($new_date1,$new_date2);
    	echo $diff->format("%R%a days");
    }


    public function dateFormat($date, $format){
    	$new_date = date_create($date);
    	if(array_key_exists($format,$format_array)){
			echo date_format($new_date,$format_array[$format]);
    	}else{
    		echo "Invalid format";
    	}
    }


    public function getDate($format){
    	$new_date = date_create($date);
    	if(array_key_exists($format,$format_array)){
			echo date_format($new_date,$format_array[$format]);
    	}else{
    		echo "Invalid format";
    	}
    }
}

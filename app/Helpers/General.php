<?php
/**
 * Created by PhpStorm.
 * User: sodiq
 * Date: 6/8/2019
 * Time: 9:13 PM
 */

namespace App\Helpers;


use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class General
{
    public static function getURLS(){
        $routeCollection = \Illuminate\Support\Facades\Route::getRoutes();
        $data = [];
        foreach ($routeCollection as $i=>$value) {
            if(in_array('auth',$value->action['middleware'])){
                if($value->methods[0] == 'GET')
                    $data[] = $value->uri;
            }
        }
        return $data;
    }

    public static function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public static function getLeadStatus(){
        return [
            'CMB'=>'CALL ME BACK',
            'WCYB'=>'WILL CALL YOU BACK',
            'NRES'=>'NOT RESPONDING',
            'NR'=>'NOT REACHABLE',
            'WN'=>'WRONG NUMBER',
            'AGENT'=>'AGENT',
            'PROCESSING'=>'PROCESSING',
            'OTHER STATE'=>'OTHER STATE',
            'CONFIRMATION'=>'CONFIRMATION',
            'ACTIVE'=>'ACTIVE',
            'ON IT'=>'ON IT',
            'REPAIR'=>'REPAIR',
            'SOLD'=>'SOLD',
            'NOT INTERESTED'=>'NOT INTERESTED',
            'STOLEN'=>'STOLEN',
            'COMP'=>'COMPREHENSIVE',
            'UNKNOWN'=>'UNKNOWN',
        ];
    }

    public static function generateDateRange(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];
        for ($date = $start_date; $date->lte($end_date); $date->addDay()) {
            $dates[] = $date->format('Y-m-d');
        }
        return $dates;
    }

    public static function getOrderStatus()
    {
        return [
            'Bad Debt',
            'Cancelled',
            'Completed',
            'Delivered',
            'Dispatched',
            'Pending',
            'Processing',
            'Returned',
            'Schedule Delivery',

        ];
    }

    public static function getOrderPaymentStatus()
    {
        return [
            'Cash',
            'Credit',
        ];
    }

}

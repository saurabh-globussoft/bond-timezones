<?php
namespace Bond\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function getTimezone($timezone = null)
    {

        $time = isset($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();

        $currentTime = $time->toDateTimeString();

        return view('timezones::time', ['current_time' => $currentTime]);
    }

}
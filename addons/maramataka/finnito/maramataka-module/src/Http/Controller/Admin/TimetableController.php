<?php namespace Finnito\MaramatakaModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Carbon\Carbon;

class TimetableController extends AdminController
{

    public function index($week = null)
    {
        $weekdays = [
            "Monday" => [
                "1" => "8:45am",
                "2" => "9:45am",
                "3" => "11:25am",
                "4" => "1:10pm",
                "5" => "2:10pm",
            ],
            "Tuesday" => [
                "1" => "8:45am",
                "2" => "9:45am",
                "3" => "11:25am",
                "4" => "1:10pm",
                "5" => "2:10pm",
            ],
            "Wednesday" => [
                "1" => "8:45am",
                "2" => "9:35am",
                "3" => "11:20am",
                "4" => "12:50pm",
                "5" => "1:40pm",
            ],
            "Thursday" => [
                "1" => "8:45am",
                "2" => "9:45am",
                "3" => "11:25am",
                "4" => "1:10pm",
                "5" => "2:10pm",
            ],
            "Friday" => [
                "1" => "8:45am",
                "2" => "9:45am",
                "3" => "11:25am",
                "4" => "1:10pm",
                "5" => "2:10pm",
            ],
        ];

        if ($week) {
            $diff = \Carbon\Carbon::now()
                ->diffInWeeks(\Carbon\Carbon::parse($week, "Pacific/Auckland"), false);
        } else {
            $diff = 0;
        }

        return $this->view->make(
            'finnito.module.maramataka::timetable',
            [
                "weekdays" => $weekdays,
                "diff" => $diff,
            ]
        );
    }
}

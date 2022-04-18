<?php namespace Finnito\MaramatakaModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Finnito\MaramatakaModule\Year\Contract\YearRepositoryInterface;
use Finnito\MaramatakaModule\Subject\Contract\SubjectRepositoryInterface;
use Finnito\MaramatakaModule\Lesson\Contract\LessonRepositoryInterface;

class icalController extends PublicController
{

	public function feed(
		YearRepositoryInterface $years,
		SubjectRepositoryInterface $subjects,
		LessonRepositoryInterface $lessons,
		$slug
	) {
		$allLessons = $lessons
			->newQuery()
			->orderBy("date", "ASC")
			->get();

		define('ICAL_FORMAT', 'Ymd\THis\Z');

        $icalString = "BEGIN:VCALENDAR\n"
            . "VERSION:2.0\n"
            . "METHOD:PUBLISH\n"
            . "PRODID:-//Finn Le Sueur//Maramataka//EN\n";

        foreach ($allLessons as $lesson) {
        	// dd($lesson->content);

        	if ($lesson->date->dayOfWeekIso == 3) {
        		$length = 50;
        	} else {
        		$length = 60;
        	}

        	$icalString .= ""
                . "BEGIN:VEVENT\n"
                . "TRANSP:OPAQUE\n"
                . "DTSTART:" . $lesson->date->format(ICAL_FORMAT) . "\n"
                . "DTEND:" . $lesson->date->addMinutes($length)->format(ICAL_FORMAT) . "\n"
                . "DTSTAMP:" . $lesson->date->format(ICAL_FORMAT) . "\n"
                . "SUMMARY:" . $lesson->subject->name . " " . $lesson->name . "\n"
                . "DESCRIPTION:" . str_replace("\r\n", "\\n", $lesson->content) . "\n"
                . "UID:maramataka-" . $lesson->id . "\n"
                . "STATUS:CONFIRMED\n"
                . "CREATED:" . date(ICAL_FORMAT, strtotime($lesson->created_at)) . "\n"
                . "LAST-MODIFIED:" . date(ICAL_FORMAT, strtotime($lesson->updated_at)) . "\n"
                . "LOCATION:\n"
                . "END:VEVENT\n";
        }


        $icalString .= "END:VCALENDAR";

        // Set the headers
        header('Content-type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="maramataka.ics"');

        echo $icalString;

	}
}
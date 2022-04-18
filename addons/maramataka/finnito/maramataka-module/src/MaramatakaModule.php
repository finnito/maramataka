<?php namespace Finnito\MaramatakaModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class MaramatakaModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'timetable' => [
            'href' => '/admin/maramataka',
        ],
        'lessons' => [
            'href' => '/admin/maramataka/lessons',
            'buttons' => [
                'new_lesson',
            ],
        ],
        'years' => [
            'buttons' => [
                'new_year',
            ],
        ],
        'subjects' => [
            'buttons' => [
                'new_subject',
            ],
        ],
    ];

}

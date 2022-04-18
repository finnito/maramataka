<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Finnito\MaramatakaModule\Subject\SubjectModel;

class FinnitoModuleMaramatakaCreateMaramatakaFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],

        // LESSON FIELDS
        'subject' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => SubjectModel::class,
            ],
        ],
        'content' => [
            'type' => 'anomaly.field_type.textarea',
            'config' => [
                'show_counter' => false,
                'autogrow' => false,
            ],
        ],
        'date' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'datetime',
                'date_format' => 'Y-m-d',
                'time-format' => 'H:i'
            ],
        ],

        // SEMESTER FIELDS
        'subjects' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'related' => SubjectModel::class,
            ],
        ],
        'colour' => 'anomaly.field_type.colorpicker',

        // SUBJECT FIELDS
        'periods' => 'anomaly.field_type.text',
    ];

}

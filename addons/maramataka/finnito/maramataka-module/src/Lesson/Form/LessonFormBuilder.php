<?php namespace Finnito\MaramatakaModule\Lesson\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class LessonFormBuilder extends FormBuilder
{

    protected $ajax = true;

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = ["slug"];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [
        "save",
    ];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [
        'form_view' => 'finnito.module.maramataka::forms/lesson'
    ];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [
    'scripts.js' => [
            "finnito.module.maramataka::js/formHelper.js",
        ],
    ];

}

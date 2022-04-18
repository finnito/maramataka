<?php namespace Finnito\MaramatakaModule\Lesson\Form;

use Finnito\MaramatakaModule\Lesson\Form\LessonFormBuilder;
use Finnito\MaramatakaModule\Lesson\LessonModel;

class LessonFormHandler
{

    /**
     * Handle the form.
     *
     * @param FormBuilder $builder
     */
    public function handle(
        LessonFormBuilder $builder
    )
    {
        if (!$builder->canSave()) {
            return;
        }

        LessonModel::updateOrCreate(
            ['date' => $builder->getFormValue("date")],
            [
                "subject" => $builder->getFormValue("subject"),
                "name" => $builder->getFormValue("name_en"),
                "content" => $builder->getFormValue("content"),
            ]
        );
        
        // $builder->saveForm();
    }
}
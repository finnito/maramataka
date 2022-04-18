<?php namespace Finnito\MaramatakaModule\Http\Controller\Admin;

use Finnito\MaramatakaModule\Lesson\Form\LessonFormBuilder;
use Finnito\MaramatakaModule\Lesson\Table\LessonTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LessonsController extends AdminController
{
    /**
     * Display an index of existing entries.
     *
     * @param LessonTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LessonTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LessonFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LessonFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LessonFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LessonFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

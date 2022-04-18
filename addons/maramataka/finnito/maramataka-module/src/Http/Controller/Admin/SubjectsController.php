<?php namespace Finnito\MaramatakaModule\Http\Controller\Admin;

use Finnito\MaramatakaModule\Subject\Form\SubjectFormBuilder;
use Finnito\MaramatakaModule\Subject\Table\SubjectTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SubjectsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SubjectTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SubjectTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SubjectFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SubjectFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SubjectFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SubjectFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

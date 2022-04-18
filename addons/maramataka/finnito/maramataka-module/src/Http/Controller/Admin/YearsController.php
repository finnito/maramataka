<?php namespace Finnito\MaramatakaModule\Http\Controller\Admin;

use Finnito\MaramatakaModule\Year\Form\YearFormBuilder;
use Finnito\MaramatakaModule\Year\Table\YearTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class YearsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param YearTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(YearTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param YearFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(YearFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param YearFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(YearFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

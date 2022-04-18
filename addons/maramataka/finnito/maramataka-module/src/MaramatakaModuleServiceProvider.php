<?php namespace Finnito\MaramatakaModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Finnito\MaramatakaModule\Subject\Contract\SubjectRepositoryInterface;
use Finnito\MaramatakaModule\Subject\SubjectRepository;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaSubjectsEntryModel;
use Finnito\MaramatakaModule\Subject\SubjectModel;
use Finnito\MaramatakaModule\Year\Contract\YearRepositoryInterface;
use Finnito\MaramatakaModule\Year\YearRepository;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaYearsEntryModel;
use Finnito\MaramatakaModule\Year\YearModel;
use Finnito\MaramatakaModule\Lesson\Contract\LessonRepositoryInterface;
use Finnito\MaramatakaModule\Lesson\LessonRepository;
use Finnito\MaramatakaModule\Lesson\Form\LessonFormBuilder;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaLessonsEntryModel;
use Finnito\MaramatakaModule\Lesson\LessonModel;
use Illuminate\Routing\Router;

class MaramatakaModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/maramataka/timetable/{week?}' => 'Finnito\MaramatakaModule\Http\Controller\Admin\TimetableController@index',
        'admin/maramataka/subjects'           => 'Finnito\MaramatakaModule\Http\Controller\Admin\SubjectsController@index',
        'admin/maramataka/subjects/create'    => 'Finnito\MaramatakaModule\Http\Controller\Admin\SubjectsController@create',
        'admin/maramataka/subjects/edit/{id}' => 'Finnito\MaramatakaModule\Http\Controller\Admin\SubjectsController@edit',
        'admin/maramataka/years'           => 'Finnito\MaramatakaModule\Http\Controller\Admin\YearsController@index',
        'admin/maramataka/years/create'    => 'Finnito\MaramatakaModule\Http\Controller\Admin\YearsController@create',
        'admin/maramataka/years/edit/{id}' => 'Finnito\MaramatakaModule\Http\Controller\Admin\YearsController@edit',
        'admin/maramataka'           => 'Finnito\MaramatakaModule\Http\Controller\Admin\LessonsController@index',
        'admin/maramataka/create'    => 'Finnito\MaramatakaModule\Http\Controller\Admin\LessonsController@create',
        'admin/maramataka/edit/{id}' => 'Finnito\MaramatakaModule\Http\Controller\Admin\LessonsController@edit',
        'ical/{slug}' => 'Finnito\MaramatakaModule\Http\Controller\icalController@feed',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Finnito\MaramatakaModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Finnito\MaramatakaModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Finnito\MaramatakaModule\Event\ExampleEvent::class => [
        //    Finnito\MaramatakaModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Finnito\MaramatakaModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        MaramatakaSubjectsEntryModel::class => SubjectModel::class,
        MaramatakaYearsEntryModel::class => YearModel::class,
        MaramatakaLessonsEntryModel::class => LessonModel::class,
        "lesson_form" => LessonFormBuilder::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        SubjectRepositoryInterface::class => SubjectRepository::class,
        YearRepositoryInterface::class => YearRepository::class,
        LessonRepositoryInterface::class => LessonRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}

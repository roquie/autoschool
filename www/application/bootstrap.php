<?php defined('SYSPATH') or die('No direct script access.');


// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 *  Set Cookie salt bla bla bla
 * */
Cookie::$salt = '§aJIO[NNJASDCVSSDaО└21a2137Ж21О0♂6545H3sdfshdfipww78GYT&(PFIO:(*F)*)cASDSDFSDFGSDGYIAFrhrtgsd465gsdgu;hwef7iy7yh9&*YUH*)';
/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::$environment =  Kohana::DEVELOPMENT;
//Kohana::$environment = ($_SERVER['SERVER_NAME'] !== 'localhost') ? Kohana::PRODUCTION : Kohana::DEVELOPMENT;

Kohana::init(array(
	'base_url'   => 'http://autoschool.ru/',
    'index_file' => false,
    'errors' => true, //Kohana::$environment ===  Kohana::DEVELOPMENT,
    'profiling' => true,//Kohana::$environment ===  Kohana::DEVELOPMENT,
    //'caching' => Kohana::$environment ===  Kohana::PRODUCTION
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	   'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	   'orm'        => MODPATH.'orm',        // Object Relationship Mapping
       'uploader' => MODPATH.'uploader',
       'goauth' => MODPATH.'goauth',
       'email' => MODPATH.'email',
       'htmlpurifier' => MODPATH.'htmlpurifier',
       'phpword' => MODPATH.'phpword',
       'docxtemplate' => MODPATH.'docxtemplate',
       'twitterapi' => MODPATH.'twitterapi',
       'botobor' => MODPATH.'botobor',
      //  '' => MODPATH.'',
      //  '' => MODPATH.'',
      //  '' => MODPATH.'',
      //  '' => MODPATH.'',
      //  '' => MODPATH.'',

	));


/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/**
 * для загрузки/скачивания файлов
 */
Route::set('Updownload', 'updownload/<folder>/<filename>.<format>',
    array(
        'folder' => '.+',
        'filename' => '.+',
        'format' => '(doc|docx|pdf)'
    ))
    ->defaults(array(
        'controller' => 'Updownload',
        'action' => 'download'
    ));


/**
 * Роут для загрузки медиа файлов, типа css, js ...
 *
 * */


Route::set('all_media', '<type_media>(/<folder>(/<subfolder>(/<file>)))',
    array(
        'type_media' => '(css|js|img|admin/css|admin/js|font|admin/font|admin/img)',
        'folder' => '.+',
        'subfolder' => '.+',
        'file' => '.+',
    ))
    ->defaults(array(
        'controller' => 'Media',
        'action'     => 'load'
    ));

Route::set('auth.reg.lk', 'lk(/<action>)')
    ->defaults(array(
        'directory'  => 'Lk',
        'controller' => 'Lk',
    ));
Route::set('auth.reg.lk.ajax', 'lk/ajax(/<action>(/<id>))')
    ->defaults(array(
        'directory'  => 'Lk',
        'controller' => 'Ajax',
    ));



Route::set('admin', 'admin(/<action>)')
    ->defaults(array(
        'controller' => 'Admin',
        'action'     => 'index',
    ));

Route::set('main', '(<action>(/<id>))')
    ->defaults(array(
        'controller' => 'Main',
        'action' => 'index'
    ));

Route::set('admin.autocrud', 'admin/<table_name>/<action>(/<id>)(|<params>)(&<return_add_data>)',
    array(
         'table_name' => '[a-zA-Z]+',
         'action' => '(create|read|update|delete)',
         'id' => '[0-9]+',
         'params' => '.+',
         'return_add_data' => '.+'
    ))
    ->defaults(array(
                    'controller' => 'Admin',
                    'directory'  => 'Ajax',
               ));


Route::set('main.ajax', 'main(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory'  => 'Main',
   ));



Route::set('admin.ajax', 'admin(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory'  => 'Admin',
    ));





Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'index',
        'action' => 'index'
    ));



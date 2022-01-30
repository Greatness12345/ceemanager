<?php
/**
 * Autoloader file for theme.
 *
 */

namespace practice\namespac;

/**
* Simple autoloader, so we don't need Composer just for this.
*/
class Autoloader
{
	
   function register()
    {

    spl_autoload_register(function($className) {

	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	
	$document_root = $_SERVER['DOCUMENT_ROOT'];
	
	include_once $document_root . '/' . $className . '.php';

});
	}
}
Autoloader::register();


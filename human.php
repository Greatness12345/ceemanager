<?php
/**
 * Human.
 */
Namespace practice\namespac;

use practice\namespac\singleton;

class human{
	
	use singleton;

	function __construct() {

		// Load class.
		man::get_instance();
		woman::get_instance();
		children::get_instance();
	}
}

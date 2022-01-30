<?php
/**
 * Children.
 *
 */

namespace practice\namespac;

use practice\namespac\singleton;

class children{
	use singleton;

	function __construct() {
      $this->print();
	}

	function print() {
        echo 'Children Class'.'</br>';
    }

}

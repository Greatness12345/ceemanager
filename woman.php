<?php
/**
 * Woman.
 *
 */

namespace practice\namespac;

use practice\namespac\singleton;

class woman {
	use singleton;

	function __construct() {
      $this->print();
	}

	function print() {
        echo'Woman Class'.'</br>';
    }


}

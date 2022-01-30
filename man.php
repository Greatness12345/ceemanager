<?php
/**
 * Man.
 *
 */

namespace practice\namespac;

//require_once 'trait.php';
use practice\namespac\singleton;

class Man {
	use singleton;

	function __construct() {
      $this->print();
	}

	function print() {
        echo 'Man Class'.'</br>';
    }
}

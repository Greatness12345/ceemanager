<?php
/**
 * Testing the following: Trait, Singleton, autoloader, namespace
 *
 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/practice/namespac/auto-loader.php';
//include_once 'human.php';
  
  practice\namespac\human::get_instance();

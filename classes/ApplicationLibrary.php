<?php

namespace app;

/**
 *
 */
class ApplicationLibrary
{
  /**
   *
   */
  function __construct() {

  }

  /**
   *
   */
  function foo() {
    return new other\OtherLibraryClass();
  }

}
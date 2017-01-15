<?php

/**
 * @param é nada
 */
function loadClasses($class)
      {
            $dirs = array('/', '/controllers/', '/views/', '/models/');

            foreach($dirs as $dir):

                  include __DIR__ . $dir . $class .'.php';

            endforeach;

      }

      spl_autoload_register('loadClasses');
<?php

   class WebApp
   {
      function fixUrl( $page )
      {
         return str_replace( '-', '_', $page );
      }

   }
?>

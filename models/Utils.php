<?php

   class Utils
   {
      function fixUrl( $page )
      {
         return str_replace( '-', '_', $page );
      }

   }
?>

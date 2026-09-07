<?php

   class Utils
   {
      function fixUrl( $page )
      {
         return str_replace( '-', '_', $page );
      }

   }

      function showAlertMsg( $type, $msg )
      {
         $icon_type = '';

         if ( $type == 'success' )
         {
            $icon_type = 'bi bi-check-circle';
         }
         else if ( $type == 'info' )
         {
            $icon_type = 'bi bi-exclamation-circle';
         }
         else if ( $type == 'danger' )
         {
            $icon_type = 'bi bi-exclamation-octagon';
         }

         $type = "alert-$type";

         return "<div class='alert $type alert-dismissible fade show mt-4' role='alert'>
               <i class='$icon_type me-1'></i> $msg
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
      }
?>

<?php
    include_once("App.php");

    class StateLga {
        use App;

        // Fetch all states
        public function getAllStates() {
            $sql = "SELECT * FROM states";
            return $this->fetchMultiple($sql);
        }

        // Fetch all LGAs
        public function getAllLGAs() {
            $sql = "SELECT * FROM lgas";
            return $this->fetchMultiple($sql);
        }

        // Fetch single state by ID
        public function getStateById(array $dt ) {
            $sql = "SELECT * FROM states WHERE id = ?";
            return $this->fetchSingle($sql, $dt );
        }

        // Fetch single LGA by ID
        public function getLGAById( array $dt ) {
            $sql = "SELECT * FROM lgas WHERE id = ?";
            return $this->fetchSingle( $sql, $dt );
        }

        // Fetch all LGAs belonging to a specific state ID
        public function getLGAsByStateId( array $dt ) {
            $sql = "SELECT * FROM lgas WHERE state_id = ?";
            return $this->fetchMultiple( $sql, $dt );
        }
    }
?>
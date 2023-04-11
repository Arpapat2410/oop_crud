<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'Arpapat46');
    define('DB_NAME', 'crud_64');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }


        public function insert($code_number, $Thai_name, $Eng_name, $major,	$brithday ,$img) {
            $result = mysqli_query($this->dbcon, "INSERT INTO card(code_number, Thai_name, Eng_name, major,brithday, img) 
            VALUES('$code_number', '$Thai_name', '$Eng_name', '$major','$brithday', '$img')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM card");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM card WHERE id = '$userid'");
            return $result;
        }

        public function update($code_number, $Thai_name, $Eng_name, $major, $brithday,	$img, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE card SET 
                code_number = '$code_number',
                Thai_name = '$Thai_name',
                Eng_name = '$Eng_name',
                major = '$major',
                brithday = '$brithday',
                img = '$img'
                WHERE id = '$userid'
            ");
            return $result;

        }
        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM card WHERE id = '$userid'");
            return $deleterecord;
        }

    }
    

?>

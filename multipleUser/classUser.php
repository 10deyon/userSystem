<?php
include('db_config.php');
class User{
    public $db;

    public function __construct(){
        /**$this->db = mysqli_connect("localhost", "root", "", "attendance_system");**/

        $this->db =new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

        if(/**!$conn**/ mysqli_connect_errno()){
            echo"Error: Could not connect to database.";
            exit;
        }
    }

    /**For registration process**/
    public function regUser($name, $age, $sex, $email, $password){
        $password = md5($password);
        $sql = "select * from user where u_name = '$name' or u_email = '$email'";

        //checking if the username or email is available in db
        $check = $this -> db ->query($sql) ;
        $count_row = $check -> num_rows;

        //if the username is not in db then insert to the table
        if ($count_row == 0){
            $sql1 = "INSERT INTO user SET u_name='$name', u_age='$age', u_sex='$sex', u_email='$email', password='$password' ";

            $result = mysqli_query($this->db,$sql1) or

            die(mysqli_connect_errno()."Data cannot inserted");

            return $result;
        }
        else {
            return false;
        }
    }

    /*** for login process ***/
    public function check_login($emailname, $password){
        $password = md5($password);

        $sql2 = "SELECT id from user WHERE u_email = '$emailname' or u_name='$emailname' and password='$password'";

    //checking if the username is available in the table
        $result = mysqli_query($this->db,$sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user_data['id'];
            return true;
        }
        else{
            return false;
        }
    }

    /*** for showing the username or fullname ***/
    public function get_name($id){
        $sql3 = "SELECT u_name FROM user WHERE id = $id";
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result);
        echo $user_data['name'];
    }

    /*** starting the session ***/
    public function get_session(){
        return $_SESSION['login'];
    }

    public function user_logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }
}
?>
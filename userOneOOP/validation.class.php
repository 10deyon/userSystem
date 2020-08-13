<?php

class UserValidator{
    private $data;
    private $errors = [];
    private static $fields = ['username', 'email', 'pwd', 'conPassword'];

    public function __construct($postInfo){
        $this->$postInfo;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error('$field is not present in Data');
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateUsername(){

        $result = trim($this->data['username']);
        if (!empty($result)){
            $this->outputError('username', 'Field cannot be empty');
        }else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $result)){
                $this->outputError('username', 'Username must be 6 - 12 Characters and alphanumeric');
            }
        }
    }

    private function validateEmail(){
        $result = trim($this->data['email']);
        if(empty($result)){
            $this->outputError('email', 'Field cannot be empty');
        } else{
            if(!filter_var($result, FILTER_VALIDATE_EMAIL)){
                $this->outputError('email', '"Enter a valid email ID');
            }
        }
    }

    private function validatePassword(){
        $result = trim($this->data['pwd']);
        if(empty($result)) {
            $this->outputError('pwd', 'Field cannot be empty');
        }else {
            if(!strlen($result) < 6){
                $this->outputError('pwd', "Password must be greater than 6 characters");
            }
            if($result != self::$fields[3]){
                $this->outputError('pwd', "Passwords do not match");
            }
        }
    }

    private function outputError($key, $result){
        $this->errors[$key] = $result;
    }
}

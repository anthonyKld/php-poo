<?php

namespace app\classes;

class User {
    public $name;
    public $email;

    public function auth() {
        return "Olá {$this->name}, seu email é {$this->email}";
    }
}
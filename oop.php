<?php
    class person {
        private $name;
        private $email;

        public function __construct($name, $email) {
            $this ->name = $name;
            $this ->email = $email;
            echo 'Person Created <br>';
        }
        public function setName($name) {
            $this -> name = $name;
        }

        public function getName() {
            return $this -> name . '<br>';
        }

        public function setEmail($email) {
            $this -> email = $email;
        }

        public function getEmail() {
            return $this->email . "<br>";
        }

    }

    // $person1 = new person('gauresh patil', 'gauresh@gmail.com');
    // $person1 -> name = "Gauresh Patil";
    // echo $person1 -> name;

    // $person1 -> setName('Gauresh Patil');
    // echo $person1->getName();
    // echo $person1->getEmail();

    class Customer extends person {
        private $balance;
        
        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '. __CLASS__ . 'has been created <br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }
    }

    $customer1 = new Customer('gp', 'gp@gmail.com', 300);

    echo $customer1->getBalance();

?>
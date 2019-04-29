<?php
    class person {
        private $name;
        private $email;

        public function setName($name) {
            $this -> name = $name;
        }

        public function getName() {
            return $this -> name;
        }

    }

    $person1 = new person;
    // $person1 -> name = "Gauresh Patil";
    // echo $person1 -> name;

    $person1 -> setName('Gauresh Patil');
    echo $person1->getName();
?>
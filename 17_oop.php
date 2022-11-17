<?php
/* --- Object Oriented Programming -- 

  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User 
{
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Methods are functions that belong to a class.
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('Tommy', 't@g.com', '1234');
$user2 = new User('Skoon', 's@g.com', '9999');

// $user1->set_name('Tommy');
// $user2->set_name('Skoon');

echo $user1->get_name();
echo $user2->get_name();

echo $user1->email;
echo $user2->password;

// Inheritance
class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Jess', 'j@g.com', '1111', 'Manager');

echo $employee1->get_title();
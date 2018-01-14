<!DOCTYPE html>
<!--
Adds Students and prints them.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php'); // Student class

        $students = array();

        // adds Student #1
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        // adds Student #2
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        // adds Student #3
        $third = new Student();
        $third->surname = "Lee";
        $third->first_name = "Jeremy";
        $third->add_email('work', 'jeremylee.business@gmail.com');
        $third->add_grade(95);
        $third->add_grade(75);
        $third->add_grade(85);
        $students['j999'] = $third;

        ksort($students); // sorts students by key
        // prints all Students
        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>

Courses management application, with subjects, students, grades and registrations support
=========================================================================================

Requires PHP 7.x, MySQL 5.4.x 
v0.1 - 08/04/2019
```
(c)Juan Luis Ramírez Tutor
Email: juanluis.ramirez.tutor@gmail.com
GitHub: https://github.com/jlrtutor
LinkedIn: https://es.linkedin.com/in/juan-luis-ramirez-tutor
```

Feel free to use this application to manage a small school, institute, academy
or similar, where you have to control the student's registration, grades, etc...

Please, report any issue you may have using this application.



#Installation
----------------------------

1. Create an empty database
```
    | name: university
    | user: root
    | password: [empty]
```

2. Change config database, if required, at file */app/config.php*

3. Upload and execute "*database.sql*" onto your database.

4. The application is prepared to run into a folder called "university-app", so the 
URL would be:
http://localhost/university-app

5. If the application is installed into another folder, change the path on the
following file */app/config.php, line 2*
```php
define( 'BASE_URL', '/university-app/');  //WEB directory, external path url
```

6. LOGIN. You must authenticate before you use this application:
```
    | user: root@root.com
    | password: admin
```

7. Make
```
composer install
```
to download and install all packages and dependencies.


##Technical notes
-----------------

The framework used in this project was created from scratch, thinking on an easy and fast development. 

It implements a system based on a data model, where you define basically all
the fields that the model needs and its relationships with other tables or entities.
So, the system can validate data automatically, for example:

```php
$this->field('id', 				'integer', ['PK'=>true, 'validate'=>false] );
$this->field('student_id', 		'integer', ['FK'=>true]);
$this->field('course_id', 		'integer', ['FK'=>true]);
$this->field('level', 			'integer');
$this->field('date_of_creation','date', [ 'validate'=>false,
                                          'required'=>false, 
                                          'default'=>date('Y-m-d') ] );
```

Here you can see the entity *registrations* and its fields and relationships with
other tables, like *Student* and *Course*.

These relationships make it easier to obtain information from foreign tables:
```php
//Load object Registration
$obj_registration = new Registration($id);
//Binding with Students tabla
echo "The name of the students is: " . $obj_registration->getStudent()->name;
echo "And he courses " . $obj_registration->getCourse()->name;
```


## App structure
----------------
```
/app
    /Http
        /Controllers
        /Models
    /public
        /views
            //...
/vendor
```

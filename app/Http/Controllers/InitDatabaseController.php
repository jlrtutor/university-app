<?php
namespace App\Http\Controllers;

use \App\Core;


Class InitDatabaseController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        $stmt = Core::db()->prepare('TRUNCATE TABLE `users`');
        $stmt->execute();

        //Insert users data
        $stmt = Core::db()->prepare('INSERT INTO `users`(`name`, `surname`, `email`, `password`, `date_of_creation`) 
        VALUES (:name, :surname, :email, :password, NOW())');
        
        $stmt->execute(array(
            'name' => 'Administrator',
            'surname' => 'APP',
            'email' => 'root@root.com',
            'password' => crypt('admin', KEY_SALT)
        ));

        
        $stmt = Core::db()->prepare('TRUNCATE TABLE `subjects`');
        $stmt->execute();

        //Insert some university subjects
        $subjects = [ array(
            'code' => '71011013',
            'name' => 'Fundamentos físicos de la informática',
            'course' => 1,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '7101102-',
            'name' => 'Fundamentos matemáticos de la informática',
            'course' => 1,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901014',
            'name' => 'Fundamentos de sistemas digitales',
            'course' => 1,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901020',
            'name' => 'Fundamentos de programación',
            'course' => 1,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901037',
            'name' => 'Lógica y estructuras discretas',
            'course' => 1,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901043',
            'name' => 'Estrategias de programación y estructuras de datos',
            'course' => 1,
            'semester' => 2,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '7190105-',
            'name' => 'Estadística (Ing.Informática/Ing.TI)',
            'course' => 1,
            'semester' => 2,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901066',
            'name' => 'Ingeniería de computadores',
            'course' => 1,
            'semester' => 2,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901072',
            'name' => 'Programación orientada a objetos',
            'course' => 1,
            'semester' => 2,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71901089',
            'name' => 'Autómatas, gramáticas y lenguajes',
            'course' => 1,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71012030',
            'name' => 'Redes de computadores',
            'course' => 2,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),   array(
            'code' => '71902019',
            'name' => 'Programación y estructuras de datos avanzadas',
            'course' => 2,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902025',
            'name' => 'Ingeniería de computadores II',
            'course' => 2,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902031',
            'name' => 'Gestión de empesas informáticas',
            'course' => 2,
            'semester' => 1,
            'type' => 'FORMACIÓN BÁSICA',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902048',
            'name' => 'Sistemas operativos',
            'course' => 2,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71012018',
            'name' => 'Ingeniería de computadores III',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71012024',
            'name' => 'Teoría de los lenguajes de programación',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902060',
            'name' => 'Fundamentos de inteligencia artificial',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902077',
            'name' => 'Introducción a la ingeniería del software',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902083',
            'name' => 'Bases de datos',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71902083',
            'name' => 'Bases de datos',
            'course' => 2,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013012',
            'name' => 'Diseño y administración de sistemas operativos',
            'course' => 3,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013029',
            'name' => 'Sistemas distribuidos',
            'course' => 3,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013035',
            'name' => 'Diseño del software',
            'course' => 3,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013041',
            'name' => 'Sistemas de bases de datos',
            'course' => 3,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013130',
            'name' => 'Procesadores del lenguaje I',
            'course' => 3,
            'semester' => 1,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '68024093',
            'name' => 'Alimentación de equipos informáticos',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013058',
            'name' => 'Sistemas en tiempo real (I.Informática)',
            'course' => 3,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013064',
            'name' => 'Ingeniería de sistemas',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013070',
            'name' => 'Informática gráfica',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013087',
            'name' => 'Fundamentos de robótica',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013101',
            'name' => 'Tratamiento digital de señales',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013118',
            'name' => 'Procesadores del lenguaje II',
            'course' => 3,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013124',
            'name' => 'Seguridad',
            'course' => 3,
            'semester' => 2,
            'type' => 'OBLIGATORIAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71013147',
            'name' => 'Pruebas de software',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71023105',
            'name' => 'Usabilidad y accesibilidad',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        ),  array(
            'code' => '71023111',
            'name' => 'Arquitecturas y protocolos TPC/IP',
            'course' => 3,
            'semester' => 2,
            'type' => 'OPTATIVAS',
            'credits' => 6,
            'active' => 1,
            'deleted' => 0
        )
        ];

        $stmt = Core::db()->prepare('INSERT INTO `subjects`(`code`, `name`, `type`, `course`, `semester`, `credits`, `active`,`deleted`) 
                                    VALUES (:code, :name, :type, :course, :semester, :credits, :active, :deleted)');
        foreach($subjects as $subject)
        {
            $stmt->execute($subject);
        }
    }
}
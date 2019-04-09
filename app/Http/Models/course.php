<?php
namespace App\Http\Models;
require_once __DIR__ . '/Model.php';

use App\Core;


Class course extends Model
{    
    public function __construct()
    {
        parent::__construct('courses');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('name');
    }

    public function getById($id)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name` FROM " . $this->__table . " WHERE  `id` = :id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetchObject();
    }

    public function getAll()
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name` FROM " . $this->__table . " ORDER BY `name` DESC");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\course");
    }
}
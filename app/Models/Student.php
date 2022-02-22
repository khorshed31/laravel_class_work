<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Finder\name;

class Student extends Model
{
    use HasFactory;

    protected $student;
    public function newStudent(){

        $this->student = new Student();
        $this->student->name = 'Khorshed';
        $this->student->email = 'khorshed@gmail.com';
        $this->student->mobile = '365768890';
        $this->student->save();

    }

    public static function getAllStudent(){

        return[
            0 => [
                'id'      => '1',
                'name'    => 'Khorshed',
                'email'   => 'khorsshed@gmail.com',
                'mobile'  => '0123456789',
                'image'   => ''
            ],
            1 => [
                'id'      => '2',
                'name'    => 'Alom',
                'email'   => 'alom@gmail.com',
                'mobile'  => '4235477997',
                'image'   => ''
            ],
            2 => [
                'id'      => '3',
                'name'    => 'Emon',
                'email'   => 'emon@gmail.com',
                'mobile'  => '79807654554',
                'image'   => ''
            ],
        ];
    }
}

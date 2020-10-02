<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'name', 'email', 'salary'
    ];

    // create or insert data v1
    // $e = new Employee;
    // $e->name = 'jows';
    // $e->email = 'j@mail.com',
    // $e->salary = 50000;
    // $e->save();

    // create or insert data v2

    // Employee::create([
    //     'name'  => 'larrs',
    //     'email' => 'b@gmail.com',
    //     'salary'    => 25232
    // ]);

    // Employee automatic tables employees
    // User automatic tables users
    // Blog tables blogs
    // Amenity table amenities
}

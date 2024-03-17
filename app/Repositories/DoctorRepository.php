<?php

namespace App\Repositories;

use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorRepository
{
    private string $tableName = "doctors";

    public function insert_doctor(Doctor $doctor)
    {
    }

    public function getAllDoctor()
    {
    }

    public function getDoctorById(string $id)
    {
    }
}
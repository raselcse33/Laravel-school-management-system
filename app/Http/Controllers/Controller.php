<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function gpaGrade($full_marks, $get_marks) {
        $result_calculation = ($get_marks * 100) / $full_marks;
        if ($result_calculation >= 80) {
            $gpa = 'A+';
        } else if ($result_calculation >= 70) {
            $gpa = 'A';
        } else if ($result_calculation >= 60) {
            $gpa = 'A-';
        } else if ($result_calculation >= 50) {
            $gpa = 'B';
        } else if ($result_calculation >= 40) {
            $gpa = 'C';
        } else if ($result_calculation >= 33) {
            $gpa = 'D';
        } else {
            $gpa = 'F';
        }

        return $gpa;
    }

    public function gpaPoint($full_marks, $get_marks) {
        $result_calculation = ($get_marks * 100) / $full_marks;
        if ($result_calculation >= 80) {
            $gpa = '5.00';
        } else if ($result_calculation >= 70) {
            $gpa = '4.00';
        } else if ($result_calculation >= 60) {
            $gpa = '3.50';
        } else if ($result_calculation >= 50) {
            $gpa = '3.00';
        } else if ($result_calculation >= 40) {
            $gpa = '2.00';
        } else if ($result_calculation >= 33) {
            $gpa = '1.00';
        } else {
            $gpa = '0.00';
        }
        return $gpa;
    }

}

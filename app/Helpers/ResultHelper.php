<?php

function semesterTotal($class_id, $roll, $exam_id, $exam_year) {
    $student_marks = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('studentRoll', $roll)
                    ->where('semisterId', $exam_id)
                    ->where('examYear', $exam_year)
                    ->get();


    $check_f_grade = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('studentRoll', $roll)
                    ->where('semisterId', $exam_id)
                    ->where('examYear', $exam_year)
                    ->where('letterGrade', 'F')
                    ->first();

    $subject_total = $student_marks->sum('subjectTotal');
    $total_subject = $student_marks->count();
    $total_gpa = $student_marks->sum('gpa');
    $gpa = sprintf('%0.2f', $total_gpa / $total_subject);
    $data['total_mark'] = $subject_total;
    $data['letter_grade'] = ($check_f_grade) ? 'F' : letterGrade($gpa);
    $data['gpa'] = (($check_f_grade) || empty($subject_total)) ? '0.00' : $gpa;

    return $data;
}

function semesterClassPosition($class_id, $roll, $exam_id, $exam_year) {
    $check_f_grade = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('studentRoll', $roll)
                    ->where('semisterId', $exam_id)
                    ->where('examYear', $exam_year)
                    ->where('letterGrade', 'F')
                    ->first();


    if ($check_f_grade) {
        $class_position = 0;
    } else {
        $student_total_mark = @DB::table('student_marks')
                        ->where('classNameId', $class_id)
                        ->where('studentRoll', $roll)
                        ->where('semisterId', $exam_id)
                        ->where('examYear', $exam_year)
                        ->sum('subjectTotal');

        $all_total_marks = @DB::table('student_marks')
                        ->select(DB::raw("SUM(subjectTotal) as semesterTotal"))
                        ->where('classNameId', $class_id)
                        ->where('semisterId', $exam_id)
                        ->where('examYear', $exam_year)
                        ->groupBy('studentRoll')
                        ->orderBy('semesterTotal', 'desc')
                        ->pluck('semesterTotal')
                        ->all();

        $search_position = array_search($student_total_mark, $all_total_marks);
        $class_position = $search_position + 1;
    }

    echo $class_position;
}

function letterGrade($gpa) {
    if ($gpa >= 5) {
        $gpa = 'A+';
    } else if ($gpa >= 4) {
        $gpa = 'A';
    } else if ($gpa >= 3.5) {
        $gpa = 'A-';
    } else if ($gpa >= 3) {
        $gpa = 'B';
    } else if ($gpa >= 2) {
        $gpa = 'C';
    } else if ($gpa >= 1) {
        $gpa = 'D';
    } else {
        $gpa = 'F';
    }
    return $gpa;
}

function getClassByID($class_id) {
    $class_name = '';
    if ($class_id) {
        $class_name = @DB::table('class_names')->where('id', $class_id)->first()->classNameEnglish;
    }
    return $class_name;
}

function highestMark($class_id, $subject_code, $semester_id, $exam_year) {
    $highest_mark = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('subject_code', $subject_code)
                    ->where('semisterId', $semester_id)
                    ->where('examYear', $exam_year)
                    ->max('subjectTotal');

    return $highest_mark;
}

function gpaGrade($full_marks, $get_marks) {
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

function gpaToGrade($gpa) {
    if ($gpa >= 5) {
        $gpa = 'A+';
    } else if ($gpa >= 4) {
        $gpa = 'A';
    } else if ($gpa >= '3.5') {
        $gpa = 'A-';
    } else if ($gpa >= 3) {
        $gpa = 'B';
    } else if ($gpa >= 2) {
        $gpa = 'C';
    } else if ($gpa >= 1) {
        $gpa = 'D';
    } else {
        $gpa = 'F';
    }

    return $gpa;
}

function gpaPoint($full_marks, $get_marks) {
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

function resultLetterGrade($letter_grade, $class_id, $student_roll, $subject_code, $exam_id, $exam_year) {
    $join_exists = @DB::table('join_marks')->where('first_subject_code', $subject_code)->orWhere('second_subject_code', $subject_code)->first();
    
    if ($join_exists) {
        $subject_one = @$join_exists->first_subject_code;
        $subject_two = @$join_exists->second_subject_code;
        $marks1 = @DB::table('student_marks')->where('studentRoll', $student_roll)->where('classNameId', $class_id)->where('subject_code', $subject_one)->where('semisterId', $exam_id)->where('examYear', $exam_year)->first();
        $marks2 = @DB::table('student_marks')->where('studentRoll', $student_roll)->where('classNameId', $class_id)->where('subject_code', $subject_two)->where('semisterId', $exam_id)->where('examYear', $exam_year)->first();
        $get_mark = @$marks1->subjectTotal + @$marks2->subjectTotal;
        $full_mark = @$marks1->fullMark + @$marks2->fullMark;
        $grade = @gpaGrade($full_mark, $get_mark);
    }  else {
        $grade = $letter_grade;
    }

    return $grade;
}

function resultGpaPoint($letter_gpa, $class_id, $student_roll, $subject_code, $exam_id, $exam_year) {
    $join_exists = @DB::table('join_marks')->where('first_subject_code', $subject_code)->orWhere('second_subject_code', $subject_code)->first();
    if ($join_exists) {
        $subject_one = @$join_exists->first_subject_code;
        $subject_two = @$join_exists->second_subject_code;
        $marks1 = @DB::table('student_marks')->where('studentRoll', $student_roll)->where('classNameId', $class_id)->where('subject_code', $subject_one)->where('semisterId', $exam_id)->where('examYear', $exam_year)->first();
        $marks2 = @DB::table('student_marks')->where('studentRoll', $student_roll)->where('classNameId', $class_id)->where('subject_code', $subject_two)->where('semisterId', $exam_id)->where('examYear', $exam_year)->first();
        $get_mark = @$marks1->subjectTotal + @$marks2->subjectTotal;
        $full_mark = @$marks1->fullMark + @$marks2->fullMark;
        $gpa = @gpaPoint($full_mark, $get_mark);
    } else {
        $gpa = sprintf('%0.2f', $letter_gpa);
    }

    return $gpa;
}


function totalGpaCalculation($class_id, $roll, $exam_id, $exam_year) {
    $total = 0;
    $duplicate = @DB::table('join_marks')->where('class_name_id', $class_id)->pluck('second_subject_code')->toArray();
    $fourth_subject = @DB::table('students')->where('student_id', $roll)->first()->fourth_subject;
    
    
    $student_marks = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('studentRoll', $roll)
                    ->where('semisterId', $exam_id)
                    ->where('examYear', $exam_year)
                    ->where('not_effect',  '0');
    
    if ($duplicate) {
        $student_marks->whereNotIn('subject_code', $duplicate);
    }
    
    if($fourth_subject) {
        $student_marks->where('subject_code', '!=', $fourth_subject);
    }
    
    
    $student_marks = $student_marks->get()->toArray();
    
    foreach ($student_marks as $student_mark) {
        $total += @resultGpaPoint($student_mark->gpa, $class_id, $roll, $student_mark->subject_code, $exam_id, $exam_year);
    }
    
    
    
    if($fourth_subject) {
        $fourth_subject_gpa = @DB::table('student_marks')
                    ->where('classNameId', $class_id)
                    ->where('studentRoll', $roll)
                    ->where('semisterId', $exam_id)
                    ->where('examYear', $exam_year)
                    ->where('subject_code',  $fourth_subject)
                    ->where('not_effect',  '0')->first()->gpa;
        
        if($fourth_subject_gpa > 3) {
            $total = $total +  ($fourth_subject_gpa - 3);
        }
    }
    
    $data['total'] = $total;
    $data['rows'] = count($student_marks);
    return $data;
}

?>
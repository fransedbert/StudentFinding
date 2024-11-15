<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;


class studentcontroller extends Controller
{
    public function dashboard(Request $req)
    {
        $students = student::query();

        $option = $req->query('option');
        $search = $req->query('search');


        if ($search) {
            $students = $students->where('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%');
        }


        if ($option !== 'All') {
            $students = $students->where('jurusan', 'like', "%{$option}%");
        }

        $students = $students->get();

        if ($search == "" && $option == "All") {
            $students = student::all();
        }




        return view('dashboard', ['students' => $students]);
    }
}



// class studentcontroller extends Controller
// {
//     public function dashboard(Request $req) {
//         // Start with all students (no filtering)
//         $temp = student::query(); 

//         // Apply search filter if provided
//         if ($search = $req->query('search')) {
//             $temp->where('first_name', 'like', '%' . $search . '%')
//                  ->orWhere('last_name', 'like', '%' . $search . '%');
//         }

//         // Apply category (option) filter if provided
//         if ($option = $req->query('option')) {
//             if ($option !== 'All') {
//                 $temp->where('jurusan', 'like', '%' . $option . '%');
//             }
//         }

//         // Get the filtered students
//         $students = $temp->get();

//         return view('dashboard', compact('students'));
//     }
// }

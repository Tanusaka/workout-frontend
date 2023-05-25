<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function coursesMain()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.courses.courses_view');
    }
    public function coursesDetails(Request $req)
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        $data['id']=$req->id;
        return view('pages.courses.courses_details',$data);
    }
}

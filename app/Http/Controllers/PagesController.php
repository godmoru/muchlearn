<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\CourseController;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $param['pagename'] = "Index";
        return view('fend.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function aboutus()
    {
        $param['pagename'] = "About Us";
        $param['tagline'] = "About MuchLearn Inc.";
        $param['pagetext'] = "We providing the best courses.";
        return view('fend.about', $param);
    }

    public function contactus()
    {
        $param['pagename'] = "Contact Us";

        $param['tagline'] = "Contact Us";
        $param['pagetext'] = "We'd love to hear from your side.";
        return view('fend.contactus', $param);
    }

    public function courses()
    {
        $param['pagename'] = "Courses";
        // $param['courses'] = Course::all();
        $param['tagline'] = "Our Pro Courses";
        $param['pagetext'] = "Best eLearning training classes.";
        return view('fend.courses', $param);
    }

    function showCourse($id)
    {
        $param['pagename'] = "Course_Title";
        // $param['course'] = Course::findOrFail($id);
        $param['tagline'] = "Course Details";
        $param['pagetext'] = "Business accounting and taxation fundamental";
        return view('fend.view-course', $param);
    }

    public function instructors()
    {
        $param['pagename'] = "Instructors";
        // $param['instructors'] = Instructor::all();
        $param['tagline'] = "Our Instructors";
        $param['pagetext'] = "The best Instructors Globally.";
        return view('fend.instructors', $param);
    }

    public function testimonials()
    {
        $param['pagename'] = "Testimonials";
        // $param['testimonies'] = Testimonial::all();
        $param['tagline'] = "Students' Testimonials";
        $param['pagetext'] = "What our brilliant students are say.";
        return view('fend.testimonials', $param);
    }

    public function newsBlog()
    {
        $param['pagename'] = "News Update";
        // $param['news'] = News::all();
        $param['tagline'] = "Latest News Update.";
        $param['pagetext'] = "Trending topic & learning articles.";
        return view('fend.news-blog', $param);
    }

    public function newsBlogShow($id)
    {
        $param['pagename'] = "News Title";
        // $param['news'] = News::all();
        $param['tagline'] = "News Title";
        $param['pagetext'] = "Trending topic & learning articles.";
        return view('fend.news-blog-show', $param);
    }

    public function courseCategory()
    {
        $param['pagename'] = "Courses";
        // $param['course_categories'] = CourseCategory::all();
        $param['tagline'] = "About MuchLearn Inc.";
        $param['pagetext'] = "We providing the best courses.";
        return view('fend.course-categories', $param);
    }

}

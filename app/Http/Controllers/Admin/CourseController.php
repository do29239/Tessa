<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return view('admin.course',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $validatedData = $request->validated();

        $course = Course::create($validatedData);

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $imageName = time() . '.' . $image->getClientOriginalName();
                $image->storeAs('public/images', $imageName);

                // Create a new image record in the database and associate it with the product
                $course->image()->create([
                    'name' => $imageName,
                ]);
            }
        }
        return redirect()->back()->with('message', 'Course Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.show-courses', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.edit-course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $validatedData = $request->validated();

        // Update the product with validated input data
        $course->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageName = time() . '.' . $imageFile->getClientOriginalName();
                $imageFile->storeAs('public/images', $imageName);

                // Create a new image record in the database and associate it with the course
                $image = new Image();
                $image->name = $imageName;
                $course->image()->save($image);
            }
        }

        return redirect()->back()->with('message', 'Course Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        $course->image()->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully');
    }

    public function destroyImage(Course $course, Image $image)
    {
        // Delete the image record from the database
        $image->delete();

        // Optionally, delete the image file from storage if needed
        // Storage::delete('public/images/' . $image->name);

        return redirect()->back()->with('message', 'Image deleted successfully');
    }


}

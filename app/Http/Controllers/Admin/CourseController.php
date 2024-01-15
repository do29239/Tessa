<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

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

        DB::beginTransaction();

        try {
            $course = Course::create($validatedData);

            if ($request->hasFile('images')) {
                $images = collect($request->file('images'));

                $imageRecords = $images->map(function ($image) use ($course) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->storeAs('public/images', $imageName);

                    return [
                        'name' => $imageName,
                        'imageable_id' => $course->id,
                        'imageable_type' => get_class($course),
                    ];
                });

                // Batch insert images associated with the course
                $course->image()->createMany($imageRecords->all());
            }

            DB::commit();
            return redirect()->back()->with('message', 'Course Added Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception (e.g., log it, show an error message)
            return redirect()->back()->with('error', 'Error adding course');
        }
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

        DB::beginTransaction();

        try {
            $course->update($validatedData);

            if ($request->hasFile('images')) {
                $images = collect($request->file('images'));

                $imageRecords = $images->map(function ($imageFile) use ($course) {
                    $imageName = time() . '.' . $imageFile->getClientOriginalName();
                    $imageFile->storeAs('public/images', $imageName);

                    return [
                        'name' => $imageName,
                        'imageable_id' => $course->id,
                        'imageable_type' => get_class($course),
                    ];
                });

                // Batch insert new image records associated with the course
                $course->image()->createMany($imageRecords->all());
            }

            DB::commit();
            return redirect()->back()->with('message', 'Course Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception (e.g., log it, show an error message)
            return redirect()->back()->with('error', 'Error updating course');
        }
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        $course->image()->delete();

        return redirect()->back()->with('success', 'Course deleted successfully');
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

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageIntervention; // Alias added here
use Symfony\Component\HttpFoundation\Response;

class ConvertImageToWebp
{
    public function handle($request, Closure $next)
    {
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.webp';
            $path = storage_path('app/public/images/' . $imageName);

            try {
                // Convert and save the image in WebP format
                ImageIntervention::make($imageFile)->encode('webp', 90)->save($path);

                // Update the request with the new image path
                $request->merge(['image' => $imageName]);
            } catch (\Exception $e) {
                // Handle the exception
                report($e);
                return response()->json(['error' => 'Image processing failed.'], 500);
            }
        }

        return $next($request);
    }
//    public function handle($request, Closure $next)
//    {
//        if ($request->hasFile('images')) {
//            $images = collect($request->input('images'));
//
//            // Prepare image data
//            $preparedImages = $images->map(function ($image) {
//                $imageName = time() . '.' . $image->getClientOriginalExtension();
//                $path = storage_path('app/public/images/' . $imageName);
//
//                // Process image (e.g., convert to WebP, resize)
//                $this->processImage($image, $path);
//
//                return [
//                    'path' => $path,
//                    'name' => $imageName,
//                ];
//            });
//
//
//            // Update the request with new image data
//            $request->merge(['images' => $preparedImages]);
//        }
//
//        return $next($request);
//    }
//
//    private function processImage($image, $path)
//    {
//        ImageIntervention::make($image)->encode('webp', 90)->save($path);
//    }

}

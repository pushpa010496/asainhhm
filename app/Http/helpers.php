<?php

use App\Models\Category;
use App\Models\User;
use App\Models\Page;
use Intervention\Image\Facades\Image;


function getpage($pageurl)
{		
	if(!empty($pageurl)){			
		$page = \App\Models\Page::where('title',$pageurl)->where('active_flag',1)->first();
		//if(count($page)){
		if($page){
			$page = $page->id;
		}else{
			$page = 0;
		}
	}else{
		$page = 1;
	}
	return $page;
}
function getcat($categoryid)
{
		$category = \App\Models\Category::where('parent_id',$categoryid)->get();
		return $category;
}
function ordercatfirst($categoryid)
{
		$category = \App\Models\Category::where('parent_id',$categoryid)->orderBy('catorder', 'asc')->take(10)->get();
		return $category;
}
function ordercatsecond($categoryid)
{
		$category = \App\Models\Category::where('parent_id',$categoryid)->orderBy('catorder', 'desc')->take(9)->get();
		return $category;
}

function displayOptimizedImage($path, $quality = 75) {
       // Retrieve the image file path
    $imagePath = '/path/to/image.jpg';
    
    // Create a new image resource from the original image
    $image = imagecreatefromjpeg($imagePath);
    
    // Resize the image to a desired size
    $width = 800; // Desired width
    $height = 600; // Desired height
    $resizedImage = imagecreatetruecolor($width, $height);
    imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
    
    // Output the optimized image to the browser
    header('Content-Type: image/jpeg');
    imagejpeg($resizedImage, null, 80); // 80 is the image quality
}


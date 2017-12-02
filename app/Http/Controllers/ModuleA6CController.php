<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModuleA6CController extends Controller
{
    

    public function getPhoto(Request $request,$imagename)
	{

	 // $dstpath=realpath(base_path('/')).'\Public\Modules\A6C\\';
	  $dstpath='public/Modules/A6C';
       echo $dstpath.$imagename;
        if(file_exists($dstpath.$imagename))
		 // if(file_exists('Public\Modules\A6C\\'.$imagename.'.jpg'))
           return redirect('public/Modules/A6C/'.$imagename);
       else
          return redirect('Modules/A6C/'.'null.jpg');
     
    }

 public function postPhoto(Request $request,$imagename)
 {
     $photoFile = $request->file('photo');
     $dstpath=realpath(base_path('/')).'\Public\Modules\A6C';
     
	 
     if($request->hasFile("photo"))
     {
         
        		$photoFile->move('public/Modules/A6C', $imagename.'.jpg');
	
     }
     else
         echo '<br>no photo file';
 }



  
}

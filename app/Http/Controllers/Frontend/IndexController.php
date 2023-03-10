<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderImage;
use App\Models\ParentContent;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function sliderschange()
    {   
      
      //  $headingsubheading=ParentPage::with('childpages')->get();
      // $childpage = ChildPage::with('parentpage')->get();

    
      $sliders=SliderImage::orderBy('created_at','desc')->get();
      return view('frontend.index',compact('sliders') );
    }
    public function parentpagedetails($id)
    {
      $parentcontaindetails=ParentContent::find($id);
      return view('frontend.parentdetails',compact('parentcontaindetails'));
    }
    public function selectBlogdetailFromTable($id)
    {
            $BlogDetails=Blog::select('id','title','description','image',)
            ->where('id',$id)->get();

            
           return view('frontend.blogdetails',compact('BlogDetails'));
                
    }
    public function returncontent($id)
    {

      //$childcontentdetails=ChildContent::find($id);
      //dd($childcontentdetails);

      $childcontentdetails=\DB::table('child_contents')
            ->join('child_pages', 'child_pages.id', '=', 'child_contents.childpage_id')
            ->select('child_contents.*', 'child_title')
            ->where('child_contents.id','=',$id)
            ->get();
      
          //  dd($childcontentdetails);
      return view('frontend.destination',compact('childcontentdetails'));

    }

public function getsubmenu($parentpage_id)
{
$submenu=DB::table('child_pages')->where('parentpage_id',$parentpage_id)->get();
return response()->json($submenu);
}
}

<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreMessage;
use App\Models\Admin\About;
use App\Models\Admin\Category;
use App\Models\Admin\Cms;
use App\Models\Admin\Contactus;
use App\Models\Admin\File;
use App\Models\Admin\Message;
use App\Models\Admin\Meta;
use App\Models\Admin\MetaBlogs;
use App\Models\Admin\MetaProjects;
use App\Models\Admin\MetaServices;
use App\Models\Admin\Ourwork;
use App\Models\Admin\Partener;
use App\Models\Admin\Product;
use App\Models\Admin\Service;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    private $seo = [];

    public function index(){
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $projects = Ourwork::all();
        $blogs = Cms::all();
        $pareters = Partener::all();
        return view('front.index' , ['sliders' =>  $sliders,'about'=>$about , 'partners'=>$pareters ,'news'=> $blogs, 'projects'=> $projects,'services'=>$services ,'seo' => $this->seo]);
    }
    //
    public function about() {

        $about = About::first();
        $this->seo['meta_title'] = strip_tags($about->translate(app()->getLocale())->meta_title);
        $this->seo['meta_des']   = strip_tags($about->translate(app()->getLocale())->meta_des);
        $this->seo['title'] = strip_tags($about->translate(app()->getLocale())->meta_title);
        
        return view('front.about' , ['about'=>$about , 'seo' => $this->seo]);
        
    }
    public function contact() {
        $contact = Contactus::first();
        $this->seo['meta_title'] = strip_tags($contact->translate(app()->getLocale())->meta_title);
        $this->seo['meta_des']   = strip_tags($contact->translate(app()->getLocale())->meta_des);
        $this->seo['title']      = strip_tags($contact->translate(app()->getLocale())->meta_title);
        return view('front.contact' ,  ['contact'=>$contact , 'seo' => $this->seo]);
    }

    public function partners(){
        $pareters = Partener::all();
        $this->seo['meta_title'] = strip_tags('our partners - Astronic');
        $this->seo['meta_des']   = strip_tags('our partners - Astronic');
        $this->seo['title']      = strip_tags('our partners - Astronic');
        return view('front.partners' , ['partners'=>$pareters , 'seo' => $this->seo]);
    }

    public function blog(){
        $blogs = Cms::all();
        $meta = MetaBlogs::first();

        if($meta){
            $this->seo['meta_title'] =  strip_tags($meta->translate(app()->getLocale())->meta_title);
            $this->seo['meta_des']   =  strip_tags($meta->translate(app()->getLocale())->meta_des);
            $this->seo['title']      =  strip_tags($meta->translate(app()->getLocale())->meta_title);
            
        }else{

            $this->seo['meta_title'] =  strip_tags('All Articles - Astronic');
            $this->seo['meta_des']   =  strip_tags('All Articles - Latest News - Astronic');
            $this->seo['title']      =  strip_tags('All Articles - Astronic');
        }
        return view('front.blog' , [ 'blogs'=>$blogs  , 'seo' =>$this->seo]);



    }


    public function blog_details($slug){
        $blog = Cms::whereTranslation('slug' , $slug)->first();
        $this->seo['meta_title'] = strip_tags($blog->translate(app()->getLocale())->meta_title);
        $this->seo['meta_des']   = strip_tags($blog->translate(app()->getLocale())->meta_des); 
        $this->seo['title']      = strip_tags($blog->translate(app()->getLocale())->meta_title);
        $files = File::all();
 
        return view('front.blog_details' , ['blog'=>$blog , 'files'=>$files , 'seo'=>$this->seo]);
    }

    public function services(){

        $services = Service::all();
        $meta = MetaServices::first();
        if(isset($meta)){
            $this->seo['meta_title'] =  strip_tags($meta->translate(app()->getLocale())->meta_title);
            $this->seo['meta_des']   =  strip_tags($meta->translate(app()->getLocale())->meta_des);
            $this->seo['title']      =  strip_tags($meta->translate(app()->getLocale())->meta_title);
           
        }else{

            $this->seo['meta_title'] =  strip_tags('All Applications - Astronic');
            $this->seo['meta_des']   =  strip_tags('All Applications - Our Services - Astronic');
            $this->seo['title']      =  strip_tags('All Applications - Astronic');
        }
         return view('front.app' , ['services' => $services , 'seo' => $this->seo ]);

        
    }

    public function service_details($slug){
        $service = Service::whereTranslation('slug' , $slug)->first();
        $this->seo['meta_title'] = strip_tags($service->translate(app()->getLocale())->meta_title);
        $this->seo['meta_des'] = strip_tags( $service->translate(app()->getLocale())->meta_des); 
        $this->seo['title']    = strip_tags($service->translate(app()->getLocale())->meta_title);
        return view('front.app_details' , ['service'=>$service , 'seo' => $this->seo]);
    }



    public function projects(){
        $projects = Ourwork::all();
        $meta = MetaProjects::first();
        if(isset($meta)){
            $this->seo['meta_title'] =  strip_tags($meta->translate(app()->getLocale())->meta_title);
            $this->seo['meta_des']   =  strip_tags($meta->translate(app()->getLocale())->meta_des);
            $this->seo['title']      =  strip_tags($meta->translate(app()->getLocale())->meta_title);
            

        }else{

            $this->seo['meta_title'] =  strip_tags('Our Projects - Astronic');
            $this->seo['meta_des']   =  strip_tags('All Projects - Our Projects - Astronic');
            $this->seo['title']      =  strip_tags('Our Projects - Astronic');
        }

        return view('front.projcets' , ['seo'=> $this->seo , 'projects' => $projects]);

    }

    public function project_details($name){
        $project = Ourwork::whereTranslation('name' , $name)->first();
        $this->seo['meta_title'] = strip_tags($project->translate(app()->getLocale())->meta_title);
        $this->seo['meta_des']   = strip_tags($project->translate(app()->getLocale())->meta_des); 
        $this->seo['title']      = strip_tags($project->translate(app()->getLocale())->meta_title);
        return view('front.project_details' , ['project'=>$project , 'seo' => $this->seo]);
    }


    public function category_product(Request $request){
       
        $this->seo['meta_title'] =  strip_tags('Our Projects - Astronic');
        $this->seo['meta_des']   =  strip_tags('All Projects - Our Projects - Astronic');
        $this->seo['title']      =  strip_tags('Our Projects - Astronic');
        $categories = Category::where('parent_id' , null)->get();
        if($request->has('category') &&  $request->category != ''){
                $category = Category::whereTranslation('slug', $request->category)->with('children')->firstOrFail();
                $categoryIds = $this->getAllCategoryIds($category);
                $categoryIds[] = $category->id; 
                //need to ckeck if cat in json of partners
                $partners = Partener::whereJsonContains('categories', $category->id)->get();
                //$partners = Partener::where('category_id', $category->id)->get();
        }else{
            
            $categoryIds = Category::pluck('id')->toArray(); // Get all category IDs
            $partners = Partener::all();
        }


    


        


        if($request->partner_id){
            $products = Product::with('gallery')->whereIn('category_id', $categoryIds)->where('partner_id' , $request->partner_id)->get();
        }else{  
            $products = Product::with('gallery')->whereIn('category_id', $categoryIds)->get();
                 
        }
        if($request->has('search') && $request->search != ''){
            $products = $products->filter(function ($product) use ($request) {
                return stripos($product->translate(app()->getLocale())->name, $request->search) !== false;
            });
        }
        

        
        return view('front.product_category' , [  'products'=>$products, 'partners'=>$partners , 'seo' => $this->seo , 'categories' => $categories , 'category' => isset($category) ? $category : null, 'categoryIds' => isset($categoryIds) ? $categoryIds : [] ]);
    }


        protected function getAllCategoryIds($category)
    {
        $ids = [];
        
        foreach ($category->children as $child) {
            $ids[] = $child->id;
            $ids = array_merge($ids, $this->getAllCategoryIds($child));
        }
        
        return $ids;
    }




    public function request($product_id){

        $this->seo['meta_title'] = 'طلب خدمة - موقع الماسه';
        $this->seo['meta_des']   = 'طلب خدمة من موقع الماسه'; 
        $this->seo['title']      = 'طلب خدمة';
        $product = Product::findOrFail($product_id);
        return view('front.request' , ['seo'=>$this->seo , 'product'=>$product]);
    }





    public function message(StoreMessage $request) {
      
        try{
            DB::beginTransaction();        
            Message::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'subject'=>$request->subject,
                'message'=>$request->message,
                'email'=>$request->email,
                'type'=>($request->product_name) ? 'product' : 'general',
                'product_name'=>$request->product_name,
                'company'=>$request->company,
            ]);       
            DB::commit();
            Alert::success('تهانينا', 'تم ارسال رسالتك');
            return redirect()->back();

        }catch(\Exception $e){
            DB::rollBack();
            Alert::error('للأسف', 'حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى لاحقًا.');
            return redirect()->back();
        }

        
        
    }











    public function latest_blog(){
        $this->seo['meta_title'] = 'أخر المقالات في موقع الماسه';
        $this->seo['meta_des']   = ' أخر مقالات تم نشرها في موقع الماسه'; 
        $this->seo['title']      = 'احدث المقالات';
        $blogs = Cms::latest()->take(5)->get();
        return view('front.latest_blog' , ['blogs' => $blogs , 'seo'=>$this->seo]);
    }

    public function get_service_category(Request $request){

        $categoryId = $request->query('category');

        // Fetch services based on the category ID
        $services = Service::where('category_id', $categoryId)->get();
        return response()->json($services);
        
    }






}
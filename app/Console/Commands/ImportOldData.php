<?php

namespace App\Console\Commands;

use App\Models\Admin\Category;
use App\Models\Admin\Lang;
use App\Models\Admin\Partener;
use App\Models\Admin\Product;
use App\Models\Admin\SocialMedia;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ImportOldData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:old-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from old database to new structure';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {



        
        $oldRecords = DB::connection('old_mysql')->table('socialsettings')->first();
        $oldCategories = DB::connection('old_mysql')
            ->table('categories')
            ->whereNotNull('sort')
            ->orderBy('sort')
            ->get();
        $oldSubCategories = DB::connection('old_mysql')->table('subcategories')->get();
        $oldChildCategories = DB::connection('old_mysql')->table('childcategories')->get();
        $oldProducts = DB::connection('old_mysql')->table('products')->get();
        $oldPartners = DB::connection('old_mysql')->table('banners')->get();





        Lang::create([
            'code' => 'en',
            'name' => 'English',

        ]);


        SocialMedia::updateOrCreate(
             ['id' => 1],
            [
            'facebook' => $oldRecords->facebook,
            'twitter' => $oldRecords->twitter,
            'youtube' => $oldRecords->youtube,
            'instagram' => $oldRecords->instagram,
            'linkedin' => $oldRecords->linkedin,

        ]);

        foreach ($oldCategories as $old_cat) {
          
            $cat = Category::create([  
                'id'=> $old_cat->id,
                'photo'=> $old_cat->photo,
            ]);



            foreach (Lang::all() as $lang) {
                $cat->{'name:'.$lang->code}  = $old_cat->name;
                $cat->{'des:'.$lang->code}  = $old_cat->details;
                $cat->{'small_des:'.$lang->code}  = null;
                $cat->{'slug:'.$lang->code}  = $old_cat->slug;
                $cat->{'meta_title:'.$lang->code}  = $old_cat->title;
                $cat->{'meta_des:'.$lang->code}  = $old_cat->meta_description;
            }

            $cat->save();



        }


        // start sub category 

        foreach ($oldSubCategories as $old_sub_cat) {

           $subCat = Category::create([
                 'id'=> $old_sub_cat->id,
                'photo'=> $old_sub_cat->photo,
                'parent_id' => $old_sub_cat->category_id,
                'type' => '1', 
            ]);

            foreach (Lang::all() as $lang) {
                $subCat->{'name:'.$lang->code}  = $old_sub_cat->name;
                $subCat->{'des:'.$lang->code}  = $old_sub_cat->details;
                $subCat->{'small_des:'.$lang->code}  = null;
                $subCat->{'slug:'.$lang->code}  = $old_sub_cat->slug;
                $subCat->{'meta_title:'.$lang->code}  = $old_sub_cat->title;
                $subCat->{'meta_des:'.$lang->code}  = $old_sub_cat->meta_description;
            }

            $subCat->save();
            
        }

        // start child category
        foreach ($oldChildCategories as $old_child_cat) {

           $childCat = Category::create([
               'id'=> $old_child_cat->id,
                'photo'=> $old_child_cat->photo,
                'parent_id' => $old_child_cat->subcategory_id,
                'type' => '1', 
            ]);

            foreach (Lang::all() as $lang) {
                $childCat->{'name:'.$lang->code}  = $old_child_cat->name;
                $childCat->{'des:'.$lang->code}  = $old_child_cat->details;
                $childCat->{'small_des:'.$lang->code}  = null;
                $childCat->{'slug:'.$lang->code}  = $old_child_cat->slug;
                $childCat->{'meta_title:'.$lang->code}  = $old_child_cat->title;
                $childCat->{'meta_des:'.$lang->code}  = $old_child_cat->meta_description;
            }

            $childCat->save();
            
        }


        // start products
        foreach ($oldProducts as $old_product) {
            $product = Product::create([
                'image'=> $old_product->photo,
                'file'=> $old_product->file,
                
            ]);


           foreach (Lang::all() as $lang) {
                $product->{'name:'.$lang->code}  = $old_product->name;
                $product->{'des:'.$lang->code}  = $old_product->details;
                $product->{'slug:'.$lang->code}  = $old_product->slug;
                $product->{'meta_title:'.$lang->code}  = $old_product->title;
                $product->{'meta_des:'.$lang->code}  = $old_product->meta_description;
            }

            $product->save();

            
            
        }

        // start partners
        foreach ($oldPartners as $old_part) {
            $part = Partener::create([
                'icon'=> $old_part->photo,

            ]);

            foreach (Lang::all() as $lang) {
                $part->{'name:'.$lang->code}  = $old_part->title;
                $part->{'address:'.$lang->code}  = $old_part->subtitle;


            }
            $part->save();
            
        }

        

        return Command::SUCCESS;

        
    }
}
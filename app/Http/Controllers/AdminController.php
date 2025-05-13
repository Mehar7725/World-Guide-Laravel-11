<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    
    // Authentication Check Function Start====

    public function AdmincheckAuth() {

        if (!Auth::user()) {
            return redirect()->to('/admin-login');
         }  

         if (Auth::user()->role != 1) {
            return redirect()->to('/');
        } 
        
        
    }

   public function AdminDashboard() {

   
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }
     
    $user = User::where(['role'=>0])->latest()->get();
    $adds = Adds::paginate(200);
 
     return view('Admin.index', compact('user','adds'));
   }
 
   public function CountryManagement() {
  
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }
    $country = Country::paginate(20);
     return view('Admin.country_management', compact('country'));
   }
 
   public function CountryManagementAdd() {

     
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }

     return view('Admin.country_management_add');
   }



//    Create New Country Details Function Start =======
   public function AddNewCountry(Request $request)  {
    
            $country = new Country();


            $country->country_name  = $request->country_name ;
            $country->country_code  = $request->country_code ;
            $country->country_video  = $request->country_video ;
            $country->country_map  = $request->country_map ;
            $country->best_time  = $request->best_time ;
            $country->transportation  = $request->transportation ;
            $country->weather  = $request->weather ;
            $country->information  = $request->information ;
            $country->language  = $request->language ;
            $country->electric  = $request->electric ;
            // $country->electric_image  = $request->electric_image ;
            $country->currency  = $request->currency ;
            // $country->currency_image  = $request->currency_image ;
            $country->facts_url  = $request->facts_url ;
            $country->history_url  = $request->history_url ;
            $country->dining_url  = $request->dining_url ;
            $country->visa_info_url  = $request->visa_info_url ;
            $country->visa_light_url  = $request->visa_light_url ;
            $country->tours_url  = $request->tours_url ;
            $country->constitution_url  = $request->constitution_url ;
            $country->emergency_url  = $request->emergency_url ;
            $country->embassies_url  = $request->embassies_url ;
            $country->news_url  = $request->news_url ;


              // Electric Image Upload ====
              if ($request->hasfile('country_image')) {
                $country_image = $request->country_image;
                $country_imageName =  $country_image->getClientOriginalName();
                $country_image->move(public_path().'/assets/country_img', $country_imageName);
                $country_imageData = $country_imageName;

                $country->country_image = $country_imageData ; 
            }
 
              // Electric Image Upload ====
              if ($request->hasfile('electric_image')) {
                $electric_image = $request->electric_image;
                $electric_imageName =  $electric_image->getClientOriginalName();
                $electric_image->move(public_path().'/assets/country_img/electric', $electric_imageName);
                $electric_imageData = $electric_imageName;

                $country->electric_image = $electric_imageData ; 
            }

               // Currency Image Upload ====
               if ($request->hasfile('currency_image')) {
                $currency_image = $request->currency_image;
                $currency_imageName =  $currency_image->getClientOriginalName();
                $currency_image->move(public_path().'/assets/country_img/currency', $currency_imageName);
                $currency_imageData = $currency_imageName;

                $country->currency_image = $currency_imageData ; 
            }


            $country->save();

            if ($country) {
                return redirect()->to('/country-management')->with('success','New Country Details Added Successfully!');
            } else {
                return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
            }
            





   }
//    Create New Country Details Function END =======

//    Delete Country Details Function Start =======
    public function DeleteCountry($id)  {

        $country = Country::find($id);
        $country->delete();

        if ($country) {
            return redirect()->back()->with('info',' Country Details Deleted Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
        
    }
//    Delete Country Details Function END =======

//    EDIT Country Details Function Start =======
    public function EditCountry($id)  {

         
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }


        $country = Country::find($id);
   
       
          return view('Admin.country_management_edit', compact('country'));
        
    }
//    EDIT Country Details Function END =======


//    Update New Country Details Function Start =======
public function UpdateNewCountry(Request $request)  {
    
    $country = Country::find($request->id);


    $country->country_name  = $request->country_name ;
    $country->country_code  = $request->country_code ;
    $country->country_video  = $request->country_video ;
    $country->country_map  = $request->country_map ;
    $country->best_time  = $request->best_time ;
    $country->transportation  = $request->transportation ;
    $country->weather  = $request->weather ;
    $country->information  = $request->information ;
    $country->language  = $request->language ;
    $country->electric  = $request->electric ; 
    $country->currency  = $request->currency ; 
    $country->facts_url  = $request->facts_url ;
    $country->history_url  = $request->history_url ;
    $country->dining_url  = $request->dining_url ;
    $country->visa_info_url  = $request->visa_info_url ;
    $country->visa_light_url  = $request->visa_light_url ;
    $country->tours_url  = $request->tours_url ;
    $country->constitution_url  = $request->constitution_url ;
    $country->emergency_url  = $request->emergency_url ;
    $country->embassies_url  = $request->embassies_url ;
    $country->news_url  = $request->news_url ;
    $country->status  = $request->status ;


      // Electric Image Upload ====
      if ($request->hasfile('country_image')) {
        $country_image = $request->country_image;
        $country_imageName =  $country_image->getClientOriginalName();
        $country_image->move(public_path().'/assets/country_img', $country_imageName);
        $country_imageData = $country_imageName;

        $country->country_image = $country_imageData ; 
    }

      // Electric Image Upload ====
      if ($request->hasfile('electric_image')) {
        $electric_image = $request->electric_image;
        $electric_imageName =  $electric_image->getClientOriginalName();
        $electric_image->move(public_path().'/assets/country_img/electric', $electric_imageName);
        $electric_imageData = $electric_imageName;

        $country->electric_image = $electric_imageData ; 
    }

       // Currency Image Upload ====
       if ($request->hasfile('currency_image')) {
        $currency_image = $request->currency_image;
        $currency_imageName =  $currency_image->getClientOriginalName();
        $currency_image->move(public_path().'/assets/country_img/currency', $currency_imageName);
        $currency_imageData = $currency_imageName;

        $country->currency_image = $currency_imageData ; 
    }


    $country->update();

    if ($country) {
        return redirect()->to('/country-management')->with('success',' Country Details Updated Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    





}
//    Update New Country Details Function END =======




// Cit Functions Start ==========================
// Cit Functions Start ==========================

public function CityManagement() {

      
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }
    $city = City::paginate(20);
     return view('Admin.city_management', compact('city'));
   }


    
   public function CityManagementAdd() {

      
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }
    
    $country = Country::where(['status'=>1])->get();
     return view('Admin.city_management_add', compact('country'));
   }



   
//    Create New City Details Function Start =======
public function AddNewCity(Request $request)  {
    
    $city = new City();


    $city->city_name  = $request->city_name ;
    $city->country  = $request->country ;
    $city->description  = $request->description ;
    $city->city_video  = $request->city_video ;
    $city->city_map  = $request->city_map ;
    $city->best_time  = $request->best_time ;
    $city->transportation  = $request->transportation ;
    $city->weather  = $request->weather ;
    $city->information  = $request->information ;
    $city->business_url  = $request->business_url ;
    $city->taxi_url  = $request->taxi_url ;
    $city->law_url  = $request->law_url ;
    $city->lawyer_url  = $request->lawyer_url ;
    $city->event_url  = $request->event_url ;
    $city->tours_url  = $request->tours_url ;
    $city->car_url  = $request->car_url ;
    $city->estate_url  = $request->estate_url ;
    $city->hotel_url  = $request->hotel_url ;
    $city->restaurant_url  = $request->restaurant_url ;
    $city->coffee_url  = $request->coffee_url ;
    $city->bars_url  = $request->bars_url ;


      // Electric Image Upload ====
      if ($request->hasfile('city_image')) {
        $city_image = $request->city_image;
        $city_imageName =  $city_image->getClientOriginalName();
        $city_image->move(public_path().'/assets/city_img', $city_imageName);
        $city_imageData = $city_imageName;

        $city->city_image = $city_imageData ; 
    }

   
 
    $city->save();

    if ($city) {
        return redirect()->to('/city-management')->with('success','New City Details Added Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    





}
//    Create New City Details Function END =======


//    Delete Country Details Function Start =======
public function DeleteCity($id)  {

    $city = City::find($id);
    $city->delete();

    if ($city) {
        return redirect()->back()->with('info',' City Details Deleted Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    
}
//    Delete Country Details Function END =======

//    EDIT Country Details Function Start =======
public function EditCity($id)  {

      
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }


    $city = City::find($id);
    $country = Country::where(['status'=>1])->get();
   
      return view('Admin.city_management_edit', compact('city','country'));
    
}
//    EDIT Country Details Function END =======


//    Update New City Details Function Start =======
public function UpdateNewCity(Request $request)  {
    
    $city = City::find($request->id);


    $city->city_name  = $request->city_name ;
    $city->country  = $request->country ;
    $city->description  = $request->description ;
    $city->city_video  = $request->city_video ;
    $city->city_map  = $request->city_map ;
    $city->best_time  = $request->best_time ;
    $city->transportation  = $request->transportation ;
    $city->weather  = $request->weather ;
    $city->information  = $request->information ;
    $city->business_url  = $request->business_url ;
    $city->taxi_url  = $request->taxi_url ;
    $city->law_url  = $request->law_url ;
    $city->lawyer_url  = $request->lawyer_url ;
    $city->event_url  = $request->event_url ;
    $city->tours_url  = $request->tours_url ;
    $city->car_url  = $request->car_url ;
    $city->estate_url  = $request->estate_url ;
    $city->hotel_url  = $request->hotel_url ;
    $city->restaurant_url  = $request->restaurant_url ;
    $city->coffee_url  = $request->coffee_url ;
    $city->bars_url  = $request->bars_url ;
    $city->status  = $request->status ;


      // Electric Image Upload ====
      if ($request->hasfile('city_image')) {
        $city_image = $request->city_image;
        $city_imageName =  $city_image->getClientOriginalName();
        $city_image->move(public_path().'/assets/city_img', $city_imageName);
        $city_imageData = $city_imageName;

        $city->city_image = $city_imageData ; 
    }

   

    $city->update();

    if ($city) {
        return redirect()->to('/city-management')->with('success',' City Details Updated Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    





}
//    Update New City Details Function END =======

// Cit Functions END ==========================
// Cit Functions END ==========================



// Category Functions Start ==========================
// Category Functions Start ==========================
public function Category()  {
  
    if ($redirect = $this->AdmincheckAuth()) {
        return $redirect;  
    }

    $category = DB::table('categories')
    ->leftJoin('countries', 'categories.country', '=', 'countries.id')
    ->leftJoin('cities', 'categories.city', '=', 'cities.id')
    ->select(
        'categories.*', 
        'countries.country_name as country_name', 
        'cities.city_name as city_name'
    )
    ->get();
    $country = Country::where(['status'=>1])->get();
  
    
    return view('Admin.category_management', compact('country','category'));
}


public function GetCities(Request $request)  {

    $cities = City::where(['country'=>$request->country,'status'=>1])->get();
    
    return response()->json($cities);
}

//  Add New Category
public function AddNewCategory(Request $request)  {

    $category = new Category();

    $category->name = $request->category_name;
    $category->slug = $request->slug;
    $category->country = $request->country;
    $category->city = $request->city;
    $category->status = $request->status;


        // Electric Image Upload ====
        if ($request->hasfile('category_image')) {
            $category_image = $request->category_image;
            $category_imageName =  $category_image->getClientOriginalName();
            $category_image->move(public_path().'/assets/category_img', $category_imageName);
            $category_imageData = $category_imageName;

            $category->image = $category_imageData ; 
        }
     
        $category->save();

        if ($category) {
            return redirect()->back()->with('success','New Category Details Added Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    
}

//  Delete Category
public function  DeleteCategory($id)  {

    $category = Category::find($id)->delete();


    if ($category) {
        return redirect()->back()->with('info','Category Deleted Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }

    
}


// Update Category


public function UpdateCategory(Request $request)  {

    $category = Category::find($request->category_id);

    $category->name = $request->category_name;
    $category->slug = $request->slug;
    $category->country = $request->country;
    $category->city = $request->city;
    $category->status = $request->status;


        // Electric Image Upload ====
        if ($request->hasfile('category_image')) {
            $category_image = $request->category_image;
            $category_imageName =  $category_image->getClientOriginalName();
            $category_image->move(public_path().'/assets/category_img', $category_imageName);
            $category_imageData = $category_imageName;

            $category->image = $category_imageData ; 
        }
     
        $category->update(); 

        if ($category) {
            return redirect()->back()->with('success','Category Details Updated Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    
}

// Category Functions END ==========================
// Category Functions END ==========================


// User Acction Functions Start ==========================
// User Acction Functions Start ==========================
public function UserAdminAction($id,$action)   {

    $user = User::find($id);

    if ($action == 'block') {
        $user->status = 1 ;
        $user->update();
        if ($user) {
            return redirect()->back()->with('success','User Blocked Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    } elseif ($action == 'active') {
        $user->status = 0;
        $user->update();
        if ($user) {
            return redirect()->back()->with('success','User Activated Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    }elseif($action == 'delete'){
        $user->delete();
    if ($user) {
        return redirect()->back()->with('success','User Deleted Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    
}
    
}
// User Acction Functions END ==========================
// User Acction Functions END ==========================


// Add Acction Functions Start ==========================
// Add Acction Functions Start ==========================
public function AddAdminAction($id,$action)   {

    $add = Adds::find($id);

    if ($action == 'edit') {
        $country = Country::where(['status'=>1])->get();
        $city = City::where(['country'=>$add->country,'status'=>1])->get();
        $category = Category::where(['country'=>$add->country,'city'=>$add->city,'status'=>1])->get();
        $selected_country = Country::find($add->country);
        $selected_city = City::find($add->city);
        $selected_category = Category::find($add->category);
        
        return view('Admin.edit-listing-add', compact('add','country','city','category','selected_country','selected_city','selected_category'));
    
    } elseif ($action == 'active') {
        $add->status = 1;
        $add->update();
        if ($add) {
            return redirect()->back()->with('success','Add Activated Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    } elseif ($action == 'disable') {
        $add->status = 2 ;
        $add->update();
        if ($add) {
            return redirect()->back()->with('success','Add Disabled Successfully!');
        } else {
            return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
        }
    } elseif($action == 'delete'){
        $add->delete();
    if ($add) {
        return redirect()->back()->with('success','Add Deleted Successfully!');
    } else {
        return redirect()->back()->with('error','Something Went Rong,Tryagain Later!');
    }
    
}
    
}




    // Update Addd Function Start ----------
    public function UpdateAdd(Request $request) {
        $add = Adds::find($request->add_id);
     
       
        $add->title = $request->title;
        $add->address = $request->address;
        $add->country = $request->country;
        $add->city = $request->city;
        $add->category = $request->category;
        $add->website = $request->website;
        $add->phone = $request->phone;
        $add->whatsapp = $request->whatsapp;
        $add->price_details = $request->price_details;
        $add->price_from = $request->price_from;
        $add->price_to = $request->price_to;
        $add->availability = $request->availability;
        $add->all_links = $request->all_links;
        $add->all_faq = $request->all_faq;
        $add->description = $request->description;
        $add->video = $request->video;
       
    
        // Ensure the upload directory exists
        $directory = public_path('/assets/adds/data_' . $add->user_id);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    
        // Main File Upload (Fixed)
        if ($request->hasFile('image')) {
            $main_file = $request->file('image');
            $main_fileName = time() . '_' . $main_file->getClientOriginalName(); // Avoid duplicate names
            $main_file->move($directory, $main_fileName);
            $add->image = $main_fileName;
        }
    
        // Featured Image Upload
        if ($request->hasFile('featured_image')) {
            $featured_images = $request->file('featured_image');
            $imageNames = [];
        
            foreach ($featured_images as $image) {
                $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
                $image->move($directory, $imageName);
                $imageNames[] = $imageName;
            }

             // Get already selected image names (if any)
                    $selectedNames = $request->input('selected_image_names');
                    $selectedNamesArray = [];

                    if (!empty($selectedNames)) {
                        $selectedNamesArray = explode('|*|', $selectedNames);
                    }

                    // Combine selected and newly uploaded image names
                    $allImages = array_merge($selectedNamesArray, $imageNames);
                     // Save combined result
                   $add->featured_image = implode('|*|', $allImages);
        }else {
            // Handle case where no new files, but still retain old selected images
            $selectedNames = $request->input('selected_image_names');
            if (!empty($selectedNames)) {
                $add->featured_image = $selectedNames;
            }  
        }
    
        // Logo Upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move($directory, $logoName);
            $add->logo = $logoName;
        }
    
        $add->update();
    
        if ($add) {
           
            return redirect('/admin-dashboard')->with(['success' => 'Add Updated Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Something went wrong, try again later.']);
        }
    }
    
    // Update Addd Function END ----------



// Add Acction Functions END ==========================
// Add Acction Functions END ==========================


}

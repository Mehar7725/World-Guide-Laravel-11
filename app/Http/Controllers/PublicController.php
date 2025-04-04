<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use App\Models\AddsPayment;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function Index()   {

        $country = Country::where('status','=',1)->get();
        return view('Public.index', compact('country'));
    }

    public function Blog()   {
 
        return view('Public.blog');
    }

    public function OurCompanies()   {
 
        return view('Public.our-companies');
    }

    public function AboutUs()   {
 
        return view('Public.about-us');
    }

    public function Policy()   {
 
        return view('Public.policy');
    }

    public function ContactUs()   {
 
        return view('Public.contact-us');
    }

    public function AddListing()   {
 
        return view('Public.add-listing');
    }

    public function SubmitListing(Request $request)   {
 
        if (!Auth::user()) {
           return redirect('/');
        }

          // Retrieve query parameters
          $pricing = $request->query('pricing');
          $time = $request->query('time');
        $country = Country::where(['status'=>1])->get();
          
        return view('Public.submit-listing', compact('pricing','time','country'));
    }


    public function CountryShow($name, $id, $code) {
        
        $country = Country::where('id', $id)->firstOrFail();
        $city = City::where(['country'=>$id, 'status'=>1])->get();
        return view('Public.country', compact('country','city','name','code'));
    } 

    public function CityShow($name, $id, $code,$city_id,$city) {
        
        $country = Country::where('id', $id)->firstOrFail();
        $city = City::where('id', $city_id)->firstOrFail();
        $category = Category::where(['country'=>$id,'city'=>$city_id,'status'=>1])->get();
        $adds = Adds::select('adds.*', 'countries.country_name as country_name', 'cities.city_name as city_name')
    ->join('countries', 'countries.id', '=', 'adds.country')
    ->join('cities', 'cities.id', '=', 'adds.city')
    ->where(['adds.country' => $id, 'adds.city' => $city_id, 'adds.status' => 1])
    ->get();

        return view('Public.city', compact('country','city','name','code','category','adds'));
    }



    // Functions For User Adds Create Start ============

    public function GetCities(Request $request)  {

        $cities = City::where(['country'=>$request->country,'status'=>1])->get();

        $response['cities'] = $cities ;

        return response()->json($response);
        
    }

    public function GetCategories(Request $request)  {

        $categories = Category::where(['country'=>$request->country,'city'=>$request->city,'status'=>1])->get();

        $response['categories'] = $categories ;

        return response()->json($response);
        
    }
 
    // Functions For User Adds Create Start -------Main Function  ============
    function CreateUserAdd(Request $request)  {
        
    }
    // Functions For User Adds Create END ============


    
    // Payment Add Creation Function Start ----------
    public function AddPayment(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
         
        try {
              // Remove dollar sign and convert to float
        $price = floatval(str_replace('$', '', $request->price));

        // Ensure the price is valid
        if ($price <= 0) {
            return response()->json(['error' => 'Invalid price amount.'], 400);
        }

        // Convert to cents (multiply by 100)
        $amount = intval(round($price * 100));
    
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => round($price * 100), // Convert dollars to cents
                'currency' => 'usd',
                'capture_method' => 'automatic',
                'automatic_payment_methods' => ['enabled' => true],
            ]);
    
            if ($paymentIntent) {

                AddsPayment::create([
                    'user_id' => Auth::user()->id,
                    'payment_id' => $paymentIntent->id,
                    'name' => $request->holder_name,
                    'number' => $request->card_number,
                    'cvv' => $request->cvv,
                    'date' => $request->date,
                    'amount' => $price, 
                ]);
                return response()->json(['success' => 'Payment Submitted!', 'payment_id' => $paymentIntent->id]);
            } else {
                return response()->json(['error' => 'Payment Not Submitted!'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Payment failed', 'message' => $e->getMessage()], 500);
        }
    }
    
    
    // Payment Add Creation Function END ----------


    // Upload Addd Function Start ----------
    public function UploadAdd(Request $request) {
        $add = new Adds();
    
        $add->user_id = Auth::user()->id;
        $add->payment_id = $request->payment_id;
        $add->price = $request->price;
        $add->time = $request->time;
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
        $add->status = 0;
    
        // Ensure the upload directory exists
        $directory = public_path('/assets/adds/data_' . Auth::user()->id);
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
            $featured_image = $request->file('featured_image');
            $featured_imageName = time() . '_' . $featured_image->getClientOriginalName();
            $featured_image->move($directory, $featured_imageName);
            $add->featured_image = $featured_imageName;
        }
    
        // Logo Upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move($directory, $logoName);
            $add->logo = $logoName;
        }
    
        
        $add->save();
    
        if ($add) {
            $payment = AddsPayment::where(['payment_id' => $request->payment_id])->first();
            if ($payment) {
                $payment->status = 1;
                $payment->update();
            }
            return redirect('/')->with(['success' => 'Add Published Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Something went wrong, try again later.']);
        }
    }
    
    // Upload Addd Function END ----------








}

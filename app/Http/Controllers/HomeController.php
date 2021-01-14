<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function index(){
        $setting=Setting::first();
        $slider=News::select('id','title','image','slug','description','category_id')->limit(4)->get();
        $daily=News::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $last=News::select('id','title','image','slug')->limit(6)->orderByDesc('id')->get();
        $picked=News::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'slider'=>$slider,
            'page'=>'home'

        ];
        return view('home.index',$data);
    }
    public function news($id,$slug){
        $setting=Setting::first();
        $data=News::find($id);
        $datalist=Image::where('news_id',$id)->get();
        return view('home.news_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist]);

    }
    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting,'page'=>'home']);
    }
    public function categorynewss($id,$slug){
        $setting=Setting::first();
        $datalist=News::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_newss',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);

    }
    public function getnews(Request $request)
    {
        $search=$request->input('search');
        $count=News::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=News::where('title','like','%'.$search.'%')->first();
            return redirect()->route('news',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('newslist',['search'=>$search]);
        }


    }
    public function newslist($search){
        $setting=Setting::first();
        $datalist=News::where('title','like','%'.$search.'%')->get();

        return view('home.search_newss',['search'=>$search,'datalist'=>$datalist,'setting'=>$setting]);

    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting,'page'=>'home']);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting,'page'=>'home']);
    }
    public function search_page(){
        $setting=Setting::first();
        return view('home.search_page',['setting'=>$setting,'page'=>'home']);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız kaydedilmiştir');
    }

    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(){
       
    }

    public function show(Post $post){
        // return $blog;
        return view('frontend.pages.single-blog', compact('post'));
    }

    public function create(){
        $categories = Category::all();
        $designations = ["Content Writer", "Engineer", "Media", "Illustrator", "Editor", "Cinematographer"];
        return view('backend.posts.create', compact('categories', 'designations'));
    }

    public function store(Request $request){
        $input = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'featuredImage' => 'required',
            'highlight' => 'required',
            'designation' => 'required',
            'category' => 'required'
        ]);

        $body = $this->getImages($request->body);
        // dd($body);
        DB::beginTransaction();
        try{
               
            if ($request->hasFile('featuredImage')){
                $featuredImage = $request->file('featuredImage');
                $featuredImage = $this->storeImage($featuredImage, 'gikiddie/blogs/featuredImages', 1212, 418);
            }

            $input = array_merge(
                $input, 
                [
                    'body' => $body, 
                    'featuredImage' => $featuredImage ?? '/backend/images/dummy/banner_dummy.PNG', 
                    'user_id' => auth()->user()->id
                ]);

                // dd($input);
            $post = new Post($input);
            $post->save();
            $post->categories()->sync($request->category);

            DB::commit();
            return redirect()->back();
        }catch(\Throwable $err){
            DB::rollBack();
            return redirect()->back()->with('post-creation-failed', "Post creation failed. {$err->getMessage()}");;
        }

        
        return redirect()->back();

    }

    public function edit(Post $post){
        $categories = Category::all();
        $designations = ["Content Writer", "Engineer", "Media", "Illustrator", "Editor", "Cinematographer"];
        return view('backend.posts.edit', compact('post', 'categories', 'designations'));
    }

    
    public function update(Request $request, Post $post){
        $input = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'featuredImage' => 'nullable|sometimes|image',
            'highlight' => 'required',
            'designation' => 'required',
            'category' => 'required'
        ]);
        // dd($request->body);

        $body = $this->getImages($request->body);
        // dd($body);
        DB::beginTransaction();
        try{
               
            if ($request->hasFile('featuredImage')){
                $featuredImage = $request->file('featuredImage');
                $featuredImage = $this->storeImage($featuredImage, 'gikiddie/blogs/featuredImages', 1212, 418);
            }else{
                $featuredImage = $post->featuredImage;
            }

            $input = array_merge(
                $input, 
                [
                    'body' => $body, 
                    'featuredImage' => $featuredImage ?? '/backend/images/dummy/banner_dummy.PNG', 
                ]);

                // dd($input);
            $post->update($input);
            $post->categories()->sync($request->category);

            DB::commit();
            return redirect()->back();
        }catch(\Throwable $err){
            DB::rollBack();
            return redirect()->back()->with('post-creation-failed', "Post creation failed. {$err->getMessage()}");;
        }

        
        return redirect()->back();

    }

    public function getImages($message){
    
        $dom = new \DOMDocument();
        // dd($dom);
        $y = $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        // dd($y);
        $images = $dom->getElementsByTagName('img');
        // dd($images);
       
        foreach($images as $k => $img){
           
            // dd([$k, $img]);
            $data = $img->getAttribute('src');
            // dd($data);
            // dd(str_contains($data, 'data:image'));

            if(str_contains($data, 'data:image')){
                list($type, $data) = explode(';', $data);
                // dd($type, $data);
                list($type, $data) = explode(',', $data);
                // dd($type);
                $data = base64_decode($data);
                // dd($data);
    
                $image_name= "/uploads/" . time().$k.'.png';
                $path = public_path() . $image_name;
    
                file_put_contents($path, $data);
                
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }

        }

        $message = $dom->saveHTML();

        return $message;
    }

    public function storeImage($file, $destination, $x, $y){ 

        //Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();

        //Get file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //Remove unwanted characters
        $filename = preg_replace("/[^A-Za-z0-9 ]/", ' ', $filename);
        $filename = preg_replace('/\s+/', '-', $filename);
   
        //Create unique file name
        $fileNameToStore = time().'-'.$filename;

        //Store image on cloudinary
        $result = cloudinary()->upload($file->getRealPath(), [
            'folder' => $destination,
            'transformation' => [
            'width' => $x,
            'height' => $y
            ]
        ])->getSecurePath();

        if($result){
            return $result;
        }else{
            return 'an error occurred';
        }
    }

}

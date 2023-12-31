<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Post;
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $api = Http::get('https://www.gramedia.com/api/algolia/search/product/?page=1&per_page=20&category=buku&based_on=best-seller');
        $book = [];
        $api = $api->json();
        $api = collect($api)->take(20);
        // dd($api->json());
        foreach($api as $a){
            if(!Post::where('title', $a['name'])->exists()){
                Post::create([
                    'title' => $a['name'],
                    'author' => $a['authors'][0]['title'],
                    'category_id' => 5,
                    'image' => $a['thumbnail'],
                    'price' => $a['basePrice']
                ]);
            } else {
                $book[] = Post::where('title', $a['name'])->first();
            }
            // $book[] = [
            //     'name' => $a['name'],
            //  $bookResources => $a['authors'][0]['title'],
            //     'basePrice' => $a['basePrice'],
            //     'thumbnail' => $a['thumbnail']
            // ];
        }

        // dd($book);

        // $api = $api['name'];
        return redirect('/dashboard/posts');

        // $posts = Post::all();
        

        // $bookResources = BookResource::collection($posts);

        // return $this->sendResponse($bookResources, "Successfully Get Books");
    }

    public function search(Request $request){

        if($request->ajax()){
    
            $data=Post::where('title','like','%'.$request->search.'%')
            ->orwhere('author','like','%'.$request->search.'%')
            ->get();
    
    
            $output='';
            $counter = 1;
        if(count($data)>0){
                foreach ($data as $row) {
                    $output .= '<tr>' .
                                '<td>' . $counter++ . '</td>' .
                                '<td>' . $row->title . '</td>' .
                                '<td>' . $row->author . '</td>' .
                                '</tr>';
                    }
            } else {
                $output .= '<tr>' .
                            '<td colspan="7">No results found</td>' .
                            '</tr>';
            }
    
            return $output;
        }
    
      }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

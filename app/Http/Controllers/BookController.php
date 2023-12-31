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
        if($request->search != '') {
            $response = Http::get('https://www.gramedia.com/api/algolia/search/product/?page=1&per_page=20&category=buku&based_on=best-seller'. $request->search .'');
             $data = $response->json();
            //  dd($data['results'][0]['generic_name'][0]['active_ingredients'][0]['strength']);
            // dd(array_keys($data)[0] == 'error');
            if(array_keys($data)[0] != 'error' ) {
                return view('home', [
                    'title' => $data['results'][0]['title'],
                    'author' => $data['results'][0]['author'][0]['strength']]);
            }else {
                return view('dashboard.obat.index', [
                    'title' => $data['error']['message'],
                    'author' => $data['error']['message']]);
            }
        }else {
            return view('home', ['title' => []]);
        }

        $posts = Post::all();
        // $posts = Http::all('https://www.gramedia.com/api/algolia/search/product/?page=1&per_page=20&category=buku&based_on=best-seller');

        $bookResources = BookResource::collection($posts);

        return $this->sendResponse($bookResources, "Successfully Get Books");
    }

    // public function search(Request $request){

    //     if($request->ajax()){
    
    //         $data=Post::where('title','like','%'.$request->search.'%')
    //         ->orwhere('author','like','%'.$request->search.'%')
    //         ->get();
    
    
    //         $output='';
    //         $counter = 1;
    //     if(count($data)>0){
    //             foreach ($data as $row) {
    //                 $output .= '<tr>' .
    //                             '<td>' . $counter++ . '</td>' .
    //                             '<td>' . $row->title . '</td>' .
    //                             '<td>' . $row->author . '</td>' .
    //                             '<td>' . $row->genre . '</td>' .
    //                             '<td>' . $row->category_id . '</td>' .
    //                             '<td>' . $row->price . '</td>' .
    //                             '<td>' . $row->description . '</td>' .
    //                             '</tr>';
    //                 }
    //         } else {
    //             $output .= '<tr>' .
    //                         '<td colspan="7">No results found</td>' .
    //                         '</tr>';
    //         }
    
    //         return $output;
    //     }
    
    //   }

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

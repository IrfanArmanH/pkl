<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
//buat id unik
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    public function search(Request $request)
{
    $search = $request->input('search');
    $results = Post::where('nama', 'like', '%' . $search . '%')->get();

    return view('posts.index', ['posts' => $results]);
}
    public function create(): View
    {
        return view('posts.form_pengaduan');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
            'nik' => 'required|min:16',
            'email' => 'required',
            'pekerjaan' => 'required',
            'masalah' => 'required',
            'sketsa_lokasi' => 'required|file|mimes:jpeg,jpg,png,pdf|max:2048',
            'dokumen_kelurahan' => 'required|file|mimes:jpeg,jpg,png,pdf|max:2048',
            'longitude' => 'required',
            'latitude' => 'required',

        ]);


        //upload image
        $image1 = $request->file('sketsa_lokasi');
        $image1->storeAs('public/posts', $image1->hashName());
        $image2 = $request->file('dokumen_kelurahan');
        $image2->storeAs('public/posts', $image2->hashName());


        $latestRecord = Post::latest()->first();
        $count = $latestRecord ? intval(substr($latestRecord->custom_id, -3)) + 1 : 1;

        //create post
        $customId = "PJU-" . date('ymd') . sprintf('%03d', $count);

        // Simpan data ke dalam database
        $post = new Post;
        $post->custom_id = $customId;
        $post->nama = $request->nama;
        $post->nik = $request->nik;
        $post->email = $request->email;
        $post->pekerjaan = $request->pekerjaan;
        $post->masalah = $request->masalah;
        $post->sketsa_lokasi = "";
        $post->dokumen_kelurahan = $image2;
        $post->longitude = $request->longitude;
        $post->latitude = $request->latitude;

        // $data = Post::create($validatedData);

        if ($request->hasFile('sketsa_lokasi')) {
            $image1 = $request->file('sketsa_lokasi');
            $imageName1 = $image1->hashName(); // Mendapatkan nama unik untuk file
            $image1->move(public_path('storage/posts'), $imageName1); // Pindahkan file ke lokasi penyimpanan yang benar
        
            // Simpan nama file dalam kolom sketsa_lokasi di database
            $post->sketsa_lokasi = $imageName1;
        }
        
        //upload image dokumen_kelurahan
        if ($request->hasFile('dokumen_kelurahan')) {
            $image2 = $request->file('dokumen_kelurahan');
            $imageName2 = $image2->hashName(); // Mendapatkan nama unik untuk file
            $image2->move(public_path('storage/posts'), $imageName2); // Pindahkan file ke lokasi penyimpanan yang benar
        
            // Simpan nama file dalam kolom dokumen_kelurahan di database
            $post->dokumen_kelurahan = $imageName2;
        }

        $post->save();


        //redirect to index
        return redirect()->route('beranda')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.detail', compact('post'));
    }

    public function showMap()
    {
        $locations = Post::getCoordinates();
        return view('posts.detail', compact('locations'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $post = Post::find($id);
        $post->tindak_lanjut = $request->input('tindak_lanjut');
        $post->status = $request->input('status');
        $post->save();



        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function showIndex()
    {
        $totalData = Post::count();
        return view('posts.index')->with('totalData', $totalData);
    }

    // public function search(Request $request)
    // {
    //     $output="";
    
    //     $posts = Post::where('custom_id', 'Like', '%'.$request->search.'%')
    //                 ->orWhere('nama', 'Like', '%'.$request->search.'%')
    //                 ->get();
        
    //     $number = 1; 
    //     foreach($posts as $posts )
    //     {
    //         $output.=
    //         '<tr>
    //             <td>'.$number.'</td>
    //             <td>'.$posts->custom_id.'</td>
    //             <td>'.$posts->nama.'</td>
    //             <td>'.$posts->nik.'</td>
    //             <td>'.$posts->email.'</td>
    //             <td>'.$posts->created_at.'</td>
    //             <td style="text-align: center;">';
    //             if ($posts->tindak_lanjut === 0)
    //                 $output .= '<p>Belum ditanggapi</p>';
    //             elseif ($posts->tindak_lanjut === 1)
    //                 $output .= '<p>Dalam proses</p>';
    //             elseif ($posts->tindak_lanjut === 2)
    //                 $output .= '<p>Selesai</p>';
    //             else
    //                 $output .= '<p>Status tidak valid</p>';
    //             $output .= '</td>
    //             <td style="text-align: center;">';
    //             if ($posts->status === 0)
    //                 $output .= '<p>Belum ditanggapi</p>';
    //             elseif ($posts->status === 1)
    //                 $output .= '<p>Dalam proses</p>';
    //             elseif ($posts->status === 2)
    //                 $output .= '<p>Selesai</p>';
    //             else
    //                 $output .= '<p>Status tidak valid</p>';
    //                 $output .= '</td>
    //                 <td class="text-center">
    //                     <div id="edit-form-container"></div>
    //                     <form onsubmit="return confirm(\'Apakah Anda Yakin ?\');" action="'. route('posts.destroy', $posts->id) .'" method="POST">
    //                         <a href="'. route('posts.show', $posts->id) .'" class="btn btn-sm btn-dark"><i class="fa fa-eye" aria-hidden="true"></i></a>
    //                         <a href="#" class="btn btn-sm btn-primary openEditModal" data-bs-target="#editModal_'.$posts->id.'" data-bs-toggle="modal" data-id="'. $posts->id .'"><i class="fa fa-edit" aria-hidden="true"></i></a>
    //                         <input type="hidden" name="_method" value="DELETE">
    //                         <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
    //                     </form>
    //                 </td>
    //             </tr>
    //             <!-- Modal -->
    //             <div class="modal fade" id="editModal_'.$posts->id.'" tabindex="-1" aria-labelledby="editModalLabel_'.$posts->id.'" aria-hidden="true">
    //                 <div class="modal-dialog">
    //                     <div class="modal-content">
    //                         <div class="modal-header">
    //                             <h5 class="modal-title" id="editModalLabel_'.$posts->id.'">Edit Data</h5>
    //                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    //                         </div>
    //                         <div class="modal-body">
    //                             <!-- Form edit akan dimuat di sini -->
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>
    //             <script src="resources\js\editModal.js/editModal.js"></script>';


    //     $number++;
    //     }
    //     return response($output);
    // }

    public function showData(Request $request)
    {
        $keyword = $request->input('keyword');
        
        // Perform your search logic here, for example:
        $posts = Post::where('custom_id', 'like', '%'.$keyword.'%')->get();
        
        // Return the search results
        return response()->json(['posts' => $posts]);
    }



}
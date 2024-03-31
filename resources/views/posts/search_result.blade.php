<!-- resources/views/search_results.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Search Results</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Email</th>
                    <th>Tanggal Permohonan</th>
                    <th>Tindak Lanjut</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->custom_id }}</td>
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->nik }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            @if ($post->tindak_lanjut === 0)
                                Belum ditanggapi
                            @elseif ($post->tindak_lanjut === 1)
                                Dalam proses
                            @elseif ($post->tindak_lanjut === 2)
                                Selesai
                            @else
                                Status tidak valid
                            @endif
                        </td>
                        <td>
                            @if ($post->status === 0)
                                Belum ditanggapi
                            @elseif ($post->status === 1)
                                Dalam proses
                            @elseif ($post->status === 2)
                                Selesai
                            @else
                                Status tidak valid
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

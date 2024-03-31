<!-- Form edit -->
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $post->nama }}" readonly>
        <label for="nik">NIK:</label>
        <input type="text" class="form-control" id="nik" name="nik" value="{{ $post->nik }} " readonly>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}" readonly>
        <label for="tanggal">Tanggal Permohonan:</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y H:i:s') }}" readonly>
        <label for="tindak_lanjut">Tindak Lanjut:</label>
        <!-- <select class="form-control" id="tindak_lanjut" name="tindak_lanjut">
                <option value="{{$post->tindak_lanjut}}" {{ $post->tindak_lanjut == 0 ? 'selected' : '' }}>Belum Ditanggapi</option>
                <option value="{{$post->tindak_lanjut}}" {{ $post->tindak_lanjut == 1 ? 'selected' : '' }}>Dalam Proses</option>
                <option value="{{$post->tindak_lanjut}}" {{ $post->tindak_lanjut == 2 ? 'selected' : '' }}>Selesai</option>
        </select> -->
        <select class="form-control" id="tindak_lanjut" name="tindak_lanjut">
            <option value="0" {{ $post->tindak_lanjut == 0 ? 'selected' : '' }}>Belum Ditanggapi</option>
            <option value="1" {{ $post->tindak_lanjut == 1 ? 'selected' : '' }}>Dalam Proses</option>
            <option value="2" {{ $post->tindak_lanjut == 2 ? 'selected' : '' }}>Selesai</option>
        </select>
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="status">
            <option value="0" {{ $post->status == 0 ? 'selected' : '' }}>Belum Ditanggapi</option>
            <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Dalam Proses</option>
            <option value="2" {{ $post->status == 2 ? 'selected' : '' }}>Selesai</option>
        </select><br>
        
    </div>
    <!-- Tambahkan input lainnya -->
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
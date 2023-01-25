@extends('Backend.Layout.Main')
@section('title', 'Paket')
@section('content')
    <h3 class="mb-2">Tambah Paket</h3>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control @error('paket') is-invalid @enderror" id="paket" autocomplete="off"
                name="paket" value="{{ old('paket') }}">
            @error('paket')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                autocomplete="off" name="harga" value="{{ old('harga') }}">
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="textarea form-control @error('keterangan') is-invalid @enderror">
                <?= old('keterangan') ?>
            </textarea>
            @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/packages" class="btn btn-danger">Kembali</a>
    </form>
@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/plrqcl0e028uwokisqjivacjlga369r1mz1qrwwahy900kf1/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinymce.js') }}"></script>
@endsection
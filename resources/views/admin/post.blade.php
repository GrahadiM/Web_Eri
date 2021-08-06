@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Post') }}</div>

                    <div class="card-body">
                        <div class="card mb-5">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="link">Link / Url</label>
                                                <input type="text" name="link" id="link" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Gambar</label>
                                                <input type="file" name="image" id="image" class="form-control" required>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="product_id">Jenis Produk</label>
                                                <select name="product_id" id="product_id" class="form-control custom-control">
                                                    <option disabled selected>-- Pilih --</option>
                                                    @foreach ($products as $id => $key)
                                                        <option value="{{ $key }}">{{ $id }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                        <h3 class="text-secondary mb-3"><u>Tabel Model</u></h3>
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Link / Url</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $posts->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->link }}</td>
                                            <td>
                                                <img src="{{ asset('editing_images/' . $key->image) }}"
                                                    style="width: 100px; height: 100px; object-fit: cover;"
                                                    alt="modelImg">
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('post.edit', $key->id) }}"
                                                    class="btn btn-primary mb-1 mr-1">Edit</a> --}}
                                                <form action="{{ route('post.destroy', $key->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Yakin?')"
                                                        class="btn btn-sm btn-danger">Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="5" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Buku</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tambah buku</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">

                                <a href="{{ route('books.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="alert alert-danger">
                                    @if (count($errors) > 0)
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <form action="{{ route('books.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4">Judul Buku</label>
                                        <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="isbn" class="col-md-4">ISBN</label>
                                        <input type="number" name="isbn" value="{{ old('isbn') }}" id="isbn" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-md-4">Deskripsi Buku</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control col-md-8" value="{{ old('deskripsi') }}" required></textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penulis" class="col-md-4">Penulis Buku</label>
                                        <input type="text" name="penulis" value="{{ old('penulis') }}" id="penulis" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penerbit" class="col-md-4">Penerbit Buku</label>
                                        <input type="text" name="penerbit" value="{{ old('penerbit') }}" id="penerbit" class="form-control col-md-8"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cover_img" class="col-md-4">Cover Buku</label>
                                        <input type="file" name="cover_img" value="{{ old('cover_img') }}" id="cover_img"
                                            required>
                                    </div>

                                    <div class="form-group row">
                                        <label for="genres_id" class="col-md-4">Genre Buku</label>
                                        <select name="genres_id" id="genres_id" class="form-control col-md-8"
                                            required>
                                            @foreach ($genres as $genre)
                                                <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="tambah" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

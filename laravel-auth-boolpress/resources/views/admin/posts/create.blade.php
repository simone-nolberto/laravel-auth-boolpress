@extends('layouts.admin')


@section('content')
    <header class="py-3 bg-dark text-white">
        <div class="container">
            <h1>Create a new post</h1>
        </div>

    </header>


    <div class="container py-5">


        @if ($errors->any())
            <div class="alert alert-danger" role="alert">

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif


        <form action="{{ route('admin.posts.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Your post title" />
                <small id="helpId" class="form-text text-muted">Help text</small>

                @error('title')
                    <div class="text-dange py-2">

                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="mb-3">
                <label for="cover_image" class="form-label">cover_image</label>
                <input type="text" class="form-control" name="cover_image" id="cover_image"
                    aria-describedby="cover_imageHelper" placeholder="Your post cover_image" />
                <small id="helpId" class="form-text text-muted">Help text</small>

                @error('cover_image')
                    <div class="text-dange py-2">

                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <textarea class="form-control" name="content" id="content" rows="5"></textarea>

                @error('content')
                    <div class="text-dange py-2">

                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">
                Invia
            </button>




        </form>


    </div>
@endsection

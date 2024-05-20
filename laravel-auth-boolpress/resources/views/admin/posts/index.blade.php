@extends('layouts.admin')


@section('content')
    <header class="py-3 bg-dark text-white">
        <div class="container d-flex justify-content-between align-items-center">
            <h1>Posts</h1>

            <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Add</a>
        </div>

    </header>


    <div class="container py-5">

        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cover Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr class="">
                            <td scope="row">{{ $post->id }}</td>
                            <td>
                                <img width="140" src="{{ $post->cover_image }}" alt="">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>

                                <a class="btn btn-dark" href="{{route('admin.posts.show', $post)}}">View</a>

                                /edit/delete

                            </td>

                        </tr>

                    @empty

                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    @endforelse

                </tbody>


            </table>
        </div>


    </div>
@endsection

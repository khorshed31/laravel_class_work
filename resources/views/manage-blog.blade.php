@extends('master')

@section('title')
    Manage Blog Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white"><h4>All Blogs</h4></div>
                        <div class="card-body bg-info">
                            <h4 class="text-warning text-center">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="bg-success text-white">
                                <tr>
                                    <th>SL No</th>
                                    <th>Blog ID</th>
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>
                                            <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-dark btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


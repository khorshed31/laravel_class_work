@extends('master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white"><h4>All Products</h4></div>
                        <div class="card-body bg-info">
                            <h4 class="text-warning text-center">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="bg-success text-white">
                                <tr>
                                    <th>SL No</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Brand</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->image }}</td>
                                        <td>
                                            <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-dark btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" onclick="deleteProduct({{ $product->id }})">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form action="{{ route('delete-product', ['id' => $product->id]) }}" id="deleteStudentForm{{ $product->id }}" method="POST">
                                                @csrf
                                            </form>
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

{{--    <script>--}}

{{--        function deleteProduct(id) {--}}

{{--            event.preventDefault();--}}
{{--            var check = confirm('Are you sure to delete this..');--}}
{{--            if (check){--}}
{{--                document.getElementById('deleteStudentForm'+id).submit();--}}
{{--            }--}}
{{--        }--}}

{{--    </script>--}}
@endsection


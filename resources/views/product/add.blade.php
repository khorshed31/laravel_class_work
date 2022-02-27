@extends('master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-info text-white">
                        <div class="card-header text-center bg-dark">
                            <h4>Add Product Form</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-warning text-center">{{ Session::get('message') }}</h4>
                            <form action="{{ 'new-product' }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Brand</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-dark" value="Create New Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






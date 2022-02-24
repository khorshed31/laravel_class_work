@extends('master')

@section('title')
    Manage Student Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white"><h4>All Students</h4></div>
                        <div class="card-body bg-info">
                            <h4 class="text-warning text-center">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="bg-success text-white">
                                <tr>
                                    <th>SL No</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Student Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>
                                        <a href="{{ route('edit-student', ['id' => $student->id]) }}" class="btn btn-dark btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-student', ['id' => $student->id]) }}" class="btn btn-warning btn-sm" onclick="event.preventDefault();document.getElementById('deleteStudentForm{{ $student->id }}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{ route('delete-student', ['id' => $student->id]) }}" id="deleteStudentForm{{ $student->id }}" method="POST">
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
@endsection

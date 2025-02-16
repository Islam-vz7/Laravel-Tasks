@extends('layout')

@section('title', 'Create Course')

@section('content')
<section id="create-course" class="py-5 my-5">
    <div class="container">
        <h2 class="section-title">Create New Course</h2>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="duration">Duration (hours)</label>
                <input type="number" name="duration" id="duration" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="field">Field</label>
                <input type="text" name="field" id="field" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Course</button>
        </form>
    </div>
</section>
@endsection
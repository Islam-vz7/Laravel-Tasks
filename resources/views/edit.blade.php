@extends('layout')

@section('title', 'Edit Course')

@section('content')
<section id="edit-course" class="py-5 my-5">
    <div class="container">
        <h2 class="section-title">Edit Course</h2>
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="duration">Duration (hours)</label>
                <input type="number" name="duration" id="duration" class="form-control" value="{{ $course->duration }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="field">Field</label>
                <input type="text" name="field" id="field" class="form-control" value="{{ $course->field }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
</section>
@endsection
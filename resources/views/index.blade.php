@extends('layout')

@section('title', 'Your Courses')

@section('content')
<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <h2 class="section-title">Your Courses</h2>
        @if ($courses->isEmpty())
            <p>Welcome, {{ auth()->user()->name }}!</p>
            <p>No courses found. <a href="{{ route('courses.create') }}">Create a new course</a>.</p>
        @else
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-3">
                        <div class="product-item">
                            <figure class="product-style">
                                <img src="{{ asset('images/pic1.jpg') }}" alt="Course">
                            </figure>
                            <figcaption>
                                <h3>{{ $course->name }}</h3>
                                <span>Field: {{ $course->field }}</span>
                                <div class="item-price">Duration: {{ $course->duration }} hours</div>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning mt-2">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                </form>
                            </figcaption>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection

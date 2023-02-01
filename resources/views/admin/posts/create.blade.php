@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf

            <form class="row g-3 needs-validation" novalidate>

                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <div class="valid-feedback">
                        TODO: error message
                    </div>
                </div>

                {{-- slug --}}
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                    <div class="valid-feedback">
                        TODO: error message
                    </div>
                </div>

                {{-- image --}}
                <div class="mb-3">
                    <label for="image" class="form-label">URL-Image</label>
                    <input type="text" class="form-control" id="image" name="image">
                    <div class="valid-feedback">
                        TODO: error message
                    </div>
                </div>

                {{-- content --}}
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                    <div class="invalid-feedback">
                        TODO: error message
                    </div>
                </div>

                {{-- content --}}
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control" id="excerpt" name="excerpt"></textarea>
                    <div class="invalid-feedback">
                        TODO: error message
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </form>
    </div>
@endsection


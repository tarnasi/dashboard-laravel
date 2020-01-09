@extends('layouts.admin.app')

@section('breadcrumbs')
    @component('components.admin.breadcrumbs', [
        'paths' => 'panel/articles/edit'
    ])
        @slot('title')
            Article
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Article
                    </div>
                    <div class="card-body card-block">

                        {{-- form Create --}}
                        <form action="{{ route('articles.update',$article->id) }}" method="post" id="articleEdit" enctype="multipart/form-data">
                            @csrf
                            @Method('PUT')
                            <!-- title -->
                            <div class="form-group">
                                <label for="article-title" class="pr-1 form-control-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $article->title }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- summary -->
                            <div class="form-group">
                                <label for="article-summary" class="pr-1 form-control-label">Summary</label>
                                <textarea name="summary" id="article-summary" class="form-control @error('summary') is-invalid @enderror" rows="3">{{ $article->summary }}</textarea>
                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Categories -->
                            <div class="form-group">
                                <label for="article-categories">Categories</label>
                                <select name="categories[]" id="categories" class="form-control @error('categories') is-invalid @enderror" required multiple>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- img -->
                            <div class="form-group mt-5">
                                <label for="image" class=" form-control-label">File input</label>
                                <input type="file" id="image" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <img src="{{ '' }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="form-group mt-5 pt-4">
                                <label for="article-content" class="pr-1 form-control-label">Content</label>
                                <textarea name="content" id="article-content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ $article->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </form>

                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"
                        onclick="document.getElementById('articleCreate').submit()"
                        >
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </a>
                        <a href="/panel/categories" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(() => {
            jQuery('#categories').select2();
        })
    </script>
@endsection

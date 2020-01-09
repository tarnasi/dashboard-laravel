@extends('layouts.admin.app')

@section('breadcrumbs')
    @component('components.admin.breadcrumbs', [
        'paths' => 'panel/categories/create'
    ])
        @slot('title')
            Category
        @endslot
    @endcomponent
@endsection

@section('content')

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Category
                    </div>
                    <div class="card-body card-block">

                        {{-- form Create --}}
                        <form action="{{ route('categories.store') }}" method="post" id="categoryCreate">
                            @csrf
                            <div class="form-group">
                                <label for="category-name" class="pr-1 form-control-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"
                        onclick="document.getElementById('categoryCreate').submit()"
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

        })
    </script>
@endsection

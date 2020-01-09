@extends('layouts.admin.app')

@section('breadcrumbs')
    @component('components.admin.breadcrumbs', [
        'paths' => 'panel/categories'
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
                        Category Table
                        <a href="/panel/categories/create" class="btn btn-primary btn-sm ml-2">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped dataTable" id="category">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>name</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form action="/panel/categories/{{ $category->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="/panel/categories/{{ $category->id }}/edit" class="btn btn-success">
                                                <i class="ti-pencil-alt2"></i>
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

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(() => {
            jQuery('#category').DataTable();
        })
    </script>
@endsection

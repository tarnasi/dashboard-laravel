@extends('layouts.admin.app')

@section('breadcrumbs')
    @component('components.admin.breadcrumbs', [
        'paths' => 'panel/articles'
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
                        Article Table
                        <a href="/panel/articles/create" class="btn btn-primary btn-sm ml-2">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped dataTable" id="article">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>title</th>
                                    <th>user</th>
                                    <th>categories</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $article->id }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->user->name }}</td>
                                        <td>random</td>
                                        <td>image</td>
                                        <td>
                                            <a href="delete" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-success">
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
            jQuery('#article').DataTable();
        })
    </script>
@endsection

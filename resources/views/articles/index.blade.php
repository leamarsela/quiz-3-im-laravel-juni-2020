@extends('layouts.master')

@section('content')
    <a class="btn btn-secondary" href="{{ '/artikel/create' }}" role="button">Tambah Artikel</a>
        <table class="table">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Head</th>
                        <th scope="col">Body</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($articles as $article)    
                    <tr>
                        <th scope="row">{{$loop->iteration}}.</th>
                        <td>{{ $article->head}}</td>
                        <td>{{ $article->body}}</td>
                        <td>{{ $article->slug}}</td>
                        <td>{{ $article->tag}}</td>
                        <td><a class="btn btn-info" href="{{ url('/artikel/' . $article->id . '/detail' ) }}" role="button">Detail Article</a></td>
                        <td><a class="btn btn-warning" href="{{ url('/artikel/' . $article->id . '/edit' ) }}" role="button">Edit Article</a></td>
                        <td>
                            <form action="{{ '/artikel/' . $article->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

@endsection

@push('scripts')

    <script src="{{ asset('/sbadmin2/js/swal.min.js') }}"></script>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>

@endpush
@extends('layouts.master')

@section('content')
    
    <form action="{{ $article->id }}" method="post">
        @method('delete')
        @csrf
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Head</label>
            <input type="text" class="form-control @error ('head') is-invalid @enderror" id="head" placeholder="-" name="head" value=" {{ $article->head }} ">
            <div class="invalid-feedback">
                @error('head')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Body</label>
        <input type="text" class="form-control @error ('body') is-invalid @enderror" id="body" placeholder="-" name="body" value=" {{ $article->body }} ">
            <div class="invalid-feedback">
                @error('body')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Tag</label>
            <input type="text" class="form-control @error ('tag') is-invalid @enderror" id="tag" placeholder="-" name="tag" value=" {{ $article->tag }} ">
            <div class="invalid-feedback">
                @error('tag')
                    {{ $message }}
                @enderror
            </div>
        </div>

        {{-- <input hidden type="text" name="created_at" value=""> --}}
        <input hidden type="text" name="user_id" value="1">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href=" {{ url('/artikel') }} ">Back</a>
    </form>

@endsection
@extends('layouts.master')

@section('content')
    
    <form action="/artikel" method="post">
        @csrf
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Head</label>
            <input type="text" class="form-control @error ('head') is-invalid @enderror" id="head" placeholder="-" name="head" value=" {{ old('head') }} ">
            <div class="invalid-feedback">
                @error('head')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Body</label>
        <input type="text" class="form-control @error ('body') is-invalid @enderror" id="body" placeholder="-" name="body" value=" {{ old('body') }} ">
            <div class="invalid-feedback">
                @error('body')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Tag</label>
            <input type="text" class="form-control @error ('tag') is-invalid @enderror" id="tag" placeholder="-" name="tag" value=" {{ old('tag') }} ">
            <div class="invalid-feedback">
                @error('tag')
                    {{ $message }}
                @enderror
            </div>
            
        </div>
        <div class="form-group col-md-6">
            <input hidden type="text" name="created_at" value="">
            <input hidden type="text" name="user_id" value="1">
            <button type="submit" class="btn btn-warning col-md-3">Save Article</button>
            <a href=" {{ url('/artikel') }} "><button type="submit" class="btn btn-secondary col-md-3">Back</button></a>
        </div>
    </form>

@endsection
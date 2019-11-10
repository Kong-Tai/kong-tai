@extends('layouts.app')

@section('content')
    <single-post
    :post="{{ json_encode($post) }}"
    ></single-post>
@endsection

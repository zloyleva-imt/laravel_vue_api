@extends('layouts.app')

@section('content')

    <ads_create-component
        :routes="{{ collect($routes) }}"
    ></ads_create-component>

@endsection
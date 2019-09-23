@extends('layouts.app')

@section('content')

    <ads_edit-component
        :ad="{{ $ad }}"
        :routes="{{ collect($routes) }}"
    ></ads_edit-component>

@endsection
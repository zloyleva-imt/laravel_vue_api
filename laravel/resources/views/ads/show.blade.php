@extends('layouts.app')

@section('content')

    <ads_show-component
        :ad="{{ $ad }}"
    ></ads_show-component>

@endsection
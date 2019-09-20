@extends('layouts.app')

@section('content')

    <ads_edit-component
        :ad="{{ $ad }}"
    ></ads_edit-component>

@endsection
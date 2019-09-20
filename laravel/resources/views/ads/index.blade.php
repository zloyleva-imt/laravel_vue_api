@extends('layouts.app')

@section('content')

    <ads_index-component
        :ads="{{ $ads }}"
    ></ads_index-component>

@endsection
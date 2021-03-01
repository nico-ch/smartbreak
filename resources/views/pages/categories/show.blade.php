@extends('layouts.app', ['title' => 'Visualizza Prodotto'])

@section('content')

    @include('pages.products._form', [
            'cardTitle' => 'Dettaglio prodotto',
            'action' => route('products.index'),
            'button' => 'Indietro',
            'readonly' => 'readonly',
            ])

@endsection
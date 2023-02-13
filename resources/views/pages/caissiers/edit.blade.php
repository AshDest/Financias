@extends('layouts.default')
@section('content')
@livewire('caissier.edit-caissier', ['ids' => $ids])
@endsection

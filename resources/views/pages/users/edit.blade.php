@extends('layouts.default')
@section('content')
@livewire('user.edit-users', ['ids' => $ids])
@endsection

@extends('layouts.master')

@section('title', 'Sekolah Ksl')

@section('content')
  <h1>Selamat Datang Guys</h1>

  @foreach ($users as $user)
    <li>{{ $user }}</li>
  @endforeach

  {!! $unascaped !!}

  @if (count($user) > 5)
    <p>user lebih dari 5</p>
  @else
    <p>user kurang lebih dari 5</p>
  @endif

@endsection

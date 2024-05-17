@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <form method="POST" action="{{ route('profile.token') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Generate Token</button>
    </form>
    
    @if(session('token'))
        <div class="alert alert-success mt-3">
            Your token: {{ session('token') }}
        </div>
    @endif

    <div class="mt-3">
        <h2>Your Current Tokens</h2>
        <ul>
            @foreach ($user->tokens as $token)
                <li>{{ $token->name }} - {{ $token->created_at }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

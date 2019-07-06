@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Menu
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item active">
                        <a href="/dashboard" style="color:white">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <strong>Total Users Registered: {{ $users_count }}</strong>
                </div>
            </div>
            <!-- display all the data  -->
            @foreach ($blogs as $blog)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $blog->title }}</strong></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $blog->user->name }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{ date('Y-m-d', strtotime($blog->created_at)) }}</h6>
                        <p class="card-text">{{ $blog->content }}</p>
                    </div>
                </div>
            @endforeach

            <div class="pagination justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layout')


@section('content')

    <section class="container-fluid">
        <main>
            <h1>Task detailed</h1>
            <nav class="d-flex justify-content-around">
                <div class="nav-logo">
                    <a href="/">
                        <svg viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.17401 11.594H11.826L10 7.09497L8.17401 11.594V11.594Z" fill="currentColor"/>
                            <path d="M10 0L0 3.652L1.525 17.193L10 22L18.475 17.193L20 3.652L10 0ZM16.24 16.786H13.91L12.653 13.574H7.347L6.09 16.786H3.76L10 2.431L16.24 16.786Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
                @if (!empty($task))
                    <div class="nav-btn">
                        <a href="/delete/{{ $task->id }}">Delete</a>
                    </div>
                @endif
            </nav>

            <div class="detail-container">
                @if (empty($task))
                    <h2>Sorry, no data</h2>
                @else
                    <div class="detail-task">
                        <div>
                            <h2>{{ $task->title }}</h2>
                            <h3>{{ $task->category }}</h3>
                            <h4>{{ $task->duedate }}</h4>
                            <p>{{ $task->description }}</p>
                        </div>
                        <a href="/">Back</a>
                    </div>
                @endif
            </div>

        </main>
    </section>
    
@endsection

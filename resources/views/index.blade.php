@extends('layout')


@section('content')

    <section class="container-fluid">
        <main>
            <h1>ToDo Manager</h1>
            <nav class="d-flex justify-content-around">
                <div class="nav-logo">
                    <a href="/">
                        <svg viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.17401 11.594H11.826L10 7.09497L8.17401 11.594V11.594Z" fill="currentColor"/>
                            <path d="M10 0L0 3.652L1.525 17.193L10 22L18.475 17.193L20 3.652L10 0ZM16.24 16.786H13.91L12.653 13.574H7.347L6.09 16.786H3.76L10 2.431L16.24 16.786Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-btn">
                    <a href="/add">Add</a>
                </div>
            </nav>

            <div class="list-container">
                @if (empty($tasks))
                    <h3>All clear</h3>
                @else
                    @foreach ($tasks as $task)
                        <div class="task">
                            <div class="task-identifier">
                                <svg viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 2.30957e-07C2.20435 2.30957e-07 1.44129 0.316071 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3V18C0 18.7956 0.31607 19.5587 0.87868 20.1213C1.44129 20.6839 2.20435 21 3 21H12C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V6.621C14.9995 6.02446 14.7621 5.45255 14.34 5.031L9.9705 0.6585C9.76147 0.4496 9.51333 0.283925 9.24025 0.170938C8.96718 0.0579516 8.67453 -0.000133664 8.379 2.30957e-07H3ZM1.5 3C1.5 2.60218 1.65804 2.22064 1.93934 1.93934C2.22064 1.65804 2.60218 1.5 3 1.5H7.5V5.25C7.5 5.84674 7.73705 6.41903 8.15901 6.84099C8.58097 7.26295 9.15326 7.5 9.75 7.5H13.5V18C13.5 18.3978 13.342 18.7794 13.0607 19.0607C12.7794 19.342 12.3978 19.5 12 19.5H3C2.60218 19.5 2.22064 19.342 1.93934 19.0607C1.65804 18.7794 1.5 18.3978 1.5 18V3ZM13.1895 6H9.75C9.55109 6 9.36032 5.92098 9.21967 5.78033C9.07902 5.63968 9 5.44891 9 5.25V1.8105L13.1895 6Z" fill="currentColor"/>
                                </svg>
                                <h2>{{$task->title}}</h2>
                            </div>
                            <div class="task-controller">
                                <a href="/detail/{{ $task->id }}">Detail</a>
                                <a href="/delete/{{ $task->id }}">Delete</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </main>
    </section>
    
@endsection

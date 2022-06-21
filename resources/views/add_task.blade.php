@extends('layout')

@section('content')

    <section class="container-fluid">
        <main>
            <nav class="d-flex justify-content-around">
                <h1>Add task</h1>
            </nav>

            <div class="add-container">
                <form action="{{ route('addStoreTask') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <input type="text" placeholder="Title" name="title">
                    <input type="text" placeholder="Category" name="category">
                    <input type="date" name="date">
                    <textarea name="description" id="description"rows="5" placeholder="Description"></textarea>
                    <button type="submit">Save</button>
    
                </form>
            </div>

        </main>
    </section>

@endsection
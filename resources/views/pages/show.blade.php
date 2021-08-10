@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here is compagnie's preview</p>
    <section>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('img/'.$show->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Name: {{$show->name}}</p>
                            <p class="card-text">Adress: {{$show->adress}}</p>
                            <p class="card-text">Mail: {{$show->mail}}</p>
                            <p class="card-text">Phone: {{$show->phone}}</p>
                            <p class="card-text">Contact Name: {{$show->contactname}}</p>
                            <p class="card-text">Contact Lastname: {{$show->contactlastname}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update compagnie</p>
    <section>
        <div class="container mt-5">
            <form action="/compagnie/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value='{{$edit->name}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adress</label>
                    <input type="text" name="adress" value='{{$edit->adress}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="tel" name="phone" pattern="[0-9]{4}/[0-9]{2}.[0-9]{2}.[0-9]{2}" value='{{$edit->phone}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mail</label>
                    <input type="email" name="mail" value='{{$edit->mail}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Name</label>
                    <input type="text" name="contactname" value='{{$edit->contactname}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Last Name</label>
                    <input type="text" name="contactlastname" value='{{$edit->contactlastname}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <select class="form-select" name='img'aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="logo.jpg">Logo</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
@extends('layout/main')

@section('container')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <section id="bodyform">
            <h1>Movie Watch List</h1>
            <form>
                <div>
                    <input type="text" id="title" name = "titlemovie" placeholder="Movie Name" class="form-control">
                    <input type="text" id="rating" name = "ratingmovie" placeholder="Movie Rating" class="form-control">
                    <button type="button" class="btn btn-info" id="btn-add">Add</button>
                    <input type="text" id="search" placeholder="Search...">
                </div>
            </form>
            <br>
            <hr>
            <br>
            <table class="table"> 
                <thead>
                    <tr id="bgColumn">
                        <th>Movie Title</th>
                        <th>Movie Rating</th>
                        <th>Action  </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Spiderman</td>
                        <td>9.0</td>
                        <td><button class="btn-delete">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Yowis Ben</td>
                        <td>8.0</td>
                        <td><button class="btn-delete">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Avengers</td>
                        <td>10  </td>
                        <td><button class="btn-delete">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <script src="{{asset('/js/jquery.js')}}"></script>
@endsection
@extends('layouts.login')

@section('title', 'Pael Demands')

@section('content')
    <form action="loginr" method="post">
        <label for="inputField">Enter something:</label><br>
        <input type="text" id="inputField" name="inputField"><br>
        <input type="submit" value="Submit">
    </form>
    <a href="/">Volta ai nego</a>
    


@endsection
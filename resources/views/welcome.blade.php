@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Sign Up</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div class="col-md-6">
        <h3>Sign in</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
</div>

@endsection


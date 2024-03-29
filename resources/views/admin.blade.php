@extends('layouts.main')
@section('content')
    <h1 class="title titlemargin"> Buscar usuario </h1>
    <div class="search">
        <form action="" method="">
            <input type="search" placeholder="Buscar usuario" class="searcher" id="searcher" name="user">
        </form>
    </div>

    <h1 class="title titlemargin"> Usuario buscado </h1>

    <div class="estructure">
        <form action="#" method="POST">
            <div>
                <div class="labelform">
                    <label for="name">Nombre</label>
                </div>
                <div class="inputform">
                    <input type="text" id="name" name="name" maxlength="32" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="pass">Clave</label>
                </div>
                <div class="inputform">
                    <input type="text" id="pass" name="pass" maxlength="32" pattern="[A-Za-z0-9]+"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="email">Correo</label>
                </div>
                <div class="inputform">
                    <input type="text" id="email" name="email" maxlength="64"
                        pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="address">Dirección</label>
                </div>
                <div class="inputform">
                    <input type="text" id="address" name="address" maxlength="128" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="admin">Admin</label><br>
                </div>
                <select name="rol" id="rol">
                    <option value="admin">Admin</option>
                    <option value="member">Member</option>
                </select>
                <ul class="errors"></ul>
            </div>
            <br>
            <ul class="errors"></ul>
            <input type="submit" value="Editar">
            <input class="out" type="submit" value="Baja">
        </form>
    </div>

    <h1 class="title titlemargin"> Buscar producto </h1>

    <div class="search">
        <form action="" method="">
            <input type="search" placeholder="Buscar usuario" class="searcher" id="searcher" name="usuario">
        </form>
    </div>

    <h1 class="title titlemargin"> Producto buscado </h1>

    <div class="structure">
        <form action="#" method="POST">
            <div>
                <div class="labelform">
                    <label for="foto">Foto</label>
                </div>
                <div class="inputform">
                    <input type="text" id="foto" name="foto" maxlength="256" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="title">Título</label>
                </div>
                <div class="inputform">
                    <input type="text" id="title" name="title" maxlength="32" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="prize">Precio</label>
                </div>
                <div class="inputform">
                    <input type="number" id="prize" min="0" name="prize"
                        pattern="^[0-9]+[.,]{1,1}\[0]{2,2}$" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="ref">Referencia</label>
                </div>
                <div class="inputform">
                    <input type="number" id="ref" name="ref" min="0" pattern="[0-9]*"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="status">Estado</label><br>
                </div>
                <select name="status" id="status">
                    <option value="broke">Roto</option>
                    <option value="restore">Restaurado</option>
                </select>
                <ul class="errors"></ul>
            </div>
            <br>
            <ul class="errors"></ul>
            <input type="submit" value="Editar">
            <input class="out" type="submit" value="Baja">
        </form>
    </div>


    <h1 class="title titlemargin"> Añadir productos </h1>

    <div class="estructure">
        <form action="#" method="POST">
            <div>
                <div class="labelform">
                    <label for="foto">Foto</label>
                </div>
                <div class="inputform">
                    <input type="file" id="foto" name="foto" maxlength="256" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="title">Título</label>
                </div>
                <div class="inputform">
                    <input type="text" id="title" name="title" maxlength="32"
                        pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="prize">Precio</label>
                </div>
                <div class="inputform">
                    <input type="number" id="prize" min="0" name="prize"
                        pattern="^[0-9]+[.,]{1,1}\[0]{2,2}$" placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="ref">Referencia</label>
                </div>
                <div class="inputform">
                    <input type="number" id="ref" name="ref" min="0" pattern="[0-9]*"
                        placeholder="">
                </div>
                <ul class="errors"></ul>
            </div>
            <div>
                <div class="labelform">
                    <label for="status">Estado</label><br>
                </div>
                <select name="status" id="status">
                    <option value="broke">Roto</option>
                    <option value="restore">Restaurado</option>
                </select>
                <ul class="errors"></ul>
            </div>
            <br>
            <ul class="errors"></ul>
            <input type="submit" value="Añadir">

        </form>
    </div>
@endsection

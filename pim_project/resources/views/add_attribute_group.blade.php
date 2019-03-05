@extends('layout')

@section('titre')
    ajouter un groupe d'attribut
@endsection

@section('contenu')

    <div class="container">
        <div class="row">
            <div class="col">
                <form class="forms" action="/add_attribute_group" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="attribute_group_name">Nom</label>
                        <input name="label" type="name" class="form-control" id="attribute_group_name" placeholder="Nom">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <div class="col"></div>
        </div>
    </div>


@endsection
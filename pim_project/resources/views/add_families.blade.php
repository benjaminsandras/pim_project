@extends('layout')

@section('titre')
    ajouter une famille
@endsection

@section('contenu')

    <div class="container">
        <div class="row">
            <div class="col">
                <form class="forms" action="/add_families" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="family_name">Nom</label>
                        <input name="label" type="name" class="form-control" id="family_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="family_image">Image</label>
                        <input name="image" type="name" class="form-control" id="family_image" placeholder="jpg, png...">
                    </div>
                    <div class="form-group">
                        <label for="attribute_group">Groupe d'attributs</label>
                            <select name="fk_attribute_group" class="form-control" id="attribute_group">
                                @foreach($attribute_group as $attribute_group)
                                <option value="{{$attribute_group->id}}">{{$attribute_group->label}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="attribute">Attributs</label>
                            <select name="fk_attribute" class="form-control" id="attribute">
                                @foreach($attribute as $attribute)
                                <option value="{{$attribute->id}}">{{$attribute->label}}</option>
                                @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <div class="col"></div>
        </div>
    </div>


@endsection
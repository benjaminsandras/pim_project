@extends('layout')

@section('titre')
    ajouter un attribut
@endsection

@section('contenu')

    <div class="container">
        <div id="attribute_form" class="row">
            <div class="col">
                <form class="forms" action="/add_attribute" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="attribute_name">Nom</label>
                        <input name="label" type="name" class="form-control" id="attribute_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="attribute_type">Type</label>
                        <select name="type" multiple class="form-control" id="attribute_type">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="attribute_group">Groupe</label>
                            <select name="fk_attribute_group" class="form-control" id="attribute_group">
                                @foreach($attribute_group as $attribute_group)
                                    <option value="{{$attribute_group->id}}">{{$attribute_group->label}}</option>
                                @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <div class="col">
                <button id="view_form" class="btn btn-primary"></button>
            </div>
        </div>

        <div id="attribue_table" class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Label</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date de création</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attribute as $attribute)
                        <tr>
                            <th scope="row">1</th>
                            <td scope="col">{{$attribute->label}}</td>
                            <td scope="col">{{$attribute->type}}</td>
                            <td scope="col">{{$attribute->created_at}}</td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>




@endsection
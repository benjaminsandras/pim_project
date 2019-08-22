@extends('layout')

@section('titre')
    ajouter un attribut
@endsection

@section('contenu')

    <div class="container">
        <div id="attribute_form" class="row form">
            <div class="col">
                <form class="forms" action="/add_attribute" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="attribute_name">Nom</label>
                        <input name="label" type="name" class="form-control" id="attribute_name" placeholder="Nom">
                    </div>
                <!--     <div class="form-group">
                        <label for="attribute_type">Type</label>
                        <select name="type" multiple class="form-control" id="attribute_type">
                            <option>texte</option>
                            <option>numérique</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> -->
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
                
            </div>
        </div>

        <div id="attribute_table" class="row table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Label</th>
                        <th scope="col">Groupe</th>
                        <th scope="col">Date de création</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attribute as $attribute)
                        <tr>
                            <form method="get">
                                   {{ csrf_field() }}
                                <th scope="row">{{$attribute->id}}</th>
                                <td scope="col">{{$attribute->label}}</td>

                                        <td scope="col">{{$attribute_group->label}}</td>
                      

                                <td scope="col">{{$attribute->created_at}}</td>
                                <td scope="col">
                                    <button name="delete" type="submit" class="btn btn-danger pull-right" id="{{$attribute->id}}" value="{{$attribute->id}}">Supprimer</button>
                                    <a name="edit" class="btn btn-success pull-right" href="{{ route('edit_attribute', [$attribute->id])}}" id="{{$attribute->id}}" value="{{$attribute->id}}">modifier</a>
                                </td>
                            </form>
                            
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
            <button id="view_form" class="btn btn-primary">créer</button>
        </div>
    </div>




@endsection
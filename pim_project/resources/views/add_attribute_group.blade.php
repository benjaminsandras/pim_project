@extends('layout')

@section('titre')
    ajouter un groupe d'attribut
@endsection

@section('contenu')

    <div class="container">
        <div class="form">
            <div class="row">
                <div class="col">
                    <form class="forms" action="/add_attribute_group" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="attribute_group_name">Nom</label>
                            <input name="label" type="name" class="form-control" id="attribute_group_name" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="attribute_group_type">Type</label>
                            <input name="type" type="name" class="form-control" id="attribute_group_type" placeholder="Type">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>

                <div class="col"></div>
            </div>
        </div>

         <div id="attribute_group_table" class="row">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Label</th>
                            <th scope="col">type</th>
                            <th scope="col">Date de création</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attribute_group as $attribute_group)
                            <tr>
                                <form method="get">
                                       {{ csrf_field() }}
                                    <th scope="row">{{$attribute_group->id}}</th>
                                    <td scope="col">{{$attribute_group->label}}</td>
                                    <td scope="col">{{$attribute_group->type}}</td>
                                    <td scope="col">{{$attribute_group->created_at}}</td>
                                    <td scope="col">
                                        <button name="delete" type="submit" class="btn btn-danger pull-right" id="{{$attribute_group->id}}" value="{{$attribute_group->id}}">Supprimer</button>
                                       
                                    </td>
                                </form>
                                
                            </tr>
                        @endforeach
        
                    </tbody>
                </table>
                <button id="view_form_group" class="btn btn-primary">créer</button>
            </div>
        </div>
    </div>


@endsection
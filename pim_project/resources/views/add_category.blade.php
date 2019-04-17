@extends('layout')

@section('titre')
    ajouter une categorie
@endsection

@section('contenu')

    <div class="container">
        <div id="category_form" class="row">
            <div class="col">
                <form class="forms" action="/add_category" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_name">Nom</label>
                        <input name="label" type="name" class="form-control" id="category_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="category_image">Nom</label>
                        <input name="image" type="name" class="form-control" id="category_image" placeholder="image">
                    </div>
                    
                </form>
            </div>

            <div class="col">
                
            </div>
        </div>

        <div id="category_table" class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Image</th>
                        <th scope="col">label</th>
                        <th scope="col">Date de création</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $category)
                        <tr>
                            <th scope="row">1</th>
                            <td scope="col">{{$category->image}}</td>
                            <td scope="col">{{$category->label}}</td>
                            <td scope="col">{{$category->created_at}}</td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
            <button id="view_form" class="btn btn-primary">créer</button>
        </div>
    </div>




@endsection
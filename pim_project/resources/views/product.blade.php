@extends('layout')

@section('titre')
    tableau des produits
@endsection

@section('contenu')

    <div class="container">
        <div id="attribute_form" class="row">
            <div class="col">
                <form class="forms" action="/product" method="get">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category">Trier par catégories</label>
                        <select type="submit" name="category_choice" class="form-control" id="category">
                            @foreach($category as $category)
                                <option name="category" value="{{$category->id}}">{{$category->label}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>

            <div class="col">
                
            </div>
        </div>

        <div id="product_table" class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Label</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date de création</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td scope="col">{{$product->label}}</td>
                            <td scope="col">{{$product->image}}</td>
                            <td scope="col">{{$product->created_at}}</td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
            <button id="view_form" class="btn btn-primary">créer</button>
        </div>
    </div>




@endsection
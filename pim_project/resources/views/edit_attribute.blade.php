<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
 
</head>
<body>

        <div class="container">
            <div id="edit_attribute_form" class="row">
                <div class="col">
                    <form class="forms" action="{{url('/', [$attribute->id])}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="attribute_name">Nom</label>
                            <input name="label" type="name" class="form-control" id="attribute_name" placeholder="{{$attribute->label}}">
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
                        <button type="submit" class="btn btn-primary">Editer</button>
                    </form>
                </div>

                <div class="col">
                    
                </div>
            </div>
        </div>
    
   
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/nav.js"></script>
    <script type="text/javascript" src="/js/function.js"></script>
  

</body>
</html>
    
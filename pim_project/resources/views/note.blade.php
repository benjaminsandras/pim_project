@extends('layout')

@section('titre')
    Notes iternes
@endsection

@section('contenu')

<div class="container">
	<div class="row">
	  <div class="col-sm-10">
		<form  method="post">
			{{ csrf_field() }}
			<div class="cities">
				<label for="usr">De :</label>
				<input type=" " class=" form-control" name="commentFrom" >
				<label for="pwd">Pour :</label>
				<input type=" " class=" form-control" name="commentTO">
				<div class="">
				<label for="comment">Commentaire :</label>
				<textarea class="form-control" rows="5" name="comment"></textarea>
				</div>
				<input class="btn btn-primary btn-md "name="submit" type="submit" >
			</div>
		</form> 
	  </div>
	</div>
	<!-- formulaire d'envoi -->
	<div class="row">
	@foreach($Note as $Notes)
		<div class="col-sm-10">
			<div class=" cities">
				<form  method="get" action="notes">
					<div class="mt-6" >
						<button type="button" class="btn btn-primary btn-md ">De : <label id=" " name="">{{$Notes ->note_interne_emetteur}}</label></button>
						<button type="button" class="btn btn-primary btn-md ">Pour : <label id=" " name="">{{$Notes ->note_interne_recepteur}}</label></button>
						<button type="button" class="btn btn-primary btn-md ">Date : <label id=" " name="">{{$Notes ->updated_at}}</label></button>
						<button name="delete" type="submit" class="btn btn-danger pull-right" id="{{$Notes ->id}}" value="{{$Notes ->id}}">Supprimer</button>
					</div>
					<div class="alert form-control-sm" role="alert" id=" " name="">{{$Notes ->note_interne_commentaire}}</div>
				</form>
			</div>                								
	    </div>
	@endforeach
	</div>
	<!-- button top -->
	<button onclick="topFunction()" id="myBtn" title="Retour haut de page" class=""><span id="btnTop">&#8679;</span></button>
</div>

<!-- affichage des notes -->

@endsection



<style>

#btnTop{
	font-size: 35px;
}

.cities 
	{
		background-color: #3A4357;
		color: white;
		margin: 20px;
		padding: 20px;
		border-radius: 16px;
	}


#myBtn 
	{
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 10px;
		border: none;
		outline: none;
		background-color: rgb(23, 33, 90);
		color: white;
		cursor: pointer;
		padding: 5px;
		border-radius: 5px;
	}

#myBtn:hover 
	{
		background-color: rgb(236, 0, 0);
	}

.btn 
	{
		padding: 15px 25px;
		font-size: 24px;
		text-align: center;
		cursor: pointer;
		outline: none;
		color: #fff;
		background-color: #4CAF50;
		border: none;
		border-radius: 15px;
		box-shadow: 0 9px #999;
	}

.btn:hover {background-color: #3e8e41}

.btn:active 
	{
		background-color: #3e8e41;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}
</style>
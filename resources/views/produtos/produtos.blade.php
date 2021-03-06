@extends('layouts.app')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{mix('css/produtos/produto.css')}}">
	<div class="container">	
		@include('partials._alert') 
		<a href="{{url('/produtos/add')}}" class="btn btn-primary">Adicionar Produto</a>
		@forelse($lista as $item)
			@if($loop->first)
			 <h3><strong>Lista de Produtos</strong></h3><br/>
		     <table class="table table-bordered">
			  <tr>
				<th>Produto</th>
				<th>Valor</th>
				<th>Editar</th>
				<th>Excluir</th>
			  </tr>
			@endif		
			<tr>
				<td><strong>{{ $item->item }}</strong></td>
				<td>{{ $item->valor }}</td>
				<td><a href="{{url('/produtos/editar/'.$item->id)}}" class="btn btn-default btn-lg">Editar</a></td>
				<td><a href="{{url('/produtos/excluir/'.$item->id)}}" class="btn btn-info btn-lg excluir">Excluir</a></td>
			</tr>					   
			@empty
			</table>
			<h3><strong>Sem produtos cadastrados</strong></h3>
			@endforelse
		</table>
		{{$lista->links()}}	
	</div>
@endsection
 
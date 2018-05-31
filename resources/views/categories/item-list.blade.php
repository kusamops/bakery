@extends('layout.master')

@section('title')
	Продукция
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')
	
	@if($items->first())
		<h3 class="section-title">
			{{ $items->first()->category->title }}
		</h3>


	@endif

	<div class="group-list">
		<div class="container">
			
			@if(Auth::guard('admin')->check())
				<button type="button" class="btn btn-default button-join">
					<a href="">
						Новый товар
					</a>
				</button>
			@endif

			@forelse($items as $item)
				@include('items.item')
			@empty
				Товаров для данной секции пока не существует.
			@endforelse
		</div>
	</div>
  
  
@endsection
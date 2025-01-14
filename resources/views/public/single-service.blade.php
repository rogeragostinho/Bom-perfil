@extends('public.layout.index2')

@section('conteudo')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Veja mais Detalhes</p>
                        <h1>Serviços Únicos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img class="img-fluid" src="{{url('storage/'.$servico->imagem_url)}}" alt="" style="width: 100%">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{$servico->nome}}</h3>
                        <p class="single-product-pricing"><span></span>{{number_format($servico->preco, 2, ',', '.')}} </p>
                        <p>{{$servico->descricao}} </p>
                        <div class="single-product-form">
                            <form action="{{route('carrinho.add')}}" method="post">
								@csrf
                                <input type="hidden" name="tipo" value="servico">
								<input type="hidden" name="id" value="{{ $servico->id }}">
                                <input type="hidden" name="nome" value="{{ $servico->nome }}">
                                <input type="hidden" name="preco" value="{{ $servico->preco }}">
                                <input type="number" name="quantidade" min="1" value="1"><br>
								<button type="submit" class="btn">
									<i class="fas fa-shopping-cart"></i>Adiciona ao carrinho
								</button>
                            </form>
                            
                            <p><strong>Categoria: </strong>{{$servico->categoria}} </p>
                        </div>
                        <h4>Partilha:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->
@endsection

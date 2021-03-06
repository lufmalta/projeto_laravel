@extends('layouts.app')
@section('content')
        <div class="jumbotron">
            @auth
                @if(count($lista) > 0) {{-- aqui ele pega os produtos especificamente de um usuario --}}
                    @if(count($lista) == 1) {{-- aqui é no caso de ter apenas 1 produto --}}
                    <h2>Você tem {{count($lista)}} produto cadastrado no sistema.</h2>
                    @else {{-- aqui é no caso de ter mais de 1 produto --}}
                    <h2>Você tem {{count($lista)}} produtos cadastrados no sistema.</h2>
                    @endif                 
                @else {{-- aqui é no caso de nao ter nenhum produto --}}
                 <h2>Você não possui produtos arquivados no sistema</h2>
                @endif    
            @else {{-- aqui pra frente é no caso de nao ser usuario logado --}}
                @if(count($lista) > 0) {{-- aqui ele pega os produtos de todos os usuarios --}}
                    @if(count($lista) == 1) {{-- aqui é no caso de ter só 1 produto --}}
                        <h2>Nós temos {{count($lista)}} produto arquivado no sistema.</h2>
                    @else {{-- aqui é no caso de ter mais de 1 produto --}}
                        <h2>Nós temos {{count($lista)}} produtos arquivados no sistema.</h2>
                    @endif
                @else {{-- aqui é no caso de nao ter nenhum produto --}}
                <h2>Ainda não possui produtos arquivados no sistema</h2>
                @endif
                @if(count($users) > 0) {{-- aqui é no caso de ter algum usuario no sistema --}}
                    @if(count($users) == 1) {{-- aqui no caso de ter somente 1 usuario --}}
                        <p>E {{count($users)}} usuário cadastrado.</p>
                    @else {{-- e aqui no caso de ter mais de 1 usuario --}}
                        <p>E {{count($users)}} usuários cadastrados.</p>
                    @endif      
                @else {{-- aqui é no caso de nao ter nenhum usuario --}}
                <h2>Ainda não possui usuarios cadastrados</h2> 
                @endif 
            @endauth   
       </div>
       <footer>
            <h3>Developed by Luiz Fernando Malta Martins</h3>     
            <h4>Contato: lufmalta@gmail.com</h4>
       </footer> 
    <script type="text/javascript" src="{{mix('js/website.js')}}"></script>  
    </body>
</html>
@endsection
        <!-- <nav class="navbar navbar-inverse">            
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="./" class="navbar-brand">Projeto Laravel</a>
                </div>                
                <ul class="nav navbar-nav navbar-right">
                        @auth
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                </ul>                
            </div>            
        </nav> -->
       

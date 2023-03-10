<nav class="navbar navbar-expand-md navbar-light shadow-sm" id="menu">
    <div class="container">
        <a class="navbar-brand " href="{{ url('/') }}">
            RuanBank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                <li>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown">        
                    <a  class="nav-link" href="#">
                        @foreach  (Auth::user()->BankAccount as $conta)
                       Conta: {{ $conta->counts }}
                    @endforeach  
                     </a>
                </li>
                <li class="nav-item dropdown">        
                    <a  class="nav-link" href="#">
                        @foreach  ( Auth::user()->BankAccount  as $conta)
                       Saldo: R${{ $conta->balance }}
                    @endforeach  
                     </a>
                </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home.edit') }}">Editar conta
                            </a>


                            <a  href="#" class="dropdown-item"  onclick="confirmDelete()"> Deletar conta
                                <form id="MyFormUserDelete" action="{{ route('home.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                </form>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<script>
    function confirmDelete(){

var retorno = confirm("Voc?? realmente deseja deletar a sua conta!");
if (retorno == true)
{
    document.getElementById("MyFormUserDelete").submit()

}
else
{
    <?php
  redirect('/');
  ?>
}
};
    </script>

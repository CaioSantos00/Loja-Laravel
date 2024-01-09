<header class="header">
    <button id="addMenu" class="btnsMenu">
        <x-svg-btn-abrir-sidebar/>
    </button>
    <nav class="navMenu">
        <div>
            <div id="divRemoveMenu">
                <button id="removeMenu" class="btnsMenu">
                    <x-svg-btn-remove-sidebar />
                </button>
            </div>
            <ul id="ulMenu">
                <li class="li"><a href="/">Início</a></li>
                <li class="li"><a href="/produtos">Produtos</a></li>
                <li class="li" id="logouOuNao">
                    @guest
                        <a href="/entrar">Entre</a>
                    @else
                        @can('admin')
                            <a href="/nn sei">link admin</a>
                        @endcan
                        @can('user')
                            <a href="/tbm nn sei">link perfil normal</a>
                        @endcan
                        <li class="li">
                            <form action="/logout" method="post">
                                @csrf
                                <input type="submit" name="Sair" value="Sair" title="Sair"/>
                            </form>
                        </li>
                    @endguest
                </li>
            </ul>
        </div>
        <div id="redes">
            <div class="cadaRede">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <x-svg-btn-instagram/>
                </a>
            </div>
            <div class="cadaRede">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <x-svg-btn-tiktok/>                  
                </a>
            </div>
            <div class="cadaRede">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <x-svg-btn-twitter/>
                </a>
            </div>
        </div>
    </nav>
    <a href="inicio.html">
        <img src="../imgs/Oficial.gif" alt="Logo" id="logo">
    </a>
    <div id="searchAndCar">
        <a href="/carrinho">
            <button class="btnsMenu">
                <x-svg-btn-sacola-carrinho/>
            </button>
        </a>
    </div>        
</header>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">ARRAX-APP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home <i class="bi bi-house-door"></i></a>
        </li>
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              RRHH <i class="bi bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item dropdown drop-down02 dropend">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mantenedores
                </a>
                <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('ccosto.index') }}">Nacionalidades</a></li>
                <li><a class="dropdown-item" href="{{ route('cuentap.index') }}">Previsiones</a></li>
                <li><a class="dropdown-item" href="{{ route('tipo_doc.index') }}">Profesiones</a></li>
                </ul>
              </li>
            </ul>
        </li>
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              FINANZAS <i class="bi bi-cash-coin"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
                <li class="nav-item dropdown drop-down02 dropend">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mantenedores
                  </a>
                  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('ccosto.index') }}">Centro de Costo</a></li>
                  <li><a class="dropdown-item" href="{{ route('cuentap.index') }}">Cuentas Presupuestarias</a></li>
                  <li><a class="dropdown-item" href="{{ route('tipo_doc.index') }}">Tipos de Documentos</a></li>
                  <li><a class="dropdown-item" href="{{ route('fondos.index') }}">Fondos</a></li>
                  <li><a class="dropdown-item" href="{{ route('proveedores.index') }}">Proveedores</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown dropend drop-down02">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Monedas Sistemas
                  </a>
                  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('monedas.index') }}">Agregar Moneda</a></li>
                  <li><a class="dropdown-item" href="{{ route('monedasValor.index') }}">Valor Moneda</a></li>
                  </ul>
                </li>
            </ul>
        </li>
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MANTENEDORES <i class="bi bi-gear"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('afps.index') }}">Afp</a></li>
                <li class="nav-item dropdown dropend drop-down02">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bancos
                  </a>
                  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('bancos.index') }}">Nuevo Banco</a></li>
                  <li><a class="dropdown-item" href="{{ route('bancos.cuentas') }}">Tipos de Cuentas</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="{{ route('dpto.index') }}">Departamentos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item dropdown dropend drop-down02">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estados Sistemas
                </a>
                <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('est.index') }}">Estados Usuarios</a></li>
                <li><a class="dropdown-item" href="{{ route('est_doc.index') }}">Estados Documentos</a></li>
                </ul>
              </li>
            </ul>
        </li>
	   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
			
					  <li class="nav-item dropdown drop-down02">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						  </a>
						  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
							
									 <li class="nav-item dropdown drop-down02">
										  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Dropdown
										  </a>
										  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											
													 <li class="nav-item dropdown drop-down02">
														  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
															Dropdown
														  </a>
														  <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
															<li><a class="dropdown-item" href="#">Action</a></li>
															<li><a class="dropdown-item" href="#">Another action</a></li>
															<li><hr class="dropdown-divider"></li>
															<li><a class="dropdown-item" href="#">Something else here</a></li>
														  </ul>
														</li>
										  </ul>
										</li>
						  </ul>
						</li>
          </ul>
        </li>
		
		
		
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
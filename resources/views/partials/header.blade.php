
<header class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid px-4">

        <a class="navbar-brand fw-bold" href="#">
            My Dashboard
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarContent"
                aria-controls="navbarContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route("users.index") }}">Home</a>
                </li>
            
              
            </ul>
        </div>

    </div>
</header>

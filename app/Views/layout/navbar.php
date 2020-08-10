<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
        </ul>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <form class="form">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="<?= base_url('assets'); ?>/fb.png" class="img-fluid" width="37" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="<?= base_url('assets'); ?>/tw.png" class="img-fluid" width="37" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="<?= base_url('assets'); ?>/ig.png" class="img-fluid" width="37" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="<?= base_url('assets'); ?>/yt.png" class="img-fluid" width="37" alt=""></a>
                </li>
            </ul>
        </div>

    </div>
</nav>
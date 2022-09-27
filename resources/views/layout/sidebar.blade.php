<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/" class="brand-link">
        <img src="https://github.com/account" alt="user github"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Fari</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Fari</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt nav-item"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">MASTER
                    <li class="nav-item">
                        <a href="{{route('guru.index')}}" class="nav-link">
                            <i class="fas fa-user-graduate nav-icon"></i>
                            <p>
                                Guru
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('kelas.index')}}" class="nav-link">
                            <i class="fas fa-chalkboard nav-icon"></i>
                            <p>
                                Kelas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('mapel.index')}}" class="nav-link">
                            <i class="fas fa-book nav-icon" ></i>
                            <p>
                                Mapel
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('siswa.index')}}" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>
                                Siswa
                            </p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>

    </div>

</aside>
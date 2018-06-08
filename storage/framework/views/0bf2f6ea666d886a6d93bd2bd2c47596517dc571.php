<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(url('/meuacampamento')); ?>" class="site_title"><i class="fa fa-heart"></i> <span>Tech Camping</span></a>
        </div>
        <div class="clearfix"></div>
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo e(Gravatar::src(Auth::user()->email)); ?>" alt="Avatar of <?php echo e(Auth::user()->name); ?>" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bem vindo,</span>
                <h2><?php echo e(Auth::user()->name); ?></h2>
            </div>
        </div>
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="/pessoas"><i class="fa fa-user"></i>Pessoas</a>
                    </li>
                    <li>
                        <a><i class="fa fa-life-ring"></i>Acampamentos<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/acampamento">Acampamento</a></li>
                            <li><a href="/acampamento/modalidade">Modalidades</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-wrench"></i>Trabalho<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/funcoes">Funções</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-folder-open"></i>Outros<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/cores">Cores</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-folder-open"></i>Institucional<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/institucional/galeria">Galeria</a></li>
                            <li><a href="/institucional/galeria">Notícias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
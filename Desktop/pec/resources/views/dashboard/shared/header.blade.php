<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a
            class="c-header-brand d-sm-none" href="#">PEC</a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
            data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
            use App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['top menu'])){
                FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
            }
        ?>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="nav-item dropdown">
                <?php $href = (Auth::user()->menuroles == 'consultant') ? 'consultant/profile' : 'client/profile' ;?>
                <a href="{{url($href)}}" class="btn btn-success btn-sm"> Profile</a> | 
            </li>
            <li class="c-header-nav-item dropdown pl-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <a> <form action="{{ url('/logout') }}" method="POST"> @csrf <button
                                type="submit" class="btn btn-warning btn-sm btn-block">Logout</button></form>
                         </a>
                    {{-- <div class="c-avatar"><img class="c-avatar-img"
                            src="{{ url('/assets/img/avatars/9.jpg') }}" alt="menu">
                    </div> --}}
                </a>
                {{-- <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use
                                xlink:href="{{ url('/icons/sprites/free.svg#cil-account-logout') }}">
                            </use>
                        </svg>
                        <form action="{{ url('/logout') }}" method="POST"> @csrf <button
                                type="submit" class="btn btn-ghost-dark btn-block">Logout</button></form>
                    </a>
                </div> --}}
            </li>

        </ul>
    </header>

<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <p>{{ env('APP_NAME') }}</p>
    </div>
    <!-- end user info -->

    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li data-nav="sliders">
                <a href="/admin/sliders/1/edit"><i class="fa fa-lg fa-fw fa-image"></i> <span class="menu-item-parent">Slider</span></a>
            </li>
            <li data-nav="categories">
                <a href="/admin/categories"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">Ofertas</span></a>
            </li>
            <li data-nav="products">
                <a href="/admin/products"><i class="fa fa-lg fa-fw fa-th-large"></i> <span class="menu-item-parent">Productos</span></a>
            </li>
            <li data-nav="abouts">
                <a href="/admin/abouts/1"><i class="fa fa-lg fa-fw fa-info-circle"></i> <span class="menu-item-parent">Quiénes Somos</span></a>
            </li>
            <li data-nav="services">
                <a href="/admin/services"><i class="fa fa-lg fa-fw fa-cogs"></i> <span class="menu-item-parent">Informacion</span></a>
            </li>
            <li data-nav="brands">
                <a href="/admin/brands"><i class="fa fa-lg fa-fw fa-cubes"></i> <span class="menu-item-parent">Marcas</span></a>
            </li>
        </ul>
    </nav>

    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>

</aside>

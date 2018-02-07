<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="backend/img/avatars/sunny.png" alt="me" class="online" />
						<span>
							john.doe
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="top-menu-invisible">
                <a href="#">
                    <i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
                    <span class="menu-item-parent">{{__('backend.table_category')}}</span>
                </a>
                <ul>
                    <li class="">
                        <a href="{{route('category.create')}}" title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-gear"></i>
                            <span class="menu-item-parent">{{__('backend.create_new')}}</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('category.index')}}" title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-gear"></i>
                            <span class="menu-item-parent">{{__('backend.list')}}</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="top-menu-invisible">
                <a href="#">
                    <i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i>
                    <span class="menu-item-parent">{{__('backend.table_article')}}</span>
                </a>
                <ul>
                    <li class="">
                        <a href="{{route('article.create')}}" title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-gear"></i>
                            <span class="menu-item-parent">{{__('backend.create_new')}}</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('article.index')}}" title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-gear"></i>
                            <span class="menu-item-parent">{{__('backend.list')}}</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
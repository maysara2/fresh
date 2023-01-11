<header>
    @php($setting=\App\Models\Setting::first())

    <a href="javascript:void(0)" id="nav-toggle"><span></span></a>
    <div class="logo">
        <a href="{{route('home')}}" id="logo" title="{{$setting->website_logo}}">
            <img
                src="//felceazzurrait.cdn-immedia.net//sites/all/themes/felceazzurra/img/share/blank.png"
                data-src="{{asset('assets/images/settings/'.$setting->website_logo)}}"
                alt="{{$setting->website_logo}}" title="Felce Azzurra"
                width="151" height="89"
                class="lazyload"
            />
        </a>
    </div>

    <nav>
        <div id="ul_main-menu">
            <div id="main-menu">
                @php($categories = \App\Models\Category::orderby('id' ,'ASC')->whereNull('parent_id')->get())


                    <ul id="main-menu-2">
                        <li  class="submenu" ><a href="http://www.felceazzurrabio.it/" target="_blank"><span>@lang('lang.Felce Azzurra Bio')</span></a> </li>

                        <li class="submenu">
                            <a  href="{{route('labrosan')}}" class="submenu " title="لابروسان" >
                                <span >@lang('labrosan.Labrosan')</span>
                            </a>
                            <div>
                                <ul>


                                    <li>
                                        <a href="{{route('labrosan')}}" class=""  target="_blank" title="لابروسان">
                                            <div class="blocco_svg">
                                                <img src="{{asset('assets/images/categories/labrosan.png')}}" width="100%" height="100%" style="height:60px;">

                                            </div>
                                            <span >@lang('labrosan.Labrosan')</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="submenu">
                            <a  href="{{route('saponello')}}" class="submenu " title="سابونيلو" >
                                <span >@lang('saponello.SapoNello')</span>
                            </a>
                            <div>
                                <ul>


                                    <li>
                                        <a href="{{route('saponello')}}" class=""  target="_blank" title="سابونيلو">
                                            <div class="blocco_svg">
                                                <img src="{{asset('assets/images/shampoo.png')}}" width="100%" height="100%" style="height:60px;">

                                            </div>
                                            <span >@lang('saponello.SapoNello')</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="submenu">
                            <a  href="{{route('category.index',$categories[0]->slug)}}" class="submenu " title="{{$categories[0]->title}}" >
                                <span >{{$categories[0]->title}}</span>
                            </a>
                            <div>
                                <ul>

                                    @foreach($categories[0]->children as $child_category)

                                        <li>
                                            <a href="{{url('/'.app()->getLocale().'/'.$child_category->parent->slug.'/'.$child_category->slug)}}" class="" title="Bodywash">
                                                <div class="blocco_svg">
                                                    <img src="{{asset('assets/images/categories/'.$child_category->icon_image_blue)}}" width="100%" height="100%" style="height:60px;">

                                                </div>
                                                <span>{{$child_category->title}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>



                    </ul>
                    <ul id="main-menu-1" style="margin-left:-50px;">
                        <li class="first " title="algin">
                            <a href="{{url(app()->getLocale()).'/felceazzurra/location/agent/word'}}" class="submenu"><span>
                                @lang('lang.Agent network')</span></a><div class="mini"></div>
                        </li>
                        <li class="submenu " title="@lang('lang.The story of a perfume')">
                            <a href="{{route('story-perfume')}}" class="submenu"><span>
                                @lang('lang.The story of a perfume')</span></a>
                            <div class="mini"></div></li>
                        <li class="submenu">
                            <a  href="{{route('category.index',$categories[1]->slug)}}" class="submenu " title="{{$categories[1]->title}}" >
                                <span >{{$categories[1]->title}}</span>
                            </a>
                            <div>
                                <ul>

                                    @foreach($categories[1]->children as $child_category)

                                        <li>
                                            <a href="{{url('/'.app()->getLocale().'/'.$child_category->parent->slug.'/'.$child_category->slug)}}" class="" title="Bodywash">
                                                <div class="blocco_svg">
                                                    <img src="{{asset('assets/images/categories/'.$child_category->icon_image_blue)}}" width="100%" height="100%" style="height:60px;">

                                                </div>
                                                <span>{{$child_category->title}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="submenu">
                            <a  href="{{route('category.index',$categories[2]->slug)}}" class="submenu " title="{{$categories[2]->title}}" >
                                <span >{{$categories[2]->title}}</span>
                            </a>
                            <div>
                                <ul>

                                    @foreach($categories[2]->children as $child_category)

                                        <li>
                                            <a href="{{url('/'.app()->getLocale().'/'.$child_category->parent->slug.'/'.$child_category->slug)}}" class="" title="Bodywash">
                                                <div class="blocco_svg">
                                                    <img src="{{asset('assets/images/categories/'.$child_category->icon_image_blue)}}" width="100%" height="100%" style="height:60px;">

                                                </div>
                                                <span>{{$child_category->title}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>






                    </ul>




                <ul class="language-switcher-locale-url">
                    @if(app()->getLocale()=='ar')
                        <li class="en first ">
                            <a  rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('he', null, [], true) }}">
                                עִברִית
                            </a>
                        </li>
                    @else
                        <li class="it last">

                            <a  rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                عربي
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>



</header>

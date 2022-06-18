<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
       <div class="main-menu-content">
              <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                     <li class="nav-item active"><a href=""><i
                                          class="la la-mouse-pointer"></i><span class="menu-title"
                                          data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
                     </li>

                     <li class="nav-item <?php if($active_links[0] == 'emails')  echo 'open'; ?> ">
                            <a href="">
                                   <i class="la la-television"></i>
                                   <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/sidebar.mailing')}}</span>
                                   {{-- <span class="badge badge badge-danger  badge-pill float-right mr-2">0</span> --}}
                            </a>
                            <ul class="menu-content">
                                   <li class="<?php if($active_links[1] === 'addemails') echo 'active'; ?>"><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">{{__('admin/sidebar.send_email')}}</a>
                                   </li>
                            </ul>
                     </li>



                     <li class="nav-item  <?php if($active_links[0] == 'users')  echo 'open'; ?> "><a href=""><i
                            class="la la-group"></i>
                     <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/sidebar.clients')}}</span>
                     <span class="badge badge badge-success badge-pill float-right mr-2">10
                     </span>
              </a>
              <ul class="menu-content">
                     <li class="<?php if($active_links[1] === 'showusers') echo 'active'; ?> "><a
                                   class="menu-item" href="{{route('dashboard.users.index')}}"
                                   data-i18n="nav.dash.ecommerce"> {{__('admin/sidebar.show_all')}} </a>
                     </li>
              </ul>
       </li>





                     <li class="nav-item  <?php if($active_links[0] == 'mainCat')  echo 'open'; ?> "><a href=""><i
                                          class="la la-group"></i>
                                   <span class="menu-title" data-i18n="nav.dash.main">الاقسام</span>
                                   <span class="badge badge badge-danger badge-pill float-right mr-2">
                                       @php
                                           $departs_count = \App\Models\Department::count();
                                       @endphp
                                       {{$departs_count}}
                                   </span>
                            </a>
                            <ul class="menu-content">
                                   <li class="<?php if($active_links[0] === 'departs') echo 'active'; ?> "><a
                                                 class="menu-item" href="{{route('all-departments')}}"
                                                 data-i18n="nav.dash.ecommerce"> عرض الكل</a>
                                   </li>
                                   <li class="<?php if($active_links[1] === 'addMainCat') echo 'active'; ?>"><a
                                                 class="menu-item" href="  "
                                                 data-i18n="nav.dash.crypto">{{__('admin/sidebar.add_cat')}}</a>
                                   </li>
                            </ul>
                     </li>



              </ul>
       </div>
</div>

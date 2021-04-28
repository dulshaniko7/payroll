<aside class="main-sidebar" style="background-color:#232b2b" >
    <section class="sidebar" style="line-height: 25px;font-size: 15px; font-family:'Helvetica Neue','Helvetica','Arial', 'Helvetica', 'sans-serif';">
        <ul class="sidebar-menu tree new-menu" data-widget="tree">
            @can('user_management_access')
            <li>
                <a href="">
                <i class="fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
                </a>
            </li>
            @endcan
            <li>
                <a href="">
                    <i class="fas fa-fw fa-shipping-fast">

                    </i>
                    My Purchases
                </a>
            </li>

            @can('product_access')
            <li class="{{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
            <a href="">
            <i class="fa-fw fas fa-cogs">

            </i>
            <span>{{ trans('cruds.product.title') }}</span>

            </a>
            </li>
            @endcan

            @can('tax_access')
            <li class="{{ request()->is("admin/taxes") || request()->is("admin/taxes/*") ? "active" : "" }}">
            <a href="">
            <i class="fa-fw fas fa-cogs">

            </i>
            <span>{{ trans('cruds.tax.title') }}</span>

            </a>
            </li>
            @endcan
            @can('shopping_access')
            <li class="{{ request()->is("shop/home") || request()->is("shop/home/*") ? "active" : "" }}">
            <a href="">
            <i class="fa-fw fas fa-shopping-cart">

            </i>
            <span>Shop</span>

            </a>
            </li>
            @endcan
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa-fw fas fa-users">

                    </i>
                    <span>{{ trans('cruds.userManagement.title') }}</span>
                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @can('permission_access')
                    <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                    <a href="">
                    <i class="fa-fw fas fa-unlock-alt">

                    </i>
                    <span>{{ trans('cruds.permission.title') }}</span>

                    </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                    <a href="">
                    <i class="fa-fw fas fa-briefcase">

                    </i>
                    <span>{{ trans('cruds.role.title') }}</span>

                    </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                    <a href="">
                    <i class="fa-fw fas fa-user">

                    </i>
                    <span>{{ trans('cruds.user.title') }}</span>

                    </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('student_access')
            <li class="{{ request()->is("student/home") || request()->is("student/home/*") ? "active" : "" }}">
            <a href="">
            <i class="fa-fw fas fa-user-graduate">

            </i>
            <span>Student</span>

            </a>
            </li>
            @endcan


            <!--  @can('client_management_access')
                  <li class="treeview">
                      <a href="#">
                          <i class="fa-fw fas fa-cogs">

                          </i>
                          <span>{{ trans('cruds.clientManagement.title') }}</span>
                          <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                      </a>
                      <ul class="treeview-menu">
                          @can('country_access')
                              <li class="{{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "active" : "" }}">
                                  <a href="{{ route("admin.countries.index") }}">
                                      <i class="fa-fw fas fa-flag">

                                      </i>
                                      <span>{{ trans('cruds.country.title') }}</span>

                                  </a>
                              </li>
                          @endcan
                          @can('invoice_access')
                              <li class="{{ request()->is("admin/invoices") || request()->is("admin/invoices/*") ? "active" : "" }}">
                                  <a href="{{ route("admin.invoices.index") }}">
                                      <i class="fa-fw fas fa-cogs">

                                      </i>
                                      <span>{{ trans('cruds.invoice.title') }}</span>

                                  </a>
                              </li>
                          @endcan
                          @can('customer_access')
                              <li class="{{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "active" : "" }}">
                                  <a href="{{ route("admin.customers.index") }}">
                                      <i class="fa-fw fas fa-cogs">

                                      </i>
                                      <span>{{ trans('cruds.customer.title') }}</span>

                                  </a>
                              </li>
                          @endcan
                      </ul>
                  </li>
              @endcan -->

            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
            <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                <a href="">
                    <i class="fa-fw fas fa-key">
                    </i>
                    {{ trans('global.change_password') }}
                </a>
            </li>
            @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>


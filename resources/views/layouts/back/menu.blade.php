      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin_settings_edit')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ayarlar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{route('admin_users')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kullanıcılar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ürünler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin_product_add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ürün Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ürün Liste</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                SSS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin_faq_add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Soru Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_faq')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Soru Liste</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin_message')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mesajlar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kategoriler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin_category_add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Liste</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Siparişler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin_orders',['status'=>'New'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('admin_orders',['status'=>'Accepted'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_orders',['status'=>'Shipping'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shipping</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_orders',['status'=>'Canceled'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Canceled</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_orders',['status'=>'Completed'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Completed</p>
                </a>
              </li>
              
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <div class="content-wrapper">

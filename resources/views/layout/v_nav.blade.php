<ul class="sidebar-menu" data-widget="tree">
      
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/')?'active' :''}}"><a href="/dashboard"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{request()->is('inventaris')?'active' :''}}"><a href="/inventaris"><i class="fa fa-book"></i> <span>Inventaris</span></a></li>
        <li class="{{request()->is('suratmasuk')?'active' :''}}"><a href="/suratmasuk"><i class="fa fa-book"></i> <span>Surat Masuk</span></a></li>
        <li class="{{request()->is('pegawai')?'active' :''}}"><a href="/pegawai"><i class="fa fa-book"></i> <span>Pegawai</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                 <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>           
</ul>
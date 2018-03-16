<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="active">
						@if (Auth::check())
						<a href="/home">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						@endif

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							@role('admin')
							<li class="">
								<a href="{{ route('kategoris.index') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									Kategori
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="{{ route('berita.index') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									Berita
								</a>

								<b class="arrow"></b>
							</li>
							@endrole

							@role('penulis')

							<li class="">
								<a href="{{ route('berita.index') }}">
									<i class="menu-icon fa fa-caret-right"></i>
									Berita
								</a>

								<b class="arrow"></b>
							</li>
							@endrole

						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			
			
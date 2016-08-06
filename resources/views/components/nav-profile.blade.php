<li class="dropdown user-profile">
	<a href="#" data-toggle="dropdown">
		<img src="images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
		<span>
			{{ Auth::user()->name }}
			<i class="fa-angle-down"></i>
		</span>
	</a>
	
	<ul class="dropdown-menu user-profile-menu list-unstyled">
		<li>
			<a href="#edit-profile">
				<i class="fa-edit"></i>
				New Post
			</a>
		</li>
		<li>
			<a href="#settings">
				<i class="fa-wrench"></i>
				Settings
			</a>
		</li>
		<li>
			<a href="#profile">
				<i class="fa-user"></i>
				Profile
			</a>
		</li>
		<li>
			<a href="#help">
				<i class="fa-info"></i>
				Help
			</a>
		</li>
		<li class="last">
			<a href="{{ url('/logout') }}">
				<i class="fa-lock"></i>
				Logout
			</a>
		</li>
	</ul>
</li>

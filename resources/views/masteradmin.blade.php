<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
	<!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css"> -->
	@yield('custom-css-admin')
	
	<title>ADMIN GKSBS</title>
</head>

<body class="text-sm sidebar-mini layout-fixed layout-navbar-fixed @yield('body-class')">
	<div class="wrapper">
		@include('admin.nav')

        <div class="container-fluid">

            @yield('contents')
            
            <!-- <h1 class="mt-4">laravel 7 Simple Sidebar Template</h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p> -->
        </div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/admin.js') }}"></script>
	<script>
		// $.widget.bridge('uibutton', $.ui.button)
	</script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
	<!-- <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> -->

	<!-- tanda -->
	<script>
	/** add active class and stay opened when selected */
	var url = window.location;
	const allLinks = document.querySelectorAll('.nav-item a');
	const currentLink = [...allLinks].filter(e => {
		return e.href == url;
	});

	if (currentLink.length > 0) { //this filter because some links are not from menu
		currentLink[0].classList.add("active");
		//currentLink[0].closest(".nav-treeview").style.display = "block";
		//currentLink[0].closest(".has-treeview").classList.add("active");
	}
	</script>
    @yield('custom-js-admin')
</body>

</html>
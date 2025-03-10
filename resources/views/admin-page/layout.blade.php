<!doctype html>
<html lang="en">
	<!-- [Head] start -->
	<head>
		<title>Home | Mantis Bootstrap 5 Admin Template</title>
		<!-- [Meta] -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
		<meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
		<meta name="author" content="CodedThemes">
		<!-- [Favicon] icon -->
		<link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
		<!-- [Google Font] Family -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
		<!-- [phosphor Icons] https://phosphoricons.com/ -->
		<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
		<!-- [Tabler Icons] https://tablericons.com -->
		<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
		<!-- [Feather Icons] https://feathericons.com -->
		<link rel="stylesheet" href="../assets/fonts/feather.css">
		<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
		<link rel="stylesheet" href="../assets/fonts/fontawesome.css">
		<!-- [Material Icons] https://fonts.google.com/icons -->
		<link rel="stylesheet" href="../assets/fonts/material.css">
		<!-- [Template CSS Files] -->
		<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
		<link rel="stylesheet" href="../assets/css/style-preset.css">
	</head>
	<!-- [Head] end --><!-- [Body] Start -->
	<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
		<!-- [ Pre-loader ] start -->
		<div class="loader-bg">
			<div class="loader-track">
				<div class="loader-fill"></div>
			</div>
		</div>
		<!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
		<nav class="pc-sidebar">
			<div class="navbar-wrapper">
				<div class="m-header">
					<a href="../dashboard/index.html" class="b-brand text-primary">
						<!-- ========   Change your logo from here   ============ --> <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
					</a>
				</div>
				<div class="navbar-content">
					<ul class="pc-navbar">
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#dashboard"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Dashboard">Dashboard</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../dashboard/index.html" data-i18n="Default">Default</a></li>
								<li class="pc-item"><a class="pc-link" href="../dashboard/analytics.html" data-i18n="Analytics">Analytics</a></li>
								<li class="pc-item"><a class="pc-link" href="../dashboard/finance.html" data-i18n="Finance">Finance</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Widget">Widget</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#line-chart"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item">
							<a href="../widget/w_statistics.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#idcard"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Statistics">Statistics</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../widget/w_data.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#database"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Data">Data</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../widget/w_chart.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#line-chart"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Chart">Chart</span>
							</a>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Admin Panel">Admin Panel</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#read"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#read"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Online Courses">Online Courses</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../admins/course-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#!"><span data-i18n="Teacher">Teacher</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../admins/course-teacher-list.html" data-i18n="List">List</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-teacher-apply.html" data-i18n="Apply">Apply</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-teacher-add.html" data-i18n="Add">Add</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#!"><span data-i18n="Student">Student</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../admins/course-student-list.html" data-i18n="List">list</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-student-apply.html" data-i18n="Apply">Apply</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-student-add.html" data-i18n="Add">Add</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#!"><span data-i18n="Courses">Courses</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../admins/course-course-view.html" data-i18n="View">View</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-course-add.html" data-i18n="Add">Add</a></li>
									</ul>
								</li>
								<li class="pc-item"><a class="pc-link" href="../admins/course-pricing.html" data-i18n="Pricing">Pricing</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/course-site.html" data-i18n="Site">Site</a></li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#!"><span data-i18n="Setting">Setting</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../admins/course-setting-payment.html" data-i18n="Payment">Payment</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-setting-pricing.html" data-i18n="Pricing">Pricing</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/course-setting-notifications.html" data-i18n="Notifications">Notifications</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#team"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Membership">Membership</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../admins/membership-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/membership-list.html" data-i18n="List">List</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/membership-pricing.html" data-i18n="Pricing">Pricing</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/membership-setting.html" data-i18n="Setting">Setting</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#tool"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Helpdesk">Helpdesk</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#!"><span data-i18n="Ticket">Ticket</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../admins/helpdesk-create-ticket.html" data-i18n="Create">Create</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket.html" data-i18n="List">List</a></li>
										<li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket-details.html" data-i18n="Details">Details</a></li>
									</ul>
								</li>
								<li class="pc-item"><a class="pc-link" href="../admins/helpdesk-customer.html" data-i18n="Customer">Customer</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#file-text"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Invoice">invoice</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../admins/invoice-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/invoice-create.html" data-i18n="Create">Create</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/invoice-view.html" data-i18n="Details">Details</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/invoice-list.html" data-i18n="List">List</a></li>
								<li class="pc-item"><a class="pc-link" href="../admins/invoice-edit.html" data-i18n="Edit">Edit</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Application">Application</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#build"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item">
							<a href="../application/chat.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#message"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Chat">Chat</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../application/calendar.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#calendar"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Calender">Calendar</span>
							</a>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#customer-service"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Customer">Customer</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../application/cust_customer_list.html" data-i18n="Customer-List">Customer List</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#user"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Users">Users</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../application/user-profile.html" data-i18n="User Profile">User Profile</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/account-profile.html" data-i18n="Account Profile">Account Profile</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/user-list.html" data-i18n="List">User List</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/user-card.html" data-i18n="Cards">User Card</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#shopping-cart"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Ecommerce">E-commerce</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../application/ecom_product.html" data-i18n="Product">Product</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/ecom_product-details.html" data-i18n="Product-Detail">Product details</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/ecom_product-list.html" data-i18n="Product-List">Product List</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/ecom_product-add.html" data-i18n="Add New Product">Add New Product</a></li>
								<li class="pc-item"><a class="pc-link" href="../application/ecom_checkout.html" data-i18n="Checkout">Checkout</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Layout Demo">Layout Demo</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#layout"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item">
							<a href="../demo/layout-vertical.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#layout"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Vertical">Vertical</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../demo/layout-horizontal.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#credit-card"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Horizontal">Horizontal</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../demo/layout-compact.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#split-cells"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Compact">Compact</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../demo/layout-tab.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#apartment"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Tab">Tab</span>
							</a>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="UI Components">UI Components</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#gold"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item">
							<a href="../elements/bc_alert.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#gold"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Components">Components</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../elements/animation.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#sync"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Animation">Animation</span>
							</a>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#highlight"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Icons">Icons</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../elements/icon-ant.html" data-i18n="Ant">Ant</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-feather.html" data-i18n="Feather">Feather</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-fontawesome.html" data-i18n="Font Awesome 5">Font Awesome 5</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-material.html" data-i18n="Material">Material</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html" data-i18n="Tabler">Tabler</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-phosphor.html" data-i18n="Phosphor">Phosphor</a></li>
								<li class="pc-item"><a class="pc-link" href="../elements/icon-custom.html" data-i18n="Custom">Custom</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Forms">Forms</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#file-done"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#file-done"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Form Elements">Forms Elements</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../forms/form_elements.html" data-i18n="Form Basic">Form Basic</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form_floating.html" data-i18n="Form Floating">Form Floating</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html" data-i18n="Form Options">Form Options</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_input_group.html" data-i18n="Input Group">Input Groups</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html" data-i18n="CheckBox">Checkbox</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html" data-i18n="Radio">Radio</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html" data-i18n="Switch">Switch</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_megaoption.html" data-i18n="Mega Option">Mega option</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#appstore-add"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Form Plugins">Forms Plugins</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#"><span data-i18n="Date">Date</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../forms/form2_datepicker.html" data-i18n="Date Picker">Datepicker</a></li>
										<li class="pc-item"><a class="pc-link" href="../forms/form2_daterangepicker.html" data-i18n="Date Range Picker">Date Range Picker</a></li>
										<li class="pc-item"><a class="pc-link" href="../forms/form2_timepicker.html" data-i18n="Timepicker">Timepicker</a></li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#"><span data-i18n="Select">Select</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../forms/form2_choices.html" data-i18n="Choices js">Choices js</a></li>
									</ul>
								</li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_rating.html" data-i18n="Rating">Rating</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html" data-i18n="Google-Re-Captcha">Google reCaptcha</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html" data-i18n="Input Mask">Input Masks</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html" data-i18n="ClipBoard">Clipboard</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_nouislider.html" data-i18n="Nouislider">Nouislider</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html" data-i18n="Bootstrap Switch">Bootstrap Switch</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html" data-i18n="TypeaHead">Typeahead</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#signature"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Text Editor">Text Editors</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html" data-i18n="Tinymce">Tinymce</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html" data-i18n="Quill">Quill</a></li>
								<li class="pc-item pc-hasmenu">
									<a class="pc-link" href="#"><span data-i18n="CK editor">CK editor</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../forms/editor-classic.html" data-i18n="classic">classic</a></li>
										<li class="pc-item"><a class="pc-link" href="../forms/editor-document.html" data-i18n="Document">Document</a></li>
										<li class="pc-item"><a class="pc-link" href="../forms/editor-inline.html" data-i18n="Inline">Inline</a></li>
										<li class="pc-item"><a class="pc-link" href="../forms/editor-balloon.html" data-i18n="Balloon">Balloon</a></li>
									</ul>
								</li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html" data-i18n="Markdown">Markdown</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#reconciliation"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Form Layouts">Form Layouts</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../forms/form2_lay-default.html" data-i18n="Layouts">Layouts</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_lay-multicolumn.html" data-i18n="MultiColumn">Multicolumn</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_lay-actionbars.html" data-i18n="ActionBars">Actionbars</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_lay-stickyactionbars.html" data-i18n="Sticky-ActionBar">Sticky Action bars</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#cloud-upload"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="File Upload">File upload</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../forms/file-upload.html" data-i18n="Dropzone">Dropzone</a></li>
								<li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html" data-i18n="Uppy">Uppy</a></li>
							</ul>
						</li>
						<li class="pc-item">
							<a href="../forms/form2_wizard.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#container"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="wizard">wizard</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../forms/form-validation.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#file-protect"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Form Validation">Form Validation</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../forms/image_crop.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#group"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Images Cropper">Image cropper</span>
							</a>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Tables">table</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#table"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#table"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Bootstrap Table">Bootstrap table</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html" data-i18n="Basic Table">Basic table</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html" data-i18n="Sizing table">Sizing table</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_border.html" data-i18n="Border table">Border table</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html" data-i18n="Styling table">Styling table</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#insert-row-above"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Vanilla table">Vanilla table</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html" data-i18n="Basic initialization">Basic initialization</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html" data-i18n="Dynamic Import">Dynamic Import</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html" data-i18n="Render Column Cells">Render Column Cells</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html" data-i18n="Column Manipulation">Column Manipulation</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html" data-i18n="Datetime Sorting">Datetime Sorting</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html" data-i18n="Methods">Methods</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html" data-i18n="Add Rows">Add Rows</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html" data-i18n="Fetch API">Fetch API</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html" data-i18n="Filters">Filters</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html" data-i18n="Export">Export</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#database"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Data Table">Data table</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../table/dt_advance.html" data-i18n="Advance initialization">Advance initialization</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_styling.html" data-i18n="Styling">Styling</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_api.html" data-i18n="API">API</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html" data-i18n="Plug-in">Plug-in</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_sources.html" data-i18n="Data sources">Data sources</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#pic-left"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="DT extensions">DT extensions</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html" data-i18n="Autofill">Autofill</a></li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link"><span data-i18n="Button" data-i18n="Button">Button</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html" data-i18n="Basic button">Basic button</a></li>
										<li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html" data-i18n="Data export">Data export</a></li>
									</ul>
								</li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html" data-i18n="Col reorder">Col reorder</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html" data-i18n="Fixed columns">Fixed columns</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html" data-i18n="Fixed header">Fixed header</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html" data-i18n="Key table">Key table</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html" data-i18n="Responsive">Responsive</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html" data-i18n="Row reorder">Row reorder</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html" data-i18n="Scroller">Scroller</a></li>
								<li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html" data-i18n="Select table">Select table</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Charts">Charts</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#pie-chart"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#pie-chart"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Charts">Charts</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html" data-i18n="Apex Chart">Apex Chart</a></li>
								<li class="pc-item"><a class="pc-link" href="../chart/chart-peity.html" data-i18n="Peity Chart">Peity Chart</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#environment"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Map">Maps</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="../chart/map-vector.html" data-i18n="Vector Map">Vector Maps</a></li>
								<li class="pc-item"><a class="pc-link" href="../chart/map-gmap.html" data-i18n="Google Map">Gmaps</a></li>
							</ul>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="pages">Pages</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#laptop"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#login"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Authentication">Authentication</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login.html" data-i18n="Login">Login</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register.html" data-i18n="Register">Register</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password.html" data-i18n="Forget Password">Forgot Password</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password.html" data-i18n="Reset Password">reset password</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/check-mail.html" data-i18n="Check Mail">check mail</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification.html" data-i18n="Code Verification">code verification</a></li>
							</ul>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#bug"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Maintenance">Maintenance</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-404.html" data-i18n="Error 404">Error 404</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-500.html" data-i18n="Error 500">Error 500</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon.html" data-i18n="Coming-Soon">Coming soon</a></li>
								<li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction.html" data-i18n="Under construction">Under construction</a></li>
							</ul>
						</li>
						<li class="pc-item">
							<a href="../pages/contact-us.html" class="pc-link" target="_blank">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#phone"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Contact Us">Contact us</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../pages/price.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#dollar-circle"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Price">Price</span>
							</a>
						</li>
						<li class="pc-item">
							<a href="../index.html" class="pc-link" target="_blank">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#rocket"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Landing">Landing</span>
							</a>
						</li>
						<li class="pc-item pc-caption">
							<label data-i18n="Other">Other</label>
							<i class="pc-micon">
								<svg class="pc-icon">
									<use xlink:href="#chrome"></use>
								</svg>
							</i>
						</li>
						<li class="pc-item pc-hasmenu">
							<a href="#!" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#swap"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Menu levels">Menu levels</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
							</a>
							<ul class="pc-submenu">
								<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level 2.1</a></li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link"><span data-i18n="Level 2.2">Level 2.2</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
										<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link"><span data-i18n="Level 3.3">Level 3.3</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.1">Level 4.1</a></li>
												<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.2">Level 4.2</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="pc-item pc-hasmenu">
									<a href="#!" class="pc-link"><span data-i18n="Level 2.2">Level 2.3</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
									<ul class="pc-submenu">
										<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
										<li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
										<li class="pc-item pc-hasmenu">
											<a href="#!" class="pc-link"><span data-i18n="Level 3.3">Level 3.3</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
											<ul class="pc-submenu">
												<li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
												<li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="pc-item">
							<a href="../other/sample-page.html" class="pc-link">
								<span class="pc-micon">
									<svg class="pc-icon">
										<use xlink:href="#chrome"></use>
									</svg>
								</span>
								<span class="pc-mtext" data-i18n="Sample Page">Sample page</span>
							</a>
						</li>
					</ul>
					<div class="card text-center">
						<div class="card-body">
							<img src="../assets/images/img-navbar-card.png" alt="images" class="img-fluid mb-2">
							<h5>Help?</h5>
							<p>Get to resolve query</p>
							<button class="btn btn-success">Support</button>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
		<header class="pc-header">
			<div class="header-wrapper">
				<!-- [Mobile Media Block] start -->
				<div class="me-auto pc-mob-drp">
					<ul class="list-unstyled">
						<!-- ======= Menu collapse Icon ===== -->
						<li class="pc-h-item pc-sidebar-collapse">
							<a href="#" class="pc-head-link ms-0" id="sidebar-hide">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#menu"></use>
									</svg>
								</i>
							</a>
						</li>
						<li class="pc-h-item pc-sidebar-popup">
							<a href="#" class="pc-head-link ms-0" id="mobile-collapse">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#menu"></use>
									</svg>
								</i>
							</a>
						</li>
						<li class="dropdown pc-h-item d-inline-flex d-md-none">
							<a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#search"></use>
									</svg>
								</i>
							</a>
							<div class="dropdown-menu pc-h-dropdown drp-search">
								<form class="px-3">
									<div class="mb-0 d-flex align-items-center"><i data-feather="search"></i> <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ."></div>
								</form>
							</div>
						</li>
						<li class="pc-h-item d-none d-md-inline-flex">
							<form class="header-search"><i data-feather="search" class="icon-search"></i> <input type="search" class="form-control" placeholder="Search here. . ."></form>
						</li>
					</ul>
				</div>
				<!-- [Mobile Media Block end] -->
				<div class="ms-auto">
					<ul class="list-unstyled">
						<li class="dropdown pc-h-item pc-mega-menu">
							<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#windows"></use>
									</svg>
								</i>
							</a>
							<div class="dropdown-menu pc-h-dropdown pc-mega-dmenu">
								<div class="row g-0">
									<div class="col image-block">
										<h2 class="text-white">Explore Components</h2>
										<p class="text-white my-4">Try our pre made component pages to check how it feels and suits as per your need.</p>
										<div class="row align-items-end">
											<div class="col-auto">
												<div class="btn btn btn-light">View All <i class="ti ti-arrow-narrow-right"></i></div>
											</div>
											<div class="col"><img src="../assets/images/mega-menu/chart.svg" alt="image" class="img-fluid img-charts"></div>
										</div>
									</div>
									<div class="col">
										<h6 class="mega-title">UI Components</h6>
										<ul class="pc-mega-list">
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Alerts</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Accordions</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Avatars</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Badges</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Breadcrumbs</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Button</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Buttons Groups</a></li>
										</ul>
									</div>
									<div class="col">
										<h6 class="mega-title">UI Components</h6>
										<ul class="pc-mega-list">
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Menus</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Media Sliders / Carousel</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Modals</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Pagination</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Progress Bars &amp; Graphs</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Search Bar</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Tabs</a></li>
										</ul>
									</div>
									<div class="col">
										<h6 class="mega-title">Advance Components</h6>
										<ul class="pc-mega-list">
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Stats</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Cards</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Lightbox</a></li>
											<li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Notification</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown pc-h-item">
							<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#translation"></use>
									</svg>
								</i>
							</a>
							<div class="dropdown-menu dropdown-menu-end pc-h-dropdown lng-dropdown"><a href="#!" class="dropdown-item" data-lng="en"><span>English <small>(UK)</small> </span></a><a href="#!" class="dropdown-item" data-lng="fr"><span>français <small>(French)</small> </span></a><a href="#!" class="dropdown-item" data-lng="ro"><span>Română <small>(Romanian)</small> </span></a><a href="#!" class="dropdown-item" data-lng="cn"><span>中国人 <small>(Chinese)</small></span></a></div>
						</li>
						<li class="dropdown pc-h-item">
							<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#bell"></use>
									</svg>
								</i>
								<span class="badge bg-success pc-h-badge">3</span>
							</a>
							<div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<h5 class="m-0">Notification</h5>
									<a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-circle-check text-success"></i></a>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
									<div class="list-group list-group-flush w-100">
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<div class="user-avtar bg-light-success"><i class="ti ti-gift"></i></div>
												</div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">3:00 AM</span>
													<p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
													<span class="text-muted">2 min ago</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<div class="user-avtar bg-light-primary"><i class="ti ti-message-circle"></i></div>
												</div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">6:00 PM</span>
													<p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
													<span class="text-muted">5 August</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<div class="user-avtar bg-light-danger"><i class="ti ti-settings"></i></div>
												</div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">2:45 PM</span>
													<p class="text-body mb-1">Your Profile is Complete &nbsp; <b>60%</b></p>
													<span class="text-muted">7 hours ago</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0">
													<div class="user-avtar bg-light-primary"><i class="ti ti-headset"></i></div>
												</div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">9:10 PM</span>
													<p class="text-body mb-1"><b>Cristina Danny</b> invited to join <b>Meeting.</b></p>
													<span class="text-muted">Daily scrum meeting time</span>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<div class="text-center py-2"><a href="#!" class="link-primary">View all</a></div>
							</div>
						</li>
						<li class="dropdown pc-h-item">
							<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#mail"></use>
									</svg>
								</i>
							</a>
							<div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<h5 class="m-0">Message</h5>
									<a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-header px-0 text-wrap message-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
									<div class="list-group list-group-flush w-100">
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"></div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">3:00 AM</span>
													<p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
													<span class="text-muted">2 min ago</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0"><img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar"></div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">6:00 PM</span>
													<p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
													<span class="text-muted">5 August</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0"><img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar"></div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">2:45 PM</span>
													<p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
													<span class="text-muted">7 hours ago</span>
												</div>
											</div>
										</a>
										<a class="list-group-item list-group-item-action">
											<div class="d-flex">
												<div class="flex-shrink-0"><img src="../assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar"></div>
												<div class="flex-grow-1 ms-1">
													<span class="float-end text-muted">9:10 PM</span>
													<p class="text-body mb-1"><b>Cristina Danny</b> invited to join <b>Meeting.</b></p>
													<span class="text-muted">Daily scrum meeting time</span>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<div class="text-center py-2"><a href="#!" class="link-primary">View all</a></div>
							</div>
						</li>
						<li class="dropdown pc-h-item">
							<a class="pc-head-link me-0" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
								<i>
									<svg class="pc-icon">
										<use xlink:href="#setting"></use>
									</svg>
								</i>
							</a>
						</li>
						<li class="dropdown pc-h-item header-user-profile">
							<a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"> <span>Stebin Ben</span></a>
							<div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
								<div class="dropdown-header">
									<div class="d-flex mb-1">
										<div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35"></div>
										<div class="flex-grow-1 ms-3">
											<h6 class="mb-1">Stebin Ben</h6>
											<span>UI/UX Designer</span>
										</div>
										<a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
									</div>
								</div>
								<ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
									<li class="nav-item" role="presentation"><button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i> Profile</button></li>
									<li class="nav-item" role="presentation"><button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button" role="tab" aria-controls="drp-tab-2" aria-selected="false"><i class="ti ti-settings"></i> Setting</button></li>
								</ul>
								<div class="tab-content" id="mysrpTabContent">
									<div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0"><a href="#!" class="dropdown-item"><i class="ti ti-edit-circle"></i> <span>Edit Profile</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>View Profile</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-clipboard-list"></i> <span>Social Profile</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-wallet"></i> <span>Billing</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-power"></i> <span>Logout</span></a></div>
									<div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0"><a href="#!" class="dropdown-item"><i class="ti ti-help"></i> <span>Support</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>Account Settings</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-lock"></i> <span>Privacy Center</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-messages"></i> <span>Feedback</span> </a><a href="#!" class="dropdown-item"><i class="ti ti-list"></i> <span>History</span></a></div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<!-- [ Header ] end --><!-- [ Main Content ] start -->
		<div class="pc-container">
			<div class="pc-content">
				<!-- [ breadcrumb ] start -->
				<div class="page-header">
					<div class="page-block">
						<div class="row align-items-center">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
									<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
									<li class="breadcrumb-item" aria-current="page">Home</li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="page-header-title">
									<h2 class="mb-0">Home</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
				<div class="row">
					<!-- [ sample-page ] start -->
					<div class="col-md-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
								<h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> 59.3%</span></h4>
								<p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
								<h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> 70.5%</span></h4>
								<p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
								<h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> 27.4%</span></h4>
								<p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
								<h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-down"></i> 27.4%</span></h4>
								<p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-8">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<h5 class="mb-0">Unique Visitor</h5>
							<ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
								<li class="nav-item" role="presentation"><button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home" type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button></li>
								<li class="nav-item" role="presentation"><button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile" aria-selected="false">Week</button></li>
							</ul>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="tab-content" id="chart-tab-tabContent">
									<div class="tab-pane" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab" tabindex="0">
										<div id="visitor-chart-1"></div>
									</div>
									<div class="tab-pane show active" id="chart-tab-profile" role="tabpanel" aria-labelledby="chart-tab-profile-tab" tabindex="0">
										<div id="visitor-chart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<h5 class="mb-3">Income Overview</h5>
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
								<h3 class="mb-3">$7,650</h3>
								<div id="income-overview-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-8">
						<h5 class="mb-3">Recent Orders</h5>
						<div class="card tbl-card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-borderless mb-0">
										<thead>
											<tr>
												<th>TRACKING NO.</th>
												<th>PRODUCT NAME</th>
												<th>TOTAL ORDER</th>
												<th>STATUS</th>
												<th class="text-end">TOTAL AMOUNT</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Camera Lens</td>
												<td>40</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i> Rejected</span></td>
												<td class="text-end">$40,570</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Laptop</td>
												<td>300</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i> Pending</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Mobile</td>
												<td>355</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i> Approved</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Camera Lens</td>
												<td>40</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i> Rejected</span></td>
												<td class="text-end">$40,570</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Laptop</td>
												<td>300</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i> Pending</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Mobile</td>
												<td>355</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i> Approved</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Camera Lens</td>
												<td>40</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i> Rejected</span></td>
												<td class="text-end">$40,570</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Laptop</td>
												<td>300</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i> Pending</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Mobile</td>
												<td>355</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i> Approved</span></td>
												<td class="text-end">$180,139</td>
											</tr>
											<tr>
												<td><a href="#" class="text-muted">84564564</a></td>
												<td>Mobile</td>
												<td>355</td>
												<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i> Approved</span></td>
												<td class="text-end">$180,139</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<h5 class="mb-3">Analytics Report</h5>
						<div class="card">
							<div class="list-group list-group-flush"><a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company Finance Growth <span class="h5 mb-0">+45.14%</span> </a><a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company Expenses Ratio <span class="h5 mb-0">0.58%</span> </a><a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business Risk Cases <span class="h5 mb-0">Low</span></a></div>
							<div class="card-body px-2">
								<div id="analytics-report-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-8">
						<h5 class="mb-3">Sales Report</h5>
						<div class="card">
							<div class="card-body">
								<h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
								<h3 class="mb-0">$7,650</h3>
								<div id="sales-report-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<h5 class="mb-3">Transaction History</h5>
						<div class="card">
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex">
										<div class="flex-shrink-0">
											<div class="avtar avtar-s rounded-circle text-success bg-light-success"><i class="ti ti-gift f-18"></i></div>
										</div>
										<div class="flex-grow-1 ms-3">
											<h6 class="mb-1">Order #002434</h6>
											<p class="mb-0 text-muted">Today, 2:00 AM</p>
										</div>
										<div class="flex-shrink-0 text-end">
											<h6 class="mb-1">+ $1,430</h6>
											<p class="mb-0 text-muted">78%</p>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex">
										<div class="flex-shrink-0">
											<div class="avtar avtar-s rounded-circle text-primary bg-light-primary"><i class="ti ti-message-circle f-18"></i></div>
										</div>
										<div class="flex-grow-1 ms-3">
											<h6 class="mb-1">Order #984947</h6>
											<p class="mb-0 text-muted">5 August, 1:45 PM</p>
										</div>
										<div class="flex-shrink-0 text-end">
											<h6 class="mb-1">- $302</h6>
											<p class="mb-0 text-muted">8%</p>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex">
										<div class="flex-shrink-0">
											<div class="avtar avtar-s rounded-circle text-danger bg-light-danger"><i class="ti ti-settings f-18"></i></div>
										</div>
										<div class="flex-grow-1 ms-3">
											<h6 class="mb-1">Order #988784</h6>
											<p class="mb-0 text-muted">7 hours ago</p>
										</div>
										<div class="flex-shrink-0 text-end">
											<h6 class="mb-1">- $682</h6>
											<p class="mb-0 text-muted">16%</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="row justify-content-between">
									<div class="col-auto">
										<h5>Help & Support Chat</h5>
										<p class="mb-3">Typical replay within 5 min</p>
									</div>
									<div class="col-auto">
										<div class="user-group mb-3"><img src="../assets/images/user/avatar-1.jpg" alt="image"> <img src="../assets/images/user/avatar-2.jpg" alt="image"> <img src="../assets/images/user/avatar-3.jpg" alt="image"></div>
									</div>
								</div>
								<div class="d-grid">
									<div class="btn btn-primary">Need Help?</div>
								</div>
							</div>
						</div>
					</div>
					<!-- [ Main Content ] end -->
				</div>
			</div>
		</div>
		<!-- [ Main Content ] end -->
		<footer class="pc-footer">
			<div class="footer-wrapper container-fluid">
				<div class="row">
					<div class="col-sm my-1">
						<p class="m-0">Mantis &#9829; crafted by Team <a href="https://themeforest.net/user/codedthemes" target="_blank">Codedthemes</a></p>
					</div>
					<div class="col-auto my-1">
						<ul class="list-inline footer-link mb-0">
							<li class="list-inline-item"><a href="../index.html">Home</a></li>
							<li class="list-inline-item"><a href="https://codedthemes.gitbook.io/mantis-bootstrap" target="_blank">Documentation</a></li>
							<li class="list-inline-item"><a href="https://codedthemes.authordesk.app/" target="_blank">Support</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
			<div class="offcanvas-header bg-primary justify-content-between">
				<h5 class="offcanvas-title text-white">Mantis Customizer</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="pct-body" style="height: calc(100% - 60px)">
				<div class="offcanvas-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse1">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<div class="avtar avtar-xs bg-light-primary"><i class="ti ti-layout-sidebar f-18"></i></div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1">Theme Layout</h6>
										<span>Choose your layout</span>
									</div>
									<i class="ti ti-chevron-down"></i>
								</div>
							</a>
							<div class="collapse show" id="pctcustcollapse1">
								<div class="pct-content">
									<div class="pc-rtl">
										<p class="mb-1">Direction</p>
										<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="layoutmodertl"> <label class="form-check-label" for="layoutmodertl">RTL</label></div>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse2">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<div class="avtar avtar-xs bg-light-primary"><i class="ti ti-brush f-18"></i></div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1">Theme Mode</h6>
										<span>Choose light or dark mode</span>
									</div>
									<i class="ti ti-chevron-down"></i>
								</div>
							</a>
							<div class="collapse show" id="pctcustcollapse2">
								<div class="pct-content">
									<div class="theme-color themepreset-color theme-layout"><a href="#!" class="active" onclick="layout_change('light')" data-value="false"><span><img src="../assets/images/customization/default.svg" alt="img"></span><span>Light</span> </a><a href="#!" class="" onclick="layout_change('dark')" data-value="true"><span><img src="../assets/images/customization/dark.svg" alt="img"></span><span>Dark</span></a></div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse3">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<div class="avtar avtar-xs bg-light-primary"><i class="ti ti-color-swatch f-18"></i></div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1">Color Scheme</h6>
										<span>Choose your primary theme color</span>
									</div>
									<i class="ti ti-chevron-down"></i>
								</div>
							</a>
							<div class="collapse show" id="pctcustcollapse3">
								<div class="pct-content">
									<div class="theme-color preset-color"><a href="#!" class="active" data-value="preset-1"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 1</span> </a><a href="#!" class="" data-value="preset-2"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 2</span> </a><a href="#!" class="" data-value="preset-3"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 3</span> </a><a href="#!" class="" data-value="preset-4"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 4</span> </a><a href="#!" class="" data-value="preset-5"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 5</span> </a><a href="#!" class="" data-value="preset-6"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 6</span> </a><a href="#!" class="" data-value="preset-7"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 7</span> </a><a href="#!" class="" data-value="preset-8"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 8</span> </a><a href="#!" class="" data-value="preset-9"><span><img src="../assets/images/customization/theme-color.svg" alt="img"></span><span>Theme 9</span></a></div>
								</div>
							</div>
						</li>
						<li class="list-group-item pc-boxcontainer">
							<a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse4">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<div class="avtar avtar-xs bg-light-primary"><i class="ti ti-border-inner f-18"></i></div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1">Layout Width</h6>
										<span>Choose fluid or container layout</span>
									</div>
									<i class="ti ti-chevron-down"></i>
								</div>
							</a>
							<div class="collapse show" id="pctcustcollapse4">
								<div class="pct-content">
									<div class="theme-color themepreset-color boxwidthpreset theme-container"><a href="#!" class="active" onclick="change_box_container('false')" data-value="false"><span><img src="../assets/images/customization/default.svg" alt="img"></span><span>Fluid</span> </a><a href="#!" class="" onclick="change_box_container('true')" data-value="true"><span><img src="../assets/images/customization/container.svg" alt="img"></span><span>Container</span></a></div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse5">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<div class="avtar avtar-xs bg-light-primary"><i class="ti ti-typography f-18"></i></div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1">Font Family</h6>
										<span>Choose your font family.</span>
									</div>
									<i class="ti ti-chevron-down"></i>
								</div>
							</a>
							<div class="collapse show" id="pctcustcollapse5">
								<div class="pct-content">
									<div class="theme-color fontpreset-color"><a href="#!" class="active" onclick="font_change('Public Sans')" data-value="Public Sans"><span>Aa</span> <span>Public Sans</span> </a><a href="#!" class="" onclick="font_change('Roboto')" data-value="Roboto"><span>Aa</span> <span>Roboto</span> </a><a href="#!" class="" onclick="font_change('Poppins')" data-value="Poppins"><span>Aa</span> <span>Poppins</span> </a><a href="#!" class="" onclick="font_change('Inter')" data-value="Inter"><span>Aa</span> <span>Inter</span></a></div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="collapse show">
								<div class="pct-content">
									<div class="d-grid"><button class="btn btn-light-danger" id="layoutreset">Reset Layout</button></div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- [Page Specific JS] start -->
		<!-- <script src="../assets/js/plugins/apexcharts.min.js"></script>
		<script src="../assets/js/Widgets/visitor-chart.js"></script>
		<script src="../assets/js/Widgets/income-overview-chart.js"></script>
		<script src="../assets/js/Widgets/analytics-report-chart.js"></script>
		<script src="../assets/js/Widgets/sales-report-chart.js"></script> -->
		<!-- [Page Specific JS] end -->
		 <!-- Required Js -->
		<script src="../assets/js/plugins/popper.min.js"></script>
		<script src="../assets/js/plugins/simplebar.min.js"></script>
		<script src="../assets/js/plugins/bootstrap.min.js"></script>
		<script src="../assets/js/fonts/custom-font.js"></script>
		<script src="../assets/js/fonts/custom-ant-icon.js"></script>
		<script src="../assets/js/plugins/i18next.min.js"></script>
		<script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>
		<script src="../assets/js/pcoded.js"></script>
		<script src="../assets/js/theme.js"></script>
		<!-- <script src="../assets/js/multi-lang.js"></script> -->
		<script src="../assets/js/plugins/feather.min.js"></script>
		<script>layout_change('light');</script>
		<script>change_box_container('false');</script>
		<script>layout_rtl_change('false');</script>
		<script>preset_change('preset-1');</script>
		<script>font_change('Public-Sans');</script>
	</body>
	<!-- [Body] end -->
</html>

<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			iKnow | SME
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<style>
			m-portlet {padding-left=15px;padding-right=15px;}
			/* m-portlet-body {padding= 2.2rem 2.2rem;} */
			
		</style>
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<link href=<?php echo base_url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href=<?php echo base_url('assets/vendors/base/vendors.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url('assets/demo/default/base/style.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href=<?php echo base_url("assets/demo/default/media/img/logo/favicon.ico") ?> />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- begin Header -->
							<?php include 'Header.php' ?>
							<!-- end Header -->
											<!-- begin::Body -->
											<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
												<!-- BEGIN: Left Aside -->
												<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
													<i class="la la-close"></i>
												</button>
												<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
													<!-- BEGIN: Aside Menu -->
													<?php include 'LeftMenu.php' ?>
													<!-- END: Aside Menu -->
												</div>
												<!-- END: Left Aside -->
												<div class="m-grid__item m-grid__item--fluid m-wrapper">
													<!-- BEGIN: Subheader -->
													<div class="m-subheader ">
														<div class="d-flex align-items-center">
															<div class="mr-auto">
																<h2 class="m-subheader__title ">
																	Experts
																</h2>
															</div>
														</div>
													</div>
													<!-- END: Subheader -->
													<div class="m-content">
														<div class="row">
															<div class="col-xl-6">
																<!--begin:: Widgets/Tasks -->
																<div class="m-portlet m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Tasks
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
																						Today
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content1" role="tab">
																						Week
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab3_content1" role="tab">
																						Month
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="tab-content">
																			<div class="tab-pane active" id="m_widget2_tab1_content">
																				<div class="m-widget2">
																					<div class="m-widget2__item m-widget2__item--primary">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Make Metronic Great  Again.Lorem Ipsum Amet
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By Bob
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget2__item m-widget2__item--warning">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Prepare Docs For Metting On Monday
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By Sean
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget2__item m-widget2__item--brand">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Make Widgets Great Again.Estudiat Communy Elit
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By Aziko
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget2__item m-widget2__item--success">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Make Metronic Great Again.Lorem Ipsum
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By James
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget2__item m-widget2__item--danger">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Completa Financial Report For Emirates Airlines
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By Bob
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget2__item m-widget2__item--info">
																						<div class="m-widget2__checkbox">
																							<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																								<input type="checkbox">
																								<span></span>
																							</label>
																						</div>
																						<div class="m-widget2__desc">
																							<span class="m-widget2__text">
																								Completa Financial Report For Emirates Airlines
																							</span>
																							<br>
																							<span class="m-widget2__user-name">
																								<a href="#" class="m-widget2__link">
																									By Sean
																								</a>
																							</span>
																						</div>
																						<div class="m-widget2__actions">
																							<div class="m-widget2__actions-nav">
																								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																									<a href="#" class="m-dropdown__toggle">
																										<i class="la la-ellipsis-h"></i>
																									</a>
																									<div class="m-dropdown__wrapper">
																										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																										<div class="m-dropdown__inner">
																											<div class="m-dropdown__body">
																												<div class="m-dropdown__content">
																													<ul class="m-nav">
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-share"></i>
																																<span class="m-nav__link-text">
																																	Activity
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-chat-1"></i>
																																<span class="m-nav__link-text">
																																	Messages
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-info"></i>
																																<span class="m-nav__link-text">
																																	FAQ
																																</span>
																															</a>
																														</li>
																														<li class="m-nav__item">
																															<a href="" class="m-nav__link">
																																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																																<span class="m-nav__link-text">
																																	Support
																																</span>
																															</a>
																														</li>
																													</ul>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="tab-pane" id="m_widget2_tab2_content"></div>
																			<div class="tab-pane" id="m_widget2_tab3_content"></div>
																		</div>
																	</div>
																</div>
																<!--end:: Widgets/Tasks -->
															</div>
															<div class="col-xl-6">
																<!--begin:: Widgets/Support Tickets -->
																<div class="m-portlet m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Support Tickets
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="m-portlet__nav">
																				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
																					<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
																						<i class="la la-ellipsis-h m--font-brand"></i>
																					</a>
																					<div class="m-dropdown__wrapper">
																						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																						<div class="m-dropdown__inner">
																							<div class="m-dropdown__body">
																								<div class="m-dropdown__content">
																									<ul class="m-nav">
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-share"></i>
																												<span class="m-nav__link-text">
																													Activity
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-chat-1"></i>
																												<span class="m-nav__link-text">
																													Messages
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-info"></i>
																												<span class="m-nav__link-text">
																													FAQ
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																												<span class="m-nav__link-text">
																													Support
																												</span>
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-widget3">
																			<div class="m-widget3__item">
																				<div class="m-widget3__header">
																					<div class="m-widget3__user-img">
																						<img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
																					</div>
																					<div class="m-widget3__info">
																						<span class="m-widget3__username">
																							Melania Trump
																						</span>
																						<br>
																						<span class="m-widget3__time">
																							2 day ago
																						</span>
																					</div>
																					<span class="m-widget3__status m--font-info">
																						Pending
																					</span>
																				</div>
																				<div class="m-widget3__body">
																					<p class="m-widget3__text">
																						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																					</p>
																				</div>
																			</div>
																			<div class="m-widget3__item">
																				<div class="m-widget3__header">
																					<div class="m-widget3__user-img">
																						<img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg" alt="">
																					</div>
																					<div class="m-widget3__info">
																						<span class="m-widget3__username">
																							Lebron King James
																						</span>
																						<br>
																						<span class="m-widget3__time">
																							1 day ago
																						</span>
																					</div>
																					<span class="m-widget3__status m--font-brand">
																						Open
																					</span>
																				</div>
																				<div class="m-widget3__body">
																					<p class="m-widget3__text">
																						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
																					</p>
																				</div>
																			</div>
																			<div class="m-widget3__item">
																				<div class="m-widget3__header">
																					<div class="m-widget3__user-img">
																						<img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg" alt="">
																					</div>
																					<div class="m-widget3__info">
																						<span class="m-widget3__username">
																							Deb Gibson
																						</span>
																						<br>
																						<span class="m-widget3__time">
																							3 weeks ago
																						</span>
																					</div>
																					<span class="m-widget3__status m--font-success">
																						Closed
																					</span>
																				</div>
																				<div class="m-widget3__body">
																					<p class="m-widget3__text">
																						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--end:: Widgets/Support Tickets -->
															</div>
														</div>
														<!--End::Section-->
<!--Begin::Section-->
														<div class="row">
															<div class="col-xl-6 col-lg-12">
																<!--Begin::Portlet-->
																<div class="m-portlet  m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Recent Activities
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="m-portlet__nav">
																				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
																					<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
																						<i class="la la-ellipsis-h m--font-brand"></i>
																					</a>
																					<div class="m-dropdown__wrapper">
																						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																						<div class="m-dropdown__inner">
																							<div class="m-dropdown__body">
																								<div class="m-dropdown__content">
																									<ul class="m-nav">
																										<li class="m-nav__section m-nav__section--first">
																											<span class="m-nav__section-text">
																												Quick Actions
																											</span>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-share"></i>
																												<span class="m-nav__link-text">
																													Activity
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-chat-1"></i>
																												<span class="m-nav__link-text">
																													Messages
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-info"></i>
																												<span class="m-nav__link-text">
																													FAQ
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																												<span class="m-nav__link-text">
																													Support
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__separator m-nav__separator--fit"></li>
																										<li class="m-nav__item">
																											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																												Cancel
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-height="380" style="overflow: visible; height: 380px; height: 380px; position: relative;">
																			<!--Begin::Timeline 2 -->
																			<div class="m-timeline-2">
																				<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
																					<div class="m-timeline-2__item">
																						<span class="m-timeline-2__item-time">
																							10:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-danger"></i>
																						</div>
																						<div class="m-timeline-2__item-text  m--padding-top-5">
																							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																							<br>
																							incididunt ut labore et dolore magna
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							12:45
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-success"></i>
																						</div>
																						<div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
																							AEOL Meeting With
																						</div>
																						<div class="m-list-pics m-list-pics--sm m--padding-left-20">
																							<a href="#">
																								<img src="assets/app/media/img/users/100_4.jpg" title="">
																							</a>
																							<a href="#">
																								<img src="assets/app/media/img/users/100_13.jpg" title="">
																							</a>
																							<a href="#">
																								<img src="assets/app/media/img/users/100_11.jpg" title="">
																							</a>
																							<a href="#">
																								<img src="assets/app/media/img/users/100_14.jpg" title="">
																							</a>
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							14:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-brand"></i>
																						</div>
																						<div class="m-timeline-2__item-text m--padding-top-5">
																							Make Deposit
																							<a href="#" class="m-link m-link--brand m--font-bolder">
																								USD 700
																							</a>
																							To ESL.
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							16:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-warning"></i>
																						</div>
																						<div class="m-timeline-2__item-text m--padding-top-5">
																							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																							<br>
																							incididunt ut labore et dolore magna elit enim at minim
																							<br>
																							veniam quis nostrud
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							17:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-info"></i>
																						</div>
																						<div class="m-timeline-2__item-text m--padding-top-5">
																							Placed a new order in
																							<a href="#" class="m-link m-link--brand m--font-bolder">
																								SIGNATURE MOBILE
																							</a>
																							marketplace.
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							16:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-brand"></i>
																						</div>
																						<div class="m-timeline-2__item-text m--padding-top-5">
																							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																							<br>
																							incididunt ut labore et dolore magna elit enim at minim
																							<br>
																							veniam quis nostrud
																						</div>
																					</div>
																					<div class="m-timeline-2__item m--margin-top-30">
																						<span class="m-timeline-2__item-time">
																							17:00
																						</span>
																						<div class="m-timeline-2__item-cricle">
																							<i class="fa fa-genderless m--font-danger"></i>
																						</div>
																						<div class="m-timeline-2__item-text m--padding-top-5">
																							Received a new feedback on
																							<a href="#" class="m-link m-link--brand m--font-bolder">
																								FinancePro App
																							</a>
																							product.
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--End::Timeline 2 -->
																		</div>
																	</div>
																</div>
																<!--End::Portlet-->
															</div>
															<div class="col-xl-6 col-lg-12">
																<!--Begin::Portlet-->
																<div class="m-portlet m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Recent Notifications
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
																						Today
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
																						Month
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="tab-content">
																			<div class="tab-pane active" id="m_widget2_tab1_content">
																				<!--Begin::Timeline 3 -->
																				<div class="m-timeline-3">
																					<div class="m-timeline-3__items">
																						<div class="m-timeline-3__item m-timeline-3__item--info">
																							<span class="m-timeline-3__item-time">
																								09:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Bob
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--warning">
																							<span class="m-timeline-3__item-time">
																								10:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit amit
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Sean
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--brand">
																							<span class="m-timeline-3__item-time">
																								11:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit amit eiusmdd tempor
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By James
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--success">
																							<span class="m-timeline-3__item-time">
																								12:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By James
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--danger">
																							<span class="m-timeline-3__item-time">
																								14:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit amit,consectetur eiusmdd
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Derrick
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--info">
																							<span class="m-timeline-3__item-time">
																								15:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit amit,consectetur
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Iman
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--brand">
																							<span class="m-timeline-3__item-time">
																								17:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem ipsum dolor sit consectetur eiusmdd tempor
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Aziko
																									</a>
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--End::Timeline 3 -->
																			</div>
																			<div class="tab-pane" id="m_widget2_tab2_content">
																				<!--Begin::Timeline 3 -->
																				<div class="m-timeline-3">
																					<div class="m-timeline-3__items">
																						<div class="m-timeline-3__item m-timeline-3__item--info">
																							<span class="m-timeline-3__item-time m--font-focus">
																								09:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Contrary to popular belief, Lorem Ipsum is not simply random text.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Bob
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--warning">
																							<span class="m-timeline-3__item-time m--font-warning">
																								10:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									There are many variations of passages of Lorem Ipsum available.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Sean
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--brand">
																							<span class="m-timeline-3__item-time m--font-primary">
																								11:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Contrary to popular belief, Lorem Ipsum is not simply random text.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By James
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--success">
																							<span class="m-timeline-3__item-time m--font-success">
																								12:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By James
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--danger">
																							<span class="m-timeline-3__item-time m--font-warning">
																								14:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Latin words, combined with a handful of model sentence structures.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Derrick
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--info">
																							<span class="m-timeline-3__item-time m--font-info">
																								15:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Contrary to popular belief, Lorem Ipsum is not simply random text.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Iman
																									</a>
																								</span>
																							</div>
																						</div>
																						<div class="m-timeline-3__item m-timeline-3__item--brand">
																							<span class="m-timeline-3__item-time m--font-danger">
																								17:00
																							</span>
																							<div class="m-timeline-3__item-desc">
																								<span class="m-timeline-3__item-text">
																									Lorem Ipsum is therefore always free from repetition, injected humour.
																								</span>
																								<br>
																								<span class="m-timeline-3__item-user-name">
																									<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																										By Aziko
																									</a>
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--End::Timeline 3 -->
																			</div>
																		</div>
																	</div>
																</div>
																<!--End::Portlet-->
															</div>
														</div>
														<!--End::Section-->
 <!--Begin::Section-->
														<div class="row">
															<div class="col-xl-8">
																<div class="m-portlet m-portlet--mobile ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Exclusive Datatable Plugin
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="m-portlet__nav">
																				<li class="m-portlet__nav-item">
																					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
																						<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
																							<i class="la la-ellipsis-h m--font-brand"></i>
																						</a>
																						<div class="m-dropdown__wrapper">
																							<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																							<div class="m-dropdown__inner">
																								<div class="m-dropdown__body">
																									<div class="m-dropdown__content">
																										<ul class="m-nav">
																											<li class="m-nav__section m-nav__section--first">
																												<span class="m-nav__section-text">
																													Quick Actions
																												</span>
																											</li>
																											<li class="m-nav__item">
																												<a href="" class="m-nav__link">
																													<i class="m-nav__link-icon flaticon-share"></i>
																													<span class="m-nav__link-text">
																														Create Post
																													</span>
																												</a>
																											</li>
																											<li class="m-nav__item">
																												<a href="" class="m-nav__link">
																													<i class="m-nav__link-icon flaticon-chat-1"></i>
																													<span class="m-nav__link-text">
																														Send Messages
																													</span>
																												</a>
																											</li>
																											<li class="m-nav__item">
																												<a href="" class="m-nav__link">
																													<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																													<span class="m-nav__link-text">
																														Upload File
																													</span>
																												</a>
																											</li>
																											<li class="m-nav__section">
																												<span class="m-nav__section-text">
																													Useful Links
																												</span>
																											</li>
																											<li class="m-nav__item">
																												<a href="" class="m-nav__link">
																													<i class="m-nav__link-icon flaticon-info"></i>
																													<span class="m-nav__link-text">
																														FAQ
																													</span>
																												</a>
																											</li>
																											<li class="m-nav__item">
																												<a href="" class="m-nav__link">
																													<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																													<span class="m-nav__link-text">
																														Support
																													</span>
																												</a>
																											</li>
																											<li class="m-nav__separator m-nav__separator--fit m--hide"></li>
																											<li class="m-nav__item m--hide">
																												<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																													Submit
																												</a>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<!--begin: Datatable -->
																		<div class="m_datatable" id="m_datatable_latest_orders"></div>
																		<!--end: Datatable -->
																	</div>
																</div>
															</div>
															<div class="col-xl-4">
																<!--begin:: Widgets/Audit Log-->
																<div class="m-portlet m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Audit Log
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
																						Today
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
																						Week
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
																						Month
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="tab-content">
																			<div class="tab-pane active" id="m_widget4_tab1_content">
																				<div class="m-scrollable" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
																					<div class="m-list-timeline m-list-timeline--skin-light">
																						<div class="m-list-timeline__items">
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																								<span class="m-list-timeline__text">
																									12 new users registered
																								</span>
																								<span class="m-list-timeline__time">
																									Just now
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																								<span class="m-list-timeline__text">
																									System shutdown
																									<span class="m-badge m-badge--success m-badge--wide">
																										pending
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									14 mins
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																								<span class="m-list-timeline__text">
																									New invoice received
																								</span>
																								<span class="m-list-timeline__time">
																									20 mins
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																								<span class="m-list-timeline__text">
																									DB overloaded 80%
																									<span class="m-badge m-badge--info m-badge--wide">
																										settled
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									1 hr
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																								<span class="m-list-timeline__text">
																									System error -
																									<a href="#" class="m-link">
																										Check
																									</a>
																								</span>
																								<span class="m-list-timeline__time">
																									2 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																								<span class="m-list-timeline__text">
																									Production server down
																								</span>
																								<span class="m-list-timeline__time">
																									3 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																								<span class="m-list-timeline__text">
																									Production server up
																								</span>
																								<span class="m-list-timeline__time">
																									5 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																								<span href="" class="m-list-timeline__text">
																									New order received
																									<span class="m-badge m-badge--danger m-badge--wide">
																										urgent
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									7 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																								<span class="m-list-timeline__text">
																									12 new users registered
																								</span>
																								<span class="m-list-timeline__time">
																									Just now
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																								<span class="m-list-timeline__text">
																									System shutdown
																									<span class="m-badge m-badge--success m-badge--wide">
																										pending
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									14 mins
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																								<span class="m-list-timeline__text">
																									New invoice received
																								</span>
																								<span class="m-list-timeline__time">
																									20 mins
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																								<span class="m-list-timeline__text">
																									DB overloaded 80%
																									<span class="m-badge m-badge--info m-badge--wide">
																										settled
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									1 hr
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																								<span class="m-list-timeline__text">
																									New invoice received
																								</span>
																								<span class="m-list-timeline__time">
																									20 mins
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																								<span class="m-list-timeline__text">
																									DB overloaded 80%
																									<span class="m-badge m-badge--info m-badge--wide">
																										settled
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									1 hr
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																								<span class="m-list-timeline__text">
																									System error -
																									<a href="#" class="m-link">
																										Check
																									</a>
																								</span>
																								<span class="m-list-timeline__time">
																									2 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																								<span class="m-list-timeline__text">
																									Production server down
																								</span>
																								<span class="m-list-timeline__time">
																									3 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																								<span class="m-list-timeline__text">
																									Production server up
																								</span>
																								<span class="m-list-timeline__time">
																									5 hrs
																								</span>
																							</div>
																							<div class="m-list-timeline__item">
																								<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																								<span href="" class="m-list-timeline__text">
																									New order received
																									<span class="m-badge m-badge--danger m-badge--wide">
																										urgent
																									</span>
																								</span>
																								<span class="m-list-timeline__time">
																									7 hrs
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="tab-pane" id="m_widget4_tab2_content"></div>
																			<div class="tab-pane" id="m_widget4_tab3_content"></div>
																		</div>
																	</div>
																</div>
																<!--end:: Widgets/Audit Log-->
															</div>
														</div>
														<!--End::Section-->   
<!--Begin::Section-->
														<div class="row">
															<div class="col-xl-8">
																<!--begin:: Widgets/Best Sellers-->
																<div class="m-portlet m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Best Sellers
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
																						Last Month
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
																						last Year
																					</a>
																				</li>
																				<li class="nav-item m-tabs__item">
																					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
																						All time
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<!--begin::Content-->
																		<div class="tab-content">
																			<div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
																				<!--begin::m-widget5-->
																				<div class="m-widget5">
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Great Logo Designn
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-label">
																										author:
																									</span>
																									<span class="m-widget5__info-author-name">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									19,200
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1046
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Branding Mockup
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									24,583
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									3809
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Awesome Mobile App
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									10,054
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1103
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::m-widget5-->
																			</div>
																			<div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
																				<!--begin::m-widget5-->
																				<div class="m-widget5">
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Branding Mockup
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									24,583
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									3809
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Great Logo Designn
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									19,200
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1046
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Awesome Mobile App
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									10,054
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1103
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::m-widget5-->
																			</div>
																			<div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
																				<!--begin::m-widget5-->
																				<div class="m-widget5">
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Branding Mockup
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									10.054
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1103
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Great Logo Designn
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									24,583
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									sales
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									3809
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="m-widget5__item">
																						<div class="m-widget5__content">
																							<div class="m-widget5__pic">
																								<img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
																							</div>
																							<div class="m-widget5__section">
																								<h4 class="m-widget5__title">
																									Awesome Mobile App
																								</h4>
																								<span class="m-widget5__desc">
																									Make Metronic Great  Again.Lorem Ipsum Amet
																								</span>
																								<div class="m-widget5__info">
																									<span class="m-widget5__author">
																										Author:
																									</span>
																									<span class="m-widget5__info-author m--font-info">
																										Fly themes
																									</span>
																									<span class="m-widget5__info-label">
																										Released:
																									</span>
																									<span class="m-widget5__info-date m--font-info">
																										23.08.17
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="m-widget5__content">
																							<div class="m-widget5__stats1">
																								<span class="m-widget5__number">
																									19,200
																								</span>
																								<br>
																								<span class="m-widget5__sales">
																									1046
																								</span>
																							</div>
																							<div class="m-widget5__stats2">
																								<span class="m-widget5__number">
																									1046
																								</span>
																								<br>
																								<span class="m-widget5__votes">
																									votes
																								</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::m-widget5-->
																			</div>
																		</div>
																		<!--end::Content-->
																	</div>
																</div>
																<!--end:: Widgets/Best Sellers-->
															</div>
															<div class="col-xl-4">
																<!--begin:: Widgets/Authors Profit-->
																<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Authors Profit
																				</h3>
																			</div>
																		</div>
																		<div class="m-portlet__head-tools">
																			<ul class="m-portlet__nav">
																				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
																					<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
																						All
																					</a>
																					<div class="m-dropdown__wrapper">
																						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																						<div class="m-dropdown__inner">
																							<div class="m-dropdown__body">
																								<div class="m-dropdown__content">
																									<ul class="m-nav">
																										<li class="m-nav__section m-nav__section--first">
																											<span class="m-nav__section-text">
																												Quick Actions
																											</span>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-share"></i>
																												<span class="m-nav__link-text">
																													Activity
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-chat-1"></i>
																												<span class="m-nav__link-text">
																													Messages
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-info"></i>
																												<span class="m-nav__link-text">
																													FAQ
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__item">
																											<a href="" class="m-nav__link">
																												<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																												<span class="m-nav__link-text">
																													Support
																												</span>
																											</a>
																										</li>
																										<li class="m-nav__separator m-nav__separator--fit"></li>
																										<li class="m-nav__item">
																											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																												Cancel
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-widget4">
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--logo">
																					<img src="assets/app/media/img/client-logos/logo5.png" alt="">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__title">
																						Trump Themes
																					</span>
																					<br>
																					<span class="m-widget4__sub">
																						Make Metronic Great Again
																					</span>
																				</div>
																				<span class="m-widget4__ext">
																					<span class="m-widget4__number m--font-brand">
																						+$2500
																					</span>
																				</span>
																			</div>
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--logo">
																					<img src="assets/app/media/img/client-logos/logo4.png" alt="">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__title">
																						StarBucks
																					</span>
																					<br>
																					<span class="m-widget4__sub">
																						Good Coffee & Snacks
																					</span>
																				</div>
																				<span class="m-widget4__ext">
																					<span class="m-widget4__number m--font-brand">
																						-$290
																					</span>
																				</span>
																			</div>
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--logo">
																					<img src="assets/app/media/img/client-logos/logo3.png" alt="">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__title">
																						Phyton
																					</span>
																					<br>
																					<span class="m-widget4__sub">
																						A Programming Language
																					</span>
																				</div>
																				<span class="m-widget4__ext">
																					<span class="m-widget4__number m--font-brand">
																						+$17
																					</span>
																				</span>
																			</div>
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--logo">
																					<img src="assets/app/media/img/client-logos/logo2.png" alt="">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__title">
																						GreenMakers
																					</span>
																					<br>
																					<span class="m-widget4__sub">
																						Make Green Great Again
																					</span>
																				</div>
																				<span class="m-widget4__ext">
																					<span class="m-widget4__number m--font-brand">
																						-$2.50
																					</span>
																				</span>
																			</div>
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--logo">
																					<img src="assets/app/media/img/client-logos/logo1.png" alt="">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__title">
																						FlyThemes
																					</span>
																					<br>
																					<span class="m-widget4__sub">
																						A Let's Fly Fast Again Language
																					</span>
																				</div>
																				<span class="m-widget4__ext">
																					<span class="m-widget4__number m--font-brand">
																						+$200
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!--end:: Widgets/Authors Profit-->
															</div>
														</div>
														<!--End::Section-->
													</div>
												</div>
											</div>
											<!-- end:: Body -->
<!-- begin::Footer -->
											<footer class="m-grid__item		m-footer ">
												<div class="m-container m-container--fluid m-container--full-height m-page__container">
													<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
														<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
															<span class="m-footer__copyright">
																2017 &copy; Metronic theme by
																<a href="https://keenthemes.com" class="m-link">
																	Keenthemes
																</a>
															</span>
														</div>
														<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
															<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			About
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#"  class="m-nav__link">
																		<span class="m-nav__link-text">
																			Privacy
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			T&C
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			Purchase
																		</span>
																	</a>
																</li>
																<li class="m-nav__item m-nav__item">
																	<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
																		<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</footer>
											<!-- end::Footer -->
										</div>
										<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
										<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
											<div class="m-quick-sidebar__content m--hide">
												<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
													<i class="la la-close"></i>
												</span>
												<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
															Messages
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
															Settings
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
															Logs
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
														<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
															<div class="m-messenger__messages m-scrollable">
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--in">
																		<div class="m-messenger__message-pic">
																			<img src="assets/app/media/img//users/user3.jpg" alt=""/>
																		</div>
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-username">
																					Megan wrote
																				</div>
																				<div class="m-messenger__message-text">
																					Hi Bob. What time will be the meeting ?
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--out">
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-text">
																					Hi Megan. It's at 2.30PM
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--in">
																		<div class="m-messenger__message-pic">
																			<img src="assets/app/media/img//users/user3.jpg" alt=""/>
																		</div>
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-username">
																					Megan wrote
																				</div>
																				<div class="m-messenger__message-text">
																					Will the development team be joining ?
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--out">
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-text">
																					Yes sure. I invited them as well
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__datetime">
																	2:30PM
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--in">
																		<div class="m-messenger__message-pic">
																			<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
																		</div>
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-username">
																					Megan wrote
																				</div>
																				<div class="m-messenger__message-text">
																					Noted. For the Coca-Cola Mobile App project as well ?
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--out">
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-text">
																					Yes, sure.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--out">
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-text">
																					Please also prepare the quotation for the Loop CRM project as well.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__datetime">
																	3:15PM
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--in">
																		<div class="m-messenger__message-no-pic m--bg-fill-danger">
																			<span>
																				M
																			</span>
																		</div>
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-username">
																					Megan wrote
																				</div>
																				<div class="m-messenger__message-text">
																					Noted. I will prepare it.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--out">
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-text">
																					Thanks Megan. I will see you later.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="m-messenger__wrapper">
																	<div class="m-messenger__message m-messenger__message--in">
																		<div class="m-messenger__message-pic">
																			<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
																		</div>
																		<div class="m-messenger__message-body">
																			<div class="m-messenger__message-arrow"></div>
																			<div class="m-messenger__message-content">
																				<div class="m-messenger__message-username">
																					Megan wrote
																				</div>
																				<div class="m-messenger__message-text">
																					Sure. See you in the meeting soon.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="m-messenger__seperator"></div>
															<div class="m-messenger__form">
																<div class="m-messenger__form-controls">
																	<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
																</div>
																<div class="m-messenger__form-tools">
																	<a href="" class="m-messenger__form-attachment">
																		<i class="la la-paperclip"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
														<div class="m-list-settings m-scrollable">
															<div class="m-list-settings__group">
																<div class="m-list-settings__heading">
																	General Settings
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Email Notifications
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" checked="checked" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Site Tracking
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		SMS Alerts
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Backup Storage
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Audit Logs
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" checked="checked" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
															</div>
															<div class="m-list-settings__group">
																<div class="m-list-settings__heading">
																	System Settings
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		System Logs
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Error Reporting
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Applications Logs
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Backup Servers
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" checked="checked" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
																<div class="m-list-settings__item">
																	<span class="m-list-settings__item-label">
																		Audit Logs
																	</span>
																	<span class="m-list-settings__item-control">
																		<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
																			<label>
																				<input type="checkbox" name="">
																				<span></span>
																			</label>
																		</span>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
														<div class="m-list-timeline m-scrollable">
															<div class="m-list-timeline__group">
																<div class="m-list-timeline__heading">
																	System Logs
																</div>
																<div class="m-list-timeline__items">
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			12 new users registered
																			<span class="m-badge m-badge--warning m-badge--wide">
																				important
																			</span>
																		</a>
																		<span class="m-list-timeline__time">
																			Just now
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			System shutdown
																		</a>
																		<span class="m-list-timeline__time">
																			11 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
																		<a href="" class="m-list-timeline__text">
																			New invoice received
																		</a>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
																		<a href="" class="m-list-timeline__text">
																			Database overloaded 89%
																			<span class="m-badge m-badge--success m-badge--wide">
																				resolved
																			</span>
																		</a>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			System error
																		</a>
																		<span class="m-list-timeline__time">
																			2 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server down
																			<span class="m-badge m-badge--danger m-badge--wide">
																				pending
																			</span>
																		</a>
																		<span class="m-list-timeline__time">
																			3 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server up
																		</a>
																		<span class="m-list-timeline__time">
																			5 hrs
																		</span>
																	</div>
																</div>
															</div>
															<div class="m-list-timeline__group">
																<div class="m-list-timeline__heading">
																	Applications Logs
																</div>
																<div class="m-list-timeline__items">
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			New order received
																			<span class="m-badge m-badge--info m-badge--wide">
																				urgent
																			</span>
																		</a>
																		<span class="m-list-timeline__time">
																			7 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			12 new users registered
																		</a>
																		<span class="m-list-timeline__time">
																			Just now
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			System shutdown
																		</a>
																		<span class="m-list-timeline__time">
																			11 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
																		<a href="" class="m-list-timeline__text">
																			New invoices received
																		</a>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
																		<a href="" class="m-list-timeline__text">
																			Database overloaded 89%
																		</a>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			System error
																			<span class="m-badge m-badge--info m-badge--wide">
																				pending
																			</span>
																		</a>
																		<span class="m-list-timeline__time">
																			2 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server down
																		</a>
																		<span class="m-list-timeline__time">
																			3 hrs
																		</span>
																	</div>
																</div>
															</div>
															<div class="m-list-timeline__group">
																<div class="m-list-timeline__heading">
																	Server Logs
																</div>
																<div class="m-list-timeline__items">
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server up
																		</a>
																		<span class="m-list-timeline__time">
																			5 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			New order received
																		</a>
																		<span class="m-list-timeline__time">
																			7 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			12 new users registered
																		</a>
																		<span class="m-list-timeline__time">
																			Just now
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			System shutdown
																		</a>
																		<span class="m-list-timeline__time">
																			11 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
																		<a href="" class="m-list-timeline__text">
																			New invoice received
																		</a>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
																		<a href="" class="m-list-timeline__text">
																			Database overloaded 89%
																		</a>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			System error
																		</a>
																		<span class="m-list-timeline__time">
																			2 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server down
																		</a>
																		<span class="m-list-timeline__time">
																			3 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
																		<a href="" class="m-list-timeline__text">
																			Production server up
																		</a>
																		<span class="m-list-timeline__time">
																			5 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
																		<a href="" class="m-list-timeline__text">
																			New order received
																		</a>
																		<span class="m-list-timeline__time">
																			1117 hrs
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
										<div id="m_scroll_top" class="m-scroll-top">
											<i class="la la-arrow-up"></i>
										</div>
										<!-- end::Scroll Top -->		    	
    	<!--begin::Base Scripts -->
										<script src=<?php echo base_url("assets/vendors/base/vendors.bundle.js") ?> type="text/javascript"></script>
										<script src=<?php echo base_url("assets/demo/default/base/scripts.bundle.js") ?> type="text/javascript"></script>
										<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
										<script src=<?php echo base_url("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js") ?> type="text/javascript"></script>
										<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
										<script src=<?php echo base_url("assets/app/js/dashboard.js") ?> type="text/javascript"></script>
										<!--end::Page Snippets -->
										 <!--begin::Page Resources -->
										 <script src=<?php echo base_url("assets/demo/default/custom/crud/metronic-datatable/base/html-table.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
									</body>
									<!-- end::Body -->
								</html>

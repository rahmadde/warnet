<!doctype html>

<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo: Kanban - Apps | Vuexy - Bootstrap Dashboard PRO</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{asset("/assets/vendor/fonts/iconify-icons.css")}}">

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/node-waves/node-waves.css")}}">

    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/pickr/pickr-themes.css")}}">

    <link rel="stylesheet" href="{{asset("/assets/vendor/css/core.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/demo.css")}}">

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}">

    <!-- endbuild -->

    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/jkanban/jkanban.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/select2/select2.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/flatpickr/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/quill/typography.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/quill/katex.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/vendor/libs/quill/editor.css")}}">

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset("/assets/vendor/css/pages/app-kanban.css")}}">

    <!-- Helpers -->
    <script src="{{asset("/assets/vendor/js/helpers.js")}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset("/assets/vendor/js/template-customizer.js")}}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{asset("/assets/js/config.js")}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="currentColor" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="currentColor" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-3">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
              <i class="icon-base ti tabler-x d-block d-xl-none"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-mail"></i>
                <div>Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-mail"></i>
                <div>Pesan Makanan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-mail"></i>
                <div>Beli Biling</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-mail"></i>
                <div data-i18n="Email">Booking PC</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-mail"></i>
                <div data-i18n="Email">Email</div>
              </a>
            </li>
          </ul>
        </aside>

        <div class="menu-mobile-toggler d-xl-none rounded-1">
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
          </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base ti tabler-menu-2 icon-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                  </a>
                </div>
              </div>

              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <li class="nav-item dropdown-language dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="icon-base ti tabler-language icon-22px text-heading"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span>English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span>French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span>Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span>German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    id="nav-theme"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                    <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center active"
                        data-bs-theme-value="light"
                        aria-pressed="false">
                        <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="dark"
                        aria-pressed="true">
                        <span
                          ><i class="icon-base ti tabler-moon-stars icon-22px me-3" data-icon="moon-stars"></i
                          >Dark</span
                        >
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="system"
                        aria-pressed="false">
                        <span
                          ><i
                            class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                            data-icon="device-desktop-analytics"></i
                          >System</span
                        >
                      </button>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="icon-base ti tabler-layout-grid-add icon-22px text-heading"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add py-2 btn btn-text-secondary rounded-pill btn-icon"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="icon-base ti tabler-plus icon-20px text-heading"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-calendar icon-26px text-heading"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small>Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-file-dollar icon-26px text-heading"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small>Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-user icon-26px text-heading"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small>Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-users icon-26px text-heading"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small>Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-device-desktop-analytics icon-26px text-heading"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small>User Dashboard</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-settings icon-26px text-heading"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small>Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-help-circle icon-26px text-heading"></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link">FAQs</a>
                          <small>FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="icon-base ti tabler-square icon-26px text-heading"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small>Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <span class="position-relative">
                      <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
                      <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <div class="d-flex align-items-center h6 mb-0">
                          <span class="badge bg-label-primary me-2">8 New</span>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-notifications-all p-2 btn btn-icon"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mark all as read"
                            ><i class="icon-base ti tabler-mail-opened text-heading"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                              <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                              <small class="text-body-secondary">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Charles Franklin</h6>
                              <small class="mb-1 d-block text-body">Accepted your connection</small>
                              <small class="text-body-secondary">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New Message ✉️</h6>
                              <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                              <small class="text-body-secondary">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="icon-base ti tabler-shopping-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                              <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                              <small class="text-body-secondary">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Application has been approved 🚀</h6>
                              <small class="mb-1 d-block text-body"
                                >Your ABC project application has been approved.</small
                              >
                              <small class="text-body-secondary">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="icon-base ti tabler-chart-pie"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Monthly report is generated</h6>
                              <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                              <small class="text-body-secondary">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Send connection request</h6>
                              <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                              <small class="text-body-secondary">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New message from Jane</h6>
                              <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                              <small class="text-body-secondary">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="icon-base ti tabler-alert-triangle"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">CPU is running high</h6>
                              <small class="mb-1 d-block text-body"
                                >CPU Utilization Percent is currently at 88.63%,</small
                              >
                              <small class="text-body-secondary">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="icon-base ti tabler-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="border-top">
                      <div class="d-grid p-4">
                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                          <small class="align-middle">View all notifications</small>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-body-secondary">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="icon-base ti tabler-user me-3 icon-md"></i
                        ><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="icon-base ti tabler-settings me-3 icon-md"></i
                        ><span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 icon-base ti tabler-file-dollar me-3 icon-md"></i
                          ><span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="icon-base ti tabler-currency-dollar me-3 icon-md"></i
                        ><span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="icon-base ti tabler-question-mark me-3 icon-md"></i
                        ><span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                          <small class="align-middle">Logout</small>
                          <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="app-kanban">
                <!-- Add new board -->
                <div class="row">
                  <div class="col-12">
                    <form class="kanban-add-new-board">
                      <label class="kanban-add-board-btn" for="kanban-add-board-input">
                        <i class="icon-base ti tabler-plus"></i>
                        <span class="align-middle">Add new</span>
                      </label>
                      <input
                        type="text"
                        class="form-control w-px-250 kanban-add-board-input mb-4 d-none"
                        placeholder="Add Board Title"
                        id="kanban-add-board-input"
                        required />
                      <div class="mb-4 kanban-add-board-input d-none">
                        <button class="btn btn-primary btn-sm me-4">Add</button>
                        <button type="button" class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn">
                          Cancel
                        </button>
                      </div>
                    </form>
                  </div>
                </div>

                <!-- Kanban Wrapper -->
                <div class="kanban-wrapper"></div>

                <!-- Edit Task/Task & Activities -->
                <div class="offcanvas offcanvas-end kanban-update-item-sidebar">
                  <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Edit Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0">
                    <div class="nav-align-top">
                      <ul class="nav nav-tabs mb-5 rounded-0">
                        <li class="nav-item">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-update">
                            <i class="icon-base ti tabler-edit icon-18px me-1_5"></i>
                            <span class="align-middle">Edit</span>
                          </button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-activity">
                            <i class="icon-base ti tabler-chart-pie-2 icon-18px me-1_5"></i>
                            <span class="align-middle">Activity</span>
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content p-0">
                      <!-- Update item/tasks -->
                      <div class="tab-pane fade show active" id="tab-update" role="tabpanel">
                        <form>
                          <div class="mb-5">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" id="title" class="form-control" placeholder="Enter Title" />
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="due-date">Due Date</label>
                            <input type="text" id="due-date" class="form-control" placeholder="Enter Due Date" />
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="label"> Label</label>
                            <select class="select2 select2-label form-select" id="label">
                              <option data-color="bg-label-success" value="UX">UX</option>
                              <option data-color="bg-label-warning" value="Images">Images</option>
                              <option data-color="bg-label-info" value="Info">Info</option>
                              <option data-color="bg-label-danger" value="Code Review">Code Review</option>
                              <option data-color="bg-label-secondary" value="App">App</option>
                              <option data-color="bg-label-primary" value="Charts & Maps">Charts & Maps</option>
                            </select>
                          </div>
                          <div class="mb-5">
                            <label class="form-label">Assigned</label>
                            <div class="assigned d-flex flex-wrap"></div>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="attachments">Attachments</label>
                            <div>
                              <input type="file" class="form-control" id="attachments" />
                            </div>
                          </div>
                          <div class="mb-5">
                            <label class="form-label">Comment</label>
                            <div class="comment-editor border-bottom-0"></div>
                            <div class="d-flex justify-content-end">
                              <div class="comment-toolbar">
                                <span class="ql-formats me-0">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                  <button class="ql-link"></button>
                                  <button class="ql-image"></button>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex flex-wrap">
                              <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">
                                Update
                              </button>
                              <button type="button" class="btn btn-label-danger" data-bs-dismiss="offcanvas">
                                Delete
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- Activities -->
                      <div class="tab-pane fade text-heading" id="tab-activity" role="tabpanel">
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Jordan</span> Left the board.</p>
                            <small class="text-body-secondary">Today 11:00 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0">
                              <span>Dianna</span> mentioned <span class="text-primary">@bruce</span> in a comment.
                            </p>
                            <small class="text-body-secondary">Today 10:20 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Martian</span> added moved Charts & Maps task to the done board.</p>
                            <small class="text-body-secondary">Today 10:00 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Barry</span> Commented on App review task.</p>
                            <small class="text-body-secondary">Today 8:32 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Bruce</span> was assigned task of code review.</p>
                            <small class="text-body-secondary">Today 8:30 PM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0">
                              <span>Clark</span> assigned task UX Research to
                              <span class="text-primary">@martian</span>
                            </p>
                            <small class="text-body-secondary">Today 8:00 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0">
                              <span>Ray</span> Added moved <span>Forms & Tables</span> task from in progress to done.
                            </p>
                            <small class="text-body-secondary">Today 7:45 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Barry</span> Complete all the tasks assigned to him.</p>
                            <small class="text-body-secondary">Today 7:17 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Jordan</span> added task to update new images.</p>
                            <small class="text-body-secondary">Today 7:00 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </div>
                          <div class="media-body">
                            <p class="mb-0">
                              <span>Dianna</span> moved task <span>FAQ UX</span> from in progress to done board.
                            </p>
                            <small class="text-body-secondary">Today 7:00 AM</small>
                          </div>
                        </div>
                        <div class="media mb-4 d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Clark</span> added new board with name <span>Done</span>.</p>
                            <small class="text-body-secondary">Yesterday 3:00 PM</small>
                          </div>
                        </div>
                        <div class="media d-flex align-items-center">
                          <div class="avatar me-3 flex-shrink-0">
                            <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                          </div>
                          <div class="media-body">
                            <p class="mb-0"><span>Bruce</span> added new task in progress board.</p>
                            <small class="text-body-secondary">Yesterday 12:00 PM</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://themeforest.net/user/pixinvent/portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="{{asset("/assets/vendor/libs/jquery/jquery.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/popper/popper.js")}}"></script>
    <script src="{{asset("/assets/vendor/js/bootstrap.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/node-waves/node-waves.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/@algolia/autocomplete-js.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/pickr/pickr.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/hammer/hammer.js")}}"></script>

    <script src="{{asset("/assets/vendor/libs/i18n/i18n.js")}}"></script>

    <script src="{{asset("/assets/vendor/js/menu.js")}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset("/assets/vendor/libs/moment/moment.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/flatpickr/flatpickr.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/select2/select2.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/jkanban/jkanban.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/quill/katex.js")}}"></script>
    <script src="{{asset("/assets/vendor/libs/quill/quill.js")}}"></script>

    <!-- Main JS -->

    <script src="{{asset("/assets/js/main.js")}}"></script>

    <!-- Page JS -->
    <script src=""{{asset("/assets/js/app-kanban.js")}}"></script>
  </body>
</html>
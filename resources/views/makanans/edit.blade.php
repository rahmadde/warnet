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

    <title>Walet Net</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset("/assets/img/favicon/favicon.ico")}}">

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
            <a href="/" class="app-brand-link">
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
              <span class="app-brand-text demo menu-text fw-bold ms-3">WaletNet</span>
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
              <a href="/" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6zm2-10h4V5H5zm10 8h4v-6h-4zm0-12h4V5h-4zM5 19h4v-2H5zm4-2"/></svg>
                <div>Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/makanans" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M1.338 1.961C1.495 1.362 2.041 1 2.615 1c.354 0 .676.133.921.35a1.5 1.5 0 0 1 1.928 0A1.38 1.38 0 0 1 6.385 1c.574 0 1.12.362 1.277.961C7.812 2.533 8 3.455 8 4.5a3.5 3.5 0 0 1-1.595 2.936c-.271.177-.405.405-.405.6v.396q0 .034.004.066c.034.248.157 1.169.272 2.124c.113.937.224 1.959.224 2.378a2 2 0 1 1-4 0c0-.42.111-1.44.224-2.378c.115-.955.238-1.876.272-2.124L3 8.432v-.396c0-.195-.134-.423-.405-.6A3.5 3.5 0 0 1 1 4.5c0-1.045.188-1.967.338-2.539M6 5a.5.5 0 0 1-1 0V2.5a.5.5 0 0 0-1 0V5a.5.5 0 0 1-1 0V2.385A.385.385 0 0 0 2.615 2c-.166 0-.28.099-.31.215A9.2 9.2 0 0 0 2 4.5a2.5 2.5 0 0 0 1.14 2.098c.439.285.86.786.86 1.438v.396q0 .1-.013.2c-.034.246-.156 1.161-.27 2.11c-.116.965-.217 1.914-.217 2.258a1 1 0 1 0 2 0c0-.344-.1-1.293-.217-2.259c-.114-.948-.236-1.863-.27-2.11A2 2 0 0 1 5 8.433v-.396c0-.652.421-1.153.86-1.438A2.5 2.5 0 0 0 7 4.5c0-.932-.168-1.764-.305-2.285C6.665 2.1 6.55 2 6.385 2A.385.385 0 0 0 6 2.385zm3 .5A4.5 4.5 0 0 1 13.5 1a.5.5 0 0 1 .5.5v5.973l.019.177a261 261 0 0 1 .229 2.24c.123 1.256.252 2.664.252 3.11a2 2 0 1 1-4 0c0-.446.129-1.854.252-3.11c.063-.637.126-1.247.173-1.699l.02-.191H10a1 1 0 0 1-1-1zm2.997 2.053l-.021.202a386 386 0 0 0-.228 2.233c-.127 1.287-.248 2.63-.248 3.012a1 1 0 1 0 2 0c0-.383-.121-1.725-.248-3.012a315 315 0 0 0-.228-2.233l-.021-.201L13 7.5V2.035A3.5 3.5 0 0 0 10 5.5V7h1.5a.5.5 0 0 1 .497.553"/></svg>
                <div>Pesan Makanan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/bilings" class="menu-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 2a1 1 0 0 1 .993.883L13 7v4.586l2.707 2.707a1 1 0 0 1-1.32 1.497l-.094-.083l-3-3a1 1 0 0 1-.284-.576L11 12V7a1 1 0 0 1 1-1"/></g></svg>
                <div>Beli Biling</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/bookings" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 8 8"><path fill="currentColor" d="M8 8L7 6H1L0 8m6-4V1H2v3M1 5V0h6v5"/></svg>
                <div>Booking PC</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/members" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5.5 7a3 3 0 1 1 6 0a3 3 0 0 1-6 0m3-5a5 5 0 1 0 0 10a5 5 0 0 0 0-10m7 0h-1v2h1a3 3 0 1 1 0 6h-1v2h1a5 5 0 0 0 0-10M0 19a5 5 0 0 1 5-5h7a5 5 0 0 1 5 5v2h-2v-2a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v2H0zm24 0a5 5 0 0 0-5-5h-1v2h1a3 3 0 0 1 3 3v2h2z"/></svg>
                <div>Member</div>
              </a>
            </li>
            <li class="menu-item">
              
              <a class="menu-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg>
                {{ __('Logout') }}
                
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
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

                

                

          

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="app-kanban">
                <div class="card">
                  <div class="card-header">
                    <h1>Edit Data Makanan</h1>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('makanans.update', $makanan->id) }}" method="POST">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group m-3">
                                <label class="font-weight-bold">Id Pemesanan</label>
                                <input type="text" class="form-control @error('id_pemesanan') is-invalid @enderror" name="id_pemesanan" value="{{ old('id_pemesanan', $makanan->id_pemesanan) }}" placeholder="Masukkan Id Pemesanan">
                            
                                <!-- error message untuk title -->
                                @error('id_pemesanan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label class="font-weight-bold">Nama Makanan</label>
                                <input type="text" class="form-control @error('nm_makanan') is-invalid @enderror" name="nm_makanan" value="{{ old('nm_makanan', $makanan->nm_makanan) }}" placeholder="Masukkan Nama Makanan">
                            
                                <!-- error message untuk title -->
                                @error('nm_makanan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label class="font-weight-bold">Id Member</label>
                                <input type="text" class="form-control @error('id_member') is-invalid @enderror" name="id_member" value="{{ old('id_member', $makanan->id_member) }}" placeholder="Masukkan Id Member">
                            
                                <!-- error message untuk title -->
                                @error('id_member')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label class="font-weight-bold">Jumlah</label>
                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $makanan->jumlah) }}" placeholder="Masukkan Jumlah">
                            
                                <!-- error message untuk title -->
                                @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group m-3">
                                <label class="font-weight-bold">Tanggal Pemesanan</label>
                                <input type="date" class="form-control @error('tgl_pemesanan') is-invalid @enderror" name="tgl_pemesanan" value="{{ old('tgl_pemesanan', $makanan->tgl_pemesanan) }}" placeholder="Masukkan Tanggal Pemesanan">
                            
                                <!-- error message untuk title -->
                                @error('tgl_pemesanan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="m-3">
                              <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                              <button type="reset" class="btn btn-md btn-danger">RESET</button>
                            </div>

                        </form> 
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
                    , WaletNet</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.2/js/all.min.js"></script>

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
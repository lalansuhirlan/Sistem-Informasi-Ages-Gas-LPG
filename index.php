<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. ENERGI PRIMA FACHREZI</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script nonce="311604c2-9c80-46bc-b0f6-dc31be8b5456">
      try {
        (function(w, d) {
          ! function(lD, lE, lF, lG) {
            lD[lF] = lD[lF] || {};
            lD[lF].executed = [];
            lD.zaraz = {
              deferred: [],
              listeners: []
            };
            lD.zaraz.q = [];
            lD.zaraz._f = function(lH) {
              return async function() {
                var lI = Array.prototype.slice.call(arguments);
                lD.zaraz.q.push({
                  m: lH,
                  a: lI
                })
              }
            };
            for (const lJ of ["track", "set", "debug"]) lD.zaraz[lJ] = lD.zaraz._f(lJ);
            lD.zaraz.init = () => {
              var lK = lE.getElementsByTagName(lG)[0],
                lL = lE.createElement(lG),
                lM = lE.getElementsByTagName("title")[0];
              lM && (lD[lF].t = lE.getElementsByTagName("title")[0].text);
              lD[lF].x = Math.random();
              lD[lF].w = lD.screen.width;
              lD[lF].h = lD.screen.height;
              lD[lF].j = lD.innerHeight;
              lD[lF].e = lD.innerWidth;
              lD[lF].l = lD.location.href;
              lD[lF].r = lE.referrer;
              lD[lF].k = lD.screen.colorDepth;
              lD[lF].n = lE.characterSet;
              lD[lF].o = (new Date).getTimezoneOffset();
              if (lD.dataLayer)
                for (const lQ of Object.entries(Object.entries(dataLayer).reduce(((lR, lS) => ({
                    ...lR[1],
                    ...lS[1]
                  })), {}))) zaraz.set(lQ[0], lQ[1], {
                  scope: "page"
                });
              lD[lF].q = [];
              for (; lD.zaraz.q.length;) {
                const lT = lD.zaraz.q.shift();
                lD[lF].q.push(lT)
              }
              lL.defer = !0;
              for (const lU of [localStorage, sessionStorage]) Object.keys(lU || {}).filter((lW => lW.startsWith("_zaraz_"))).forEach((lV => {
                try {
                  lD[lF]["z_" + lV.slice(7)] = JSON.parse(lU.getItem(lV))
                } catch {
                  lD[lF]["z_" + lV.slice(7)] = lU.getItem(lV)
                }
              }));
              lL.referrerPolicy = "origin";
              lL.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(lD[lF])));
              lK.parentNode.insertBefore(lL, lK)
            };
            ["complete", "interactive"].includes(lE.readyState) ? zaraz.init() : lD.addEventListener("DOMContentLoaded", zaraz.init)
          }(w, d, "zarazData", "script");
        })(window, document)
      } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
      };
    </script>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
          </li>
         
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
     
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="index.php" class="brand-link">
          <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
          <nav class="mt-2">
          
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
             <li class="nav-item ">
                <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Beranda
                </p>
                </a>
            </li>

            <li class="nav-item ">
                <a href="jadwal/jadwalpenyaluran.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Jadwal Penyaluran
                </p>
                </a>
            </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p> Inventaris <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="inventaris/kantor.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kantor</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="inventaris/gudang.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gudang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="inventaris/truk.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Truk</p>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p> Surat <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                    <a href="surat/suratmasuk.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Surat Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="surat/suratkeluar.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Surat Keluar</p>
                    </a>
                  </li>
                 
                </ul>
              </li>

              <li class="nav-item ">
            <a href="pangkalan/daftarpangkalan.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Daftar Pangkalan
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="laporan/laporan.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="pengaturan/pengaturan.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Perngaturan
              </p>
            </a>
          </li>
              
          <li class="nav-item ">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
              
   
          </nav>
        </div>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <section class="content">
        








        </section>
      </div>
     
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2024 <a href="https://adminlte.io">PT. Fachrezi</a>. </strong> All rights reserved.
      </footer>

      <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/adminlte.min.js?v=3.2.0"></script>
    <script src="js/demo.js"></script>
  </body>
</html>
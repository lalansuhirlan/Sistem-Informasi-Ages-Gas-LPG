<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. ENERGI PRIMA FACHREZI</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
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
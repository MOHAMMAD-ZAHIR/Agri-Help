    <section class="mt-2">
      <div class="container-fluid text-center">
        <div class="row bg-dark">
          <div class="col-md-12 mt-2">
            <nav class="text-light">
              <a href="https://www.facebook.com/zahir0000000000000000000000000/" class="text-danger px-2">Facebook</a> |
              <a href="#" class="text-danger px-2">Instagram</a> | <a href="#" class="text-danger px-2">Twitter</a> | <a
                href="#" class="text-danger px-2">Telegram</a> | <a href="https://github.com/MOHAMMAD-ZAHIR"
                class="text-danger px-2">GitHub</a>
            </nav>
            <hr>
            <p class="text-light">COPYRIGHT 2022 HOMOSAPIENS CO. | DESIGN: <a rel="nofollow" href="https://google.com"
                target="parent">IKIRYO</a></p>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/fram.min.js"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
              // after dropdown is hidden, then find all submenus
              this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
                // hide every submenu as well
                everysubmenu.style.display = 'none';
              });
            })
          });

          document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
            element.addEventListener('click', function (e) {
              let nextEl = this.nextElementSibling;
              if (nextEl && nextEl.classList.contains('submenu')) {
                // prevent opening link if link needs to open dropdown
                e.preventDefault();
                if (nextEl.style.display == 'block') {
                  nextEl.style.display = 'none';
                } else {
                  nextEl.style.display = 'block';
                }

              }
            });
          })
        }
        // end if innerWidth
      });
      // DOMContentLoaded  end
    </script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments)
      };
      ga.q = [];
      ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('set', 'anonymizeIp', true);
      ga('set', 'transport', 'beacon');
      ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>

    </html>
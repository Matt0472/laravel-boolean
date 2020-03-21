
  
    </div>
        <nav class="nav-footer">
          <div class="container-fluid-top">
            <div class="nav-footer-left">
              <img src="https://www.boolean.careers/images/common/logo-white.png" alt="">
              <small>Sede Operativa</small>
              <small>Via Carducci 12 - 20123 Milano</small>
              <small>Tel: 02-36599712</small>
            </div>
            <div class="nav-footer-right">
              <ul>
                <li>
                  <a href="">Lezione Gratuita</a>
                </li>
                <li>
                  <a href="{{route('static_page.faq')}}">Domande Frequenti</a>
                </li>
                <li>
                  <a href="">Per le aziende</a>
                </li>
                <li>
                  <a href="{{route('static_page.privacy')}}">Privacy Policy</a>
                </li>
                <li>
                  <a href="">Lavora con noi</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="container-fluid-bottom">
            <div class="footer-bottom-icons">
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer-bottom-text">
              Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967
            </div>
          </div>
        </nav>

        {{-- nostro script --}}
        <script src="{{asset('js/app.js')}}"></script>

        {{-- handlebars --}}
        <script id="entry-template" type="text/x-handlebars-template">
          <div class="student">
            <div class="info">
              <img src="@{{img}}" alt="@{{name}}">
                  <h3>
                    @{{name}}(@{{eta}})
                  </h3>
                <span>
                  Assunt@{{gender}} da @{{azienda}} 
                  come @{{ruolo}}
                </span>
            </div>
            <p>@{{descrizione}}</p>
            <a href="" class="linkedin-icon">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
      </script>
  </body>
</html>
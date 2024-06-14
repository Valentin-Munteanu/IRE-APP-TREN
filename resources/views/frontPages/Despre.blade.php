@extends("layout")

@section("title", "Despre Noi")

@section("content")
<div class="wow fadeIn despre">
    <div class="modal_div">
        <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
        <h3>Despre Noi</h3>
        <h4>Intercity & Regional RailExpress</h4>
        <p>Operator privat de cale ferată, destinat transportului de pasageri. Operăm curse regulate zilnic pe rutele regionale, interregionale și internaționale. Cursele noastre străbat zilnic Ucraina, România și Republica Moldova, oferind o alternativă bună pentru pasageri, confort și deservire maximă. Călătoria cu trenul este una sigură, interesantă și neobișnuită. Trenul poate ajunge în destinații turistice și locuri frumoase unde ar fi o problemă de vizitat cu mașina sau transportul rutier. Oferim o gamă largă de servicii de calitate înaltă și oportunități pentru a oferi călătorilor o experiență plăcută și condiții avantajoase de călătorie.</p>
        </div>
</div>



<br>
<div class="despre-center">
    <div class="wow fadeInLeft modal_div">
        <img src="{{asset("Images/DPK1.webp")}}" alt="">
        <h3>Serviciile Noastre</h3>
        <p>Ne mândrim cu o flotă modernă de trenuri echipate cu facilități de ultimă generație. Pasagerii noștri beneficiază de Wi-Fi gratuit, compartimente confortabile și curate, precum și de servicii de catering la bord. Echipa noastră de profesioniști este dedicată să asigure o călătorie plăcută și sigură pentru fiecare pasager.</p>
        </div>

        <div class="wow fadeInRight modal_div">
        <img src="https://investsouth.md/wp-content/uploads/2019/09/3.-Galerie-foto_1.jpg" alt="">
        <h3>Destinații Populare</h3>
        <p>Printre destinațiile noastre populare se numără orașe precum Iași, Cernăuți, Văleni și Naslavcea, dar și destinații turistice deosebite. Fie că ești în căutarea unei excursii de weekend sau a unei călătorii de afaceri, Intercity & Regional RailExpress este alegerea perfectă. De asemenea, operăm curse ocaziționale unde pasagerii noștri pot descoperi frumusețea naturii și diversitatea culturală.</p>
        </div>
</div>



<div class="wow fadeIn despre">
    <div class="modal_div">
        <img src="{{asset("Images/tren1.jpg")}}" alt="">
        <h3>De Ce să Ne Alegi?</h3>
        <p>1. Conexiuni rapide și eficiente: Asigurăm legături directe și convenabile între principalele orașe și destinații turistice.</p>
        <p>2. Facilități moderne: Toate trenurile noastre sunt echipate cu Wi-Fi gratuit, scaune confortabile și spații generoase pentru bagaje.</p>
        <p>3. Servicii excelente: Personalul nostru prietenos și bine instruit este întotdeauna gata să te ajute și să îți ofere cele mai bune servicii.</p>
        <p>4. Prețuri competitive: Oferim bilete la prețuri accesibile, cu reduceri speciale pentru studenți, seniori și grupuri.</p>

        </div>
</div>


<div class="wow fadeIn slider-despre">
    <h2>Trenurile Noastre</h2>
    <h4 class="decoration">Operăm cu trenuri de tip automotor diesel(D1M,ДПКр-3).
       <h4>Trenurile sunt produse in Ucraina și România.</h4>
        <h4> Vagoanele sunt de tipul "1C" și "2C", cu locuri pe scaune și cu condiții bune de călătorie,<br> precum acces și loc destinat pentru persoanele cu dizabilități.</h4>

    <div class="swiper">
        <div class="swiper-wrapper" data-swiper-preload="false">
            <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Tren3.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Tren1.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/DPK6.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/DPK3.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren9.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/03-1.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON1A.JPG")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON1B.JPG")}}" alt=""></div>
          ...
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    </div>


<script src="{{asset("JS/slider.js")}}"></script>



@endsection

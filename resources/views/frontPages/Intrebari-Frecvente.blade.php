@extends("layout")

@section("title", "Întrebări frecvente")

@section("content")
<div class="intrebari">
    <div class="modal_div">
    <h3>Intrebări frecvente</h3>
    <img src="https://media.istockphoto.com/id/1090469776/vector/question-mark-icon.jpg?s=612x612&w=0&k=20&c=-qpsFObV9i4DqCX79ExmK8lepehzQBE6Asa3HvE9n8s=" alt="">

    </div>
</div>


<div class="question">
    <div class="questions-all">
        <h3>Cum cumpăr bilete online</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Pasul 1: Pentru a procura bilete online, aveți nevoie să efectuați căutarea din pagina principală.</p>
        <p>Pasul 2: După ce primiți rezultatul căutării, selectați ruta de tren de care aveți nevoie până la destinație.</p>
        <p>Pasul 3: Selectați locurile în unul din cele 4 locuri. În caz că locul selectat de dvs. este deja ocupat, încercați să selectați locul în alt vagon sau procurați bilete de la casele gărilor feroviare.</p>
        <p>Pasul 4: După selectarea locului, în funcție de locurile selectate (1-4), veți completa formularul de înregistrare cu Nume, Prenume și E-mail.</p>
        <p>Pasul 5: După completarea formularului, veți fi înregistrat ca pasager pe cursa regională/interregională/internațională.</p>
        <p>Pasul 6: Verificați e-mailul pentru a primi confirmarea biletului.</p>
                </div>
</div>
<br>

<div class="question">
    <div class="questions-all">
        <h3>Cum pot călători persoanele cu dizabilități?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Persoanele cu dizabilități beneficiază de asistență specială pentru îmbarcare și debarcare, în funcție de necesitățile lor.</p>
            <p>În trenurilor operate de IRE există locuri special amenajate pentru persoanele cu dizabilități, situate în vagoane accesibile.</p>
                </div>
</div>
<br>


<div class="question">
    <div class="questions-all">
        <h3> Ce fac dacă trenul a fost anulat cu 24 de ore înaintea călătoriei</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p> În cazul în care trenul este anulat cu 24 de ore înainte de plecare, puteți solicita restituirea contravalorii biletului la orice casă de bilete sau online. De asemenea, puteți opta pentru reprogramarea călătoriei fără costuri suplimentare.</p>
                </div>


</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Cum procur abonamente de călătorie?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Abonamentele de călătorie le puteți procura online sau la casele gărilor feroviare. Pentru a cumpăra abonamente online, accesați pagina de <a href="{{route('Abonamente')}}">Abonamente</a>.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Achită călătoria persoanele de onoare și angajații căilor ferate?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Angajații căilor ferate, precum și persoanele de onoare, veterani de război, etc., la prezentarea legitimației sunt scutiți de taxă pe toate rutele de tren operate de IRE.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Ce fac dacă am nevoie de ajutor medical în timpul călătoriei?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Ar fi recomandat să nu porniți la drum atunci când nu vă simțiți bine. Însă, în cazul în care vă simțiți rău în timpul călătoriei pe o rută internațională, în fiecare vagon este însoțitor, care deține cunoștințe de acordarea primului ajutor medical. Dacă situația se agravează, la cea mai apropiată stație veți fi preluat de un medic și veți fi transferat în punctul medical de pe teritoriul gării. În cazul în care cea mai apropiată stație se află la o distanță mai mare și timpul de sosire necesită mai mult timp, se va anunța ambulanța și trenul va fi oprit la cea mai apropiată trecere de nivel cu calea ferată, unde ambulanța ar putea să vă preia. Se va acționa în funcție de situație.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Cum procedez dacă am bagaj?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Se permite transportarea bagajului fără plată adițională până la 36 de kg. În cazul în care aveți un bagaj care depășește această greutate, veți achita o treime din costul biletului pentru bagaj.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Am nevoie să cumpăr bilet online, dar nu sunt locuri disponibile.</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>În această situație, să nu vă întristați. Biletele online se comercializează pentru 50% din locurile din vagoanele trenurilor. Așadar, în caz că nu puteți cumpăra online, în ziua plecării puteți cumpăra bilete de la casele de bilete din gările feroviare.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Cum procedez dacă în tren toate locurile sunt ocupate?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>În cazul în care la casele gărilor nu s-au găsit bilete și toate locurile sunt ocupate în vagoane, vă adresați la șeful trenului pentru a călători pe o anumită distanță în picioare, în clasa a doua.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>Pot călători cu bicicleta în tren?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Da, puteți călători cu o bicicletă în trenurile operate de IRE, cu condiția ca aceasta să nu deterioreze vagonul trenului. Bicicleta se ține lângă ușa de intrare/ieșire. Este interzisă plasarea bicicletei în interiorul vagonului de pasageri sau în alte locuri ce ar putea crea dificultăți personalului sau incomoda alți pasageri.</p>
    </div>
</div>

<br>

<div class="question">
    <div class="questions-all">
        <h3>De ce trenul este un mijloc sigur de transport?</h3>
        <button class="select" onclick="toggleVisibility(this, '.questions-all')"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="formular-question">
        <p>Trenul este o alternativă pentru transportul rutier, deoarece locul este mai spațios și ai posibilitatea de a călători în multe locuri interesante unde transportul rutier nu are acces. Poți ajunge într-un mod diferit de la punctul A la punctul B. Referitor la siguranță, trenul este cel mai sigur mijloc de transport. Trenurile moderne conțin electronică performantă și sisteme de securitate care pot opri trenul. De exemplu, în orice tren este o "pedală" care trebuie apăsată la fiecare 90 de secunde. În cazul în care mecanicul de locomotivă se simte rău sau adoarme în cabină, se vor auzi două sunete puternice. Dacă mecanicul apasă pedala la timp după primul sunet, nu se va întâmpla nimic. Însă, dacă se aud ambele sunete în cabină, trenul va opri automat cu frânare totală. Astfel, putem spune cu siguranță că trenul este o alternativă sigură de a călători.</p>
    </div>
</div>


<script src="{{asset("JS/dropdownForm.js")}}"></script>


@endsection

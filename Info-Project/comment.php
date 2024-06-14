<!--
Teme Generale IRE APP TRAIN PROJECT

// FrontEnd:
0 HEADER + BURGER
1 Logotip Personal, Disign Personal
2 Utilizarea CANVA, PHOTOSHOP,
3 Slider, SWIPER JS FRAMEWORK
4 Dropdown,
5 Map/Leaflet,OpenRailway/OpenStreetMap
6 WOW JS ANIMATION FRAMEWORK
7 Stilizare personalizata
// JAVA SCRIPT
8 POPUPS => JS
9 DROPDOWN ->JS
10 SUGGESTION ->JS
11 PAGE TIMER [loading.js] ->JS
12 VISIBLE PASSWORD AND HIDDEN BTN => JS
13 Incrementarea si decrementarea locurilor in vagon/dupa pret
14 Afisarea locurilor prin for
15 Afisarea locurilor + date + totalPrice/loc in pagina de formular prin replace
16 Crearea verificarilor prin if pentru locuri

// Backend
1 Search [Backend]
2 CRUD BILETE/ROUTES/TRENURI ANULATE
3 FORMULAR [] KEY METHOD
4 Verificari bilete/Routes
5 Request Personalizat/Validari, Afisarea erorilor din validari
6 MAILER/Config/Mail/view/StyleMailer
7 AUTENTIFICARE [GUARD + SESSION + REMEMBER TOKEN + MODIFICARE CONT + DELETECONT]
7A AUTENTIFICARE VERIFICARI ADMIN MAXIM 3 -> NAVIGAREA PE CRUD = ADMIN, + config auth.php
8 ROUTE PREFIX GROUP + PARAMETRI
9 Migration/Models => Conection Tables => BelongsTo, HasMany







SearchController = Cautarea pe baza la input 1 si input 2 , Logica cautarii:
Metoda de show raspunde de afisarea la ecran + afisarea rezultatului in ruta a cautarii

Metoda de search raspunde de:
1 Verificarea prin Request a inputurilor de search.
2 Vom efectua cautarea sau din valorea search sau search 2 [search(value) + search 2(value) = result || [search 2 (value) + search(value) = result]]

3 Vom crea un queryBilder care ne va permite sa facem o interogare a modelului de routes de tip SQL pentru a putea primi valorile din model care vor fi trimise la cautare,

4 Vom crea un if unde vom verifica daca valoarea din station_start din Modelul de Routes = search[input 1"] si valoare de destination = search2 [input 2 ]
In caz contrar daca valorile nu sunt corecte vom rederectina utilizatorul la pagina de home
5 Executam cautarea

6 Afisarea cautarii la Ecran:
Afisam cautarea intr-o pagina separata de pages.searchResult unde se vor afisa toate rezultatatele cautarii, unde vom verifica in blade prin if daca nu sunt rezultate ale cautarii vom primi un mesaj de eroare, sau daca vom accesa pagina de cautare fara a accesa cautarea tot vom primi un mesaj de eroare + cautarea va fi afisata nu doar la ecran ci si in ruta

Inițializare: Creează un nou queryBuilder pentru modelul Routes.
Adăugare condiții: Verifică dacă ambele criterii de căutare sunt prezente și adaugă condiții corespunzătoare la interogare.
Executare interogare: Execută interogarea și obține rezultatele.
Returnare rezultate: Transmite rezultatele către pagina de  pages.searchResult.

 -->

 <!--
App Controller:
App controller va raspunde de logica aplicatiei de bilete Online
Acest controller este impartit in 2 parti:

[ Partea 1/pasul 1  -> Raspunde de crearea Valorilor pe baza carora va fi efectuata cautarea = Routes => Adica rutele de tren, care vor face conectiunea cu biletele,unde printr-un crud vom crea atat rutele cat si biletele pentru aceste rute, unde CRUD va avea toate functiile necesarea Create, Read, Update, Delete
pasul 2 => Afisarea la ecran a valorii din cautare, unde in formularul de bilete pasagerul va putea vedea ruta de tren la care va putea cumpara bilet
// View bilete si functia de index

In functia de index se va face verificarea prin care vom afisa rezultatele din cautare a rutelor care sunt asociate cu biletul, vom folosi parametrul de like pentru cautari partiale, + vom declara valori precum selectedSeets 1,2,3,4 aceste valori vor raspunde de locurile selectate si valoarea lor in cele din 4 vagoane care vor fi disponibile pentru a cumpara bilete
Afisarea bilet_id unde vom afisa in formular valoarea cu id biletului care este asociat cu ruta de tren

biletes.blade, date_index VIEW

Avem biletes.blade unde vom afisa valorile din cautare => ruta de tren,
Afisarea mai multor zile unde CAPACITATEA LOCURILOR VA FI DIFERITA UNA DE ALTA,

Afisarea vagoanelor unde vom avea pretul + clasa de deservire + numarul total de locuri disponibile si indisponibile, unde, pretul va fi = clasa de deservire

Capacitatea locurilor va fi dupa "marimea vagonului de tip Automotor",

"Afisarea locurilor se va face prin ciclu for unde vom selecta spre exemplu locurile de la 1 la pana la 30, in ordine crescatoare unde vom face o verificare ca spre exemplu 14 locuri sunt disponibile si vom afisa aceste locuri ca fiind posibile de selectat , in caz contrar prin button care va avea clasa de disable si stilizarea potrivita vom afisa restul locurilor de la 15 -> pana la 30 ca fiind indisponibile"

Incrementarea Pretului si selectarea locurilor in 'vagon',
"Vom crea functiie unde vom putea selecta locurile disponibile in vagon MAXIM 4, unde vom putea incrementa pretul in dependenta de locul/locurile selectate: ex [130*1,2,3,4] "

// Verificari js la locuri:
    1 Nu vom putea accesa pagina formularului daca nu avem un loc selectat minim
    2 Nu putem selecta mai mult de 4 locuri
    3 Nu putem selecta locuri spre ex in vagonul 2,3,4 daca avem un loc macar selectat in vagonul 1
]

Functii adaugatoare,-
Pop Up la vagon si conditii conform clasei 1C SI 2C prezentarea de servicii si conditii de deserviere,
2 Afisarea dropdown la vagon cu stilizarea potrivita,
3 Afisarea slider unde vor fi fotografiile vagonului


Afisarea valorilor din bilete in formularul de completare pasageri
Functia de continue booking ne va permite afisarea in pagina formularului a valorilor din pagina de bilete + bilet_id. unde vom utiliza replace pentru a trimite parametri de locul selectat data, pretul total conform locului selectat + bilet_id care este = cu valoarea rutei de tren, utilizam replace pentru a converti din acesti paramentri, valorile reale din js la ecran


Partea 2 APP CONTROLLER

Formularul de complatare
Formularul de completare va primi valorile din biletes conform locul selecta [1 loc = 1 formular, 2 locuri 2 formulare,..]
Formularul va fi trimis prin metoda de chei fara a crea conflict intr-e valori unde campurile pentru mai multe persoane se vor trimite sub valoare de name insa sub index diferit, unde passagerul va fi inregistrat in baza de date in unu din 4 tabele passagers_vagon 1/4 in dependeta de vagonul selectat + VA PRIMI CONFIRMARE IN E-MAIL CU DATELE DESPRE BILET


  -->

  <!-- AuthControllers
AdminController si UserController, pentru a lucra cu 2 autentificari am difinit atat modelul de user cat si de admin cu controllere diferite am folosit 'guard' unde guardurile separate permit lucru cu mai multe autentificari guardul are provider, session etc, rememberToken


Am utilizat o autentificare simpla la AdminController unde sunt verificari precum ca numele prenume,email este uniq, + SE POT INREGISTRA DOAR 3 ADMINI IN SISTEM unde am creeat verifari ca poti accesa paginile de CRUD doar daca esti ADMIN + Pagina de dashboard unde poti iesi din cont

UserAuth => Autentificarea User Difera de admin, deoarece user posibilitatea de a-si modifica parola + login, + de a se salva in sistem prin rememberToken + de a ramane valoarea login salvata in partea de login atunci cand utilzatorul parasete contul [Utilizarea session + rememberToken] + posibilitate de a sterge
contul



-->



<!DOCTYPE html>
<html>
<head>
    {{-- SelectedDate = Locuri -> Date = SelectedSeets --}}

    <style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:wght@300;400;500;600;700;800&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

}

        .ticket-container {
            height: 100%;
            width: 900px;
            padding: 20px;
            border-top: 4px solid #fcc53b;
            border-left: 4px solid #0844A8;
            border-right: 4px solid #0844A8;

    border-bottom: 4px solid #fcc53b;
    border-radius: 70px;
            margin: 20px auto;
        }
        .ticket-header, .ticket-footer {
            text-align: center;
            margin-bottom: 10px;
        }
        .ticket-header h2 {
            color: #d00000;
            margin: 0;
            font-size: 20px;
        }
        .ticket-details {
            height: 100%;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .ticket-details th, .ticket-details td {
            border: 1px solid #161616;
            padding: 5px;
            text-align: left;
            font-size: 14px;
            font-weight: 700;
            color: #161616;
        }
        .ticket-details th {
            font-size: 15px;
            background-color: #f0f0f0;
        }
        .ticket-info {
            margin-bottom: 10px;
        }
        .ticket-info p {

            margin: 5px 0;
        }

        .user-info {
            width: 100%;
            height: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-info h3 {
            font-size: 20px;
color: #161616;
font-weight: 700;
        }

        .user-info p {
            font-size: 16px;
            color: #161616;
            font-weight: 700;
            margin: 3px 0;
            text-align: center;
        }

        .user-info h4 {
font-size: 17px;
            color: #0844A8;
            font-weight: 700;
            margin: 3px 0;
            text-align: center;
        }

    .alls_passagers{
        width: 100%;
justify-content: center;
flex-direction: column;
        align-items: center;
        height: 100%;
margin: auto;
    }

    .pass{
        justify-content: center;
align-items: center;

    }

.pass h3{
    text-align: center;
    color: #d00000;
    font-size: 25px;
    font-weight: 700
}

.logo{
    margin: auto;
width: 230px;

}

.logo h2{
    text-align: center;
    color: #161616;
    font-weight: 700
}

.ticket-header .logo h3{
    color: #0844A8;
    font-size: 30px;
    text-align: center;
    background-color: #f0f0f0;
    border-radius: 80px;
    border: 2px solid #0844A8;
    font-weight: 700
}



    </style>
</head>
<body>
    <div class="ticket-container">

        <div class="ticket-header">
            <h2>DOCUMENT DE CĂLĂTORIE</h2>
            <div class="logo">
                <h2>Călătorie operată de</h2>
                <h3>IRE</h3>
            </div>
        </div>
        <div class="ticket-info">
            <table class="ticket-details">
                <tr>
                    <th>Tren</th>
                    <th>Vagon</th>
                    <th>Clasa de deservire</th>
                    <th>Loc/Locuri</th>
                    <th>Preț</th>
                    <th>Data</th>
                </tr>
                <tr>
                    <td>{{$bilet->number_train}}</td>
                    <td>{{$bilet->vagon_number3}}</td>
                    <td>{{$bilet->class2c}}C</td>
                    <td>{{$selectedDate}}</td>
                    <td>{{$totalPrice3}} MDL</td>
                    <td>{{$selectedSeats3}}</td>

                </tr>
            </table>
            <table class="ticket-details">
                <tr>
                    <th>Ruta</th>
                    <td>{{$bilet->route_name}}</td>
                </tr>
                <tr>
                    <th>Ora Plecării</th>
                    <td>{{$bilet->time_start}}</td>
                </tr>
                <tr>
                    <th>Durata Călătoriei</th>
                    <td>{{$bilet->duration}}</td>
                </tr>
                <tr>
                    <th>Ora Destinației</th>
                    <td>{{$bilet->time_destination}}</td>
                </tr>

            </table>
        </div>
        <div class="pass">
            <h3>Date Pasageri</h3>
        </div>
        <div class="alls_passagers">
            @foreach ($formData as $i => $person)
            <div class="user-info">
                <p>Numele Pasagerului {{ $i + 1 }}:  {{ $person["person_name"] }}</p>
                <p>Prenumele Pasagerului {{ $i + 1 }}:  {{ $person["person_lastname"] }}</p>
                <h4>Email {{ $i + 1 }}: {{ $person["email"] }}</h4>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>

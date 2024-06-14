<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>

body{
    font-family: sans-serif;
}
.modal_div {
margin: auto;
height: 100%;
width: 550px;
flex-direction: column;
padding: 15px 25px;
background-color: #5793fc;
border-radius: 15px;
text-align: center;


}

.modal_div h1 {
    font-weight: 600;
    text-align: center;
    font-size: 25px;
    color: #161616;
}
.modal_div p {
    text-align: center;
    font-size: 15px;
    font-weight: 600;
    color: #161616;
    text-decoration: underline;
    font-weight: 700;
}


.modal_div h4 {
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    font-size: 20px;
    color: #161616;
}

.modal_div h3{
    font-size: 20px;
    font-weight: 700;
    color: #161616;
    text-align: center;
}



    </style>
</head>
<body>
<div class="modal_div">
    <h1>Abonament Confirmat !</h1>
    <h3>Bună {{$name}}</h3>
    <p>Vă mulțumim pentru că ați ales abonamentul de călătorie IRE
     Abonamentul dvs. a fost confirmat cu succes.</p>

     <br>
     <h4>Nume: {{$name}}</h4>
     <h4>Prenume: {{$lastname}}</h4>
     <h3>Email: {{$email}}</h3>
     <p>Pret: {{$price}}</p>


     </div>


</div>
</body>
</html>

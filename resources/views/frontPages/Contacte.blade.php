@extends("layout")

@section("title", "Conctacte")

@section("content")
<div class="contact">
    <h2>Contacte/Support</h2>
</div>
<div class="txt-contact">
<h4>Completează formularul de mai jos pentru a trimite cererea ta de asistență. <br> Echipa noastră va răspunde în cel mai scurt timp posibil.</h4>

</div>
<div class="contact_form">

    <form action="{{route("store-contact")}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Numele">
        @error("name")
            <p class="errors">{{$message}}</p>
        @enderror
        <input type="text" name="lastname" placeholder="Prenumele" required>
        @error("lastname")
            <p class="errors">{{$message}}</p>
        @enderror
        <input type="email" name="email" placeholder="Email" required>
        @error("email")
            <p class="errors">{{$message}}</p>
        @enderror
        <textarea name="description" placeholder="Descriere" rows="5" required></textarea>
        @error("description")

        @enderror
        <div class="button-send">
          <button>Trimite</button>
        </div>
    </form>

</div>
<br>

@endsection

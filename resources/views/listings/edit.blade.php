

<form name="form_opdracht" id="form_opdracht" method="POST" action="/listings/{{$todo->id}}">
    @csrf
    @method('PUT')
    <div>
        <h2>Opdracht aanpassen</h2>
        <label>Email:</label>
        <input type="text" name="email" value="{{$todo->email}}">
        @error('email')
        <p style="color: red">Email moet ingevuld worden.</p>
        @enderror

    </div>
    <div>
        <label>Opdracht:</label>
        <input type="text" name="opdracht" value="{{$todo->opdracht}}">
        @error('opdracht')
        <p style="color: red;">Email moet ingevuld worden.</p>
        @enderror
    </div>
    <div>
        <label>Opdracht omschrijving:</label>
        <input type="text" name="opdracht_omschrijving" value="{{$todo->opdracht_omschrijving}}">
        @error('opdracht_omschrijving')
        <p style="color: red;">Email moet ingevuld worden.</p>
        @enderror
    </div>
    <div>
        <button type="submit" name="submitOpdracht">Aanmaken</button>
    </div>
</form>
<a href="/">Terug</a>

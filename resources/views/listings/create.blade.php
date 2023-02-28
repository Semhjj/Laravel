<form name="form_opdracht" id="form_opdracht" method="POST" action="/listings">
    @csrf
    <div>
        <label>Email:</label>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
        <p style="color: red">Email moet ingevuld worden.</p>
        @enderror

    </div>
    <div>
        <label>Opdracht:</label>
        <input type="text" name="opdracht" value="{{old('opdracht')}}">
        @error('opdracht')
        <p style="color: red;">Email moet ingevuld worden.</p>
        @enderror
    </div>
    <div>
        <label>Opdracht omschrijving:</label>
        <input type="text" name="opdracht_omschrijving" value="{{old('opdracht_omschrijving')}}">
        @error('opdracht_omschrijving')
        <p style="color: red;">Email moet ingevuld worden.</p>
        @enderror
    </div>
    <div>
        <button type="submit" name="submitOpdracht">Aanmaken</button>
    </div>
</form>
<a href="/">Terug</a>

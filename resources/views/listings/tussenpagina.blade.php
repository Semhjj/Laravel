<div>
    <h2>Opdracht verwijderen</h2>

   <p>Email: {{$todo['email']}}</p>
   <p>Opdracht: {{$todo['opdracht']}}</p>
   <p>Opdracht omschrijving: {{$todo['opdracht_omschrijving']}}</p>
    <form method="POST" action="/listings/{{$todo['id']}}">
        @csrf
        @method('DELETE')
        <p>Wil je de opdracht verwijderen?</p>

        <a href="/">Terug</a>
        <button type="submit">Verwijderen</button>
    </form>
</div>

<x-layouts.app title="contacts">
    <h1>Contact</h1>

    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

    <form action="/action_page.php">
        <label for="Naam">Naam:</label><br>
        <input type="text" id="Naam" name="Naam" value=""><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value=""><br>
        <label for="Onderwerp">Onderwerp:</label><br>
        <input type="text" id="Onderwerp" name="Onderwerp" value=""><br>
        <label for="Tekst">Tekst:</label><br>
        <textarea id="w3review" name="w3review" rows="4" cols="50"> </textarea>
        <br>
        <input type="submit" value="Submit">
      </form>

</x-layouts.app>

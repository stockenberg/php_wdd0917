

<form action="?p=contact&action=submit" method="post">

    <div>
        <label for="firstname">Firstname</label>
        <input type="text" name="contact[firstname]" id="firstname">
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <input type="text" name="contact[lastname]" id="lastname">
    </div>
    <div>
        <label for="email">E-Mail</label>
        <input type="text" name="contact[email]" id="email">
    </div>

    <input type="checkbox" name="contact[agb]" value="agb"> Checkbox

    <input type="radio" name="contact[radio]" value="yes"> yes
    <input type="radio" name="contact[radio]" value="no"> no

    <select name="contact[select]" id="">
        <option disabled selected>Bitte wählen</option>
        <option value="1">Eintrag 1</option>
        <option value="2">Eintrag 1</option>
    </select>

    <input type="color" name="contact[color]">

    <input type="datetime-local" name="contact[datetime-local]">

    <input type="number" name="contact[number]">

    <input type="file" name="file">

    <button type="submit">Absenden</button>

</form>
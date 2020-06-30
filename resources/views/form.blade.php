<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up | SanberCode</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{'\welcome'}}" method="post">
        @csrf
        <label for="fname">First name</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Last name</label><br>
        <input type="text" name="lname" id="lname">

        <br><br>

        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" id="rmale" value="rmale">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="rfemale" value="rfemale">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="rother" value="rother">
        <label for="rother">Other</label><br> <br>

        <label for="nation">Nationality</label><br>
        <select name="nation" id="nation">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapura">Singapura</option>
        </select>

        <br><br>

        <label for="language">language Spoken</label><br>
        <input type="checkbox" name="indonesia" id="indonesia" value="indonesia">
        <label for="indonesia">Indonesia</label><br>
        <input type="checkbox" name="english" id="english" value="english">
        <label for="english">Inggris</label><br>
        <input type="checkbox" name="other" id="other" value="other">
        <label for="other">Other</label>

        <br><br>

        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio"></textarea>
        <br>

        <button type="submit">Sign Up</button>

    </form>

</body>

</html>
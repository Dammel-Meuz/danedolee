<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>
    <h1>{{ $ouvrier->firstName }}</h1>
    <a href="">Modifier</a>

    <h2></h2>
    <form method="POST" action="">
        @csrf

        <label for="job_id">Choisir un emploi :</label>
       
        <div>
            <label for="address">Adresse :</label>
            <input type="text" name="address" id="address">
        </div>

        <div>
            <label for="region">Région :</label>
            <input type="text" name="region" id="region">
        </div>
		<div>
            <label for="job">job :</label>
            
			<select name="job" id="">
				<option value="5">macon</option>
				<option value="6">menuisier</option>
                <option value="7">plombier</option>
                <option value="8">jardinier</option>
                <option value="9">electricien</option>
                <option value="10">soudeur metallique</option>
                <option value="11">peintre</option>
                <option value="12">serrurier</option>
                <option value="13">carreleur</option>
                <option value="14">tapissier</option>
        
			</select>
        </div>

        <div>
            <label for="experience">Expérience :</label>
            <input type="text" name="experience" id="experience">
        </div>

        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" id="phone">
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>



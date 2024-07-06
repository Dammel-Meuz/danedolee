<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('ouvrier.profiles.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="job_id">Choisir un emploi :</label>
<input type="number" name="ouvrier_id" value="{{ $ouvrier->id }}" hidden>
        <div>
            <label for="address">Adresse :</label>
            <input type="text" name="addres" id="address">
        </div>

        <div>
            <label for="region">Région :</label>
            <input type="text" name="region" id="region">
        </div>
		<div>
            <label for="job">job :</label>
            <select name="jod_id" id="jod_id">
                @foreach($jods as $jod)
                    <option value="{{ $jod->id }}">{{ $jod->job }}</option>
                @endforeach
            </select>
{{--
			<select name="jod_id" id="">
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
        </div> --}}

        <div>
            <label for="experience">Expérience :</label>
            <input type="text" name="experience" id="experience">
        </div>

        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="phone">image profile :</label>
            <input type="file" name="image" id="phone">
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

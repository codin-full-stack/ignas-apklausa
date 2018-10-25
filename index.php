<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IJ portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="Ignas Jurevicius">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="Ignas Jurevicius">
    <link rel="stylesheet" href="apklausa.css">
</head>
<body>

<section class="title">
    <div class="container-fluid">
        <h1>APKLAUSOS FORMA</h1>
        <h3>Privaloma užpildyti <i>VISUS<i> laukus!</h3>
    </div>
<section>


<nav id="navbar-example3" class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Apklausos medis</a>
    
    <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="#mainInfo">Pagrindinė informacija</a>
    <nav class="nav nav-pills flex-column">
        <a class="nav-link ml-3 my-1" href="#personalInfo">Asmeninė informacija</a>
        <a class="nav-link ml-3 my-1" href="#contactInfo">Kontaktiniai duomenys</a>
    </nav>
    
    <a class="nav-link" href="#item-2">Pomėgiai</a>
    <a class="nav-link" href="#item-3">Nuomonė</a>
    </nav>
</nav>

<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  
    <section class='client'>
        
    <form id="mainInfo">
        <div class="singleDiv"> 
            <h4>Pagrindinė informacija</h4>
        </div>

        <div class="singleDiv">
            <label class="label" for="name">Vardas*</label><br>
            <input class="input" placeholder="Vardas" type="text" id="name" name="name" required/>
        </div>    

        <div class="singleDiv">
            <label class="label" for="secondName">Pavardė*</label><br>
            <input class="input" placeholder="Pavardė" type="text" id="secondName" name="secondName" required/>
        </div>

    </form>

    <form id="personalInfo">
        <div >
            <h5>Asmeninė informacija</h5>
        </div>

        <div class="singleDiv">
            <label class="label" for="age">Gimimo metai</label>
            <input class="input" type="date" id="age" name="age"/>
        </div>
    </form>

    <form id='contactInfo'>
        <div class="singleDiv">
            <h5>Kontaktiniai duomenys</h5>
        </div>

        <div class="singleDiv">
            <label class="label" for="email">Elektroninis paštas*</label><br>
            <input class="input" id="email" maxlength="255" name="email" placeholder="Email" type="email" size="50" required/>
        </div>

    </form>

    </section>

    <section class='hobbies'>
        <h4 id="item-2">Pomėgiai</h4>
        <p>...</p>
    </section>

    <section class='opinion'>
        <h4 id="item-3">Nuomonė</h4>
        <p>...</p>
    </section>
</div>

<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>

</body>
</html>
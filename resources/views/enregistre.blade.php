<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/enregistrement.css">
    
    <title>Document</title>
</head>
<body>
      <header>
        <img src="../images/auf.png" alt="">
        <p>GESTION DES ABONNES</p>
        </header>

        <div class="entete"> 
            <h3>Formulaire d'inscription </h3>
        </div>

            <div class="container">
                
            <form action="{{ route('acueil') }}"hod="POST">
                    
                        
                            <div class="row col-12 d-flex justify-content-center  " >
                                 
                                <div class="form-group col-6">
                                
                                
                                <input type="text" class="form-control" name="nom"  placeholder ="nom" aria-label="Username" aria-describedby="addon-wrapping">

                                 
                                 <input type="text" class="form-control mt-2" name="prenom" placeholder="prenom" aria-label="Username" aria-describedby="addon-wrapping">
                                  
 
                                 
                                 
                                 <input type="date" class="form-control mt-2" name="date_de_naissance"  aria-label="Username" aria-describedby="addon-wrapping">
                                 
 
                                 
                             
                                 <input type="date" class="form-control mt-2"  name="date_de_debut_d_abonnement" aria-label="Username" aria-describedby="addon-wrapping">
                                 
 
                                 
                                 
                                 <input type="text" class="form-control mt-2"  name="numero_de_telephone" placeholder="numero de telephone" aria-label="Username" aria-describedby="addon-wrapping">
                                 
 
                                 <input type="email" class="form-control mt-2"  name="email" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping"> 
                                 
                                 <input type="submit" class="btn text-light text-center" name="validerabonne" value="valider" ><a href="acueil">Envoyer</a></input>
                              </div>

                            </div>
                        
                
                      <div >
        
                    </div>
                    
            </form>

            </div>
 
 <footer>
    copy rigth by simplon burkina
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
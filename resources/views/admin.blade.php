<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/enregistrement.css')}}">
    
    <title>Document</title>
</head>
<body>
      <header>
        <img src="images/auf.png" alt="">
        <p>GESTION DES ABONNES</p>
        </header>

        <div class="entete"> 
            <h3>Formulaire d'inscription Administrateur</h3>
        </div>

            <div class="container">
                
            <form action="{{ route('auth') }}"hod="POST">
                    
                    
                        
                            <div class="row col-12 d-flex justify-content-center  " >
                                 
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control" name="nom"  placeholder ="nom" aria-label="Username" aria-describedby="addon-wrapping">
                                 
                                        <input type="text" class="form-control mt-2" name="prenom" placeholder="prenom" aria-label="Username" aria-describedby="addon-wrapping">
                    
                                        <input type="text" class="form-control mt-2" name= "telephone" placeholder="telephone" aria-label="Username" aria-describedby="addon-wrapping">

                                        <input  type="text" class="form-control mt-2" name= "email" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping">

                                        <input type="text"type class="form-control mt-2" name= "mot de passe" placeholder="entrer le mot de passe" aria-label="Username" aria-describedby="addon-wrapping"> 

                                         <input type="text" class="form-control mt-2"  name="confirmer le mot de passe" placeholder="confirmer le mot de passe" aria-label="Username" aria-describedby="addon-wrapping"> 
                                <input class="btn btn-primary text-light" type="submit"  name="valideradmine"> 
                               
                                    </div>
                            </div>
                        
                    
                    
               
                <div>
    
                   <!--<a href="/auf/index.php" class="btn text-light text-center">Inscrption</a> -->
              </div>
                
                    
                    
            </form>

            </div>
 
 <footer>
    copy rigth by simplon burkina
</footer>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
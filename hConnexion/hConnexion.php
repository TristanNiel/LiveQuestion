<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>LiveQuestion</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="hConnexion.css">
      <script src="script.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
   </head>
   <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="../index.php">Livequestion</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="hConnexion.php">Les questions</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Poser une question</a>
               </li>
            </ul>
         </div>
      </nav>
      <section>
         <div class="container">
            <!-- TOAST -->
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                     <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                     <small>Date de la question</small>
                  </div>
                  <div class="toast-body">
                     Question ?
                  </div>
                  <div class="toast-footer">
                     <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
                  </div>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | Nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                  <strong class="mr-auto"><i class="fas fa-user-circle"></i> NomUtilisateur | nbr avis récoltés | Catégories</strong>
                  <small>Date de la question</small>
               </div>
               <div class="toast-body">
                  Question ?
               </div>
               <div class="toast-footer">
                  <a><i class="far fa-heart"></i></a> <a><i class="far fa-comments"></i></a>
               </div>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Posez une question <i class="fas fa-pen"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body"><form action="hConnexion.php" method="post">
                         <label for="categorie">Choisissez une catégorie :</label>
                         <select name="categorie" id="categorie">
                         <option value="musique">Musique</option>
                         <option value="sport">Sport</option>
                         <option value="cinema">Cinéma</option>
                         </select>
                        <label for="question">Vous pouvez poser une question ci-dessous:</label>
                        <textarea id="question" name="question" rows="5" cols="62" maxlength="450"></textarea>
                         <input type="submit" value="Ajouter une question" class="btn btn-primary">
                         </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
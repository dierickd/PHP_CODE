<?php
$success = false;
$errors = [];


if (isset($_GET['del']) && !empty(trim($_GET['del']))) {
   if (file_exists('uploads/' . $_GET['del'])) {
      unlink('uploads/' . $_GET['del']);
      header('Location: upload.php?q=fichier supprimé avec succès !');
   } else {
      $errors[] = 'Le fichier ' . $_GET['del'] . ' n\'esiste pas!';
   }
}

if (isset($_FILES) && !empty($_FILES)) {
   $extensions = ['.png', '.gif', '.jpg'];
   $taille_maxi = 1000000;
   $extension = strrchr($_FILES['avatar']['name'], '.');

   if (!in_array($extension, $extensions, true)) {
      $errors[] = 'Extension refusé';
   }

   if ($_FILES['avatar']['size'] > $taille_maxi) {
      $errors[] = 'Image trop grosse';
   }

   if (empty($errors)) {
      $idUniq = uniqid();
      move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $idUniq . $extension);
      header('Location: upload.php?q=fichier uploadé avec succès !');
   }
}

$it = new FilesystemIterator(dirname('uploads/*'));

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Upload</title>
</head>
<body>
<div class="jumbotron">
    <div class="container-fluid">
        <h1>Upload file</h1>
        <p>Vous pouvez charger et supprimer des fichiers de type <i>.png, .gif, .jpg</i></p>
    </div>
</div>
<div class="container pb-5">
    <h2 class="my-5">Formulaire</h2>
    <form method="post" enctype="multipart/form-data">
       <?php if (!empty($errors)): ?>
          <?php foreach ($errors as $key => $value): ?>
               <div class="alert alert-danger">
                  <?= $value ?>
               </div>
          <?php endforeach; ?>
       <?php endif; ?>
       <?php if (isset($_GET['q'])): ?>
           <div class="alert alert-success">
               <p><?= $_GET['q'] ?></p>
           </div>
       <?php endif; ?>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group my-5">
            <button class="btn btn-primary">Envoyer</button>
        </div>
    </form>
    <h2 class="my-5" style="border-bottom: 1px solid darkgoldenrod; padding-bottom: 1rem">Liste des images</h2>
    <div class="row">
       <?php if (empty($it->getFilename())): ?>
           <p><i>Aucun fichier à afficher</i></p>
       <?php else: ?>
           <div class="card-deck">
              <?php foreach ($it as $fileinfo): ?>
                  <div class="col card text-center" style="width: 18rem;">
                      <img src="uploads/<?= $fileinfo->getFilename() ?>" class="card-img-top"
                           alt="<?= $fileinfo->getFilename() ?>">
                      <div class="card-body">
                          <h5 class="card-title"><?= $fileinfo->getFilename() ?></h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk
                              of
                              the
                              card's
                              content.</p>
                          <a href="upload.php?del=<?= $fileinfo->getFilename() ?>" class="btn btn-primary"
                             disabled="disabled">Supprimer</a>
                      </div>
                  </div>
              <?php endforeach; ?>
           </div>
       <?php endif; ?>
    </div>

</div>
</body>
</html>
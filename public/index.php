<?php 
use App\Models\EmailModel;
use Core\DBConnection;

require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';
// require '../app/views/index.view.php';

// $EmailModel = new EmailModel(DBConnection::start());
// $statement = $db->prepare('select * from emails');
// $statement->execute();
// $allEmails = $statement->fetchAll(PDO::FETCH_OBJ);



// $router->get('/movies/{movieId}/photos/{photoId}', function($movieId, $photoId) {
//   echo 'Movie #' . $movieId . ', photo #' . $photoId;
// });

// Run it!
$router->run();

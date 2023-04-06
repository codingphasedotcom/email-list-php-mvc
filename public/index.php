<?php 
use App\Models\EmailModel;
use Core\DBConnection;


require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';
if (file_exists(__DIR__ . '/../' . '.env')) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../' );
  $dotenv->load(__DIR__);
}


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

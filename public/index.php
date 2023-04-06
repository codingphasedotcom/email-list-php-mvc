<?php 
use App\Models\EmailModel;
use Core\DBConnection;


require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../' );
if($_ENV['APP_ENV'] !== 'production') {
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

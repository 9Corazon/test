require_once '../controllers/database/Connecting-to-database.php';

$name = $_POST['name'];
$pass = $_POST['password'];

// допилить валидацию

$sql = "INSERT INTO users (name,password) VALUES ('$name','$pass')"; //<- сохранение запроса в $sql

$conn->query($sql); // соединение с бд  -> выполнение запроса




header('Location: auth.php'); //<- редиректим  
$conn->close(); //<- закрываем соединения
?>

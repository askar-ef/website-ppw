<?php
$host = 'localhost'; // Ganti dengan host database Anda
$db   = 'skills'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$query = "SELECT * FROM programming";
$stmt = $conn->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($data as $row): ?>
  <div class="flex ml-16 align-center gap-4">
    <img class="h-20 w-20 rounded-full" src="<?php echo $row['gambar']; ?>" />
    <div>
      <h3 class="text-2xl font-semibold leading-7 tracking-tight text-gray-100"><?php echo $row['language']; ?></h3>
      <p class="text-1xl font-semibold leading-6 text-indigo-600"><?php echo $row['level']; ?></p>
    </div>
  </div>
<?php endforeach; ?>

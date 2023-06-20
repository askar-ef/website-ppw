<?php
$host = 'localhost';
$db   = 'response';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$query = "SELECT * FROM comments";
$stmt = $conn->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    $query = "UPDATE comments SET name = :name, status = :status, title = :title, message = :message WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  } elseif (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM comments WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  }

  $redirectUrl = $_SERVER['PHP_SELF'];
  echo '<script>window.location.href = "'.$redirectUrl.'";</script>';
  exit();


}
?>

<?php foreach ($data as $row): ?>
    <div class="card bg-white rounded-lg shadow-lg p-6" ondblclick="showButtons(<?php echo $row['id']; ?>)">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-4">
          <input class="w-full rounded-lg border-gray-200 px-1 text-3xl text-indigo-600 font-extrabold" type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
          <input class="w-full rounded-lg border-gray-200 px-1 text-sm mb-2" type="text" id="status" name="status" value="<?php echo $row['status']; ?>" required>
          <input class="w-full rounded-lg border-gray-200 px-1 text-xl font-bold" type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
          <textarea class="w-full h-18 rounded-lg border-gray-200 px-1 text-sm resize-y" id="message" name="message" required><?php echo $row['message']; ?></textarea>
        </div>
        <div class="flex justify-between">
          <button id="update-button-<?php echo $row['id']; ?>" class="bg-indigo-600 text-white px-1 py-1 rounded-lg" type="submit" name="update" style="display: none;">Update</button>
          <button id="delete-button-<?php echo $row['id']; ?>" class="bg-red-600 text-white px-1 py-1 rounded-lg" type="button" onclick="confirmDelete(<?php echo $row['id']; ?>)" style="display: none;">Delete</button>
        </div>
      </form>
      <form id="delete-form-<?php echo $row['id']; ?>" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="display: none;">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="delete" value="1">
      </form>
    </div>
    <?php endforeach; ?>

    
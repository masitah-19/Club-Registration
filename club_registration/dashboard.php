<?php
include 'db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// 1. INSERT Data
if (isset($_POST['add_item'])) {
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $conn->query("INSERT INTO inventory (item_name, category, quantity, status) VALUES ('$item_name', '$category', '$quantity', '$status')");
    header("Location: dashboard.php");
}

// 2. DELETE Data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM inventory WHERE id=$id");
    header("Location: dashboard.php");
}

// 3. UPDATE Data (Proses)
if (isset($_POST['update_item'])) {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $conn->query("UPDATE inventory SET item_name='$item_name', category='$category', quantity='$quantity', status='$status' WHERE id=$id");
    header("Location: dashboard.php");
}

// Ambil data untuk Edit jika butang Edit ditekan
$edit_data = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_result = $conn->query("SELECT * FROM inventory WHERE id=$id");
    $edit_data = $edit_result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Inventori Sukan - Pink Sports Club</title>
    <style>
        body { font-family: 'Segoe UI'; background-color: #fff0f5; margin: 0; padding: 20px; }
        .container { max-width: 1000px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(255,20,147,0.2); }
        h1, h2 { color: #c71585; text-align: center; }
        .nav-links { text-align: right; margin-bottom: 20px; }
        .nav-links a { background: #ff1493; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ffb6c1; padding: 10px; text-align: center; }
        th { background-color: #ff69b4; color: white; }
        form.inline-form { display: flex; gap: 10px; flex-wrap: wrap; background: #ffe4e1; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        input, select { padding: 8px; border: 1px solid #ff69b4; border-radius: 4px; flex: 1; }
        .btn { background-color: #ff1493; color: white; border: none; padding: 8px 15px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-danger { background-color: #dc3545; }
        .btn-edit { background-color: #ffc107; color: black; text-decoration: none; padding: 5px 10px; border-radius: 4px; font-size: 0.9em; }
    </style>
</head>
<body>

<div class="container">
    <div class="nav-links">
        <span>Selamat datang, <b><?php echo $_SESSION['username']; ?></b></span> | 
        <a href="index.php">Laman Utama</a> | 
        <a href="logout.php" style="background: #dc3545;">Log Keluar</a>
    </div>

    <h1>Pengurusan Inventori Sukan (CRUD Dinamik)</h1>

    <!-- Borang Insert / Update -->
    <?php if ($edit_data): ?>
        <h2>Kemaskini Item Inventori</h2>
        <form action="dashboard.php" method="POST" class="inline-form">
            <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
            <input type="text" name="item_name" value="<?php echo $edit_data['item_name']; ?>" required>
            <select name="category" required>
                <option value="Volleyball" <?php if($edit_data['category']=='Volleyball') echo 'selected'; ?>>Volleyball</option>
                <option value="Netball" <?php if($edit_data['category']=='Netball') echo 'selected'; ?>>Netball</option>
                <option value="Football" <?php if($edit_data['category']=='Football') echo 'selected'; ?>>Football</option>
                <option value="Badminton" <?php if($edit_data['category']=='Badminton') echo 'selected'; ?>>Badminton</option>
            </select>
            <input type="number" name="quantity" value="<?php echo $edit_data['quantity']; ?>" required>
            <input type="text" name="status" value="<?php echo $edit_data['status']; ?>" required>
            <button type="submit" name="update_item" class="btn">Kemaskini</button>
        </form>
    <?php else: ?>
        <h2>Tambah Item Baru (Insert)</h2>
        <form action="dashboard.php" method="POST" class="inline-form">
            <input type="text" name="item_name" placeholder="Nama Peralatan" required>
            <select name="category" required>
                <option value="">Pilih Kategori</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Netball">Netball</option>
                <option value="Football">Football</option>
                <option value="Badminton">Badminton</option>
            </select>
            <input type="number" name="quantity" placeholder="Kuantiti" required>
            <input type="text" name="status" placeholder="Status (Contoh: Baik / Rosak)" required>
            <button type="submit" name="add_item" class="btn">Tambah</button>
        </form>
    <?php endif; ?>

    <!-- Paparan Data (Display) -->
    <h2>Senarai Inventori Semasa</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Item</th>
            <th>Kategori Sukan</th>
            <th>Kuantiti</th>
            <th>Status</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM inventory");
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['item_name']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <a href='dashboard.php?edit={$row['id']}' class='btn-edit'>Edit</a>
                        <a href='dashboard.php?delete={$row['id']}' class='btn-danger btn' style='padding:5px 10px; font-size:0.9em;' onclick='return confirm(\"Adakah anda pasti mahu padam?\")'>Padam</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tiada rekod dijumpai.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
<?php
session_start();
include 'connection.php';

class AdminUserManager
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAllUsers($search = '', $sortBy = 'id', $order = 'ASC')
    {
        // Validate sort column to prevent SQL injection
        $validColumns = ['id', 'email', 'first_name', 'last_name', 'user_name', 'phone', 'date_of_signup', 'last_login'];
        $sortBy = in_array($sortBy, $validColumns) ? $sortBy : 'id';
        $order = ($order === 'DESC') ? 'DESC' : 'ASC';

        $query = "SELECT id, email, first_name, last_name, user_name, phone, 
                         DATE_FORMAT(date_of_signup, '%Y-%m-%d') as formatted_signup,
                         DATE_FORMAT(last_login, '%Y-%m-%d %H:%i') as formatted_last_login 
                  FROM user";

        // Add search condition if search term is provided
        if (!empty($search)) {
            $search = $this->db->real_escape_string($search);
            $query .= " WHERE email LIKE '%$search%' 
                        OR first_name LIKE '%$search%' 
                        OR last_name LIKE '%$search%' 
                        OR user_name LIKE '%$search%'
                        OR phone LIKE '%$search%' ";
        }

        // Add sorting
        $query .= " ORDER BY $sortBy $order";

        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

// Check if user is admin (you'd implement proper admin authentication)
// For this example, we'll use a simple session check
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

$adminManager = new AdminUserManager($conn);
$search = $_GET['search'] ?? '';
$sortBy = $_GET['sort'] ?? 'id';
$order = $_GET['order'] ?? 'ASC';

$users = $adminManager->getAllUsers($search, $sortBy, $order);

// Output the result for debugging
//echo '<pre>';
//print_r($users);
//echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin - User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">User Management</h1>

        <!-- Search and Filter Form -->
        <form method="GET" class="mb-4 flex space-x-4">
            <input list="keywords" type="text" name="search" placeholder="Search users..." value="<?= htmlspecialchars($search) ?>"
                class="p-2 border rounded w-full">
                <datalist id="keywords" >
                    <?php
                    $sql = "SELECT email, first_name, last_name, user_name,phone, DATE_FORMAT(date_of_signup, '%Y-%m-%d') as formatted_signup FROM user";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $email = $row['email'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $user_name = $row['user_name'];
                        $phone = $row['phone'];
                        $formatted_signup = $row['formatted_signup'];

                        $keywords[$email] =1;
                        $keywords[$first_name] =1;
                        $keywords[$last_name] =1;
                        $keywords[$user_name] =1;
                        $keywords[$phone] =1;
                        $keywords[$formatted_signup] =1;
                        foreach($keywords as $key =>$value)
                        {
                            echo "<option value='$key'>";
                        }
                    }
                    

                    ?>

                </datalist>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">
                Search
            </button>
        </form>

        <!-- Users Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded">
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">
                            <a
                                href="?sort=id&order=<?= $order === 'ASC' ? 'DESC' : 'ASC' ?>&search=<?= urlencode($search) ?>">
                                ID <?= $sortBy === 'id' ? ($order === 'ASC' ? '▲' : '▼') : '' ?>
                            </a>
                        </th>
                        <th class="p-3 text-left">
                            <a
                                href="?sort=email&order=<?= $order === 'ASC' ? 'DESC' : 'ASC' ?>&search=<?= urlencode($search) ?>">
                                Email <?= $sortBy === 'email' ? ($order === 'ASC' ? '▲' : '▼') : '' ?>
                            </a>
                        </th>
                        <th class="p-3 text-left">
                            First Name
                        </th>
                        <th class="p-3 text-left">
                            Last Name
                        </th>
                        <th class="p-3 text-left">Username</th>
                        <th class="p-3 text-left">Phone</th>
                        <th class="p-3 text-left">
                            <a
                                href="?sort=date_of_signup&order=<?= $order === 'ASC' ? 'DESC' : 'ASC' ?>&search=<?= urlencode($search) ?>">
                                Date of Signup <?= $sortBy === 'date_of_signup' ? ($order === 'ASC' ? '▲' : '▼') : '' ?>

                            </a>
                        </th>
                        <th class="p-3 text-left">
                            <a
                                href="?sort=last_login&order=<?= $order === 'ASC' ? 'DESC' : 'ASC' ?>&search=<?= urlencode($search) ?>">
                                last_login <?= $sortBy === 'last_login' ? ($order === 'ASC' ? '▲' : '▼') : '' ?>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3"><?= ($user['id']) ?></td>
                            <td class="p-3"><?= ($user['email']) ?></td>
                            <td class="p-3"><?= ($user['first_name']) ?></td>
                            <td class="p-3"><?= ($user['last_name']) ?></td>
                            <td class="p-3"><?= ($user['user_name']) ?></td>
                            <td class="p-3"><?= ($user['phone']) ?></td>
                            <td class="p-3"><?= ($user['formatted_signup']) ?></td>
                            <td class="p-3"><?= ($user['formatted_last_login'] ?? 'Never') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
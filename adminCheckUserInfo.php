<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        .font-inter {
            font-family: "Inter", sans-serif;
        }

        .font-raleway {
            font-family: "Raleway", sans-serif;
        }
    </style>

</head>

<body>

    <div class="">
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <?php include 'navbar.php'; ?>
                <!-- Page content here -->

                <div class="flex items-center justify-center p-6">
                    <div class="w-full max-w-7xl mt-6 border bg-white shadow-lg rounded-lg">
                        <div class="p-4 border-b border-gray-200">
                            <h2 class="text-2xl font-bold text-gray-800">User Information</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 text-sm">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date of Signup</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Login</th>
                                        <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Example rows -->
                                    <tr>
                                        <td class="px-4 py-2 text-gray-700">1</td>
                                        <td class="px-4 py-2 text-gray-700">john.doe@example.com</td>
                                        <td class="px-4 py-2 text-gray-700">John</td>
                                        <td class="px-4 py-2 text-gray-700">Doe</td>
                                        <td class="px-4 py-2 text-gray-700">johndoe</td>
                                        <td class="px-4 py-2 text-gray-700">1234567890</td>
                                        <td class="px-4 py-2 text-gray-700">2024-01-15</td>
                                        <td class="px-4 py-2 text-gray-700">2024-11-26 00:31:44</td>
                                        <td class="px-4 py-2 text-center">
                                            <button class="px-3 py-1 bg-blue-500 text-white rounded-lg text-xs hover:bg-blue-600">Edit</button>
                                            <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-xs hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- Repeat for additional rows -->
                                </tbody>
                            </table>
                        </div>
                        <div class="p-4 border-t border-gray-200">
                            <p class="text-sm text-gray-600">Total Users: <span class="font-bold">7</span></p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <div class="menu bg-gray-800 text-white min-h-full w-80">
                    <!-- Sidebar content here -->
                    <p class="text-4xl btn btn-ghost font-extrabold text-center"><a href="adminPanel.php">Master Admin</a></p>
                    <p class="text-center">P Paribahan</p>
                    <hr class="my-4">
                    <div class="flex flex-col gap-5">
                        <btn class="btn bg-slate-700 border-none h-14 text-xl text-gray-200"><a href="adminAddBus.php">Add Bus</a></btn>
                        <btn class="btn bg-slate-700 border-none h-14 text-xl text-gray-200"><a href="adminAddBusStop.php">Add Bus Stop</a></btn>
                        <btn class="btn bg-slate-700 border-none h-14 text-xl text-gray-200"><a href=".php">See User Info</a></btn>
                        <btn class="btn bg-slate-700 border-none h-14 text-xl text-gray-200"><a href=".php">Check Bus Location</a></btn>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
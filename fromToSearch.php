<?php
session_start();
include 'connection.php';
include 'header.php';

?>
<nav class="bg-white shadow-lg p-4">

    <div class="container mx-auto flex items-center justify-between"> <a href="#"
            class="text-xl font-bold">BusFinder</a>

        <form method="POST" action="" class="flex space-x-4 items-center"> <!-- From Location -->
            <div> <label for="from" class="sr-only">From</label> 
            <input list="keywords" type="text" name="from" id="from"
                    placeholder="From" required
                    class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <datalist id="keywords">
                <?php
                $sql = "SELECT DISTINCT location from bus_stop;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    foreach($result as $row)
                    {
                        $location = $row['location'];
                        echo "<option value='$location'>";
                    }
                }
                
                ?> 
                </datalist>
            </div> <!-- To Location -->
            <div> <label for="to" class="sr-only">To</label>
             <input 
            list="keywords"
            type="text" name="to" id="to" placeholder="To"
            required
                    class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <datalist id="keywords">
                <?php
                $sql = "SELECT DISTINCT location from bus_stop;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    foreach($result as $row)
                    {
                        $location = $row['location'];
                        echo "<option value='$location'>";
                    }
                }
                ?>
                </datalist>
            </div> <!-- Bus Type -->
            <div> <label for="coach_type" class="sr-only">Coach Type</label> <select name="coach_type" id="coach_type" required
                    class="p-2 border border-gray-300 bg-white rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Coach Type</option>
                    <option value="AC">AC</option>
                    <option value="Non-AC">Non-AC</option>
                </select> </div> <!-- Date -->
            <div> <label for="date" class="sr-only">Date</label>
            <input type="date" name="date" id="date" required
                    class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div> <!-- Submit Button -->
            <div> <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Search</button>
            </div>
        </form>
    </div>
</nav>
<?php include 'footer.php'; ?>
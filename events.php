<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events and Competitions</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4 text-center text-gray-900 dark:text-white">Events and Competitions</h1>

        <!-- Event List -->
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            include 'config.php';

            // Query untuk mengambil semua data acara dari tabel events
            $sql = "SELECT * FROM events";
            $result = $conn->query($sql);

            // Memeriksa apakah ada data yang diambil dari database
            if ($result->num_rows > 0) {
                // Memulai output dari data acara
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-lg">';
                    echo '<h2 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">' . $row["title"] . '</h2>';
                    echo '<p class="text-gray-700 dark:text-gray-300">' . $row["description"] . '</p>';
                    echo '<p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400">Date: ' . $row["date"] . '</p>';
                    echo '<div class="mt-4 flex justify-end">';
                    echo '<button class="mr-2 inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200" onclick="editEvent(' . $row["id"] . ')">Edit</button>';
                    echo '<button class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200" onclick="deleteEvent(' . $row["id"] . ')">Delete</button>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-gray-700 dark:text-gray-300 text-center">No events found.</p>';
            }

            $conn->close();
            ?>
        </div>

        <!-- Button to Add Event -->
        <div class="mt-8 flex justify-center">
            <button id="add-event-btn"
                class="flex items-center justify-center w-36 h-12 text-sm font-medium text-gray-600 bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                type="button" onclick="openAddEventModal()">
                <span class="mr-2">Add Event</span>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 5a1 1 0 112 0v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V5z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>

        <!-- Modal to Add and Update Event -->
        <div id="event-modal"
            class="fixed z-10 inset-0 overflow-y-auto hidden flex items-center justify-center bg-gray-500 bg-opacity-75 dark:bg-gray-900 dark:bg-opacity-75">
            <div class="bg-white dark:bg-gray-800 rounded-lg w-80 p-6">
                <input type="hidden" id="event-id">

                <div class="mb-4">
                    <label for="event-title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" id="event-title"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter event title">
                </div>
                <div class="mb-4">
                    <label for="event-description"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                    <textarea id="event-description"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        rows="3" placeholder="Enter event description"></textarea>
                </div>
                <div class="mb-4">
                    <label for="event-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                    <input type="date" id="event-date"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200"
                        onclick="saveEvent()">Save</button>
                    <button type="button"
                        class="ml-4 inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200"
                        onclick="closeEventModal()">Cancel</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        var currentEventId = null; // Untuk menyimpan ID event yang sedang diedit

        // Function to open the add event modal
        function openAddEventModal() {
            document.getElementById('event-id').value = '';
            document.getElementById('event-title').value = '';
            document.getElementById('event-description').value = '';
            document.getElementById('event-date').value = '';
            document.getElementById('event-modal').classList.remove('hidden');
        }

        // Function to open the edit event modal
        function editEvent(eventId) {
            currentEventId = eventId;

            // Retrieve event details from server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_event.php?id=' + eventId, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var event = JSON.parse(xhr.responseText);
                        document.getElementById('event-id').value = event.id;
                        document.getElementById('event-title').value = event.title;
                        document.getElementById('event-description').value = event.description;
                        document.getElementById('event-date').value = event.date;
                        document.getElementById('event-modal').classList.remove('hidden');
                    } else {
                        console.error('Error fetching event details:', xhr.status);
                        // Handle error (show message, log error, etc.)
                    }
                }
            };
            xhr.send();
        }

        // Function to close the add and edit event modal
        function closeEventModal() {
            currentEventId = null;
            document.getElementById('event-modal').classList.add('hidden');
        }

        // Function to save event (add or update)
        function saveEvent() {
            var id = document.getElementById('event-id').value;
            var title = document.getElementById('event-title').value;
            var description = document.getElementById('event-description').value;
            var date = document.getElementById('event-date').value;

            // Prepare data to send to server
            var data = {
                id: id,
                title: title,
                description: description,
                date: date
            };

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_event.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Event saved successfully');
                        // Close modal after successful save
                        closeEventModal();
                        // Reload events list or update UI as needed
                        location.reload(); // Example: Refresh page to reflect changes
                    } else {
                        console.error('Error saving event:', xhr.status);
                        // Handle error (show message, log error, etc.)
                    }
                }
            };
            xhr.send(JSON.stringify(data));
        }

        // Function to delete event
        function deleteEvent(eventId) {
            var confirmDelete = confirm('Are you sure you want to delete this event?');
            if (confirmDelete) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'delete_event.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            console.log('Event deleted successfully');
                            // Reload events list or update UI as needed
                            location.reload(); // Example: Refresh page to reflect changes
                        } else {
                            console.error('Error deleting event:', xhr.status);
                            // Handle error (show message, log error, etc.)
                        }
                    }
                };
                xhr.send('id=' + eventId);
            }
        }
    </script>
</body>

</html>

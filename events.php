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

        <div id="event-list" class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3"></div>

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

        <div id="event-modal"
            class="fixed z-10 inset-0 overflow-y-auto hidden flex items-center justify-center bg-gray-500 bg-opacity-75 dark:bg-gray-900 dark:bg-opacity-75">
            <div class="bg-white dark:bg-gray-800 rounded-lg w-80 p-6">
                <input type="hidden" id="event-id">

                <div class="mb-4">
                    <label for="event-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input type="text" id="event-name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter event name">
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
                <div class="mb-4">
                    <label for="event-location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Location</label>
                    <input type="text" id="event-location"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter event location">
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
        function openAddEventModal() {
            document.getElementById('event-id').value = '';
            document.getElementById('event-name').value = '';
            document.getElementById('event-description').value = '';
            document.getElementById('event-date').value = '';
            document.getElementById('event-location').value = '';
            document.getElementById('event-modal').classList.remove('hidden');
        }

        function closeEventModal() {
            document.getElementById('event-modal').classList.add('hidden');
        }

        function saveEvent() {
            var id = document.getElementById('event-id').value;
            var name = document.getElementById('event-name').value;
            var description = document.getElementById('event-description').value;
            var date = document.getElementById('event-date').value;
            var location = document.getElementById('event-location').value;

            var data = {
                id: id,
                name: name,
                description: description,
                date: date,
                location: location
            };

            var url = id ? 'update_event.php' : 'add_event.php';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    closeEventModal();
                    loadEvents();
                    alert(id ? 'Event updated successfully' : 'Event added successfully');
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        function loadEvents() {
            fetch('get_events.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    var eventList = document.getElementById('event-list');
                    eventList.innerHTML = '';
                    data.events.forEach(function(event) {
                        var eventElement = document.createElement('div');
                        eventElement.className = 'p-6 bg-white dark:bg-gray-700 rounded-lg shadow-lg';
                        eventElement.innerHTML = `
                            <h2 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">${event.name}</h2>
                            <p class="text-gray-700 dark:text-gray-300">${event.description}</p>
                            <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400">Date: ${event.date}</p>
                            <p class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400">Location: ${event.location}</p>
                            <div class="mt-4 flex justify-end">
                                <button class="mr-2 inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200" onclick="editEvent(${event.id})">Edit</button>
                                <button class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-transparent rounded-md dark:text-white dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-100 hover:bg-gray-200" onclick="deleteEvent(${event.id})">Delete</button>
                            </div>`;
                        eventList.appendChild(eventElement);
                    });
                } else {
                    alert('Error loading events: ' + data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        function editEvent(id) {
            fetch('get_event.php?id=' + id)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('event-id').value = data.event.id;
                    document.getElementById('event-name').value = data.event.name;
                    document.getElementById('event-description').value = data.event.description;
                    document.getElementById('event-date').value = data.event.date;
                    document.getElementById('event-location').value = data.event.location;
                    openAddEventModal();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        function deleteEvent(id) {
            if (confirm('Are you sure you want to delete this event?')) {
                fetch('delete_event.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({id: id}),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        loadEvents();
                        alert('Event deleted successfully');
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        }

        // Load events when the page loads
        window.onload = loadEvents;
    </script>
</body>

</html>
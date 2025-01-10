<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* ...existing styles... */
    </style>
    <script>
        function openTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }

        function enroll(category) {
            // Replace with actual back-end action
            alert('Enrolling in ' + category);
        }

        function toggleDarkMode() {
            var elements = document.querySelectorAll('body, header, nav ul, footer, .tab-buttons, nav ul li a, .tab-buttons button, .tab-content, .enrollment-category');
            elements.forEach(function(element) {
                element.classList.toggle('dark-mode');
            });
        }
    </script>
</head>
<body>
    <header>
        <a href="https://nyartcc.org">
            <img src="{{ asset('images/header.png') }}" alt="Header Image">
        </a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li style="float:right;"><a href="#logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="tabs">
            <div class="tab-buttons">
                <button class="tablinks" onclick="openTab(event, 'ProgramInformation')">Program Information</button>
                <button class="tablinks" onclick="openTab(event, 'Enrollment')">Enrollment</button>
                <button class="tablinks" onclick="openTab(event, 'Challenges')">Challenges</button>
                <button class="tablinks" onclick="openTab(event, 'Achievements')">Achievements</button>
                <button class="tablinks" onclick="openTab(event, 'Settings')">Settings</button>
            </div>
            <div id="ProgramInformation" class="tab-content">
                <h2>Program Information</h2>
                <p>Details about the program.</p>
            </div>
            <div id="Enrollment" class="tab-content">
                <h2>Enrollment</h2>
                <p>Select a path below and enroll to get started.</p>
                <div class="enrollment-category">
                    <h3>Air Transport Pilot</h3>
                    <p>Part 121 Operators</p>
                    <button onclick="enroll('AirTransportPilot')">Enroll</button>
                </div>
                <div class="enrollment-category">
                    <h3>Corporate Aviation</h3>
                    <p>Part 135 Operators</p>
                    <button onclick="enroll('CorporateAviation')">Enroll</button>
                </div>
                <div class="enrollment-category">
                    <h3>Private Pilot</h3>
                    <p>General Aviation</p>
                    <button onclick="enroll('PrivatePilot')">Enroll</button>
                </div>
            </div>
            <div id="Challenges" class="tab-content">
                <h2>Challenges</h2>
                <p>Details about challenges.</p>
            </div>
            <div id="Achievements" class="tab-content">
                <h2>Achievements</h2>
                <p>Details about achievements.</p>
            </div>
            <div id="Settings" class="tab-content">
                <h2>Settings</h2>
                <p>Details about settings.</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; Virtual New York ARTCC</p>
    </footer>
    <button class="dark-mode-toggle" onclick="toggleDarkMode()">Toggle Dark Mode</button>
</body>
</html>

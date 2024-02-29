<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gebruik het SPQR Woordenboek om super snel woorden te zoeken uit het boek SPQR Latijn." />
    <meta name="keywords" content="spqr, latijn, woordenboek, latijn-nederlands, nederlands-latijn, latijnengrieks.com, spqr woorden, spqr woorden leren, alle woorden spqr, quizlet spqr woorden, wrts woorden spqr, quizlet latijn, spqr sneller vertalen" />
    <title>Woordenboek SPQR</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .search-bar-container {
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .container {
            text-align: center;
            margin-top: 60px;
        }

        h2 {
            color: #333;
        }

        .search-bar {
            padding: 10px;
            width: 300px;
            border: 1
            1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            width: 100%;
            margin: auto;

        }

        .result-table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
            margin-top: 10px;
            text-align: left; /* Ensure text alignment */
        }

        .result-table th, .result-table td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .result-table th {
            background-color: #f2f2f2;
            cursor: pointer;
        }

        .no-results {
            color: #777;
        }
        /* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25B4\25BE" 
}
    </style>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.rohandg.nl/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>     
          
      </button>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rohandg.nl<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"  href="https://rohandg.nl/" style="color:gainsboro;">Rohandg.nl</a></li>
              <li><a class="dropdown-item"  href="https://incendere.nl/">Incendere.nl</a></li>
              <li><a class="dropdown-item" href="https://dedikkevarkenmetdown.nl/">Dedikkevarkenmetdown.nl</a></li>


	      
            </ul>
          <li><a href="https://rohandg.nl/index.html#section0">Home</a></li>
          <li><a href="https://rohandg.nl/index.html#section1">Public projects</a></li>
          <li><a href="https://rohandg.nl/index.html#section2">Private projects</a></li>
          <li><a href="https://rohandg.nl/index.html#section4">Contact</a></li>
          <li><a href="https://rohandg.nl/index.html#section5">Donate</a></li>
          <li><a href="https://resume.rohandg.nl/">Resume</a></li>
          <li><a href="http://secure.rohandg.nl/index.php">Intranet</a></li>


        

        </ul>
      </div>
    </div>
  </div>
</nav>    

    

    <div class="container">
    
        <h2>SPQR woordenboek</h2>
        <input type="text" id="searchInput" class="search-bar" placeholder="Je kan zoeken en sorteren op lessen, Latijnse woorden of Nederlandse woorden.">
        <table id="resultContainer" class="result-table sortable">
            <thead>
                <tr>
                    <th class="sortable">Latijn</th>
                    <th class="sortable">Nederlands</th>
                    <th class="sortable">Les</th>
                </tr>
            </thead>
            <tbody>
                <!-- Results will be displayed here -->
            </tbody>
        </table>
    </div>

 <script>
        // JavaScript for handling search functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Perform an initial search with an empty string on page load
            performSearch('');

            // Attach event listener for input changes
            document.getElementById('searchInput').addEventListener('input', function () {
                performSearch(this.value);
            });

            // Initialize sortable
            sorttable.makeSortable(document.getElementById('resultContainer'));
        });

        function performSearch(keyword) {
            // Simulating the AJAX call (replace with actual AJAX call)
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector('#resultContainer tbody').innerHTML = this.responseText;

                    // Reinitialize the sorttable library after updating the table content
                    sorttable.makeSortable(document.getElementById('resultContainer'));
                }
            };
            xmlhttp.open('GET', 'search.php?keyword=' + keyword, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>

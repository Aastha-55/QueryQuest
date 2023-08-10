<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar input[type="text"] {
            flex: 1;
            height: 40px;
            border: 2px solid #ddd;
            border-radius: 20px;
            padding: 10px;
            font-size: 18px;
            outline: none;
        }

        .search-bar input[type="submit"] {
            width: 120px;
            height: 40px;
            margin-left: 10px;
            border: none;
            border-radius: 20px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #45a049;
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo img {
            width: 150px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="image9-2.webp" alt="Logo">
        </div>
        <form action="result.php" method="GET" class="search-bar">
            <input type="text" name="searchbar" placeholder="Enter your search term">
            <input type="submit" name="submitbtn" value="Search">
        </form>
    </div>
    <script>
        // Add functionality here (e.g., JavaScript for handling search results, dynamic suggestions, etc.)
        // You can use modern JavaScript frameworks like React, Vue, or jQuery to add interactivity.
    </script>
</body>
</html>
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar input[type="text"] {
            flex: 1;
            height: 40px;
            border: 2px solid #ddd;
            border-radius: 20px;
            padding: 10px;
            font-size: 18px;
            outline: none;
        }

        .search-bar input[type="submit"] {
            width: 120px;
            height: 40px;
            margin-left: 10px;
            border: none;
            border-radius: 20px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #45a049;
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo img {
            width: 150px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-results {
            margin-top: 40px;
        }

        .search-results ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .search-results a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="image9-2.webp" alt="Logo">
        </div>
        <form action="result.php" method="GET" class="search-bar" id="searchForm">
            <input type="text" name="searchbar" placeholder="Enter your search term">
            <input type="submit" name="submitbtn" value="Search">
        </form>
        <div class="search-results" id="searchResults">
            <ul></ul>
        </div>
    </div>
    <script>
        const searchForm = document.getElementById('searchForm');
        const searchResults = document.getElementById('searchResults');
        
        searchForm.addEventListener('submit', handleSearch);

        function handleSearch(event) {
            event.preventDefault();
            const searchTerm = searchForm.searchbar.value;
            
            // Perform search logic here (e.g., fetch search results from an API or process them locally)
            // Replace the following dummy code with your own implementation
            
            // Mocked search results
            const results = [
                { title: 'Result 1', url: 'https://example.com/result1' },
                { title: 'Result 2', url: 'https://example.com/result2' },
                { title: 'Result 3', url: 'https://example.com/result3' },
            ];
            
            displaySearchResults(results);
        }

        function displaySearchResults(results) {
            const resultList = searchResults.querySelector('ul');
            resultList.innerHTML = '';

            if (results.length === 0) {
                resultList.innerHTML = '<li>No results found.</li>';
            } else {
                results.forEach(result => {
                    const listItem = document.createElement('li');
                    const link = document.createElement('a');
                    link.href = result.url;
                    link.textContent = result.title;
                    listItem.appendChild(link);
                    resultList.appendChild(listItem);
                });
            }
        }
    </script>
</body>
</html>

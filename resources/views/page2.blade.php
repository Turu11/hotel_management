<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link href="/css/style1.css " rel="stylesheet">
    
</head>
<body>
        <div class="container">
            <div class="card">
                <h1>The Marina</h1>
                    <!-- In your Blade view file -->
                    <form class="check" method="POST" >
                        <!-- Check 1 -->
                        <input type="checkbox" name="check1" id="check1">
                        <label for="check1">By price</label><br>
                        <!-- Check 2 -->
                        <input type="checkbox" name="check2" id="check2">
                        <label for="check2">By price</label><br>
                        <!-- Check 3 -->
                        <input type="checkbox" name="check3" id="check3">
                        <label for="check3">By price</label><br>
                        <!-- Check 4 -->
                        <input type="checkbox" name="check4" id="check4">
                        <label for="check4">By price</label><br>
                    </form>
                    <div class="search">
                        <form action="/hotels/search" method="GET">
                        <label for="check_in_date">Check-In Date:</label>
                        <input type="date" name="check_in_date">
                        <label for="check_out_date">Check-Out Date:</label>
                        <input type="date" name="check_out_date"><br>
                        <button class="srch" type="submit">Search</button>
                        </form>
                    </div>
            </div>
        </div>

        

    
</body>
</html>
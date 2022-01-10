<html>
    <head>
        
    </head>
    
    <body>
        <h1>Search for doctors</h1>
        <form action="srchdct.php" method="POST">
            Field : <select name="fd" required>
                <option selected disabled>Select a field</option>
                <option value='general'>General Physician</option>
                <option value='cardio'>Cardiologist</option>
                
            </select><br><br>
            Location : <input type="text" name="loc"  ><br><br>
            <input type="submit" value="search">
        </form>
    </body>
</html>
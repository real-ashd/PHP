    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ashu";
    // Create connection
    $conn = new mysqli($host, $user, $pass, $db);    
    // Check connection    
    if ($conn->connect_error) {      
    die("Connection failed: " . $conn->connect_error);}      
    $sql = "INSERT INTO myguests (fname, lname, email) VALUES ('Johny', 'Dawkins', 'johny@example.com');";    
    $sql .= "INSERT INTO myguests (fname, lname, email) VALUES ('Margaret', 'Johnson', 'marg@example.com');";    
    $sql .= "INSERT INTO myguests (fname, lname, email) VALUES ('Juliete', 'Doodley', 'juliete@example.com')";    
    if ($conn->multi_query($sql) === TRUE) { 
    echo "New records created successfully";} 
    else { echo "Error: " . $sql . "<br>" . $conn->error;}
    $conn->close();  
    ?>
<?php
$hiddenGreeting = "Hello, world! This is my Hidden Greeting!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .WebGreet {
            text-align: center;
            margin-top: 50px;
        }
        .btn btn-success{
          align-items: center; 
          background-color: #38994d; 
          color: white; 
          padding: 10px 20px; 
          width: 500px;
        }
        #greeting {
            width: 500px;
        }
        .container{
          margin-top: 200px; 
          margin-bottom: 200px;
        }
     

    </style>
</head>
<body>
    <div class="container">

    <h2 class="WebGreet"> My Webpage!</h2>
    <button  onclick="revealGreeting()" id="greeting" class="btn btn-success">
       PRESS ME
    </button>
    </div>

    <div class="container">
      <h3> Technologies Used</h3>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col" style="background-color: #000000; color: white;">Technologies Used</th>
      <th scope="col" style="background-color: #000000; color: white;">Description</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">HTML</td>
      <td>HTML is the main language I used for this activity. I used it mainly to structure the content of the webpage Using h2 for headers, td and tr for the tables, and of course for the body and content.</td>
    </tr>
    <tr>
      <td scope="row">CSS</td>
      <td>I used CSS mainly to style the webpage with margins, padding, and colors of the background and texts.</td>
    </tr>
    <tr>
      <td scope="row">JavaScript</td>
      <td>I mainly used JavaScript for the button function to reveal the hidden greeting and move its place. It is where my Function resides.</td>
    </tr>
     <tr>
      <td scope="row">PHP</td>
      <td>I used minimal PHP in the activity, I just used it as the variable of my hidden greeting and used echo to display the message.</td>
    </tr>
     <tr>
      <td scope="row">Bootstrap</td>
      <td>I used Bootstrap to create a webpage-like design with the table and button as well as the container I used.</td>
    </tr>
  </tbody>
</table>
    <div class="container">
 <script>
    function revealGreeting() {
        var greetingElement = document.getElementById("greeting");
        greetingElement.textContent = "<?php echo $hiddenGreeting; ?>";
        greetingElement.style.marginLeft = "800px";
        greetingElement.style.backgroundColor = "white";
        greetingElement.style.color = "black";
    }
    </script>
</body>
</html>
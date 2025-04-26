&lt;!doctype html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;!-- Required meta tags --&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"&gt;

    &lt;title&gt;Submit Data!&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;nav class="navbar navbar-expand-lg navbar-dark bg-dark"&gt;
  &lt;a class="navbar-brand" href="#"&gt;Get/Post&lt;/a&gt;
  &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
  &lt;/button&gt;

  &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
    &lt;ul class="navbar-nav mr-auto"&gt;
      &lt;li class="nav-item active"&gt;
        &lt;a class="nav-link" href="/phptut/tut_20_store_in_db.php"&gt;Home &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
          Dropdown
        &lt;/a&gt;
        &lt;div class="dropdown-menu" aria-labelledby="navbarDropdown"&gt;
          &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
          &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
          &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
        &lt;/div&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;form class="form-inline my-2 my-lg-0"&gt;
      &lt;input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"&gt;
      &lt;button class="btn btn-outline-success my-2 my-sm-0" type="submit"&gt;Search&lt;/button&gt;
    &lt;/form&gt;
  &lt;/div&gt;
&lt;/nav&gt;
&lt;?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $description = $_POST['desc'];
        echo '&lt;div class="alert alert-success alert-dismissible fade show" role="alert"&gt;
        &lt;strong&gt;Success!&lt;/strong&gt; Your email ' . $email.' has been submitted successfully!
        &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
          &lt;span aria-hidden="true"&gt;×&lt;/span&gt;
        &lt;/button&gt;
      &lt;/div&gt;';
      // Submit these to a database
      $servername = "localhost";
      $username = "root";
      $pass = "";
      $dbname = "avinash";
      
      $conn = mysqli_connect($servername, $username, $pass, $dbname);
      $sql = "INSERT INTO stud_details VALUES (1,'$name','$email','$description')";
      $result = mysqli_query($conn, $sql);
      if(!$result){
        echo "Unable to insert data because " . mysqli_error($conn);
      }
      else{
        echo "Successful to insert data";
      }
    }

   
    
?&gt;

&lt;div class="container mt-3"&gt;
&lt;h1&gt;Contact us for your concerns&lt;/h1&gt;
    &lt;form action="/phptut/tut_20_store_in_db.php" method="post"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="name"&gt;Name&lt;/label&gt;
        &lt;input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"&gt;
        &lt;small id="emailHelp" class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/small&gt;
    &lt;/div&gt;

    &lt;div class="form-group"&gt;
        &lt;label for="email"&gt;Email&lt;/label&gt;
        &lt;input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"&gt;
        &lt;small id="emailHelp" class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/small&gt;
    &lt;/div&gt;

    &lt;div class="form-group"&gt;
        &lt;label for="desc"&gt;Description&lt;/label&gt;
        &lt;textarea  class="form-control" name="desc" id="desc" cols="30" rows="10"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
&lt;/div&gt;

    &lt;!-- Optional JavaScript --&gt;
    &lt;!-- jQuery first, then Popper.js, then Bootstrap JS --&gt;
    &lt;script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"&gt;&lt;/script&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"&gt;&lt;/script&gt;
    &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;


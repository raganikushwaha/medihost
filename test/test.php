 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/owl.carousel.min.css">
    <style>
@media only screen and (min-width: 769px) {
    .hide-for-desktop {
        display: none
    }
    .new-form-section {
        background-image: url(../asset/img/banner.jpg);
        background-size: 100%;
        background-position: bottom

    }
}

@media only screen and (max-width: 768px) {
    .hide-for-mobile,
    .treatment-top-img {
        display: none
    }
    .personal-care-section {
        margin: 10px auto;
        padding: 0
    }
    .new-form-section {
        padding: 30px 0
    }
}

@media only screen and (max-width: 520px) {
    .new-form-section {
        padding-left: 0;
        padding-right: 0;
        background: #f9f9f9
    }
    .container.form-section {
        padding-right: 0;
        padding-left: 0
    }
    .banner-search {
        margin-right: 0;
        margin-left: 0
    }
    .form-section h1 {
        font-size: 1.8em;
        text-align: center;
        margin-top: 0
    }
    .form-section h3 {
        font-size: 1.9em;
        text-align: center
    }
    .form-section p {
        font-size: 1.15em;
        text-align: center
    }
    #custom-form {
        margin-top: 15px
    }
    .dynamic_content .panel-body {
        padding: 0
    }
    .how-we-work-btn {
        display: flex;
        margin-bottom: 30px
    }
    #custom-form input,
    #custom-form input::placeholder,
    #custom-form textarea,
    #custom-form textarea::placeholder {
        font-size: 16px
    }
    .sect-21 {
        max-height: unset;
        overflow-x: hidden
    }
    .sect-21 ul {
        padding-left: 0
    }
    .searchbar-home .form-control:focus {
        border-color: unset;
        outline: 0;
        -webkit-box-shadow: unset;
        box-shadow: unset
    }
}



body {
  margin: 0;
  padding: 0;
}

.banner {
  position: relative;
}

.banner img {
  width: 100%;
  height: 80vh;
  display: block;
}

.form-container {
  position: absolute;
  top: 50%;
  left: 80%;
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.8);
  padding: 30px;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-container h1 {
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}
 
input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

 
    </style>
  </head>
    <body>


    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Form on Banner</title>
</head>
<body>

  <header class="banner">
    <!-- Your banner image goes here -->
    <img src="../asset/img/banner.jpg" alt="Banner Image">

    <!-- Form on the banner -->
    <div class="form-container">
      <h1>Contact Us</h1>
      <form action="#" method="post">     
        <input type="text" id="name" name="name" required placeholder=" Patient Name">     
        <input type="email" id="email" name="email" required placeholder="Email: ">
        <input type="text" id=" " name=" " required placeholder="City">
        <input type="number" id=" " name=" " required placeholder="Number">
        <input type="textarea" id=" " name=" " required placeholder="describe">

        <input type="submit" value="Submit">
      </form>
    </div>
  </header>

</body>
</html>
 
    
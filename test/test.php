 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href ="../asset/css/style.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../asset/css/owl.carousel.min.css">

		<title>MediHost</title>
    <style>
  
        .contact-text h3{
          margin-top: 30px;
          font-weight: 600;
          color :  rgb(45, 130, 19);
        }
        .contact-form{
          
            width: 600px;
            margin: 30px auto;
            /* background-color:#005697; */
            padding: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 4px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid  #0000005c ;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100px;
              
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
  <!-- header -->
  <div class="navbar navigation-wrap">
    		<a href="#" class="logo">Logo</a>

			<div class="menu">
				<ul class="nav-list">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>				 
					<li class="nav-item"><a class="nav-link" href="#doctors">Doctors</a></li>
					<li class="nav-item"><a class="nav-link" href="#services">Hospitals</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">Treatments</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">Medical Visa</a></li>				
					<li class="nav-item"><a class="nav-link" href="#about">Videos</a></li>
					 
				</ul>
				
			</div>
    		<button class="button">Contact</button>
    		<button class="navbar-toggler" onclick="toggleMenu()">☰</button>
		</div>

		<script>
			function toggleMenu() {
				const navbar = document.querySelector('.navbar');
				navbar.classList.toggle('active');
			}
		</script>
   <div class="container">
    <div class="row text-center contact-text">
       <h3>Help Us With Patient Details</h3>
    </div>
   </div>
    <div class="contact-form">
    <form>
        <label for="firstName">Patient Name:</label>
        <input type="text" id="firstName" name="firstName" required placeholder="Paitent name">

        <label for="lastName">email:</label>
        <input type="email" id="lastName" name="lastName" required placeholder="email">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{10}" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="medicalHistory">Medical History:</label>
        <textarea id="medicalHistory" name="medicalHistory" rows="4"></textarea>

        <input type="submit" value="Submit">
    </form>
    </div>

  
</body>
</html>

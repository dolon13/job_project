<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Craft</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(#8DB1C7, #E2EEF5, #95C2DD);
            font-family: Arial, sans-serif; /* Updated font stack for better compatibility */
        }
        
        .banner {
            width: 100%;
            height: 350px;
            background: linear-gradient(#0097DD, #003877);
            text-align: center; /* Center align text in banner */
            color: #EEF7FF;
        }
        
        h1 {
            font-size: 9rem; /* Responsive font size */
            margin: 0;
        }
        
        .join {
            font-size: 1.5rem; /* Responsive font size */
            margin-top: 0; /* Remove margin top for smaller screens */
            margin-bottom: 50px; /* Added margin bottom for better spacing */
        }
        
        .header {
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Stack items vertically on small screens */
            align-items: center; /* Center align items horizontally */
            padding: 20px; /* Added padding for better spacing */
        }
        
        .left {
            width: 100%; /* Occupy full width on small screens */
            text-align: center; /* Center align image */
            margin-bottom: 20px; /* Added margin bottom for better spacing */
        }
        
        .right {
            width: 100%; /* Occupy full width on small screens */
            text-align: center; /* Center align text */
        }
        
        h2, p {
            margin: 0; /* Reset margin for consistency */
        }
        
        img {
            max-width: 100%; /* Make image responsive */
            height: auto; /* Preserve aspect ratio */
        }
        
        a {
            text-decoration: underline;
            color: #EEF7FF;
        }
        
        @media only screen and (min-width: 768px) {
            /* Apply styles for medium and large screens */
            .header {
                flex-direction: row; /* Align items side by side */
            }
            
            .left, .right {
                width: 50%; /* Occupy half width on medium and large screens */
                text-align: center; /* Reset text alignment */
            }
        }
        .space{
            width: 100%;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="space"></div>
        <h1>CAREER CRAFT</h1>
        <h2 class="join">To join with us <a href="login.php">Click here</a></h2>
    </div>
    <div class="header">
        <div class="left">
            <img src="img2/filelogo.png" alt="logo">
        </div>
        <div class="right">
            <h2>Why Choose Our Job <br> Grooming Platform to <br> Unlock Your Professional <br> Potential?</h2>
            <p>"Unlock your Professional potential and shape <br> your career journey with our job grooming <br> platform. From tailored guidance to skill <br> enhancement programs and professional<br> resume"</p>
        </div>
    </div>
</body>
</html>

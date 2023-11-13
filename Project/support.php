<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <title>Support </title>
<style>/* Global styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    header {
        background-color: #4fc5e6;
        color: white;
        text-align: center;
        padding: 20px;
    }
    
    main {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    
    h1, h2, h3 {
        color: #333;
    }
    
    /* FAQ section styles */
    .faq-section {
        margin-bottom: 40px;
    }
    
    .faq {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
    }
    
    .faq-item {
        margin-bottom: 20px;
    }
    
    /* Contact section styles */
    .contact-section {
        text-align: center;
        margin-bottom: 40px;
    }
    
    ul {
        list-style: none;
        padding: 0;
    }
    
    li {
        margin-bottom: 10px;
    }
    
    /* Footer styles */
    footer {
        text-align: center;
        background-color: #333;
        color: white;
        padding: 10px;
    }
    </style>
<body>
    <main>

        <section class="contact-section">
            <h2>For Support</h2>
            <p>If you need any support,text a message on....</p>
            <ul>
                <li>
                    <a href="https://wa.me/+994408665586?text=Hello%20from%20your%20LaunTech%20website"> 
                        <i class="fab fa-whatsapp"></i> +994 40 866 55 86
                    </a>
                </li>
            </ul>
        </section>
    </main>
    </body>
<?php
include('Foot.php');
ob_flush();
?>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        html {
            --black: #303030;
            --grey: #707070;
            --off-white: #F7F7F7;
            --code: #A8A8A8;
            --primary-color: #007BFF;
            --accent-color: #28A745;
            --background-color: #fff;
            --input-background: #f0f0f0;
            --input-border: #ddd;
            --input-focus: #007BFF;
            --button-background: #007BFF;
            --button-hover: #0056b3;
            --button-text: #fff;
            --sans-serif: 'Inter', sans-serif;
            position: relative;
            overflow-x: hidden;
            scroll-behavior: smooth;
            background-color: var(--background-color);
        }

        body {
            overflow: hidden;
            background-color: #e9e9e9;
            color: var(--black);
            font-family: var(--sans-serif);
            min-height: 100vh;
            width: 100%;
            padding: 2.5vh 10vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.6) 100%), url('https://watermark.lovepik.com/photo/20211124/large/lovepik-wedding-banquet-hall-picture_500902006.jpg');
            background-size: cover;
            background-position: center;
        }

        h1 {
            font-size: clamp(2rem, 6vw, 4rem);
            margin: -4vh 0 2rem;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        a {
            text-decoration: underline;
            color: var(--black);
        }

        code {
            font-size: 1rem;
            padding: 0 0.5rem;
            background-color: var(--code);
        }

        .container {
            width: 100%;
            max-width: 768px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            /* Semi-transparent background */
            background-image: url('https://watermark.lovepik.com/photo/20211124/large/lovepik-wedding-banquet-hall-picture_500902006.jpg');
            /* Add your background image URL here */
            background-size: cover;
            /* Ensure the background image covers the entire container */
            background-position: center;
            /* Center the background image */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            opacity: 0.9;
            background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);        }

        @media (min-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }

        .cta-form {
            margin-bottom: 2rem;
            text-align: center;
        }

        @media (min-width: 768px) {
            .cta-form {
                margin-bottom: 0;
                margin-right: 2rem;
                text-align: center;
            }
        }

        .cta-form h2 {
            font-size: 2rem;
            width: 100%;
            max-width: 25ch;
            margin: 0 auto;
            text-align: center;
            color: var(--primary-color);
        }

        @media (min-width: 768px) {
            .cta-form h2 {
                text-align: center;
                margin: 0;
            }
        }

        .cta-form p {
            margin-top: 1rem;
            font-size: 1rem;
            width: 100%;
            max-width: 24ch;
            color: var(--accent-color);
        }

        .form {
            align-self: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form__input {
            width: 100%;
            max-width: 420px;
            height: 3rem;
            padding: 0 1.25rem;
            border: 1px solid var(--input-border);
            border-radius: 50px;
            margin: 0.625rem auto;
            background-color: var(--input-background);
            transition: all 250ms;
            font-size: 1rem;
            text-align: center;
            /* filter: blur(1px); */
            background: #fdfdfd82;
            border: 2px solid black;
        }

        .form__input:focus {
            outline: none;
            border-color: var(--input-focus);
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #fff;
            filter: none;
            /* Remove blur effect on focus */
        }

        .form__label {
            font-size: 1rem;
            color: var(--grey);
            display: block;
            transform: translate(1.25rem, -2.5rem);
            transform-origin: 0 0;
            transition: all 500ms;
            user-select: none;
            pointer-events: none;
        }

        textarea {
            width: 100%;
            max-width: 420px;
            min-height: 150px;
            padding: 0.625rem 1.25rem;
            border: 1px solid var(--input-border);
            border-radius: 25px;
            margin: 0.625rem auto;
            resize: vertical;
            background-color: var(--input-background);
            font-size: 1rem;
            text-align: center;
            /* Center text in textarea */
        }

        textarea:focus {
            outline: none;
            border-color: var(--input-focus);
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #fff;
        }

        button {
            width: 100%;
            max-width: 420px;
            height: 3rem;
            margin-top: 1.5rem;
            background-color: var(--button-background);
            border: none;
            border-radius: 25px;
            color: var(--button-text);
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 250ms;
        }

        button:hover {
            background-color: var(--button-hover);
        }

        button[type="button"] {
            background-color: transparent;
            border: 2px solid var(--input-border);
            color: var(--black);
        }

        button[type="button"]:hover {
            background-color: var(--input-background);
        }

        .form__input::placeholder,
        textarea::placeholder {
            color: black;
            /* Placeholder text color */
            opacity: 1;
            /* Placeholder text opacity */
        }
    </style>

    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS Library JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>

<body>
    <h1>Leave A Message</h1>
    <div class="container">
        <form id="myForm" class="form" data-aos="fade-up" data-aos-duration="1000">
            <input type="text" placeholder="Your Name" class="form__input" id="name" required data-aos="fade-up"
                data-aos-duration="500" />
            <input type="email" placeholder="Your e-mail" class="form__input" id="email" required data-aos="fade-up"
                data-aos-duration="500" />
            <input type="text" placeholder="Subject" class="form__input" id="subject" required data-aos="fade-up"
                data-aos-duration="500" />
            <textarea placeholder="Message" class="form__input" id="message" required data-aos="fade-up"
                data-aos-duration="500"></textarea>
            <button type="
            submit" data-aos="fade-up" data-aos-duration="1500">Submit</button>
            <button  type="button" onclick="clearForm()" data-aos="fade-up" data-aos-duration="1500">Clear</button>
        </form>
    </div>

    <!-- AOS Library Initialization Script -->
    <script>
        AOS.init({
            once: true, // Whether animation should happen only once - while scrolling down
        });
    </script>

    <script>
        document.getElementById("myForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            // Get form data
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            // Construct WhatsApp message link
            var whatsappMessage = `Hi, this is ${name}. Email: ${email}. Subject: ${subject}. Message: ${message}`;

            // Replace "your-phone-number" with your actual phone number in international format
            var yourPhoneNumber = "+919999999999"; // Replace this with your phone number

            var url = "https://api.whatsapp.com/send?phone=" + encodeURIComponent(yourPhoneNumber) + "&text=" + encodeURIComponent(whatsappMessage);

            // Open WhatsApp message link in a new tab
            window.open(url);
        });

        function clearForm() {
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('subject').value = '';
            document.getElementById('message').value = '';
        }
    </script>
</body>

</html>
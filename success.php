<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            text-align: center;
            padding: 40px 20px;
            background: #EBF0F5;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
             height:100vh;
             overflow: hidden;
             display: flex;
             align-items:center;
             justify-content:center;
        }
        h1 {
            color: #88B04B;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }
        p {
            color: #404F5E;
            font-size: 20px;
            margin: 0;
        }
        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
        }
        .card {
            background: white;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin: 0 auto;
            max-width: 400px;
            width: 100%;
        }
        .circle {
            border-radius: 200px;
            height: 200px;
            width: 200px;
            background: #F8FAF5;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 700;
            color: white;
            background-color: #88B04B;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #76a045;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 30px;
            }
            p {
                font-size: 18px;
            }
            i {
                font-size: 80px;
                line-height: 160px;
            }
            .card {
                padding: 30px;
            }
            .circle {
                height: 160px;
                width: 160px;
            }
            .btn {
                padding: 10px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="card" data-aos="zoom-out-up">

        <div class="circle" data-aos="fade-up"
     data-aos-duration="1000">
            <i class="checkmark">✓</i>
        </div>
        <h1 data-aos="fade-up">Success</h1>
        <h2 data-aos="fade-up">Party plot is successfully booked.</h2> 
        <p data-aos="fade-up">We received your booking request;<br/> we'll be in touch shortly!</p>
        <a href="index.php" class="btn" data-aos="fade-up">OK</a>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>

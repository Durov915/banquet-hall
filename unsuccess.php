<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
            padding: 40px 20px;
            background: #F8D7DA;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        }
        h1 {
            color: #D9534F;
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
            color: #D9534F;
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
            background: #FDECEA;
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
            background-color: #D9534F;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #c3413b;
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
    <div class="card">
        <div class="circle">
            <i class="checkmark">✗</i>
        </div>
        <h1>Already Booked For selected Dates</h1> 
        <p>Sorry, the plot is already booked for the selected dates.<br/> Please choose different dates.</p>
        <a href="index.php" class="btn">Choose Another Date</a>
    </div>
</body>
</html>

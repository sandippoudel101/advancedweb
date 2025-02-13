<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Nepali Restaurant</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
            background: #f9f9f9;
            overflow-x: hidden;
        }

        h2 {
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2rem;
            color: #fff;
        }

        /* Video Background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        /* Content Section */
        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 60px 20px;
            background: rgba(0, 0, 0, 0.6);
        }

        /* Food Grid */
        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .food-item {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .food-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .food-item img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .food-item p {
            font-size: 1.2rem;
            color: #333;
            margin: 0;
        }

        /* Button Style */
        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 30px;
            font-size: 1rem;
            color: #fff;
            background: #e67e22;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #d35400;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            .food-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
        }
    </style>
</head>

<body>

    <?php include 'nav.php'; ?>

    <!-- Video Background -->
    <div class="video-background">
        <video autoplay muted loop>
            <source src="c:\Users\Namrata Thapa\Downloads\background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Our Menu</h2>
        <p>Explore our authentic Nepali dishes, crafted with love and tradition.</p>

        <!-- Food Grid -->
        <div class="food-grid">
            <div class="food-item">
                <img src="c:\Users\Namrata Thapa\Downloads\momo.jpg" alt="Momo">
                <p>Momo</p>
            </div>
            <div class="food-item">
                <img src="c:\Users\Namrata Thapa\Downloads\dal bhat tarkari.jpg" alt="Nepali Dal Bhat">
                <p>Nepali Dal Bhat</p>
            </div>
            <div class="food-item">
                <img src="c:\Users\Namrata Thapa\Downloads\chowmein.jpg" alt="Chowmein">
                <p>Chowmein</p>
            </div>
            <div class="food-item">
                <img src="c:\Users\Namrata Thapa\Downloads\newari kaja set.jpg" alt="Newari Kaja Set">
                <p>Newari Kaja Set</p>
            </div>
            <div class="food-item">
                <img src="c:\Users\Namrata Thapa\Downloads\Thukpa.jpg" alt="Thukpa">
                <p>Thukpa</p>
            </div>
        </div>



        <?php include 'footer.php'; ?>

</body>

</html>
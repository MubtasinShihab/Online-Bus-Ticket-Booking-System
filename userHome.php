<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        .font-inter {
            font-family: "Inter", sans-serif;
        }

        .font-raleway {
            font-family: "Raleway", sans-serif;
        }
    </style>

</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- Banner Section -->

    <header class="mx-auto h-screen">

        <!-- Banner BG -->
        <div class="hero h-full bg-no-repeat rounded-b-3xl" style="background-image: url(https://i.ibb.co.com/r3HDJt1/banner.png);">

            <!-- Banner texts & cards -->
            <div class="text-center mx-auto w-full text-neutral-content flex-col">

                <!-- banner texts -->
                <div class="pt-24">

                    <!-- banner title -->
                    <h1 class="font-raleway text-8xl font-extrabold leading-[120px]">
                        <span class="text-white">
                            End-to-End Travel with <br>
                        </span>
                        <span class="text-[#1DD100]">P Paribahan</span>
                    </h1>

                    <!-- banner description -->
                    <p class="mt-20 text-3xl">
                        Your One-Stop Ticket Shop! Explore destinations, book hassle-free bus rides. <br> Embark on
                        adventure with ease.
                    </p>

                    <!-- Banner buy tickets button -->
                    <button class="btn mt-24 font-raleway bg-[#1DD100] text-white border-0 text-xl font-bold w-40 h-16">
                        <a href="#ticketPanel">Buy Tickets</a>
                    </button>

                </div>

                <!-- banner small cards -->
                <div>
                    <img class="mx-auto relative top-36" src="https://marvelous-melba-c6ea67.netlify.app/images/records.svg" alt="">
                </div>

            </div>

        </div>

    </header>

    <?php include 'footer.php'; ?>
</body>

</html>
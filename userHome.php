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

    <main>
        <!-- Extras -->
        <section class="text-center"><!-- Coupon Section -->

            <!-- Title -->
            <div class="text-5xl mt-64 pb-20 font-bold font-raleway">
                Best offers for you
            </div>

            <!-- Coupons -->
            <div class="flex gap-6 justify-center">

                <!-- Independence coupon -->
                <div class="bg-[#006a4eff] w-[573px] h-[220px] rounded-3xl flex gap-11">
                    <div class="pt-8 pl-[50px]">
                        <p class="font-inter w-56 h-32 leading-9">
                            <span class="text-4xl font-black text-[#f42a41ff]">
                                Independence Offer
                            </span>
                            <br>
                            <span class="text-[20px] text-[#f42a41ff] font-semibold">
                                50% off on purchase
                            </span>
                            <br>
                            <span class="text-[18px] text-[#f42a41ff] font-medium">
                                use by August 2024
                            </span>
                        </p>
                    </div>

                    <img src="https://i.ibb.co.com/pWVQZ4D/cupon-devider.png" alt="">

                    <div class="relative right-6">
                        <p class="font-raleway items-center mt-[80px]">
                            <span class="text-[32px] font-bold text-[#f42a41ff]">
                                NewBD24
                            </span> <br>
                            <span class="text-[20px] font-medium text-[#f42a41ff]">
                                Coupon Code
                            </span>
                        </p>
                    </div>

                </div>

                <!-- 15% off coupon -->
                <div class="bg-[#FFBF0F] w-[573px] h-[220px] rounded-3xl flex gap-11">
                    <div class="pt-14 pl-[50px]">
                        <p class="font-inter w-56 h-32 leading-9">
                            <span class="text-4xl font-black">
                                15% OFF
                            </span>
                            <br>
                            <span class="text-[20px] font-semibold">
                                on your next purchase
                            </span>
                            <br>
                            <span class="text-[18px] font-medium text-[#03071266]">
                                use by January 2024
                            </span>
                        </p>
                    </div>

                    <img src="https://i.ibb.co.com/pWVQZ4D/cupon-devider.png" alt="">

                    <div class="relative right-6">
                        <p class="font-raleway items-center mt-[80px]">
                            <span class="text-[32px] font-bold">
                                NEW15
                            </span> <br>
                            <span class="text-[20px] font-medium text-[#03071266]">
                                Coupon Code
                            </span>
                        </p>
                    </div>


                </div>

                <!-- 20% off coupon -->
                <div class="bg-[#F78C9C] w-[573px] h-[220px] rounded-3xl flex gap-11">
                    <div class="pt-14 pl-[50px]">
                        <p class="font-inter w-56 h-32 leading-9">
                            <span class="text-3xl font-black">
                                Be a member
                            </span>
                            <br>
                            <span class="text-[20px] font-semibold">
                                on your next purchase
                            </span>
                            <br>
                            <span class="text-[18px] font-medium text-[#03071266]">
                                use by January 2024
                            </span>
                        </p>
                    </div>

                    <img src="https://i.ibb.co.com/pWVQZ4D/cupon-devider.png" alt="">

                    <div class="relative right-6">
                        <p class="font-raleway items-center mt-[80px]">
                            <span class="text-[32px] font-bold">
                                Couple 20
                            </span> <br>
                            <span class="text-[20px] font-medium text-[#03071266]">
                                Coupon Code
                            </span>
                        </p>
                    </div>

                </div>


            </div>

            <!-- Button (See All Offers) -->
            <div class="pt-16">
                <button class="btn btn-outline btn-success text-[#1DD100] border-[#1DD100] font-bold text-xl w-48 h-16 mb-28">
                    See All Offers
                </button>
            </div>

        </section>

        <!-- Intro -->
        <section class="bg-white rounded-t-[88px] w-full border-t-2 border-[#1dd100]">
            <div class="text-center">

                <!-- Title and description (upper half) -->
                <div class="pt-28">
                    <p class="font-raleway text-4xl font-bold">
                        P Paribahan
                    </p>
                    <p class="w-[700px] mx-auto text-[#03071299] text-xl mt-6 pb-16">
                        Your One-Stop Ticket Shop! Explore destinations, book hassle-free bus rides, and embark on
                        adventure with ease.
                    </p>
                </div>

            </div>
        </section>

        <!-- Search Panel -->
        <section id="ticketPanel" class="bg-white pb-16">
            <?php include 'searchPanel.php'; ?>
        </section>

    </main>

    <?php include 'footer.php'; ?>
</body>

</html>
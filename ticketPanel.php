<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket</title>

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
    <!-- Seat and Info interface (lower section) -->
    <div class="bg-white py-7 border border-green-300 z-10 max-w-[45.5%] mx-auto rounded-3xl flex">

        <!-- Left section (Seat interface and notations) -->
        <div class="pl-8 max-w-[670px]">

            <!-- seat notation -->
            <div class="max-w-[615px]">

                <p class="font-raleway text-2xl font-semibold pb-6">
                    Select Your Seat
                </p>

                <hr class="border-dashed border-[#03071233] pb-4">

                <div class="flex justify-between">

                    <div class="flex gap-2">
                        <img src="https://i.ibb.co.com/V3Qbpx8/seat-gray.png" alt="">
                        <p>Available</p>
                    </div>

                    <div class="flex gap-2">
                        <img src="https://i.ibb.co.com/Lkx0smr/seat-green-filled.png" alt="">
                        <p>Selected</p>
                    </div>

                </div>

                <hr class="border-dashed border-[#03071233] mt-4 mb-3">

            </div>

            <!-- steering wheel -->
            <div class="max-w-[615px] flex justify-end">
                <img class="pb-3" src="https://marvelous-melba-c6ea67.netlify.app/images/steering%20wheel.svg" alt="">
            </div>

            <!-- seats (A-J) -->
            <div class="font-inter text-lg font-medium grid grid-cols-5 gap-3">

                <!-- A -->

                <button id="A1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">A1</button>
                <button id="A2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">A2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="A3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">A3</button>
                <button id="A4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">A4</button>



                <!-- B -->

                <button id="B1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">B1</button>
                <button id="B2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">B2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="B3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">B3</button>
                <button id="B4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">B4</button>



                <!-- C -->

                <button id="C1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">C1</button>
                <button id="C2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">C2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="C3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">C3</button>
                <button id="C4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">C4</button>



                <!-- D -->

                <button id="D1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">D1</button>
                <button id="D2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">D2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="D3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">D3</button>
                <button id="D4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">D4</button>



                <!-- E -->

                <button id="E1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">E1</button>
                <button id="E2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">E2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="E3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">E3</button>
                <button id="E4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">E4</button>



                <!-- F -->

                <button id="F1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">F1</button>
                <button id="F2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">F2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="F3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">F3</button>
                <button id="F4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">F4</button>



                <!-- G -->

                <button id="G1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">G1</button>
                <button id="G2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">G2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="G3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">G3</button>
                <button id="G4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">G4</button>



                <!-- H -->

                <button id="H1" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">H1</button>
                <button id="H2" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">H2</button>

                <button id="blank" class="seat btn no-animation bg-gray-50 border-none w-14 h-14"></button>

                <button id="H3" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">H3</button>
                <button id="H4" class="seat btn border border-green-300 w-14 h-14 text-[#03071280]">H4</button>



            </div>

        </div>

        <!-- Seat divider line -->
        <div class="divider divider-horizontal"></div>

        <!-- Right section (Seat & customer info) -->
        <div class="w-[427px]">

            <!-- Select Your Seat notation -->
            <div>
                <p class="font-raleway text-2xl font-semibold pb-6">
                    Select Your Seat
                </p>

                <hr class="border-dashed border-[#03071233] pb-6">
            </div>

            <!-- seat info, coupons, total & grand total card -->
            <div class="bg-[#F7F8F8] rounded-xl font-inter pt-8 px-8 ">

                <!-- Seat -- Class -- Price bar -->
                <div class="flex justify-between">

                    <!-- Seat and availed Button -->
                    <div class="flex">
                        <p class="mr-1 text-base font-semibold">
                            Seat
                        </p>
                        <button class="btn btn-xs bg-[#1DD100] rounded-md text-white text-xs font-bold">
                            <span id="availed-seats">0</span>
                        </button>
                    </div>

                    <p class="text-base font-semibold relative right-4">Class</p>

                    <p class="text-base font-semibold">Price</p>

                </div>

                <hr class="my-4 border-dashed border-[#03071233]">

                <p id="no-seat" class="mb-4 font-raleway font-semibold text-center">No Seats Selected</p>

                <!-- Seats, prices, coupons & grandtotal -->
                <div>
                    <hr class="border-[#03071233] mb-4">

                    <!-- Total Price -->
                    <div class="flex justify-between pb-4 mb-4">
                        <p class="font-semibold">Total Price</p>
                        <p class="font-semibold">BDT <span id="total-price">0</span></p>
                    </div>
                </div>

            </div>

            <!-- Passenger Info -->
            <div>

                <!-- passenger name -->
                <div class="py-4">
                    <p class="font-bold mb-3">Passenger Name*</p>
                    <label class="input input-bordered flex items-center gap-2 border-[#0307121A]">
                        <input type="text" class="grow" placeholder="Enter your name" />
                    </label>
                </div>

                <!-- Phone number -->
                <div>
                    <p class="font-bold mb-3">Phone Number*</p>
                    <label class="input input-bordered flex items-center gap-2 border-[#0307121A]">
                        <input id="phone-input" type="number" class="grow"
                            placeholder="Enter your phone number" />
                    </label>
                </div>

                <!-- Email ID -->
                <div class="py-4">
                    <p class="font-bold mb-3">Email ID*</p>
                    <label class="input input-bordered flex items-center gap-2 border-[#0307121A]">
                        <input type="email" class="grow" placeholder="Enter your email id" />
                    </label>
                </div>

            </div>

            <!-- Next button & Terms and conditions -->
            <div>

                <!-- next button -->
                <button id="next-btn" class="btn w-full bg-[#1DD100] font-raleway text-xl font-extrabold text-white">
                    Next
                </button>

                <!-- Terms and Conditions -->
                <div class="flex justify-between mt-6 text-[#03071299]">
                    <p><u>Terms and Conditions</u></p>
                    <p><u>Cancellation Policy</u></p>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
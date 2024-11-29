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
    <?php include 'navbar.php'; ?>

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse gap-14">
            <div class="text-center lg:text-left my-16">
                <h1 class="text-5xl font-bold">Sign Up!</h1>
                <p class="py-8 w-3/4">
                    One-Stop Ticket Shop! Join and explore destinations. Book hassle-free bus rides, and embark on
                    adventure with ease.
                </p>
            </div>

            <div class="card bg-base-100 border-2 border-t-[#1dd10099] rounded-lg w-full max-w-sm shrink-0 shadow-lg shadow-[#1dd10099]">

                <!-- method="post" action="loginHandler.php" -->
                <form method="POST" action="signUpHandler.php" class="card-body gap-4">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" id="email" name="email" placeholder="email" class="input input-bordered border-x-0 border-2" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">First Name</span>
                        </label>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" class="input input-bordered border-x-0 border-2" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Last Name</span>
                        </label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="input input-bordered border-x-0 border-2" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">User Name</span>
                        </label>
                        <input type="text" id="userName" name="userName" placeholder="User Name" class="input input-bordered border-x-0 border-2" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Phone</span>
                        </label>
                        <input type="number" id="phoneNo" name="phoneNo" placeholder="Your Phone No." class="input input-bordered border-x-0 border-2" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="Password" class="input input-bordered border-x-0 border-2" required />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button class="btn bg-[#1dd100] text-white text-xl rounded-md font-bold shadow-md shadow-[#1dd10099]">Login</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
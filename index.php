<?php $title = 'Welcome'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="stylesheet" href="assets/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/style.css">
    <title> <?php echo $title ?> </title>
</head>
<body class="overflow-x-hidden">
    <div class="view"></div>
    <div class="relative">
        <div id="window" class="bg-white relative overflow-x-hidden h-screen px-3" >
            <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform rotate-45 -right-96 -top-36" style="border-radius:5rem;right: -28rem ;">
                <div class="transform -rotate-90 h-full">
                    <div class="transform rotate-45 relative top-32 -left-44">
                        <img src="assets/img/Job-Interview-Illustration.png" alt="">
                    </div>
                </div>
            </div>
            <div class="fixed topNav bg-white bg-opacity-0 right-0 w-screen z-40">
                <div class="max-w-7xl top-0 mx-auto py-3">
                    <div class="flex w-full flex-col md:flex-row px-3">
                        <div class="flex-grow">
                            <span class=" text-blue-500 font-bold text-lg">Jobber's</span>
                            <div id="toggler" class="float-right bg-blue-500 mr-3 md:hidden block px-2 py-1 rounded-md border-2 border-white shadow-lg text-white cursor-pointer">
                                <i class="ri-menu-2-line relative"></i>
                            </div>
                        </div>
                        <div id="togglerElement" class="md:pr-6 py-5 flex-col md:flex-row md:py-0 gap-12 hidden bg-white md:bg-transparent md:flex">
                            <div class="flex flex-col items-center md:flex-row gap-8 capitalize ">
                                <a href="#welcome" class="cursor-pointer">welcome</a>
                                <a href="#about" class="cursor-pointer">about us</a>
                                <a href="#vacancy" class="cursor-pointer">vacancy</a>
                                <div class="bg-blue-500 text-white py-2 px-5 rounded-md cursor-pointer employment_status">check employment status</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-screen relative" id="welcome">
                <div class="absolute w-full bannerSearch">
                    <?php
                        include_once 'search.php' ;
                    ?>
                </div>
                <div class="h-full w-full z-40 flex items-center">
                    <div class="flex-grow">
                        <div class="max-w-7xl mx-auto">
                            <div class="max-w-xl mx-auto lg:mx-2">
                            <div class="text-blue-700 text-xl font-bold">Welcome</div>
                                <div class="font-bold text-5xl md:text-7xl capitalize">
                                    <div class="">let us help you </div>
                                    <div class="">to choose</div>
                                    <div class="">the best</div>
                                </div>
                                <div class="mt-3 text-gray-400">
                                    Eliminate stress and save time in searching for apartments let us serve you with the best apartment around.
                                </div>
                                <div class="flex w-full gap-12 mt-3">
                                    <a href="#" class="bg-blue-500 py-2 px-8 capitalize text-white rounded-2xl text-lg"> <i class="ri-book-open-line relative" style="top:2px"></i> learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-0 lg:mt-12 xl:mt-20 relative w-screen h-screen">
                <div class="h-full w-full z-40 flex items-center" id="about">
                    <div class="flex-grow">
                        <div class="max-w-7xl mx-auto">
                            <div class="flex w-full justify-end">
                                <div class="max-w-xl mx-auto lg:mx-4">
                                    <div class="text-blue-700 text-xl font-bold">About Us</div>
                                    <div class="font-bold text-2xl md:text-5xl capitalize">
                                        <div class="">We provide you with </div>
                                        <div class="">the best property</div>
                                    </div>
                                    <div class="mt-3 text-gray-400 pr-7">
                                        <p>
                                        Residential apartment management is an emerging aspect of managerial science today. It involves establishing goals, objectives and policies and implementation of strategies to achieve those goals and objectives. Apartment management is the work carried out to manage and maintain the development including facilities therein.
                                        </p>
                                        <p class="mt-5">
                                        An apartment is a place where people live, it is one of the basic needs of humanity and as such, different measures need to be taken to ensure that people can rent affordable apartment easily.Renting, also known as hiring or letting, is an agreement where a payment is made for the temporary use of a good, service or property owned by another. 
                                        </p>
                                    </div>
                                    <div class="flex w-full gap-12 mt-8">
                                        <a href="#" class="bg-blue-500 py-2 px-8 capitalize text-white rounded-2xl text-lg"> <i class="ri-book-open-line relative" style="top:2px"></i> learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full abtCard pr-10" id="vacancy">
                    <div class="max-w-5xl grid lg:grid-cols-3 gap-7 mx-auto">
                        <div class="bg-white shadow-lg py-8 rounded-xl">
                            <div class="flex items-center flex-col">
                                <div class="px-3 py-2 bg-blue-500 text-white rounded-2xl">
                                    <i class="ri-emotion-line text-3xl"></i>
                                </div>
                                <div class="capitalize font-bold">
                                    <div class="text-center">get your dream Jobs</div>
                                    <p class="text-xs text-gray-400 px-4 text-center mt-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aliquam sequi. Totam nesciunt sed quo voluptas.
                                    </p>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="bg-blue-500 shadow-lg py-8 text-white rounded-xl">
                            <div class="flex items-center flex-col">
                                <div class="px-3 py-2 bg-white text-black rounded-2xl">
                                    <i class="ri-mac-line text-3xl"></i>
                                </div>
                                <div class="capitalize font-bold">
                                    <div class="text-center">Send Your Application</div>
                                    <p class="text-xs text-gray-200 px-4 text-center mt-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aliquam sequi. Totam nesciunt sed quo voluptas.
                                    </p>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg py-8 rounded-xl">
                            <div class="flex items-center flex-col">
                                <div class="px-3 py-2 bg-blue-500 text-white rounded-2xl">
                                    <i class="ri-ancient-gate-line text-3xl"></i>
                                </div>
                                <div class="capitalize font-bold">
                                    <div class="text-center">enjoy your new Job</div>
                                    <p class="text-xs text-gray-400 px-4 text-center mt-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aliquam sequi. Totam nesciunt sed quo voluptas.
                                    </p>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform -rotate-45" style="border-radius:5rem;right: -38rem ; top:40rem"></div>
                <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform -rotate-45" style="border-radius:5rem;right: -38rem ; top:40rem"></div>
                <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform -rotate-45" style="border-radius:5rem;left: -38rem ; top:20rem">
                    <div class="transform rotate-90 relative -right-24 h-full">
                        <div class="transform -rotate-45 -right-96 -top-44 relative">
                            <img src="assets/img/ery-re.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block" style="height:120vh"></div>
                <div class="">
                    <div class="max-w-4xl mx-auto pr-12">
                        <div class="text-center text-blue-700 text-xl font-bold">
                            Vacancy
                        </div>
                        <div class="capitalize text-xl font-bold py-2 text-center">recently added Jobs</div>
                        <div class="max-w-md mx-auto text-center py-3 text-gray-400">
                            Residential apartment management is an emerging aspect of managerial science today. It involves establishing goals, objectives and policies and implementation of strategies to achieve those goals and objectives.
                        </div>
                        <div class="py-4 max-w-5xl mx-auto grid sm:grid-cols-2 md:grid-cols-3 gap-3 gap-y-12">
                            <?php
                                include_once 'assets/backend/conn.php';
                                $query = $conn->query("SELECT * FROM jobs ORDER BY id DESC LIMIT 3");
                                if($query->num_rows > 0){
                                    while ($jobs = $query->fetch_assoc()) {
                                        ?>
                                            <div class="shadow-xl p-3 bg-white rounded-md border">
                                                <div class="py-2">
                                                    <div class="font-bold text-lg">Job Title</div>
                                                    <div><?php echo $jobs['job_title']?></div>
                                                    <div class="font-bold text-lg">Location</div>
                                                    <div><?php echo $jobs['job_location']?></div>
                                                    <div class="font-bold text-lg">Description</div>
                                                    <div class="text-sm trunk flex w-full">
                                                        <div class="trunk">
                                                            <div><?php echo $jobs['job_description']?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex w-full items-center gap-2">
                                                    <div class="font-bold text-lg">Salary :</div>
                                                    <div class="text-sm relative top-0">
                                                        &#8358;<?php echo $jobs['salary_range']?>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-2 gap-2 text-center text-white mt-2">
                                                    <div class="bg-blue-300 viewDes py-1 rounded-md cursor-pointer view-prop" id="<?php echo $jobs['id'] ; ?>">View </div>
                                                    <div class="bg-green-400 py-1 rounded-md cursor-pointer apply" id="<?php echo $jobs['id'] ?>">Apply </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="py-12 text-right">
                            <a href="Jobs.php" class="bg-blue-500 py-2 px-8 capitalize text-white rounded-md text-lg"> View more <i class="ri-arrow-right-line relative left-2 top-2" style="top:2px"></i> </a>
                        </div>
                    </div>
                <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform -rotate-45" style="border-radius:5rem;right: -38rem ; top:40rem"></div>
                <div class="absolute hidden lg:block h-full w-2/3 bg-blue-50 transform -rotate-45" style="border-radius:5rem;left: -38rem ; top:20rem">
                    <div class="transform rotate-90 relative -right-24 h-full">
                        <div class="transform -rotate-45 -right-96 -top-44 relative">
                            <img src="assets/img/ery-re.png" alt="">
                        </div>
                    </div>
                </div>
                <?php include_once 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
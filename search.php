<form action="Jobs.php" method="get" class="max-w-5xl grid lg:grid-cols-4 gap-y-4 capitalize mx-auto bg-white rounded-lg lg:rounded-full shadow-lg lg:shadow-2xl px-4 p-5 lg:pr-8 lg:pl-12">
    <div class="">
        <div class="md:text-xl">
            <div class="cursor-pointer w-full lg:w-auto relative lg:mr-7">
                <i class="ri-map-pin-line relative top-1"></i> location <i class="ri-arrow-down-s-line absolute top-1 right-1"></i> 
            </div>
        </div>
        <div class="captialize text-gray-400 mt-1 px-7">Owerri</div>
    </div>
    <div class="">
        <div class="md:text-xl">
            <div class="cursor-pointer w-full lg:w-auto relative lg:mr-7">
                <i class="ri-ancient-pavilion-line relative top-1"></i> Job Description <i class="ri-arrow-down-s-line absolute top-1 right-1"></i> 
            </div>
        </div>
        <div class="captialize text-gray-400 mt-1 px-7">All</div>
    </div>
    <div class="">
        <div class="md:text-xl">
            <div class="cursor-pointer w-full lg:w-auto relative lg:mr-7">
                <i class="ri-coins-line relative top-1"></i> Price Range <i class="ri-arrow-down-s-line absolute top-1 right-1"></i> 
            </div>
        </div>
        <div class="captialize text-gray-400 mt-1 px-7"> Any</div>
    </div>
    <div class="text-right">
        <button class="bg-blue-500 text-white h-full py-3 w-full lg:w-auto md:px-16 rounded-full relative md:text-xl"><i class="ri-search-2-line relative top-1"></i> search</button>
    </div>
</form>


<div class="fixed application_form hidden w-screen h-screen bg-black bg-opacity-20 top-0 right-0 z-50 flex items-center">
    <div class="w-full p-3">
        <div class="max-w-sm p-3 relative bg-white mx-auto rounded-md">
            <span class="top-3 right-3 bg-gray-300 w-8 h-8 flex items-center justify-center rounded-full absolute cursor-pointer close">
                <i class="ri-close-line"></i>
            </span>
            <form action="apply.php" name="apply" method="post" class="space-y-3 pt-8" enctype="multipart/form-data">
                <input type="hidden" name="Job_id" value="">
                <input type="hidden" name="action" value="apply">
                <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                    <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                    <input name="Full_name" type="text" required class="focus:outline-none placeholder-gray-500 px-2 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Fullname"> 
                </div>
                <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                    <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                    <input name="email" type="text" required class="focus:outline-none placeholder-gray-500 px-2 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Email"> 
                </div>
                <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                    <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                    <input name="phone_number" type="text" required class="focus:outline-none placeholder-gray-500 px-2 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Phone Number"> 
                </div>
                <div class="uppercase font-bold">Attach your CV</div>
                <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                    <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                    <input name="cv" type="file" required class="focus:outline-none placeholder-gray-500 px-2 rounded-lg w-full bg-gray-50 py-2"> 
                </div>
                <button type="submit" name="submit" class="uppercase text-center bg-blue-400 text-white w-full rounded-lg py-2">
                    Apply
                </button>
            </form>
        </div>
    </div>
</div>


<div class="fixed job_des hidden w-screen h-screen bg-black bg-opacity-20 top-0 right-0 z-50 flex items-center">
    <div class="w-full p-3">
        <div class="max-w-sm p-3 relative bg-white mx-auto rounded-md">
            <span class="top-3 right-3 bg-gray-300 w-8 h-8 flex items-center justify-center rounded-full absolute cursor-pointer closeDes">
                <i class="ri-close-line"></i>
            </span>
            <div class="dec_card"></div>
        </div>
    </div>
</div>

<div class="fixed employment_status_form hidden w-screen h-screen bg-black bg-opacity-20 top-0 right-0 z-50 flex items-center">
    <div class="w-full p-3">
        <form name="employment_status" class="max-w-sm space-y-3 p-3 pt-10 relative bg-white mx-auto rounded-md">
            <span class="top-3 right-3 bg-gray-300 w-8 h-8 flex items-center justify-center rounded-full absolute cursor-pointer employment_status_close">
                <i class="ri-close-line"></i>
            </span>
            <input type="hidden" name="action" value="checkStatus">
            <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                <input name="contact" type="text" required class="focus:outline-none placeholder-gray-500 px-2 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Email Or Phone Number"> 
            </div>
            <button type="submit" name="submit" class="uppercase text-center bg-blue-400 text-white w-full rounded-lg py-2">
                Check status
            </button>
        </form>
    </div>
</div>



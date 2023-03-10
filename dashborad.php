<?php
    $title = 'dashboard';
    include_once 'assets/backend/authmenu.php';
?>
<div class="md:ml-72 px-2  lg:px-5 py-5">
    <?php
        if ($my_data['user_level'] == 'admin') {
            ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <div class="py-3 text-white bg-red-400 rounded-lg px-4 shadow-lg">
                        <div class="border-b py-1 capitalize text-xs">
                            Open Jobs
                        </div>
                        <div class="text-6xl py-4">
                            <?php
                                echo $conn->query("SELECT * FROM jobs")->num_rows;
                            ?>
                        </div>
                    </div>
                    <div class="py-3 px-4 text-white bg-blue-400 rounded-lg shadow-lg">
                        <div class="border-b py-1 capitalize text-xs">
                            Pending Interve
                        </div>
                        <div class="text-6xl py-4">
                            <?php echo $conn->query("SELECT * FROM applicants WHERE job_status='pending'")->num_rows; ?> 
                        </div>
                    </div>
                    <div class="py-3 px-4 text-white bg-green-400 rounded-lg shadow-lg">
                        <div class="border-b py-1 capitalize text-xs">
                            Total Staff's
                        </div>
                        <div class="text-6xl py-4">
                            <?php echo $conn->query("SELECT * FROM users WHERE user_level='staff'")->num_rows; ?> 
                        </div>
                    </div>
                    <div class="sm:col-span-2 md:col-span-2 xl:col-span-3 py-3">
                        Job Applicants
                        <div class="mt-4  py-2 px-3 bg-blue-500 text-white grid grid-cols-6 lg:grid-cols-7">
                            <div class="col-span-4 text-left">Fullname</div>
                            <div class="hidden lg:block">Phone number</div>
                            <div class="hidden md:block">Job title</div>
                            <div class="text-center col-span-2 md:col-span-1">View More</div>
                        </div>
                        <div class="divide-y">
                            <?php
                                $query = $conn->query("SELECT * FROM applicants WHERE job_status='pending'");
                                while ($application = $query->fetch_assoc()) {
                                    ?>
                                        <div id="<?php echo $application['id']?>" class="py-2 px-3 applicant_list cursor-pointer gap-3 bg-gray-50 hover:bg-blue-50 text-black grid grid-cols-6 lg:grid-cols-7">
                                            <div class="col-span-4">
                                                <div class="flex w-full">
                                                    <div class=" overflow-ellipsis truncate">
                                                        <?php echo $application['Full_name'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden lg:block"><?php echo $application['phone_number'] ?></div>
                                            <div class="hidden md:block">
                                                <?php
                                                    $job_id = $application["Job_id"];
                                                    $query2 = $conn->query("SELECT * FROM jobs WHERE id='$job_id'");
                                                    echo $query2->fetch_assoc()['job_title'];
                                                ?>
                                            </div>
                                            <div class="col-span-2 VM md:col-span-1 text-center" id="<?php echo $type['id'] ?>">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
        } else {
            ?>
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-3">
                    <div class="space-y-3 xl:row-span-2">
                        <div class="text-sm dark:text-white font-bold">Profile Data</div>
                        <div class="bg-white dark:bg-gray-900 border rounded-md p-3 border-gray-100 dark:border-gray-600">
                            <div class="py-2">
                                <div class="w-44 h-44 rounded-full mx-auto bg-blue-300 overflow-hidden">
                                    <div class="w-full h-full flex">
                                        <img src={props.auth.user.avatar} alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4 dark:text-white">
                                <div class="">
                                    Firstname : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['firstname'] ?></span>
                                </div>
                                <div class="">
                                    Lastname : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['lastname'] ?></span>
                                </div>
                                <div class="">
                                    Email : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['email'] ?></span>
                                </div>
                                <div class="">
                                    Phone number : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['phone_number'] ?></span>
                                </div>
                                <div class="">
                                    Current Level : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['user_level'] ?></span>
                                </div>
                                <div class="">
                                    Job title : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['job_title'] ?></span>
                                </div>
                                <div class="">
                                    Office Location : <span class="text-gray-600 dark:text-gray-300 capitalize"><?php echo $my_data['office_location'] ?></span>
                                </div>
                                <div class="">
                                    Salary : <span class="text-gray-600 dark:text-gray-300 capitalize">&#8358;<?php echo $my_data['salary'] ?></span>
                                </div>
                            </div>
                            <div class=""></div>
                        </div>
                    </div>
                </div>
            <?php
        }
        
    ?>
</div>
<div class="fixed bg-black applicant_data hidden bg-opacity-40 w-screen h-screen top-0 right-0 z-40 flex items-center">
    <div class="w-full p-3">
        <div class="max-w-md p-3 space-y-5 relative rounded-md bg-white mx-auto">
            <span class="top-3 right-3 bg-gray-300 w-8 h-8 flex items-center justify-center rounded-full absolute cursor-pointer s_close">
                <i class="ri-close-line"></i>
            </span>
            <div class="py-2 datCard"></div>
        </div>
    </div>
</div>
<script>
    $('.close').on('click',function () {
        $(this).parent().parent().parent().parent().addClass('hidden')
    })
</script>
<?php
    $title = 'Manage Jobs';
    include_once 'assets/backend/authmenu.php';
?>
<div class="md:ml-72 px-2 py-10 lg:px-5 py-5">
    <div class="fixed px-3 py-1 rounded-l-lg z-40 cursor-pointer bg-blue-400 text-white right-0 openModal">Add Job vacancy</div>
    <div class="fixed bg-black hidden bg-opacity-40 w-screen h-screen modalBody top-0 right-0 z-40 flex items-center">
        <div class="w-full p-3">
            <div class="max-w-md p-3 pt-12 relative bg-white rounded-md mx-auto">
                <span class="close">
                    <i class="i fa fa-times absolute right-3 top-3 cursor-pointer"></i>
                </span>
                <form action="upload.php" method="post"  class="space-y-3" enctype="multipart/form-data">
                    <select name="job_title" id="recipe_id" required class="w-full rounded-lg py-2 p-2 capitalize" >
                        <option disabled selected>Select Job Title</option>
                        <?php
                            $query = $conn->query("SELECT * FROM job_description");
                            while ($job = $query->fetch_assoc()) {
                                ?>
                                    <option class="capitalize" value="<?php echo $job['name'] ?>"><?php echo $job['name'] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <textarea name="job_description" cols="30" rows="10" required placeholder="Enter Job Description" class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2"></textarea>
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="job_location" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Location"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="salary_range" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Salary"> 
                    </div>
                    <button type="submit" name="submit" class="uppercase text-center bg-blue-400 text-white w-full rounded-lg py-2">
                        Post vacancy
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="py-12 px-3 md:px-12 grid sm:grid-cols-2 md:grid-cols-3 gap-3">
            <?php
                $query = $conn->query("SELECT * FROM jobs");
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
                                <div class="bg-blue-300 py-1 rounded-md cursor-pointer view-prop" id="<?php echo $type['id'] ; ?>">View </div>
                                <div class="bg-red-400 py-1 rounded-md cursor-pointer RemV" id="<?php echo $jobs['id'] ?>">Remove </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<script src="assets/jquery.js"></script>
<script>
    $('.close').on('click',function () {
        $('.modalBody').addClass('hidden')
    })
    $('.openModal').on('click',function(){
        $('.modalBody').removeClass('hidden')
    })

    $('.RemV').on('click',function(){
        var data = {
            action: 'RemProp',
            val : $(this).attr('id')
        }
        $.ajax({
            type: "post",
            url: "assets/backend/qureies.php",
            data: data,
            success: function () {
                window.location = ''
            }
        });
    })
</script>
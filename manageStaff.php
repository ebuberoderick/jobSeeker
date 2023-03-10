<?php
    $title = 'Manage Staffs';
    include_once 'assets/backend/authmenu.php';
?>
<div class="md:ml-72 px-2 py-10 lg:px-5 py-5">
    <div class="fixed px-3 py-1 rounded-l-lg z-40 cursor-pointer bg-blue-400 text-white right-0 openModal">Add Staff</div>
    <div class="fixed bg-black hidden bg-opacity-40 w-screen h-screen modalBody top-0 right-0 z-40 flex items-center">
        <div class="w-full p-3">
            <div class="max-w-md p-3 pt-12 relative bg-white rounded-md mx-auto">
                <span class="close">
                    <i class="i fa fa-times absolute right-3 top-3 cursor-pointer"></i>
                </span>
                <form name="addEmploy" method="post"  class="space-y-3">
                    <input type="hidden" name="action" value="addEmploy">
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="firstname" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Firstname"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="lastname" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Lastname"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="email" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Email"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="phone_number" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Phone Number"> 
                    </div>
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
                        <input name="office_location" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Office Location"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="salary" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Salary"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="password" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Password"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="comfirmP" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Comfirm Password"> 
                    </div>
                    <button type="submit" name="submit" class="uppercase text-center bg-blue-400 text-white w-full rounded-lg py-2">
                        Add Employee Data
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="fixed bg-black hidden bg-opacity-40 w-screen h-screen editModal top-0 right-0 z-40 flex items-center">
        <div class="w-full p-3">
            <div class="max-w-md p-3 pt-12 relative bg-white rounded-md mx-auto">
                <span class="viewX">
                    <i class="i fa fa-times absolute right-3 top-3 cursor-pointer"></i>
                </span>
                <form name="updateEmploy" method="post"  class="space-y-3">
                    <input type="hidden" name="action" value="updateEmploy">
                    <input type="hidden" name="userid" value="">
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="email" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Email"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="phone_number" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Job Phone Number"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="office_location" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Office Location"> 
                    </div>
                    <div class="relative sm:top bg-white w-full flex flex-row border py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-sun-o absolute text-gray-500"></i>
                        <input name="salary" type="text" required class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Enter Salary"> 
                    </div>
                    <button type="submit" name="submit" class="uppercase text-center bg-blue-400 text-white w-full rounded-lg py-2">
                        Updata Employee Data
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="fixed bg-black hidden viewModal bg-opacity-40 w-screen h-screen top-0 right-0 z-40 flex items-center">
        <div class="w-full p-3">
            <div class="max-w-md p-3 pt-12 relative bg-white rounded-md mx-auto">
                <span class="editX">
                    <i class="i fa fa-times absolute right-3 top-3 cursor-pointer"></i>
                </span>
                <div class="showdata"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="sm:col-span-2 md:col-span-2 xl:col-span-3 py-3">
            Staffs
            <div class="mt-4  py-2 px-3 bg-blue-500 text-white grid grid-cols-6 lg:grid-cols-7">
                <div class="col-span-3 text-left">Fullname</div>
                <div class="hidden lg:block">Phone number</div>
                <div class="hidden md:block">Job title</div>
                <div class="text-center col-span-3 md:col-span-2"></div>
            </div>
            <div class="divide-y">
                <?php
                    $query = $conn->query("SELECT * FROM users WHERE user_level='staff'");
                    while ($staff = $query->fetch_assoc()) {
                        ?>
                            <div class="py-2 px-3 cursor-pointer gap-3 bg-gray-50 hover:bg-blue-50 text-black grid grid-cols-6 lg:grid-cols-7">
                                <div class="col-span-3 text-left"><?php echo $staff['firstname'].' '.$staff['lastname'].'('.$staff['email'].')'?></div>
                                <div class="hidden lg:block"><?php echo $staff['phone_number']?></div>
                                <div class="hidden md:block"><?php echo $staff['job_title'] ?></div>
                                <div class="text-center col-span-3 md:col-span-2">
                                    <span class="bg-gray-800 text-white p-3 rounded-md view" name="<?php echo $staff['phone_number'].'/'.$staff['email'].'/'.$staff['job_title'].'/'.$staff['office_location'].'/'.$staff['salary'] ?>" title="Edit" id="<?php echo $staff['id'] ?>"><i class="ri-pages-line"></i></span>
                                    <span class="bg-blue-400 text-white p-3 rounded-md edit" title="View" id="<?php echo $staff['id'] ?>"><i class="ri-eye-line"></i></span>
                                    <span class="bg-red-400 text-white p-3 rounded-md delete" title="Delete" id="<?php echo $staff['id'] ?>"><i class="ri-delete-bin-line"></i></span>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="assets/jquery.js"></script>
<script>
    $('.showdata').on('click','.payroll',function () {  
        var data = {
            'action': 'updatePayroll',
            'payrollState' : $(this)[0].parentElement.id,
            'id' : $(this).attr('id')
        }
        
        $.ajax({
            type: "post",
            url: "assets/backend/qureies.php",
            data: data,
            success: function () {
                $('.viewModal').addClass('hidden')
            }
        });
        
    })

    $('.close').on('click',function () {
        $('.modalBody').addClass('hidden')
    })
    $('.openModal').on('click',function(){
        $('.modalBody').removeClass('hidden')
    })


    $('.edit').on('click',function () {
        var data = {
            'action' : 'fetchData',
            'id' : $(this).attr('id')
        }
        $.ajax({
            type: "post",
            url: "assets/backend/qureies.php",
            data: data,
            dataType: "json",
            success: function (res) {
                $('.showdata').html(`
                    <div class="font-bold text-lg">Firstname</div>
                    <div>${res.data.firstname}</div>
                    <div class="font-bold text-lg">Lastname</div>
                    <div>${res.data.lastname}</div>
                    <div class="font-bold text-lg">Email</div>
                    <div>${res.data.email}</div>
                    <div class="font-bold text-lg">Phone</div>
                    <div>${res.data.phone_number}</div>
                    <div class="font-bold text-lg">Position</div>
                    <div>${res.data.user_level}</div>
                    <div class="font-bold text-lg">Job Title</div>
                    <div>${res.data.job_title}</div>
                    <div class="font-bold text-lg">Location</div>
                    <div>${res.data.office_location}</div>
                    <div class="font-bold text-lg">Salary</div>
                    <div>${res.data.salary}</div>
                    <div class="mt-3" id="${res.data.onPayroll}">
                        ${res.data.onPayroll == 1 ? 
                            `<div id="${res.data.id}" class="py-2 payroll text-center cursor-pointer select-none bg-red-500 text-white">remove from payroll</div>` :
                            `<div id="${res.data.id}" class="py-2 payroll text-center cursor-pointer select-none bg-green-500 text-white">Add to payroll</div>`
                        }
                    </div>
                `)
            }
        });
        $('.viewModal').removeClass('hidden')
    })


    $('.editX').on('click',function () {
        $('.viewModal').addClass('hidden')
    })
    $('.viewX').on('click',function () {
        $('.editModal').addClass('hidden')
    })
    $('.view').on('click',function(){
        var oldData = $(this).attr('name').split('/')
        $('form[name=updateEmploy] input[name=userid]').val($(this).attr('id'))
        $('form[name=updateEmploy] input[name=phone_number]').val(oldData[0])
        $('form[name=updateEmploy] input[name=email]').val(oldData[1])
        $('form[name=updateEmploy] input[name=office_location]').val(oldData[3])
        $('form[name=updateEmploy] input[name=salary]').val(oldData[4])
        $('.editModal').removeClass('hidden')
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
    $('.delete').on('click',function() {
        var data = {
            'action':'delEmployee',
            'id' : $(this).attr('id')
        }
        $.ajax({
            type: "post",
            url: "assets/backend/qureies.php",
            data: data,
            dataType:'json',
            success: function (res) {
                alert(res.msg)
                window.location = ''
            }
        });
    })

    $('form[name=updateEmploy]').on('submit',function(e){
        e.preventDefault()
        var data = $(this).serialize()
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: data,
            dataType:'json',
            success : function (res){
                alert(res.msg);
                window.location.href = ''
            }
        })
        
    })
</script>
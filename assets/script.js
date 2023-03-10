$(document).ready(function() {
    window.addEventListener('scroll',function (){
        $scrolled = window.scrollY;
        if($scrolled > 150){
            $('.topNav').addClass('shadow-lg bg-opacity-100')
            $('.topNav').removeClass('text-white')
        }else{
            $('.topNav').removeClass('shadow-lg bg-opacity-100')
            $('.topNav').addClass('text-white')

        }
    })
    $scrolled = window.scrollY;
    if($scrolled > 150){
        $('.topNav').addClass('shadow-lg bg-opacity-100')
    }else{
        $('.topNav').removeClass('shadow-lg bg-opacity-100')
    }
    $('#toggler').on('click', function () {
        $('#togglerElement').toggleClass('hidden')
        $('#togglerElement').toggleClass('flex')
    })

    
    $('form[name=auth]').on('submit', function (ev){
        ev.preventDefault();
        $formData = $(this)
        $data = $(this).serialize();
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res){
                if(res.msg == 'login'){
                    window.location.href = 'dashborad.php'
                }else if(res.msg == 'logout'){
                    window.location.href = 'dashborad.php'
                }else{
                    $('.msg').text(res.msg)
                    $formData.trigger('reset')
                }
            },
            error : function(e){
                console.log(e);
            }
        })
    });
    $('.bars').on('click',function(){
        $('.menu').toggleClass('hidden flex')
        $('.sidenav').toggleClass('-ml-72')
    })

    $('.dec_card').on('click','.apply',function(){
        $('.job_des').addClass('hidden')
        $('input[name=Job_id]').val($(this).attr('id'))
        $('.application_form').removeClass('hidden')
    })

    $('.apply').on('click',function(){
        $('input[name=Job_id]').val($(this).attr('id'))
        $('.application_form').removeClass('hidden')
    })
    $('.close').on('click',function(){
        $('input[name=Job_id]').val(0)
        $('.application_form').addClass('hidden')
    })

    $('.employment_status').on('click',function(){
        $('.employment_status_form').removeClass('hidden')
    })
    $('.employment_status_close').on('click',function(){
        $('.employment_status_form').addClass('hidden')
    })

    $('form[name=employment_status]').on('submit',function(e){
        e.preventDefault()
        $formData = $(this)
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: $(this).serialize(),
            dataType:'json',
            success : function(res){
                alert(res.msg)
                $('.employment_status_form').addClass('hidden')
                $formData.trigger('reset')
            }
        })
    })

    $('.viewDes').on('click',function(){
        $('.job_des').removeClass('hidden')
        var data = {
            'action': 'getDes',
            'id':$(this).attr('id')
        }
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: data,
            dataType:'json',
            success: function(res){
                $('.dec_card').html(
                    `
                    <div>
                        <div class="py-2">
                            <div class="font-bold text-lg">Job Title</div>
                            <div>${res.data.job_title}</div>
                            <div class="font-bold text-lg">Location</div>
                            <div>${res.data.job_location}</div>
                            <div class="font-bold text-lg">Description</div>
                            <div class="text-sm trunk flex w-full">
                                <div class="trunk">
                                    <div>${res.data.job_description}</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full items-center gap-2">
                            <div class="font-bold text-lg">Salary :</div>
                            <div class="text-sm relative top-0">
                                &#8358;${res.data.salary_range}
                            </div>
                        </div>
                        <div class="bg-green-400 py-1 rounded-md cursor-pointer mt-2 text-center text-white apply" id="<?php echo $jobs['id'] ?>">Apply </div>
                    </div>
                    `
                )
                console.log(res);
            }
        })
    })
    $('.closeDes').on('click',function(){
        $('.job_des').addClass('hidden')
    })
    
    $('.s_close').on('click',function(){
        $('.applicant_data').addClass('hidden')
    })
    

    $('.applicant_list').on('click',function(){
        var data = {
            'id':$(this).attr('id'),
            'action':'quest'
        }
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: data,
            dataType:'json',
            success : function (res){
                $('.datCard').html(`
                    <div class="font-bold text-lg">Fullname</div>
                    <div>${res.data.Full_name}</div>
                    <div class="font-bold text-lg">Email</div>
                    <div>${res.data.email}</div>
                    <div class="font-bold text-lg">Phone</div>
                    <div>${res.data.phone_number}</div>
                    <div class="font-bold text-lg">Job Title</div>
                    <div>${res.job_info.job_title}</div>
                    <div class="font-bold text-lg">Description</div>
                    <div>${res.job_info.job_description}</div>
                    <div class="font-bold text-lg">Location</div>
                    <div>${res.job_info.job_location}</div>
                    <div class="font-bold text-lg">Salary</div>
                    <div>${res.job_info.salary_range}</div>
                    <a href="${res.data.cv}" class="text-blue-400" target="blank" >View CV</a>
                    <div class="grid grid-cols-2 gap-3 mt-3">
                        <div class="py-2 cursor-pointer text-center text-white bg-red-500 Decline" id="${res.data.id}">Decline</div>
                        <div class="py-2 cursor-pointer text-center text-white bg-green-500 Employ" id="${res.data.id}">Employ</div>
                    </div>
                `)
                $('.applicant_data').removeClass('hidden')
            }
        })
    })

    
    $('.datCard').on('click','.Decline',function(){
        var data = {
            'action':'applicationUpdate',
            'val' : 'declined',
            'id' : $(this).attr('id')
        }
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: data,
            dataType:'json',
            success : function (res){
                window.location.href = ''
            }
        })
    })
    $('.datCard').on('click','.Employ',function(){
        var data = {
            'action':'applicationUpdate',
            'val' : 'employed',
            'id' : $(this).attr('id')
        }
        $.ajax({
            type: 'post',
            url:'assets/backend/qureies.php',
            data: data,
            dataType:'json',
            success : function (res){
                window.location.href = ''
            }
        })
    })

    $('form[name=addEmploy]').on('submit',function(e){
        e.preventDefault()
        var data = $(this).serialize()
        if ($('input[name=password]').val() === $('input[name=comfirmP]').val()) {
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
        }else{
            alert('Password and Comfirm Password are not same please check')
        }
        
    })
})


<?php $title = 'Properties' ?>
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
<?php
    include_once 'menu.php';
?>
<div  style="background-image: url('media/jobseeker-glossary.jpg');background-repeat: no-repeat;background-size: cover;background-position: center center;height:80vh">
    <div class="absolute  w-full bottom-48 px-8">
        <?php
            include_once 'search.php';
        ?>
    </div>
</div>
<div class="text-center py-5 font-extrabold text-xl">Avaliable Jobs</div>
<div class="py-12 px-3 md:px-12 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-x-20 gap-y-12">
    <?php
        include_once 'assets/backend/conn.php';
        $query = $conn->query("SELECT * FROM jobs ORDER BY id DESC LIMIT 3");
        if($query->num_rows > 0){
            while ($jobs = $query->fetch_assoc()) {
                ?>
                    <div class="shadow-xl p-3 flex flex-col bg-white rounded-md border">
                        <div class="font-bold text-lg">Job Title</div>
                        <div><?php echo $jobs['job_title']?></div>
                        <div class="font-bold text-lg">Location</div>
                        <div><?php echo $jobs['job_location']?></div>
                        <div class="font-bold text-lg">Description</div>
                        <div class="text-sm flex-grow trunk flex w-full">
                            <div class="trunk">
                                <div><?php echo $jobs['job_description']?></div>
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

<?php include_once 'footer.php';?>
</body>
<script src="assets/jquery.js"></script>
<script src="assets/script.js"></script>

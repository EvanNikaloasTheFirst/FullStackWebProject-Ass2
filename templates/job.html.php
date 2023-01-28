<main >

    <section class="right">
        <ul class="listing">
        <?php   foreach ($jobs as $job) { ?>

            <h1> <?php echo $job['title'] ?></h1>

            <?=  '<li>'; ?>

            <?=  '<div class="details">';  ?>
               <?=  '<h2>' . $job['title'] . '</h2>';  ?>
                 <?=  '<h3>' . $job['salary'] . '</h3>';  ?>
                 <?=  '<p>' . nl2br($job['description'])  . '</p>';  ?>

<?php if ($_SESSION['userId'] != $job['userId'] || ($_SESSION['userId']) == 'null'  ) {?>
         <?=    '<a class="more" href="/Applicants/apply?id=' . $job['id'] . '">Apply for this job</a>'; ?>



                <?php } if ($job['Archived'] == 'Y' && $_SESSION['AdminLoggedIn'] == true || $_SESSION['StaffLoggedIn'] == true )
                {    ?>
                    <a href="/job/unarchive?id=<?=$job['id']?>">Unarchive this job</a>
                    <?=    '<a href="/Admin/delete?id=' . $job['id'] . '">Delete Job </a>';?>
                    <?=    '<a href="/job/edit?id=' . $job['id'] . '">Edit Job </a>';?>
                    <?=    '<a href="/Applicants/applicantlist?id=' . $job['id'] . '">View applicants </a>';?>

                <?php } else if ($job['Archived'] == 'N' && $_SESSION['AdminLoggedIn'] == true || $_SESSION['StaffLoggedIn'] == true){?>
                    <a href="/job/archive?id=<?=$job['id']?>">Archive this job</a>
                <?=    '<a href="/Admin/delete?id=' . $job['id'] . '">Delete Job </a>';?>
                <?=    '<a href="/job/edit?id=' . $job['id'] . '">Edit Job </a>';?>
                <?=    '<a href="/Applicants/applicantlist?id=' . $job['id'] . '">View applicants </a>';?>

            <?php }?>


   <?php } ?>


                 <?=  '</div>';  ?>
                 <?=  '</li>';  ?>
        </ul>
    </section>
</main>
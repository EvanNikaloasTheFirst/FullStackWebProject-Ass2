
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/styles.css"/>
		<title><?php use as2\DatabaseTable;

            echo $title ?? ""?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Office Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: Closed</p>
            </aside>

			<h1>Jo's Jobs</h1>

        </section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li>Jobs
				<ul>
                        <?php
                        require "../pages/navbar.php"
                        ?>
				</ul>
			</li>
			<li><a href="/job/about">About Us</a></li>
		</ul>
		<ul>
            <?php
            require "../pages/loginStatus.php";

          ?>
            <li><a href="/job/FAQ">FAQs</a></li>
            <li><a href="/Enquiry/contact">Contact</a></li>
	</ul>



	</nav>
<img src="images/randombanner.php"/>
	<main>
  <?=$output ?? ""?>
	</main>
	<footer>
		&copy; Jo's Jobs <?=date('Y');?>
	</footer>
</body>
</html>

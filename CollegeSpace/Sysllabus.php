
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>
	<?php
		include("Navbar.php");
	?>

<?php
$subjects = [
    [
        'name' => 'Artificial Intelligence',
        'url' => ''
    ],
    [
        'name' => 'Neural Language',
        'url' => ''
    ],
    [
        'name' => 'C',
        'url' => 'sysllabusdb/c.php'
    ],
    [
        'name' => 'C++',
        'url' => ''
    ],
    [
        'name' => 'Java',
        'url' => ''
    ],
    [
        'name' => 'Networking',
        'url' => ''
    ],
    [
        'name' => 'DBMS',
        'url' => ''
    ],
    [
        'name' => 'Data Structure',
        'url' => ''
    ]
];

// Number of columns per row
$columnsPerRow = 4;
?>

<!-- Body1  -->
	<div class="container mt-5" style="min-height: 100vh;">
		<div class="row mt-5">
			<div class="col-md-6 mt-5">
				<h3>Syllabus</h3>
				<p>Syllabus uploaded by teachers and admins</p>
			</div>
			
			<div class="col-md-6">
				<div class="row g-2">
					<?php foreach ($subjects as $index => $subject): ?>
						<div class="col-6 col-lg-3">
							<div class="card h-100 p-3" style="min-height: 100px;">
								<div class="d-flex align-items-center justify-content-center h-100">
									<a href="<?php echo htmlspecialchars($subject['url']); ?>" 
									   class="text-decoration-none text-center">
										<?php echo htmlspecialchars($subject['name']); ?>
									</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>






	
	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>

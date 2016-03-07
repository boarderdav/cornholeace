<?php session_start();?>


<html>
<head>

</head>


<body>

<?php if ($_SESSION['data']): ?>
    <h1> Twitter session connected</h1>
    <h1><?php echo $_SESSION['userName'];?></h1>
    <img src='<?php echo $_SESSION['PROFILEIMAGE'];?>' width="200" height="200"/>
    <h4>Followers Count: <?php echo $_SESSION['FOLLOWERSCOUNT'];?></h4>
    <h1>Location: <?php echo $_SESSION['location'];?></h1>
    <h1><a href='?logout=true'><button>Logout Button</button></a></h1>

<?php else: ?>
    <h1> Twitter session not connected</h1>
    <h1><a href='<?php echo $_SESSION['LOGINURL'];?>'><button>Login with twitter </button></a></h1>
<?php endif ?>



</body>
</html>

<?php 
    if(isset($_SESSION['user_role'])){
        if($_SESSION['user_role'] == 'owner'){
            $navitems = array(
                array('manage_auctions', 'Manage Auctions'),
                array('manage_admins', 'Manage Admins'),
            );
        } elseif ($_SESSION['user_role'] == 'admin'){
            $navitems = array(
                array('manage_action', 'Manage Auction')
            );
        }
    } else (
        $navitems = array(
            array('login', 'Login'),
            array('register', 'Register'),
        )
    )
?>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <?php foreach ((array)$navitems as $navitem) { ?>
            <li class="nav-item">
                <a class="font-weight-bold nav-link text-light" href="index.php?page=<?= $navitem[0] ?>"><?= $navitem[1] ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
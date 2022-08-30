<?php $page = substr( $_SERVER['SCRIPT_NAME'],strrpos( $_SERVER['SCRIPT_NAME'],"/" )+1); ?>
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

 

  <li class="nav-item">
    <a class="nav-link collapsed" href="../index">
      <i class="bi bi-house-fill"></i>
      <span>Homepage</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link <?= $page == 'index.php' ? '' :  'collapsed'?>" href="index">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link <?= $page == 'users-profile.php' ? '' :  'collapsed'?>" href="users-profile">
      <i class="bi bi-person-lines-fill"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link <?= $page == 'deposit.php' ? '' :  'collapsed'?>" href="deposit">
      <i class="bi bi-box-arrow-down"></i>
      <span>Deposits</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link <?= $page == 'invest-plans.php' || $page == 'invest.php' ? '' :  'collapsed'?>" href="invest-plans">
      <i class="bi bi-gift-fill"></i>
      <span>Investment Packages</span>
    </a>
  </li><!-- End Dashboard Nav --> 
  <li class="nav-item">
    <a class="nav-link <?= $page == 'my-investments.php' ? '' :  'collapsed'?>" href="my-investments">
      <i class="bi bi-briefcase-fill"></i>
      <span>My Investments</span>
    </a>
  </li><!-- End Dashboard Nav --> 
  <li class="nav-item">
    <a class="nav-link <?= $page == 'withdrawals.php' ? '' :  'collapsed'?>" href="withdrawals">
      <i class="bi bi-box-arrow-up"></i>
      <span>Withdrawals</span>
    </a>
  </li><!-- End Dashboard Nav --> 
 
  <li class="nav-item">
  <form action="../codes/logout.php"method="POST">
    <button class="nav-link collapsed"style="border:none;width:100%"name="logout">
      <i class="bi bi-box-arrow-left"></i>
      <span>Log out</span>
   </button>
  </form>
  </li><!-- End Dashboard Nav -->


</ul>

</aside><!-- End Sidebar-->
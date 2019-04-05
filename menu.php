<div id='cssmenu' >
      <ul>
      
      <?php
	  $logtype=$_SESSION['cellu_type'];
	  ?>
        <li ><a href='inner.php'><span>Home</span></a></li>
        <?php
		if($logtype=='admin')
		{
			?>
            <li class='has-sub'><a href='#'><span>Category</span></a>
          <ul>
            <li><a href='categoryadd.php'><span>Add Category</span></a></li>
            <li><a href='categorylist.php'><span>List Category</span></a></li>
          </ul>
        </li>
            <li><a href='intruder_list.php'><span>Intruder List</span></a></li>
            <li><a href='block_list.php'><span>Blocked User</span></a></li>
        <li class='has-sub'><a href='#'><span>Book</span></a>
          <ul>
            <li><a href='bookadd.php'><span>Add Book</span></a></li>
            <li><a href='booklist.php'><span>List Book</span></a></li>
          </ul>
        </li>
        
        <li class='has-sub'><a href='#'><span>Login</span></a>
          <ul>
            <li><a href='createlogin.php'><span>Create Login</span></a></li>
             <li><a href='user_list.php'><span>User List</span></a></li>
          </ul>
        </li>
        
        <?php
		}
		?>
        
         <?php
		if($logtype=='1')
		{
			?>
            <li><a href='profile.php'><span>Profile</span></a></li>
            <li class='has-sub'><a href='#'><span>Current Project</span></a>
          <ul>
            <li><a href='crtprj_add.php'><span>Add</span></a></li>
            <li><a href='crtprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Finished Project</span></a>
          <ul>
            <li><a href='finishedprj_add.php'><span>Add</span></a></li>
            <li><a href='finishedprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Pending Project</span></a>
          <ul>
            <li><a href='pendprj_add.php'><span>Add</span></a></li>
            <li><a href='pendprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Correction</span></a>
          <ul>
            <li><a href='corrprj_add.php'><span>Add</span></a></li>
            <li><a href='corrprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li><a href='search.php'><span>Search</span></a></li>
        <?php
		}
		?>
         <?php
		if($logtype=='2')
		{
			?>
            <li><a href='profile.php'><span>Profile</span></a></li>
        <li class='has-sub'><a href='#'><span>Current Project</span></a>
          <ul>
            <li><a href='crtprj_add.php'><span>Add</span></a></li>
            <li><a href='crtprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Finished Project</span></a>
          <ul>
            <li><a href='fnprj_add.php'><span>Add</span></a></li>
            <li><a href='fnprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Pending Project</span></a>
          <ul>
            <li><a href='penprj_add.php'><span>Add</span></a></li>
            <li><a href='penprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Correction</span></a>
          <ul>
            <li><a href='corrprj_add.php'><span>Add</span></a></li>
            <li><a href='corrprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li><a href='search.php'><span>Search</span></a></li>
        <?php
		}
		?>
         <?php
		if($logtype=='3')
		{
			?>
            <li><a href='profile.php'><span>Profile</span></a></li>
       <li class='has-sub'><a href='#'><span>Current Project</span></a>
          <ul>
            <li><a href='crtprj_add.php'><span>Add</span></a></li>
            <li><a href='crtprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Finished Project</span></a>
          <ul>
            <li><a href='fnprj_add.php'><span>Add</span></a></li>
            <li><a href='fnprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Pending Project</span></a>
          <ul>
            <li><a href='penprj_add.php'><span>Add</span></a></li>
            <li><a href='penprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Correction</span></a>
          <ul>
            <li><a href='corrprj_add.php'><span>Add</span></a></li>
            <li><a href='corrprj_list.php'><span>List</span></a></li>
          </ul>
        </li>
        <li><a href='search.php'><span>Search</span></a></li>
        <?php
		}
		?>
      </ul>
    </div>
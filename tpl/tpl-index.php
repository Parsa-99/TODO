<?php 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?= SITE_TITLE ?></title>
  <link rel="stylesheet" href="assets/css/style1.css" />
  <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">

</head>
<body class="great">
<!-- partial:index.partial.html -->
<div id="page" class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down"></i><span class="username">John Doe </span><img src="assets/img/test3.jpeg" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
        <div class="title">|Folders|</div>
        <ul>
          <?php foreach ($folders as $folder): ?>
            <li style="color: #232f23;"> 
              <i class="fa fa-folder"></i><a class="tt" style="text-decoration: none;color:#232f23;" href="?folder_id =<?=$folder->id?>"><?=$folder->name?></a><?=""?>
              <a class="tt" style="margin-left: 40px;;text-decoration: none;color:#232f23;" href="?delete_folder =<?=$folder->id?>"><i class="fa fa-trash-o"></i></a>
            </li>
            <?php endforeach;?>
          <li class="active"> <i class="fa fa-folder"></i>Current Folder</li>
        </ul>
        <div>
          <input style="padding: 3px 5px; border-radius: 16px; border: 1px salmon;" type="text" id = "newFolderInput" placeholder="Add New Folder !"/></br></br>
          <button id="newFolderBtn" class="btn" >GO</button>
        </div>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Add New Task</div>
          <div class="button">Completed</div>
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
        </div>
      </div>
      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
            <li class="checked"><i class="fa fa-check-square-o"></i><span>Update team page</span>
              <div class="info">
                <div class="button green">In progress</div><span>Complete by 25/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
              <div class="info">
                <div class="button">Pending</div><span>Complete by 10/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Find a front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
        <div class="list">
          <div class="title">Tomorrow</div>
          <ul>
            <li><i class="fa fa-square-o"></i><span>Find front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="assets/js/script.js"></script>

</body>
</html>

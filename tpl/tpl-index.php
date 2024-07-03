<?php 
echo ".";
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
      <div style="padding: 6px 5px; border-radius: 13px;color:aliceblue; border: 1px salmon; font-size: 12px; font-weight: bold;background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #17693d 0%, #092756 100%);" class="searchbox">
        <div><i class="fa fa-search"></i>
          <input style="padding: 6px 5px; border-radius: 13px;color:aliceblue; border: 1px salmon; font-size: 12px; font-weight: bold;background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #17693d 0%, #092756 100%);" type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
        <div class="title">|Folders|</div>
        <ul class="folder-list">
          <?php foreach ($folders as $folder): ?>
            <li style="color: #232f23;"> 
              <i class="fa fa-folder"></i><a class="tt" style="text-decoration: none;color:#232f23;" href="?folder_id =<?=$folder->id?>"><?=$folder->name?></a><?=""?>
              <a class="tt" style="margin-left: 40px;;text-decoration: none;color:#232f23;" href="?delete_folder=<?=$folder->id?>"><i class="fa fa-trash-o"></i></a>
              <li class="active"><i class="fa fa-folder"></i>Current Folder</li>
            </li>
            <?php endforeach;?>
        </ul><hr style="margin-block-start: 29px; margin-block-end: 29px; border-width: 1px; margin-inline-end: 27px;">
        <div>
          <style>
            input::placeholder{
              border: none;
            color: aliceblue;
            }
          </style>
          <input style="padding: 14px 5px; border-radius: 13px;color:aliceblue; border: 1px salmon; font-size: 12px; font-weight: bold;background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #17693d 0%, #092756 100%);" class="addFI" type="text" id = "addFolderInput" placeholder="Add New Folder !"/></br></br>
          <button id="addFolderBtn" class="btn clickable" >GO</button>
        </div>
        
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Add New Task</div>
          <div class="button">Completed</div>
          <div class="button inverz"><i class="fa fa-trash-o" style="margin-top: 6px;"></i></div>
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
  <script>
    $(document).ready(function(){
      $("#addFolderBtn").click(function(event){
        var input = $('input#addFolderInput');
        $.ajax({
          url : "process/ajaxHandler.php",
          method : "post",
          data : {action : "addFolder" ,folderName : input.val()},
          success : function(response){
            if(response == '1'){
              
              $('<li style="color: #232f23;"> <i class="fa fa-folder"></i><a class="tt" style="text-decoration: none;color:#232f23;" href="?folder_id =<?=$folder->id?>">'+input.val()+'</a><a class="tt" style="margin-left: 40px;;text-decoration: none;color:#232f23;" href="?delete_folder=<?=$folder->id?>"><i class="fa fa-trash-o"></i></a> </li>').prependTo('ul.folder-list');
            }else{
              alert(response);
            }
          }
        });
      });
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>High-Five</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link href="../css/hf_design.css" rel="stylesheet">
   </head>
   <body >
      <div class="navbar fixed-top bg-white box-shadow py-0">
         <nav class="nav nav-underline">
            <div class="container">
               <div class="row">
                  <div class="col-xs-8 col-xs-offset-2">
                     <div class="input-group">
                        <div class="input-group-btn search-panel">
                           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width: auto; height: auto;">
                           <span id="search_concept" style="font-size: 15px">Search by</span> <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu" role="menu">
                              <div style="margin-left: 1em;">
                                 <li><a href="#Posts">Posts</a></li>
                                 <li><a href="#Groups">Groups</a></li>
                                 <li><a href="#Friends">Friends</a></li>
                                 <li>
                                    <hr>
                                 </li>
                                 <li><a href="#all">All</a></li>
                              </div>
                           </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">         
                        <form class="form-inline my-2 my-lg-0" style="float: right">
                           <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                           <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <nav class="navbar navbar-inverse  bg-white box-shadow py-0">
            <div class="container-fluid">
               <a class="nav-link" href="#">
               <object type="image/svg+xml" data="../images/svg/account.svg" height = 24px  width = 24px></object>
               </a>
               <a class="nav-link" href="#" data-toggle="modal" data-target="#message_menu">
               <object type="image/svg+xml" data="../images/svg/messages.svg" height = 24px  width = 24px></object>
               </a>
               <a class="nav-link" href="#">
               <object type="image/svg+xml" data="../images/svg/notifications.svg" height = 24px  width = 24px></object>
               </a>
               <a class="nav-link" href="#">
               <object type="image/svg+xml" data="../images/svg/settings.svg"height = 24px  width = 24px></object>
               </a> 
               <div class="logo">
                  <img src="../images/logo.png" alt="logo" height = 22px  width = 22px class="rounded-circle" style="margin-top:-0.5em; margin-left:0.5em">
               </div>
            </div>
         </nav>
      </div>
      <div class="modal" id="message_menu">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title"><strong>Messages2</strong></h5>
                  <button type="button" class="close" data-dismiss="message_menu">&times;</button>
               </div>
               <div class="modal-body">
                  <a href="#" data-toggle="modal"  data-target="#message_chat"
                     data-dismiss="modal" >
                     <div class = "message_view">
                        <div class = "row">
                           <div class = "col-0 comment_pic">
                              <img src="../images/friend_pics/orton.jpg" alt="logo" height = 30px width = 30px  class="rounded-circle">
                           </div>
                           <div class = "col-3">
                              <h5>
                                 <strong>Randy Orton</strong>
                              </h5>
                           </div>
                           <div class = "col">
                              <h5>I hope you burn in hell</h5>
                           </div>
                        </div>
                        <hr>
                     </div>
                  </a>
                  <a href=#>
                     <div class = "message_view">
                        <div class = "row">
                           <div class = "col-0 comment_pic">
                              <img src="../images/friend_pics/arab.jpg" alt="logo" height = 30px width = 30px class="rounded-circle">
                           </div>
                           <div class = "col-3">
                              <h5>
                                 <strong>Hamud bin Kharis</strong>
                              </h5>
                           </div>
                           <div class = "col">
                              <h5>Bhai dhai mujhay pasand bilkuy nai hai</h5>
                           </div>
                        </div>
                        <hr>
                     </div>
                  </a>
               </div>
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
      <div class="modal" id="message_chat">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <table>
                     <tr>
                        <td style="padding-right: 1em; ">
                           <img src="../images/friend_pics/orton.jpg" alt="logo" height = 60px width = 60px class="rounded-circle center-block modal-title">
                        </td>
                        <td>
                           <strong>Randy Orton</strong> 
                        </td>
                     </tr>
                  </table>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="friend_message">
                     <div class="row">
                        <div class="col-sm-1">
                           <img src="../images/friend_pics/orton.jpg" alt="logo" height = 45px width = 45px class="rounded-circle">
                        </div>
                        <div class="col" style="margin-left: 1em">
                           <div class="row">
                              <div class="col">
                                 <p class="group_post_font" style="margin-top: 0.5em;">Hello</p>
                              </div>
                           </div>
                           <div class="row" style="margin-top: -1em">
                              <div class="col post_timestamp">6/1/19 10:55 AM</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="friend_message">
                     <div class="row">
                        <div class="col-sm-1">
                           <img src="../images/friend_pics/orton.jpg" alt="logo" height = 45px width = 45px class="rounded-circle">
                        </div>
                        <div class="col" style="margin-left: 1em">
                           <div class="row">
                              <div class="col">
                                 <p class="group_post_font" style="margin-top: 0.5em">I hope you burn in hell</p>
                              </div>
                           </div>
                           <div class="row" style="margin-top: -1em">
                              <div class="col post_timestamp">6/1/19 10:55 AM</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="user_message">
                     <div class="row" style="float: right">
                        <div class="col">
                           <div class="row">
                              <div class="col">
                                 <p class="group_post_font">Why</p>
                              </div>
                           </div>
                           <div class="row" style="margin-top: -1em;">
                              <div class="col post_timestamp">6/1/19 10:56 AM</div>
                           </div>
                        </div>
                        <div class="col-sm-1 user_message_pic">
                           <img src="../images/letter.png" alt="logo" height = 45px class="rounded-circle" style="float:right">
                        </div>
                     </div>
                  </div>
                  <br>
                  <br> <br> <br>
                  <div>
                     <div class="row">
                        <div class = "col">
                           <textarea class="form-control" rows="1" id="post" style="width:18em; height:2em; margin-top:0.2em"></textarea>
                        </div>
                        <div class = "col">
                           <table>
                              <tr>
                                 <td>
                                    <div class="input-group-btn search-panel">
                                       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width: auto; height: auto; margin-top:1em;">
                                          <span id="search_concept" style="font-size: 15px">Add</span> <span class="caret"></span>
                                       </button>
                                       <form>
                                          <ul class="dropdown-menu" role="menu">
                                             <div style="margin-left: 1em;">
                                                <li><a href="#">Picture</a></li>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">File</a></li>
                                             </div>
                                          </ul>
                                       </form>
                                    </div>
                                 </td>
                                 <td>
                                    <input type="hidden" name="search_param" value="all" id="search_param">         
                                    <form class="form-inline my-2 my-lg-0" style="float: right">
                                       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Send</button>
                                    </form>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  </form>
                  <hr>
                  <div style="margin-left: 9em;">
                     <button type="button" class="btn btn-danger" data-toggle="modal"  data-target="#message_menu"
                        data-dismiss="modal">Go Back</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="container-fluid" style="margin-top: 3.2em">
         <div class="row">
            <div class="col-sm-0.5" style="margin-left: 0.5em; margin-right: 1em; margin-left: 1em; background-color: #eef7fe;border-right: 2px solid #bfd8e4; border-left: 2px solid #bfd8e4">
               <ul class="nav flex-column px-0 py-2">
                 
                  <h4 style="align-self: center; font-size: 18px; color: black; margin-top: 1em">Groups</h4>
                  <li class="nav-item" >
                     <a class="nav-link" href="#">
                        <table class="group_label">
                           <tr>
                              <td><img src = "../images/group_icons/ben10.png" height = 30px width = 30px class="rounded"></td>
                              <td>
                                 <h5>Ben 10 Lovers</h5>
                              </td>
                           </tr>
                        </table>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <table class="group_label">
                           <tr>
                              <td><img src = "../images/group_icons/cat.jpg" height = 30px width = 30px class="rounded"></td>
                              <td>
                                 <h5>Cat Hype Squad</h5>
                              </td>
                           </tr>
                        </table>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <table class="group_label">
                           <tr>
                              <td><img src = "../images/group_icons/dc.png" height = 30px width = 30px class="rounded"></td>
                              <td>
                                 <h5>DC Nigs onlyyyy</h5>
                              </td>
                           </tr>
                        </table>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <table class="group_label">
                           <tr>
                              <td><img src = "../images/group_icons/monkey.jpg" height =30px width = 30px class="rounded"></td>
                              <td>
                                 <h5>Oy it da Monks</h5>
                              </td>
                           </tr>
                        </table>
                     </a>
                  </li>
                  <li>
                     <hr style = "border: 1px solid antiquewhite; border-radius: 2px; width: auto;">
                  </li>
                  <h4 style="align-self: center; font-size: 18px; color: black;">Members</h4>
                  <li class="nav-item">
                     <a class="nav-link" href="#">

                        <div class="row">
                              <div class="col-sm-1">
                                    <img src="../images/friend_pics/orton.jpg" alt="logo" height = 30px width = 30px class="rounded-circle">
                              </div>
                              <div class="col" >
                                 <div class="row group_label">
                                       <div class="col" ><h5>Randy Orton</h5></div>
                                 </div>
                                 <div class="row" style="margin-top: -1em; margin-left: 1em">
                                       <object type="image/svg+xml" data="../images/svg/online.png" height = 10px  width = 7px style="margin-top:0.4em;"></object>
                                       <h5 style="font-size: 12px; margin-left: 0.4em; margin-top: 0.3em">Online</h5>
                                    </div>
                              </div>
                           </div>
                     </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
   
                           <div class="row">
                                 <div class="col-sm-1">
                                       <img src="../images/friend_pics/sigma.jpg" alt="logo" height = 30px width = 30px class="rounded-circle">
                                 </div>
                                 <div class="col" >
                                    <div class="row group_label">
                                          <div class="col" ><h5>Sigma</h5></div>
                                    </div>
                                    <div class="row" style="margin-top: -1em; margin-left: 1em">
                                          <object type="image/svg+xml" data="../images/svg/online.png" height = 10px  width = 7px style="margin-top:0.4em;"></object>
                                          <h5 style="font-size: 12px; margin-left: 0.4em; margin-top: 0.3em">Online</h5>
                                       </div>
                                 </div>
                              </div>
                        </a>
                     </li>
                     <li class="nav-item">
                           <a class="nav-link" href="#">
      
                              <div class="row">
                                    <div class="col-sm-1">
                                          <img src="../images/friend_pics/zambino.jpg" alt="logo" height = 30px width = 30px class="rounded-circle">
                                    </div>
                                    <div class="col" >
                                       <div class="row group_label">
                                             <div class="col" ><h5>Zambino</h5></div>
                                       </div>
                                    </div>
                                 </div>
                           </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="#">
         
                                 <div class="row">
                                       <div class="col-sm-1">
                                             <img src="../images/friend_pics/gandhi.jpg" alt="logo" height = 30px width = 30px class="rounded-circle">
                                       </div>
                                       <div class="col" >
                                          <div class="row group_label">
                                                <div class="col" ><h5>Mahatma Gandhi</h5></div>
                                          </div>
                                       </div>
                                    </div>
                              </a>
                           </li>
                  <li>
                     <hr style = "border: 1px solid antiquewhite; border-radius: 2px; width: auto;">
                  </li>
               </ul>
            </div>
            <div class="col" style="background-color: #f9f9f9; border-left: 2px solid #bfd8e4">
               <div class=user_post>
                  <textarea class="form-control" rows="1" id="post" placeholder="Post a message" style="height: 3em; border: 1px solid #46B1FC;"></textarea>
                  <div class = "post_buttons" style="float: right">
                     <button type="button" class="btn btn-secondary btn-md dropdown-toggle" data-toggle="dropdown">
                     <span id="search_concept">Add attachment</span> <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu" role="menu">
                        <div style="margin-left: 1em;">
                           <li><a href="#">Picture</a></li>
                           <li><a href="#">Video</a></li>
                           <li><a href="#">File</a></li>
                        </div>
                     </ul>
                     <button type="submit" class="btn btn-primary btn-md">
                     Post
                     </button>
                  </div>
               </div>
               <div class="group_posts_holder">
                  <div style="margin-top: 1em;">
                     <div class="row">
                        <div class="col-sm-1">
                           <img src="../images/letter.png" alt="logo" height = 45px class="rounded-circle group_friend_icon">
                        </div>
                        <div class="col" style="margin-left:3em;">
                           <div class="row">
                              <div class="col-sm-0">
                                 <strong>Zbrm</strong>
                              </div>
                              <div class="col post_timestamp">
                                 6/1/19 7:55 AM
                              </div>
                           </div>
                           <div class="row">
                              <p class="group_post_font">Watched Ben 10 last night. Was awesome. Big Chill is best alien.</p>
                           </div>
                           <div class="row post_options">
                              <div class="col-sm-0.5">
                                 <a href="#reply" data-toggle="collapse">Reply</a>
                                 <div id="reply" class="collapse">
                                    <textarea class="form-control" rows="1" id="post" style="width:30em; height:2em; margin-top:0.2em"></textarea>
                                    <div class = "post_buttons">
                                         <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <span id="search_concept">Add attachment</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                               <div style="margin-left: 1em;">
                                                  <li><a href="#">Picture</a></li>
                                                  <li><a href="#">Video</a></li>
                                                  <li><a href="#">File</a></li>
                                               </div>
                                            </ul>
                                       <button type="submit" class="btn btn-primary btn-sm">
                                       Post
                                       </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col">
                                 <a href="#comments" data-toggle="collapse">View comments</a>
                                 <div id="comments" class="collapse">
                                    <div class="row">
                                       <div class="col-sm-1">
                                          <img src="../images/friend_pics/zambino.jpg" alt="logo" height = 45px width = 45px class="rounded-circle group_friend_icon">
                                       </div>
                                       <div class="col" style="margin-left: 4em">
                                          <div class="row">
                                             <div class="col-sm-0">
                                                <strong>Zambino</strong>
                                             </div>
                                             <div class="col post_timestamp">
                                                6/1/19 10:56 AM
                                             </div>
                                          </div>
                                          <div class="row">
                                             <p class="group_post_font">Dude get a life</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-1">
                                          <img src="../images/friend_pics/orton.jpg"" alt="logo" height = 45px width = 45px class="rounded-circle group_friend_icon">
                                       </div>
                                       <div class="col" style="margin-left: 4em">
                                          <div class="row">
                                             <div class="col-sm-0">
                                                <strong>Randy Orton</strong>
                                             </div>
                                             <div class="col post_timestamp">
                                                6/1/19 11:09 AM
                                             </div>
                                          </div>
                                          <div class="row">
                                             <p class="group_post_font">Hahaha you're so lame. Heatblast is sooo much cooler</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr style="background-color: #d0e2eb">
                  </div>
                  <div>
                     <div class="row">
                        <div class="col-sm-1">
                           <img src="../images//friend_pics/zambino.jpg" alt="logo" height = 45px width = 45px class="rounded-circle group_friend_icon">
                        </div>
                        <div class="col" style="margin-left:2em;">
                           <div class="row">
                              <div class="col-sm-0">
                                 <strong>Zambino</strong>
                              </div>
                              <div class="col post_timestamp">
                                 6/1/19 1:30 PM
                              </div>
                           </div>
                           <div class="row">
                              <p class="group_post_font">Check out this wallpaper</p>
                           </div>
                           <div class="row">
                              <img src="../images/posts/ben10_wallpaper.jpg">
                           </div>
                           <div class="row post_options">
                                 <div class="col-sm-0.5">
                                    <a href="#reply" data-toggle="collapse">Reply</a>
                                    <div id="reply" class="collapse">
                                       <textarea class="form-control" rows="1" id="post" style="width:18em; height:2em; margin-top:0.2em"></textarea>
                                       <div class = "post_buttons">
                                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                               <span id="search_concept">Add attachment</span> <span class="caret"></span>
                                               </button>
                                               <ul class="dropdown-menu" role="menu">
                                                  <div style="margin-left: 1em;">
                                                     <li><a href="#">Picture</a></li>
                                                     <li><a href="#">Video</a></li>
                                                     <li><a href="#">File</a></li>
                                                  </div>
                                               </ul>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                          Post
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col">
                                    <a href="#" data-toggle="collapse">View comments</a>
                               
                                 </div>
                              </div>
                        </div>
                     </div>
                     <hr style="background-color: #d0e2eb">
                  </div>
                  <div>
                     <div class="row">
                        <div class="col-sm-1">
                           <img src="../images/friend_pics/gandhi.jpg" alt="logo" height = 45px width = 45px class="rounded-circle group_friend_icon">
                        </div>
                        <div class="col" style="margin-left:4em;">
                           <div class="row">
                              <div class="col-sm-0">
                                 <strong>Mahatma Gandhi</strong>
                              </div>
                              <div class="col post_timestamp">
                                 6/1/19 11:55 PM
                              </div>
                           </div>
                           <div class="row">
                              <p class="group_post_font">Dudes this so awesommmeee :O :)</p>
                           </div>
                           <div class="row">
                              <iframe width="420" height="315"
                                 src="https://www.youtube.com/embed/tgbNymZ7vqY">
                              </iframe>
                           </div>
                           <div class="row post_options">
                                 <div class="col-sm-0.5">
                                    <a href="#reply" data-toggle="collapse">Reply</a>
                                    <div id="reply" class="collapse">
                                       <textarea class="form-control" rows="1" id="post" style="width:18em; height:2em; margin-top:0.2em"></textarea>
                                       <div class = "post_buttons">
                                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                               <span id="search_concept">Add attachment</span> <span class="caret"></span>
                                               </button>
                                               <ul class="dropdown-menu" role="menu">
                                                  <div style="margin-left: 1em;">
                                                     <li><a href="#">Picture</a></li>
                                                     <li><a href="#">Video</a></li>
                                                     <li><a href="#">File</a></li>
                                                  </div>
                                               </ul>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                          Post
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col">
                                    <a href="#" data-toggle="collapse">View comments</a>
                               
                                 </div>
                              </div>
                        </div>
                     </div>
                     <hr style="background-color: #d0e2eb">
                  </div>
               </div>
               <br>
               <br>
            </div>
            <div class="col-sm-0.5" style="background-color: #eef7fe; border-left: 2px solid #bfd8e4; border-right: 2px solid #bfd8e4;">
               <ul class="nav flex-column px-0 py-2">
                 
                  <h4 style="align-self: center; font-size: 18px; color: black; margin-top: 1em"><strong> <i>#Groups for you</i></strong></h4>

                     <li class="nav-item">
                           <a class="nav-link" href="#">
                           <div class="row" style="border-top: 2px solid #73aac4; border-bottom: 2px solid #73aac4; padding-top: 3px">
                                 <div class="col-sm-1">
                                       <img src = "../images/group_icons/code.png" height = 30px width = 30px class="rounded">
                                 </div>
                                 <div class="col" >
                                    <div class="row group_label">
                                          <div class="col" style="margin-left:0.5em"><h5>Degenerate Coders</h5></div>
                                    </div>
                                    <div class="row" style="margin-top: -1em; margin-left: 1.4em">
                                          <h5><object type="image/svg+xml" data="../images/svg/info.svg" height = 14px  width = 14px></object></h5>
                                          <h5><object type="image/svg+xml" data="../images/svg/add.svg" height = 12px  width = 12px style="margin-left:0.4em"></object></h5>
                                       </div>
                                 </div>
                              </div>
                              </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">
                        <div class="row" style="border-top: 2px solid #73aac4; border-bottom: 2px solid #73aac4; padding-top: 3px">
                              <div class="col-sm-1">
                                    <img src = "../images/group_icons/biryani.jpg" height = 30px width = 30px class="rounded">
                              </div>
                              <div class="col" >
                                 <div class="row group_label">
                                       <div class="col" style="margin-left:0.5em"><h5>Biryani Conniseurs</h5></div>
                                 </div>
                                 <div class="row" style="margin-top: -1em; margin-left: 1.4em">
                                       <h5><object type="image/svg+xml" data="../images/svg/info.svg" height = 14px  width = 14px></object></h5>
                                       <h5><object type="image/svg+xml" data="../images/svg/add.svg" height = 12px  width = 12px style="margin-left:0.4em"></object></h5>
                                    </div>
                              </div>
                           </div>
                  </a>
               </li>
               <li class="nav-item">
                     <a class="nav-link" href="#">
                           <div class="row" style="border-top: 2px solid #73aac4; border-bottom: 2px solid #73aac4; padding-top: 3px;">
                                 <div class="col-sm-1">
                                       <img src = "../images/group_icons/gamer.png" height = 30px width = 30px class="rounded">
                                 </div>
                                 <div class="col" >
                                    <div class="row group_label">
                                          <div class="col" style="margin-left:0.5em"><h5>Gamer Nation</h5></div>
                                    </div>
                                    <div class="row" style="margin-top: -1em; margin-left: 1.4em">
                                          <h5><object type="image/svg+xml" data="../images/svg/info.svg" height = 14px  width = 14px></object></h5>
                                          <h5><object type="image/svg+xml" data="../images/svg/add.svg" height = 12px  width = 12px style="margin-left:0.4em"></object></h5>
                                       </div>
                                 </div>
                              </div>
                     </a>
               </li>
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>
<!-- sidebar -->
<nav id="sidebar">
               <div class="sidebar_blog_1 ">
                  <div class="sidebar-header ">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info ">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/dilly.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>oumshouse</h6>
                           <p><span class="online_animation"></span> connecter</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Boutique</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{Route('Boutique.index')}}"> <span>liste des boutiques</span></a>
                           </li>
                           <li>
                              <a href="{{Route('Boutique.create')}}"> <span>Ajouter boutique</span></a>
                           </li>
                        </ul>
                     </li>

                  </ul>
               </div>
            </nav>
<!-- end sidebar -->
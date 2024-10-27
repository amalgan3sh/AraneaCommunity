<?= $this->include('header') ?>

      </div>      <div>
        <div class="position-relative">
        </div>
        <div class="content-inner " id="page_layout">
        <?php
                // Set the profile picture path. If 'profile_picture' is not set or is 'none', use the default image.
                $coverPic = (!empty($user['cover_photo']) && $user['cover_photo'] != 'none') ? $user['cover_photo'] : 'default_dp.jpg'; 
         ?>
<div class="container position-relative p-0"  data-bs-toggle="modal" data-bs-target="#cover-picture-modal">
   <div class="header-cover-img" style="background-image: url(<?= base_url('uploads/' . $coverPic) ?>); background-size: cover; background-repeat: no-repeat;"></div> 
</div>
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card profile-box">
            <div class="card-body">
               <div class="row align-items-center item-header-content">
                  <div class="col-lg-4 profile-left">
                     <ul class="d-flex align-items-center justify-content-center gap-3 list-inline p-0 m-0 mb-3 flex-wrap">
                        <li class="d-flex align-items-center gap-1">
                           <img src="../assets/images/gamipress/coin.svg" class="img-fluid avatar-24" alt="coin" loading="lazy">
                           <h6 class="font-size-14 fw-semibold">6765 Coins</h6>
                        </li>
                        <li class="d-flex align-items-center gap-1">
                           <img src="../assets/images/gamipress/credit.svg" class="img-fluid avatar-24" alt="credit" loading="lazy">
                           <h6 class="font-size-14 fw-semibold">7180 Credits</h6>
                        </li>
                        <li class="d-flex align-items-center gap-1">
                           <img src="../assets/images/gamipress/gems.svg" class="img-fluid avatar-24" alt="coin" loading="lazy">
                           <h6 class="font-size-14 fw-semibold">100 Gems</h6>
                        </li>
                     </ul>
                     <div class="social-links">
                           <ul class="social-data-block d-flex align-items-center justify-content-center list-inline p-0 m-0">
                              <li class="text-center pe-3">
                                 <a href="#"><img src="../assets/images/icon/08.png" class="img-fluid rounded" alt="facebook" loading="lazy"></a>
                              </li>
                              <li class="text-center pe-3">
                                 <a href="#"><img src="../assets/images/icon/09.png" class="img-fluid rounded" alt="Twitter" loading="lazy"></a>
                              </li>
                              <li class="text-center pe-3">
                                 <a href="#"><img src="../assets/images/icon/10.png" class="img-fluid rounded" alt="Instagram" loading="lazy"></a>
                              </li>
                              <li class="text-center pe-3">
                                 <a href="#"><img src="../assets/images/icon/11.png" class="img-fluid rounded" alt="Google plus" loading="lazy"></a>
                              </li>
                              <li class="text-center pe-3">
                                 <a href="#"><img src="../assets/images/icon/12.png" class="img-fluid rounded" alt="You tube" loading="lazy"></a>
                              </li>
                              <li class="text-center md-pe-3 pe-0">
                                 <a href="#"><img src="../assets/images/icon/13.png" class="img-fluid rounded" alt="linkedin" loading="lazy"></a>
                              </li>
                           </ul>
                        </div>
                  </div>
                  <div class="col-lg-4 text-center profile-center">
                     <div class="header-avatar position-relative d-inline-block"  data-bs-toggle="modal" data-bs-target="#profile-picture-modal">
                        <span class="change-profile-image bg-primary rounded-pill">
                           <span class="material-symbols-outlined text-white font-size-16">photo_camera</span>
                        </span>
                        <?php
                // Set the profile picture path. If 'profile_picture' is not set or is 'none', use the default image.
                $profilePic = (!empty($user['profile_picture']) && $user['profile_picture'] != 'none') ? $user['profile_picture'] : 'default_dp.jpg'; 
              ?>
                        <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="Media" style="width:-webkit-fill-available" class="avatar-150 border border-4 border-white rounded-3">
                        <span class="badge bg-success fw-500 letter-spacing-1 chat-status">online</span>                    
                     </div>
                     <h5 class="d-flex align-items-center justify-content-center gap-1 mb-2"><?= $user['first_name'] ?> <span class="badge  bg-primary rounded-pill material-symbols-outlined font-size-14 p-0">done</span></h5>
                     <ul class="d-flex align-items-center justify-content-center gap-3 list-inline p-0 m-0">
                        <li class="d-flex align-items-center gap-1">
                           <h6 class="material-symbols-outlined font-size-14">location_on</h6>
                           <span class="font-size-14 text-uppercase fw-500">lyON</span>
                        </li>
                        <li class="d-flex align-items-center gap-1">
                           <h6 class="material-symbols-outlined font-size-14">globe_asia</h6>
                           <a href="https://smartinvestmentoff.com/" class="font-size-14 fw-500 text-body"><?= $user['email'] ?>/</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-4 profile-right">
                     <ul class="user-meta list-inline p-0 d-flex align-items-center justify-content-center">
                        <li><h5>0</h5>Posts</li>
                        <li><h5>0</h5>Comments</li>
                        <li><h5>82.6K</h5>Views</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body p-0">
               <div class="user-tabing item-list-tabs">
                  <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0 rounded">
                     <li class="nav-item col-12 col-sm-3">
                        <a class="nav-link active d-flex flex-md-column align-items-center flex-row justify-content-center gap-2" href="#pills-timeline-tab" data-bs-toggle="pill" data-bs-target="#timeline" role="button">
                           <span class="icon rounded-3"><span class="material-symbols-outlined">calendar_month</span></span>
                           <p class="mb-0 mt-0 mt-md-3">Timeline</p>
                        </a>
                     </li>
                     <li class="nav-item col-12 col-sm-3">
                        <a class="nav-link d-flex flex-md-column align-items-center flex-row justify-content-center gap-2" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">
                           <span class="icon rounded-3"><span class="material-symbols-outlined">person</span></span>
                           <p class="mb-0 mt-0 mt-md-3">About</p>
                        </a>
                     </li>
                     <li class="nav-item col-12 col-sm-3">
                        <a class="nav-link d-flex flex-md-column align-items-center flex-row justify-content-center gap-2" href="#pills-friends-tab" data-bs-toggle="pill" data-bs-target="#friends" role="button">
                           <span class="icon rounded-3"><span class="material-symbols-outlined">group</span></span>
                           <p class="mb-0 mt-0 mt-md-3">Friends</p>
                        </a>
                     </li>
                     <li class="nav-item col-12 col-sm-3">
                        <a class="nav-link d-flex flex-md-column align-items-center flex-row justify-content-center gap-2" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">
                           <span class="icon rounded-3"><span class="material-symbols-outlined">image</span></span>
                           <p class="mb-0 mt-0 mt-md-3">Photos</p>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="card">
                           <div class="card-body">
                              <a href="#" class="d-inline-flex align-items-center"><span class="badge badge-pill bg-primary font-weight-normal me-1 material-symbols-outlined md-14">grade</span><span>27 Items for you</span></a>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between border-bottom">
                              <div class="header-title">
                                 <h4 class="card-title">Life Event</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="../assets/images/page-img/07.jpg" alt="gallary-image" class="img-fluid rounded" loading="lazy"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle material-symbols-outlined text-white">
                                             local_mall
                                          </div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Started New Job at Apple</h5>
                                          <p>January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="../assets/images/page-img/06.jpg" alt="gallary-image" class="img-fluid rounded" loading="lazy"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle material-symbols-outlined text-white">
                                             local_mall
                                          </div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Freelance Photographer</h5>
                                          <p class="mb-0">January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fixed-suggestion mb-4">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between border-bottom">
                              <div class="header-title">
                                 <h4 class="card-title">Photos</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g1.jpg">
                                    <img src="../assets/images/page-img/g1.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g2.jpg">
                                    <img src="../assets/images/page-img/g2.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g3.jpg">
                                    <img src="../assets/images/page-img/g3.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g4.jpg">
                                    <img src="../assets/images/page-img/g4.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g5.jpg">
                                    <img src="../assets/images/page-img/g5.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g6.jpg">
                                    <img src="../assets/images/page-img/g6.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g7.jpg">
                                    <img src="../assets/images/page-img/g7.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g8.jpg">
                                    <img src="../assets/images/page-img/g8.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                                 <li class="">
                                    <a data-fslightbox="gallery" href="../assets/images/page-img/g9.jpg">
                                    <img src="../assets/images/page-img/g9.jpg" class="img-fluid" alt="photo-profile" loading="lazy">
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between border-bottom">
                              <div class="header-title">
                                 <h4 class="card-title">Friends</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row row-cols-xl-3 row-cols-md-2 row-cols-2">
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/05.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Anna Rexia</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Tara Zona</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Polly Tech</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/08.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Bill Emia</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/09.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Moe Fugga</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/10.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Hal Appeno </h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Zack Lee</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Terry Aki</h6>
                                 </div>
                                 <div class="col mt-2 text-center">
                                    <a href="#"><img src="../assets/images/user/05.jpg" alt="gallary-image" loading="lazy" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Greta Life</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="row">
                           <div class="col-sm-12">
                              <div id="post-modal-data" class="card card-block card-stretch card-height create-post-modal">
                                 <div class="card-header d-flex justify-content-between border-bottom">
                                    <div class="header-title">
                                       <h5 class="card-title">Add a Post</h5>
                                    </div>
                                    <div class="dropdown">
                                       <div class="lh-1" id="post-option" data-bs-toggle="dropdown">
                                          <span class="material-symbols-outlined">
                                             more_horiz
                                          </span>
                                       </div>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live
                                             Video</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">GIF</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play
                                             with Friend</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <div class="mb-5" data-bs-toggle="modal" data-bs-target="#post-modal">
                                       <form class="post-text w-100" action="javascript:void();">
                                          <input type="text" class="form-control rounded px-0"
                                             placeholder="Write And Share Your Post With Your Friends..." style="border:none;">
                                       </form>
                                    </div>
                                 </div>
                                 <div class="card-body bg-primary-subtle rounded-bottom-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                       <div class="create-post-data">
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-4">
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                                      fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M11.5334 1.3761C12.3751 1.7111 12.6326 2.87776 12.9767 3.25276C13.3209 3.62776 13.8134 3.75526 14.0859 3.75526C15.5342 3.75526 16.7084 4.92943 16.7084 6.37693V11.2061C16.7084 13.1478 15.1334 14.7228 13.1917 14.7228H4.80841C2.86591 14.7228 1.29175 13.1478 1.29175 11.2061V6.37693C1.29175 4.92943 2.46591 3.75526 3.91425 3.75526C4.18591 3.75526 4.67841 3.62776 5.02341 3.25276C5.36758 2.87776 5.62425 1.7111 6.46591 1.3761C7.30841 1.0411 10.6917 1.0411 11.5334 1.3761Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path d="M13.5794 5.91667H13.5869" stroke="currentColor" stroke-width="2"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M11.6489 8.94C11.6489 7.47667 10.4631 6.29083 8.99975 6.29083C7.53642 6.29083 6.35059 7.47667 6.35059 8.94C6.35059 10.4033 7.53642 11.5892 8.99975 11.5892C10.4631 11.5892 11.6489 10.4033 11.6489 8.94Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                                      fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M7.23043 11.6718C4.02709 11.6718 1.29126 12.156 1.29126 14.096C1.29126 16.036 4.01043 16.5377 7.23043 16.5377C10.4346 16.5377 13.1696 16.0527 13.1696 14.1135C13.1696 12.1743 10.4513 11.6718 7.23043 11.6718Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M7.23042 8.90493C9.33292 8.90493 11.0371 7.20076 11.0371 5.09826C11.0371 2.99576 9.33292 1.2916 7.23042 1.2916C5.12875 1.2916 3.42459 2.99576 3.42459 5.09826C3.41709 7.19326 5.10875 8.89743 7.20459 8.90493H7.23042Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path d="M15.0031 6.22427V9.56594" stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M16.7079 7.895H13.2996" stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18"
                                                      fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M9.08341 7.75041C9.08341 6.59935 8.15072 5.66666 7.0005 5.66666C5.84944 5.66666 4.91675 6.59935 4.91675 7.75041C4.91675 8.90063 5.84944 9.83332 7.0005 9.83332C8.15072 9.83332 9.08341 8.90063 9.08341 7.75041Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M6.99959 16.5C6.00086 16.5 0.75 12.2486 0.75 7.80274C0.75 4.3222 3.54758 1.5 6.99959 1.5C10.4516 1.5 13.25 4.3222 13.25 7.80274C13.25 12.2486 7.99832 16.5 6.99959 16.5Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div>
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-4">
                                             <li>
                                                <a href="javascript:void(0);" class="text-body fw-medium">
                                                   Discard
                                                </a>
                                             </li>
                                             <li>
                                                <button type="button" class="btn btn-primary px-4">Post</button>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                             <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                <span class="material-symbols-outlined">close</span>
                                             </a>
                                          </div>
                                          <div class="modal-body">
                                             <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <form class="post-text ms-3 w-100" method="post" action="<?= base_url('post/create_post') ?>"  enctype="multipart/form-data">
                                                   <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                      <li class="col-md-6 mb-3">
                                                         <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                            <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                               <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                  add_a_photo
                                                               </span>
                                                               Photo/Video

                                                            </a>
                                                            <input type="file" name="media" accept="image/*,video/*">
                                                         </div>
                                                      </li> 
                                                   </ul>
                                                   <input type="text" name="content" class="form-control rounded" placeholder="Write something here..." style="border:none;" >
                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                                </form>
                                             </div>
                                             <hr>
                                             <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            add_a_photo
                                                         </span>
                                                         Photo/Video
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            group
                                                         </span>
                                                         Tag Friend
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            sentiment_satisfied
                                                         </span>
                                                         Feeling/Activity
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            location_on
                                                         </span>
                                                         Check in
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            live_tv
                                                         </span>
                                                         Live Video
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            gif_box
                                                         </span>
                                                         GIF
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            celebration
                                                         </span>
                                                         Watch Party
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            sports_esports
                                                         </span>
                                                         Play with Friends
                                                      </a>
                                                   </div>
                                                </li>
                                             </ul>
                                             <hr>
                                             <!-- <div class="other-option">
                                                <div class="d-flex align-items-center justify-content-between">
                                                   <div class="d-flex align-items-center">
                                                      <div class="user-img me-3">
                                                         <img src="../assets/images/user/1.jpg" alt="userimg"
                                                            class="avatar-60 rounded-circle img-fluid">
                                                      </div>
                                                      <h6>Your Story</h6>
                                                   </div>
                                                   <div class="card-post-toolbar">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="button">
                                                            <span class="btn btn-primary">Friend</span>
                                                         </span>
                                                         <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     save
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Public</h6>
                                                                     <p class="mb-0">Anyone on or off Facebook</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     cancel
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Friends</h6>
                                                                     <p class="mb-0">Your Friend on facebook</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     person_remove
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Friends except</h6>
                                                                     <p class="mb-0">Don't show to some friends</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     notifications
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Only Me</h6>
                                                                     <p class="mb-0">Only me</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div> -->
                                             <!-- <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <!-- ============= modal to update profile picture -->
                                 <div class="modal fade" id="profile-picture-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="post-modalLabel">Update Profile Picture</h5>
                                             <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                <span class="material-symbols-outlined">close</span>
                                             </a>
                                          </div>
                                          <div class="modal-body">
                                             <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <form class="post-text ms-3 w-100" method="post" action="<?= base_url('/update_profile_pic') ?>"  enctype="multipart/form-data">
                                                   <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                      <li class="col-md-6 mb-3">
                                                         <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                            <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                               <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                  add_a_photo
                                                               </span>
                                                               Photo/Video

                                                            </a>
                                                            <input type="file" name="profile_pic" accept="image/*,video/*">
                                                         </div>
                                                      </li> 
                                                   </ul>
                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                                </form>
                                             </div>
                                             <hr>
                                             <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            add_a_photo
                                                         </span>
                                                         Photo/Video
                                                      </a>
                                                   </div>
                                                </li>
                                             
                                             </ul>
                                             <hr>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <!-- modal to update profile picture end -->

                                 
                                 <!-- ============= modal to update cover picture -->
                                 <div class="modal fade" id="cover-picture-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="post-modalLabel">Update Cover Picture</h5>
                                             <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                <span class="material-symbols-outlined">close</span>
                                             </a>
                                          </div>
                                          <div class="modal-body">
                                             <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <form class="post-text ms-3 w-100" method="post" action="<?= base_url('/update_cover_pic') ?>"  enctype="multipart/form-data">
                                                   <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                      <li class="col-md-6 mb-3">
                                                         <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                            <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                               <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                  add_a_photo
                                                               </span>
                                                               Photo/Video

                                                            </a>
                                                            <input type="file" name="profile_pic" accept="image/*,video/*">
                                                         </div>
                                                      </li> 
                                                   </ul>
                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                                </form>
                                             </div>
                                             <hr>
                                             <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            add_a_photo
                                                         </span>
                                                         Photo/Video
                                                      </a>
                                                   </div>
                                                </li>
                                             
                                             </ul>
                                             <hr>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <!-- modal to update cover picture end -->


                              </div>
                           </div>
                           <?php foreach ($posts as $post): ?>

                              <?php
                // Set the profile picture path. If 'profile_picture' is not set or is 'none', use the default image.
                $profilePic = (!empty($post['profile_picture']) && $post['profile_picture'] != 'none') ? $post['profile_picture'] : 'default_dp.jpg'; 
              ?>

               <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

               <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="<?= base_url('uploads/' . $profilePic) ?>"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block"><?= esc($post['username']); ?></h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">posted an
                                                      update</span>
                                                   <p class="mb-0"><?= date('F d, Y H:i', strtotime($post['created_at'])); ?></p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0"><?= esc($post['content']); ?></p>
                                       <!-- <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                                          <li>
                                             <a href="javascript:void(0);">#friends</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#party</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#birthday</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#together</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#celebration</a>
                                          </li>
                                       </ul> -->
                                    </div>
                                    
                                    <div class="user-post mt-4">
                                    <?php
                                    // Extract the file extension
                                    $fileExtension = pathinfo($post['media_path'], PATHINFO_EXTENSION);

                                    // List of common video file extensions
                                    $videoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'webm', 'flv'];
                                    if($post['media_path']){
                                    // Check if the file extension is in the list of video extensions
                                    if (in_array(strtolower($fileExtension), $videoExtensions)) {
                                       // It's a video
                                       ?>
                                       <video controls style="width:-webkit-fill-available">
                                          <source src="<?= base_url('uploads/' . $post['media_path']) ?>" type="video/mp4">
                                          Your browser does not support the video tag.
                                       </video>
                                       <?php
                                    } else {
                                       // It's not a video (assuming it's an image or other type of file)
                                       ?>
                                       <!-- <img src="<?= base_url('uploads/' . $post['media_path']) ?>" alt="Media" style="width:-webkit-fill-available"> -->
                                       <a data-fslightbox="gallery" href="<?= base_url('uploads/' . $post['media_path']) ?>" class="rounded">
                                          <img src="<?= base_url('uploads/' . $post['media_path']) ?>" alt="post-image" class="img-fluid rounded w-100"
                                             loading="lazy">
                                       </a>
                                       <?php
                                    }  }
                                    ?>
                                       
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle like-btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button" data-post-id="<?= $post['id']; ?>">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium" id="like-count-<?= $post['id']; ?>"><?= $post["like_count"] ?> Like(s)</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#comment-section-<?= $post['id'] ?>" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium"><?= count($post["comments"]) ?> Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium"> 0 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="comment-section-<?= $post['id'] ?>">
                                          <ul class="list-inline m-o p-0 comment-list"  id="comment-ul-<?= $post['id'] ?>">
                                             <?php
                                                foreach($post["comments"] as $comment){
                $profilePic = (!empty($comment['comment_profile_picture']) && $comment['comment_profile_picture'] != 'none') ? $comment['comment_profile_picture'] : 'default_dp.jpg'; 
                                                   
                                                   ?>
                                             <li class="mb-3">
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0"><?= $comment["comment_username"] ?></h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <spna class="fw-medium small text-capitalize"><?= date('F d, Y H:i', strtotime($comment['comment_created_at'])); ?></spna>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                      <?= $comment["comment_content"] ?>
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse1" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse1">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post1</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <?php    }
                                             ?>
                                             
                                          </ul>
                                          <?php
                $profilePic = (!empty($user['profile_picture']) && $user['profile_picture'] != 'none') ? $user['profile_picture'] : 'default_dp.jpg'; 

                                          ?>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                      <input type="text" class="form-control" placeholder="Write a Comment..." id="comment-input-<?= $post['id'] ?>">
                                                      <button type="button" class="btn btn-primary font-size-12 text-capitalize px-5 submit-comment-btn" data-post-id="<?= $post['id']; ?>">post</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


               <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
   
                           <?php endforeach; ?>
                           <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="../assets/images/user/01.jpg"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block">Anna Sthesia</h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">posted an
                                                      update</span>
                                                   <p class="mb-0">2 minutes ago</p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0">"Energy, the tangible expression of pure thought, propels intentions into
                                          powerful actions, bridging the gap between
                                          mind and manifestation."</p>
                                       <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                                          <li>
                                             <a href="javascript:void(0);">#friends</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#party</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#birthday</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#together</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#celebration</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="user-post mt-4">
                                       <a data-fslightbox="gallery" href="../assets/images/page-img/fun.jpg" class="rounded">
                                          <img src="../assets/images/page-img/fun.jpg" alt="post-image" class="img-fluid rounded w-100"
                                             loading="lazy">
                                       </a>
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium">140 Likes</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#commentcollapes1" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium">20 Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium">99 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="commentcollapes1">
                                          <ul class="list-inline m-o p-0 comment-list">
                                             <li class="mb-3">
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="../assets/images/user/13.jpg" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0">Bob Frapples</h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                         "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse1" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse1">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="../assets/images/user/03.jpg"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block">Barb Ackue</h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">Add a New Post</span>
                                                   <p class="mb-0">1 Hour ago</p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                          commodo non, feugiat non nisi.
                                          Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus"</p>
                                       <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                                          <li>
                                             <a href="javascript:void(0);">#family</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#happiness</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#travelling</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#camping</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#climbing</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="user-post mt-4">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/boy.jpg" class="rounded">
                                                <img src="../assets/images/page-img/boy.jpg" alt="post-image" class="img-fluid rounded w-100"
                                                   loading="lazy">
                                             </a>
                                          </div>
                                          <div class="col-md-4 mt-md-0 mt-3">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/bus.jpg" class="rounded">
                                                <img src="../assets/images/page-img/bus.jpg" alt="post-image" class="img-fluid rounded w-100"
                                                   loading="lazy">
                                             </a>
                                          </div>
                                          <div class="col-md-4 mt-md-0 mt-3">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/fd.jpg" class="rounded">
                                                <img src="../assets/images/page-img/fd.jpg" alt="post-image" class="img-fluid rounded w-100"
                                                   loading="lazy">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="row mt-3">
                                          <div class="col-md-6">
                                             <a data-fslightbox="gallery" href="../assets/images/page-img/mountain.jpg" class="rounded">
                                                <img src="../assets/images/page-img/mountain.jpg" alt="post-image"
                                                   class="img-fluid rounded w-100" loading="lazy">
                                             </a>
                                          </div>
                                          <div class="col-md-6 mt-md-0 mt-3">
                                             <div class="post-overlay-box h-100 rounded">
                                                <img src="../assets/images/page-img/pizza.jpg" alt="post-image"
                                                   class="img-fluid rounded w-100 h-100 object-cover" loading="lazy">
                                                <a data-fslightbox="gallery" href="../assets/images/page-img/pizza.jpg"
                                                   class="rounded font-size-18">+2
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium">140 Likes</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#commentcollapes2" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium">20 Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium">99 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="commentcollapes2">
                                          <ul class="list-inline m-o p-0 comment-list">
                                             <li class="mb-3">
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="../assets/images/user/13.jpg" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0">Bob Frapples</h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                         "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse2" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse2">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="../assets/images/user/04.jpg"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block">Ira Membrit</h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">Update her Status</span>
                                                   <p class="mb-0">6 Hours ago</p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                          commodo non, feugiat non nisi.
                                          Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus"</p>
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium">140 Likes</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#commentcollapes3" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium">20 Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium">99 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="commentcollapes3">
                                          <ul class="list-inline m-o p-0 comment-list">
                                             <li class="mb-3">
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="../assets/images/user/13.jpg" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0">Bob Frapples</h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                         "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse3" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse3">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="../assets/images/user/1.jpg"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block">Bni Cyst</h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">Added New Video in his
                                                      Timeline</span>
                                                   <p class="mb-0">8 Hours ago</p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                          commodo non, feugiat non nisi.
                                          Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus"</p>
                                    </div>
                                    <div class="user-post mt-4">
                                       <div class="ratio ratio-16x9">
                                          <iframe src="https://www.youtube.com/embed/oHD33oKbKh4?si=VF-Qcp-pZdzUb3RX" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium">140 Likes</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#commentcollapes4" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium">20 Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium">99 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="commentcollapes4">
                                          <ul class="list-inline m-o p-0 comment-list">
                                             <li class="mb-3">
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="../assets/images/user/13.jpg" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0">Bob Frapples</h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                         "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse4" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse4">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="../assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel" >
               <div class="row">
                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-body">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Hobbies and Interests</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-family-tab" data-bs-toggle="pill" data-bs-target="#v-pills-family" role="button">Family and Relationship</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill" data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 ps-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="tab-content" >
                              <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                                 <h4>Personal Info</h4>
                                 <hr>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>About Me:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Hi, I’m James, I’m 36 and I work as a Digital Designer for the “Daydreams” Agency in Pier 56</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Email:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Bnijohn@gmail.com</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Mobile:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">(001) 4544 565 456</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Address:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">United States of America</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Social Link:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Birth Date:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">24 January</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Birth Year:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">1994</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Birthplace:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Austin, Texas, USA</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Lives in:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">San Francisco, California, USA</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Gender:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Female</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Interested in:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Designing</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>language:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">English, French</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Joined:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">April 31st, 2014</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Status:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Married</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Phone Number:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">(044) 555 - 4369 - 8957</p>
                                    </div>
                                 </div>
                                 <div class="row mb-3">
                                    <div class="col-3">
                                       <h6>Political Incline:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Democrat</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-2">Websites and Social Links</h4>
                                 <hr>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Website:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                 </div>
                                 <div class="row mb-2">
                                    <div class="col-3">
                                       <h6>Social Link:</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                 <h4 class="mt-2">Hobbies and Interests</h4>
                                 <hr>
                                 <h6 class="mb-1">Hobbies:</h6>
                                 <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.I like to ride the bike to work, swimming, and working out. I also like reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.</p>
                                 <h6 class="mt-2 mb-1">Favourite TV Shows:</h6>
                                 <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</p>
                                 <h6 class="mt-2 mb-1">Favourite Movies:</h6>
                                 <p>Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man.</p>
                                 <h6 class="mt-2 mb-1">Favourite Games:</h6>
                                 <p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.</p>
                                 <h6 class="mt-2 mb-1">Favourite Music Bands / Artists:</h6>
                                 <p>Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</p>
                                 <h6 class="mt-2 mb-1">Favourite Books:</h6>
                                 <p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
                                 <h6 class="mt-2 mb-1">Favourite Writers:</h6>
                                 <p>Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth.</p>
                              </div>
                              <div class="tab-pane fade" id="v-pills-family" role="tabpanel">
                                 <h4 class="mb-3">Relationship</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="media-support-info ms-3">
                                          <h6>Add Your Relationship Status</h6>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">Family Members</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="media-support-info ms-3">
                                          <h6>Add Family Members</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Brother</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex justify-content-between mb-4  align-items-center">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class=" ms-3">
                                                <h6>Anna Mull</h6>
                                                <p class="mb-0">Sister</p>
                                             </div>
                                             <div class="edit-relation "><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Paige Turner</h6>
                                                <p class="mb-0">Cousin</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-work-tab" role="tabpanel" aria-labelledby="v-pills-work-tab">
                                 <h4 class="mb-3">Work</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex justify-content-between mb-4  align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="ms-3">
                                          <h6>Add Work Place</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                             <div class="ms-3">
                                                <h6>Themeforest</h6>
                                                <p class="mb-0">Web Designer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>iqonicdesign</h6>
                                                <p class="mb-0">Web Developer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>W3school</h6>
                                                <p class="mb-0">Designer</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mb-3">Professional Skills</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="ms-3">
                                          <h6>Add Professional Skills</h6>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">College</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="ms-3">
                                          <h6>Add College</h6>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Lorem ipsum</h6>
                                                <p class="mb-0">USA</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-lived-tab" role="tabpanel" aria-labelledby="v-pills-lived-tab">
                                 <h4 class="mb-3">Current City and Hometown</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg" alt="story-img" loading="lazy" class="rounded-circle avatar-40"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Georgia</h6>
                                                <p class="mb-0">Georgia State</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="d-flex mb-4 align-items-center justify-content-between">
                                       <div class="user-img img-fluid"><img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40" loading="lazy"></div>
                                       <div class="w-100">
                                          <div class="d-flex flex-wrap justify-content-between">
                                             <div class="ms-3">
                                                <h6>Atlanta</h6>
                                                <p class="mb-0">Atlanta City</p>
                                             </div>
                                             <div class="edit-relation"><a href="#" class="d-flex align-items-center"><span class="material-symbols-outlined me-2 md-18">
                                                edit
                                                </span>Edit</a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                                 <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                 <ul class="suggestions-lists m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                       <div class="user-img img-fluid"><span class="material-symbols-outlined md-18">
                                          add
                                          </span>
                                       </div>
                                       <div class="ms-3">
                                          <h6>Add Place</h6>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Friends</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left list-item-tabs p-0 mb-2" id="friends-tab">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends" data-bs-target="#all-friends">All Friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add" data-bs-target="#recently-add">Recently Added</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends" data-bs-target="#closefriends"> Close friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-home" data-bs-target="#home-town"> Home/Town</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-following" data-bs-target="#following">Following</a>
                           </li>
                        </ul>
                        <div class="tab-content" id="friends-tab-content">
                           <div class="tab-pane fade show active" id="all-friends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Petey Cruiser</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Sthesia</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton02" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton03" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Gail Forcewind</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Frapples</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Walter Melon</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Buck Kinnear</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Shonda Leer</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ock Lee</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">40  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton13" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Rick O'Shea</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton14" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Pete Sariya</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton16" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sal Monella</h5>
                                                   <p class="mb-0">0  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton17" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sue Vaneer</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton18" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton18">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton19" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Dwyer</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton20" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Terry Aki</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton21" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton21">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">7  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton22">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton23" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton23">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Jimmy Changa</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton24" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton24">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton25" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton25">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Poppa Cherry</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton26" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton26">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">33  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton27" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton27">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton28" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton28">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton29" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton29">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno </h5>
                                                   <p class="mb-0">13  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton30" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton30">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="recently-add" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton35" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Holly Graham</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton37" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Cade</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton38" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="closefriends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bud Wiser</h5>
                                                   <p class="mb-0">32  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton39" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Otto Matic</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton40" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton41" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton42" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">36  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton43" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton44" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton45" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Moe Fugga</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton46" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton47" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton48" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="home-town" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton49" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton50" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton51" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton52" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton53" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="following" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton54" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">3  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton55" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton56" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Ackue</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton57" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bob Frapples</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton58" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Mull</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton59" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ry Wine</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton60" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton61" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton62" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton63" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton64" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Arty Ficial</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton65" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Emia</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton66" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Yerds</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton67" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid" loading="lazy">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Matt Innae</h5>
                                                   <p class="mb-0">19  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2 d-flex align-items-center" id="dropdownMenuButton68" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="material-symbols-outlined me-2">
                                                   done
                                                   </i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Photos</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left list-item-tabs p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Photos of You</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Your Photos</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg" class="rounded">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg" class="rounded">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg" class="rounded">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg" class="rounded">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg" class="rounded">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg" class="rounded">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/59.jpg" class="rounded">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/60.jpg" class="rounded">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/61.jpg" class="rounded">
                                          <img src="../assets/images/page-img/61.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/62.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/62.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/63.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/63.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/64.jpg" class="rounded">
                                          <img src="../assets/images/page-img/64.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/65.jpg" class="rounded">
                                          <img src="../assets/images/page-img/65.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg" class="rounded">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg" class="rounded">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg" class="rounded">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg" class="rounded">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg" class="rounded">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg" class="rounded">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg" class="rounded">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="your-photos" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/51.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/52.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/53.jpg" class="rounded">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/54.jpg" class="rounded">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/55.jpg" class="rounded">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/56.jpg" class="rounded" >
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/57.jpg" class="rounded">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/58.jpg" class="rounded">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/59.jpg" class="rounded">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a data-fslightbox="gallery" href="../assets/images/page-img/60.jpg" class="rounded">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="photo-profile" loading="lazy">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 60 <i class="material-symbols-outlined md-14 ms-1">
                                                      thumb_up
                                                      </i> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 30 <span class="material-symbols-outlined  md-14 ms-1">
                                                      chat_bubble_outline
                                                      </span> </a>
                                                   </li>
                                                   <li><a href="#" class="pe-3 text-white d-flex align-items-center"> 10 <span class="material-symbols-outlined md-14 ms-1">
                                                      forward
                                                      </span></a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn material-symbols-outlined md-16" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove">
                                          drive_file_rename_outline
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
        </div>
      </div>
      <div class="right-sidebar-mini right-sidebar">
         <div class="right-sidebar-panel p-0">
            <div class="card shadow-none m-0 h-100">
               <div class="card-body px-0 pt-0">
                  <div class="p-4">
                     <h6 class="fw-semibold m-0">Chats</h6>
                     <div class="mt-4 iq-search-bar device-search ">
                        <form action="#" class="searchbox position-relative">
                           <a class="search-link" href="javascript:void(0);">
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                           <input type="text" class="text search-input form-control bg-light-subtle"
                              placeholder="Search for people or groups...">
                        </form>
                     </div>
                  </div>
                  <div class="tabs">
                     <div class="nav nav-tabs right-sidebar-tabs" id="right-sidebar-tabs" role="tablist">
                        <button class="nav-link active" id="nav-friends-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-friends" type="button" role="tab" aria-controls="nav-friends"
                           aria-selected="true">
                           <span class="text-body icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                 <path
                                    d="M9 9C8.175 9 7.46875 8.70625 6.88125 8.11875C6.29375 7.53125 6 6.825 6 6C6 5.175 6.29375 4.46875 6.88125 3.88125C7.46875 3.29375 8.175 3 9 3C9.825 3 10.5313 3.29375 11.1188 3.88125C11.7063 4.46875 12 5.175 12 6C12 6.825 11.7063 7.53125 11.1188 8.11875C10.5313 8.70625 9.825 9 9 9ZM3 15V12.9C3 12.475 3.10938 12.0844 3.32812 11.7281C3.54688 11.3719 3.8375 11.1 4.2 10.9125C4.975 10.525 5.7625 10.2344 6.5625 10.0406C7.3625 9.84688 8.175 9.75 9 9.75C9.825 9.75 10.6375 9.84688 11.4375 10.0406C12.2375 10.2344 13.025 10.525 13.8 10.9125C14.1625 11.1 14.4531 11.3719 14.6719 11.7281C14.8906 12.0844 15 12.475 15 12.9V15H3ZM4.5 13.5H13.5V12.9C13.5 12.7625 13.4656 12.6375 13.3969 12.525C13.3281 12.4125 13.2375 12.325 13.125 12.2625C12.45 11.925 11.7688 11.6719 11.0813 11.5031C10.3938 11.3344 9.7 11.25 9 11.25C8.3 11.25 7.60625 11.3344 6.91875 11.5031C6.23125 11.6719 5.55 11.925 4.875 12.2625C4.7625 12.325 4.67188 12.4125 4.60313 12.525C4.53438 12.6375 4.5 12.7625 4.5 12.9V13.5ZM9 7.5C9.4125 7.5 9.76563 7.35313 10.0594 7.05938C10.3531 6.76563 10.5 6.4125 10.5 6C10.5 5.5875 10.3531 5.23438 10.0594 4.94063C9.76563 4.64688 9.4125 4.5 9 4.5C8.5875 4.5 8.23438 4.64688 7.94063 4.94063C7.64688 5.23438 7.5 5.5875 7.5 6C7.5 6.4125 7.64688 6.76563 7.94063 7.05938C8.23438 7.35313 8.5875 7.5 9 7.5Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <span class="h6 font-size-14">Friends</span>
                        </button>
                        <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab" data-bs-target="#nav-groups"
                           type="button" role="tab" aria-controls="nav-groups" aria-selected="false">
                           <span class="text-body icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                 <path
                                    d="M0.75 15V12.9C0.75 12.475 0.859375 12.0844 1.07812 11.7281C1.29688 11.3719 1.5875 11.1 1.95 10.9125C2.725 10.525 3.5125 10.2344 4.3125 10.0406C5.1125 9.84688 5.925 9.75 6.75 9.75C7.575 9.75 8.3875 9.84688 9.1875 10.0406C9.9875 10.2344 10.775 10.525 11.55 10.9125C11.9125 11.1 12.2031 11.3719 12.4219 11.7281C12.6406 12.0844 12.75 12.475 12.75 12.9V15H0.75ZM14.25 15V12.75C14.25 12.2 14.0969 11.6719 13.7906 11.1656C13.4844 10.6594 13.05 10.225 12.4875 9.8625C13.125 9.9375 13.725 10.0656 14.2875 10.2469C14.85 10.4281 15.375 10.65 15.8625 10.9125C16.3125 11.1625 16.6563 11.4406 16.8938 11.7469C17.1313 12.0531 17.25 12.3875 17.25 12.75V15H14.25ZM6.75 9C5.925 9 5.21875 8.70625 4.63125 8.11875C4.04375 7.53125 3.75 6.825 3.75 6C3.75 5.175 4.04375 4.46875 4.63125 3.88125C5.21875 3.29375 5.925 3 6.75 3C7.575 3 8.28125 3.29375 8.86875 3.88125C9.45625 4.46875 9.75 5.175 9.75 6C9.75 6.825 9.45625 7.53125 8.86875 8.11875C8.28125 8.70625 7.575 9 6.75 9ZM14.25 6C14.25 6.825 13.9563 7.53125 13.3688 8.11875C12.7812 8.70625 12.075 9 11.25 9C11.1125 9 10.9375 8.98438 10.725 8.95312C10.5125 8.92188 10.3375 8.8875 10.2 8.85C10.5375 8.45 10.7969 8.00625 10.9781 7.51875C11.1594 7.03125 11.25 6.525 11.25 6C11.25 5.475 11.1594 4.96875 10.9781 4.48125C10.7969 3.99375 10.5375 3.55 10.2 3.15C10.375 3.0875 10.55 3.04688 10.725 3.02813C10.9 3.00938 11.075 3 11.25 3C12.075 3 12.7812 3.29375 13.3688 3.88125C13.9563 4.46875 14.25 5.175 14.25 6ZM2.25 13.5H11.25V12.9C11.25 12.7625 11.2156 12.6375 11.1469 12.525C11.0781 12.4125 10.9875 12.325 10.875 12.2625C10.2 11.925 9.51875 11.6719 8.83125 11.5031C8.14375 11.3344 7.45 11.25 6.75 11.25C6.05 11.25 5.35625 11.3344 4.66875 11.5031C3.98125 11.6719 3.3 11.925 2.625 12.2625C2.5125 12.325 2.42188 12.4125 2.35313 12.525C2.28438 12.6375 2.25 12.7625 2.25 12.9V13.5ZM6.75 7.5C7.1625 7.5 7.51563 7.35313 7.80938 7.05938C8.10313 6.76563 8.25 6.4125 8.25 6C8.25 5.5875 8.10313 5.23438 7.80938 4.94063C7.51563 4.64688 7.1625 4.5 6.75 4.5C6.3375 4.5 5.98438 4.64688 5.69063 4.94063C5.39688 5.23438 5.25 5.5875 5.25 6C5.25 6.4125 5.39688 6.76563 5.69063 7.05938C5.98438 7.35313 6.3375 7.5 6.75 7.5Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <span class="h6 font-size-14">Groups</span>
                        </button>
                     </div>
                  </div>
                  <div class="media-height" data-scrollbar="init">
                     <div class="tab-content right-sidebar-tabs-content" id="right-sidebar-tabs">
                        <div class="tab-pane fade show active" id="nav-friends" role="tabpanel"
                           aria-labelledby="nav-friends-tab" tabindex="0">
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Anna Sthesia</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">2min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Paul Molive</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">1Day</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Anna Mull</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">01 Nov</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Paige Turner</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Bob Frapples</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Barb Ackue</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/13.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Greta Life</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/14.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Ira Membrit</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/15.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Pete Sariya</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/16.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Monty Carlo</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">33min</span>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-groups" role="tabpanel" aria-labelledby="nav-groups-tab"
                           tabindex="0">
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="flex-shrink-0">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Thunder Bolts</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">2min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="flex-shrink-0">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">The Developer</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">2min</span>
                           </div>
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="flex-shrink-0">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">The Guardians</h6>
                                    <p class="mb-0 font-size-12 fw-medium">hey! how are you?</p>
                                 </div>
                              </div>
                              <span class="font-size-12 fw-medium">2min</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="conversion-button">
                     <a href="../app/chat.html" class="btn btn-primary w-100 py-3 d-block rounded-0">View All Conversion</a>
                  </div>
                  <div class="right-sidebar-toggle bg-primary text-white mt-3 d-flex">
                     <span class="material-symbols-outlined">chat</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="chat-popup-modal" id="chat-popup-modal">
         <div class="bg-primary p-3 d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
               <div class="image flex-shrink-0">
                  <img src="../assets/images/user/13.jpg" alt="img" class="img-fluid avatar-45 rounded-circle object-cover">
               </div>
               <div class="content">
                  <h6 class="mb-0 font-size-14 text-white">Bob Frapples</h6>
                  <span class="d-inline-block lh-1 font-size-12 text-white"><span class="d-inline-block rounded-circle bg-success border-5 p-1 align-baseline me-1"></span>Avaliable</span>
               </div>
            </div>
            <div class="chat-popup-modal-close lh-1" type="button">
               <span class="material-symbols-outlined font-size-18 text-white">
                  close
               </span>
            </div>
         </div>
         <div class="chat-popup-body p-3 border-bottom">
            <ul class="list-inline p-0 mb-0 chat">
               <li>
                  <div class="text-center">
                     <span class="time font-size-12 text-primary">Today</span>
                  </div>
               </li>
               <li class="mt-2">
                  <div class="text-start">
                     <div class="d-inline-block py-2 px-3 bg-gray-subtle chat-popup-message font-size-12 fw-medium">
                        Hello, How Are you Doing Today?
                     </div>
                     <span class="mt-1 d-block time font-size-10 fst-italic">03:41 PM</span>
                  </div>
               </li>
               <li class="mt-3">
                  <div class="text-end">
                     <div class="d-inline-block py-2 px-3 bg-primary-subtle chat-popup-message message-right font-size-12 fw-medium">
                        Hello, I'm Doing Well.
                     </div>
                     <span class="mt-1 d-block time font-size-10 fst-italic">03:42 PM</span>
                  </div>
               </li>
            </ul>
         </div>
         <div class="chat-popup-footer p-3">
            <div class="chat-popup-form">
               <form>
                  <input type="text" class="form-control" placeholder="Start Typing...">
                  <button type="submit" class="chat-popup-form-button btn btn-primary">
                     <span class="material-symbols-outlined font-size-18 icon-rtl">
                        send
                     </span>
                  </button>
               </form>
            </div>
         </div>
      </div>    </div>
  </main>

  
  <footer class="iq-footer">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <ul class="list-inline mb-0">
                 <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                 <li class="list-inline-item ms-3 ms-md-5"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
              </ul>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
              Copyright <script>document.write(new Date().getFullYear())</script>
              <a href="../index.html" class="mx-1">SocialV</a>
              All Rights Reserved.
         </div>
         </div>
        </div>
     </footer>
  <!-- Wrapper End-->
  <!-- offcanvas start -->

  <!-- Live Customizer start -->
  <!-- Setting offcanvas start here -->
  <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label">
      <div class="offcanvas-header pb-0">
          <div class="d-flex align-items-center">
              <h4 class="offcanvas-title" id="live-customizer-label">Setting Panel</h4>
          </div>
          <div class="close-icon" data-bs-dismiss="offcanvas">
              <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
      </div>
      <div class="offcanvas-body data-scrollbar">
          <div class="row">
              <div class="col-lg-12">
                  <div>
                      <div class="text-center mb-4">
                          <h5 class="d-inline-block">Style Setting</h5>
                      </div>
                      <div>
                          <!-- Theme start here -->
                          <div class="mb-4">
                              <h5 class="mb-3">Theme</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100" >
                                      <input class="form-check-input custum-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between" for="color-mode-light">
                                         <span>Light Theme</span> 
                                          <div class="text-primary ">
                                              <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                              </svg>
                                          </div>
                                      </label>
                                  </div>
                              </div>
                               <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100 ">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="dark"  name="theme_scheme" id="color-mode-dark">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-dark">
                                         <span>Dark Theme</span>
                                         <div class="text-primary ">
                                             <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                              </svg>
                                         </div>                                    
                                      </label>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="auto"  name="theme_scheme" id="color-mode-auto">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-auto">
                                         <span>Device Default</span> 
                                         <div class="text-primary ">
                                              <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <g clip-path="url(#clip0_507_92)">
                                                  <rect width="30" height="27" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  </g>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                                  <defs>
                                                  <clipPath id="clip0_507_92">
                                                  <rect width="30" height="27" fill="white"/>
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                         </div>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Color customizer end here -->
                          <hr class="hr-horizontal">
                          <!-- Menu Style start here -->
                          <div>
                              <h5 class="mt-4 mb-3">Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-3 mb-4">
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                          Mini
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                          class="btn-check" name="sidebar_type" id="sidebar-hover">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                          Hover
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                          Soft
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Menu Style end here -->
  
                          <hr class="hr-horizontal">
  
                          <!-- Active Menu Style start here -->
  
                          <div class="mb-4">
                              <h5 class="mt-4 mb-3">Active Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-2">
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                          Rounded One
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                          Rounded All
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                          Pill One Side
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                          Pill All
                                      </label>
                                  </div>
                              </div>
                          </div>
                           <hr class="hr-horizontal">
                          <!-- Color customizer start here -->
                          <div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <h6 class="mt-4 mb-3">Color Customizer</h6>
                                  <div class="d-flex align-items-center">
                                      <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                          aria-expanded="false" aria-controls="custom-color">Custom</a>
                                      <div data-setting="radio">
                                          <input type="radio" value="default" class="btn-check"
                                              name="theme_color" id="default"
                                              data-colors='{"primary": "#7093e5", "secondary": "#f68685"}'>
                                          <label class="btn bg-transparent px-2 border-0" for="default"
                                              data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                              data-bs-original-title="Reset color">
                                              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                      fill="#31BAF1" />
                                                  <path
                                                      d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                      fill="#0169CA" />
                                              </svg>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="collapse" id="custom-color">
                                  <div class="form-group d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-primary-color">Primary</label>
                                      <input class="" name="theme_color" data-extra="primary" type="color"
                                          id="custom-primary-color" value="#50b5ff" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-secondary-color">Secondary</label>
                                      <input class="" name="theme_color" data-extra="secondary" type="color"
                                          id="custom-secondary-color" value="#6c757d" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-success-color">Success</label>
                                      <input class="" name="theme_color" data-extra="success" type="color"
                                          id="custom-success-color" value="#2dcdb2" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-danger-color">Danger</label>
                                      <input class="" name="theme_color" data-extra="danger" type="color"
                                          id="custom-danger-color" value="#ff9b8a" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-warning-color">Warning</label>
                                      <input class="" name="theme_color" data-extra="warning" type="color"
                                          id="custom-warning-color" value="#ffba68" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-info-color">Info</label>
                                      <input class="" name="theme_color" data-extra="info" type="color"
                                          id="custom-info-color" value="#d592ff" data-setting="color">
                                  </div>                                
                              </div>
                              <div class="grid-cols-5 mb-4 d-grid gap-3">
                                  <div data-setting="radio">
                                      <input type="radio" value="color-1" class="btn-check" name="theme_color"
                                          id="theme-color-1">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-1"
                                          data-bs-original-title="Theme-1">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-2" class="btn-check" name="theme_color"
                                          id="theme-color-2">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-2"
                                          data-bs-original-title="Theme-2">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-3" class="btn-check" name="theme_color"
                                          id="theme-color-3">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-3"
                                          data-bs-original-title="Theme-3">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-4" class="btn-check" name="theme_color"
                                          id="theme-color-4">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-4"
                                          data-bs-original-title="Theme-4">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-5" class="btn-check" name="theme_color"
                                          id="theme-color-5">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-5"
                                          data-bs-original-title="Theme-5">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                          </svg>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <!-- Color customizer end here -->
  
                            <!-- Theme end here -->
                          <hr class="hr-horizontal">
                          <div>
                              <h5 class="mb-3 mt-4">Direction</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="theme-scheme-direction-ltr">
                                         <span>LTR</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"/>
                                              <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"/>
                                              <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"/>
                                              <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                 
                              </div>
                               <div class="mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between "  for="theme-scheme-direction-rtl">
                                          <span>RTL</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"/>
                                              <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"/>
                                              <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"/>
                                              <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Theme end here -->
                          <!-- Active Menu Style end here -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Settings sidebar end here -->
  
  <a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton"
      data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
      <span class="icon material-symbols-outlined animated-rotate text-white">
          settings
      </span>
  </a>  <!-- Live Customizer end -->

  <!-- Share Modal -->
  <div class="modal fade sharemodal" id="share-btn" tabindex="-1" aria-labelledby="share-btnLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h3 class="modal-title" id="share-btnLabel">Share</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body mt-4">
              <div class="row gy-3">
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/embed.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Embed</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/whatsapp.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">WhatsApp</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/facebook.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Facebook</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/twitter.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Twitter</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/pinterest.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Pinterest</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/linkedin.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">LinkedIn</h6>
                    </a>
                 </div>
              </div>
              <div class="mt-4">
                 <div class="share-form">
                    <input type="text" class="form-control" value="https://iqonic.design/">
                    <button class="btn btn-link share-link-btn h6 m-0 fw-semibold">Copy</button>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  
  
  
  
  
  <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn2" aria-labelledby="share-BottomLabel">
     <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="share-BottomLabel">Share</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Facebook</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Twitter</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Instagram</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Google Plus</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>In</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>YouTube</h6>
           </div>
        </div>
     </div>
  </div>
  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/libs.min.js"></script>
  <!-- Lodash Utility -->
  <script src="../assets/vendor/lodash/lodash.min.js"></script>
  <!-- Utilities Functions -->
  <script src="../assets/js/setting/utility.js"></script>
  <!-- Settings Script -->
  <script src="../assets/js/setting/setting.js"></script>
  <!-- Settings Init Script -->
  <script src="../assets/js/setting/setting-init.js" defer></script>
  <!-- slider JavaScript -->
  <script src="../assets/js/slider.js"></script>
  <!-- masonry JavaScript --> 
  <script src="../assets/js/masonry.pkgd.min.js"></script>
  <!-- SweetAlert JavaScript -->
  <script src="../assets/js/enchanter.js"></script>
  <!-- Sweet-alert Script -->
  <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
  <script src="../assets/js/sweet-alert.js" defer></script>
  <!-- Chart Custom JavaScript -->
  <!-- app JavaScript -->
  <script src="../assets/js/charts/weather-chart.js"></script>
  <script src="../assets/js/app.js"></script>
  <!-- Flatpickr Script -->
  <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <!-- fslightbox Script -->
  <script src="../assets/js/fslightbox.js" defer></script> 
  <!-- vanilla Script -->
  <script src="../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
  <!--lottie Script -->
  <script src="../assets/js/lottie.js"></script>
  <!--select2 Script -->
  <script src="../assets/js/select2.js"></script>
  <!--ecommerce Script -->
  <script src="../assets/js/ecommerce.js"></script>
  
  <script>

$(document).on('click', '.like-btn', function() {
     var postId = $(this).data('post-id');
    $.post('/like', { post_id: postId }, function(data) {
        $('#like-count-' + postId).text(data.like_count + " Likes");
    });
});

$(document).on('click', '.submit-comment-btn', function() {
    var postId = $(this).data('post-id');
    var commentContent = $('#comment-input-' + postId).val();
    if(commentContent == null || commentContent == ""){
      return;
    }
    $.post('/comment', { post_id: postId, content: commentContent }, function(data) {
        // Append new comment to the list
       // Assuming 'data' contains details such as 'username', 'profilePicture', 'createdAt', and 'content'
// Use 'default_dp.jpg' if profile picture is empty or set to 'none'
const profilePic = (data.profile_picture && data.profile_picture !== 'none') ? data.profile_picture : 'default_dp.jpg';
const base_url = "<?= base_url(); ?>";

// Append the comment with the chosen profile picture

const commentHTML = `
    <li class="mb-3">
        <div class="comment-list-block">
            <div class="d-flex align-items-center gap-3">
                <div class="comment-list-user-img flex-shrink-0">
                    <img src="${base_url}/uploads/${profilePic}" alt="userimg" class="avatar-48 rounded-circle img-fluid" loading="lazy">
                </div>
                <div class="comment-list-user-data">
                    <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                        <h6 class="m-0">${data.username}</h6>
                        <span class="d-inline-block text-primary">
                            <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z" fill="currentColor" />
                                <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="fw-medium small text-capitalize">${new Date(data.created_at).toLocaleString()}</span>
                    </div>
                </div>
            </div>
            <div class="comment-list-user-comment">
                <div class="comment-list-comment">${data.content}</div>
                <div class="comment-list-action mt-2" id="comment-section-${data.post_id}">
                    <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                        <li>
                            <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                <div class="like-data">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                            <span class="material-symbols-outlined align-text-top font-size-18">thumb_up</span>
                                            <span class="fw-medium small">Likes</span>
                                        </span>
                                        <div class="dropdown-menu py-2">
                                            <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt="like" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely" loading="lazy"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="fw-medium small" data-bs-toggle="collapse" data-bs-target="#subcomment-collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">Reply</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
`;
// Append the generated HTML to the comment section
$('#comment-ul-' + postId).append(commentHTML);



        $('#comment-input-' + postId).val(''); // Clear input
    });
});
  </script>




</body>

</html>
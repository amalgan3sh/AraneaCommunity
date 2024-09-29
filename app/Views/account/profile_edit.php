

<?= $this->include('header') ?>

      </div>      <div>
        <div class="position-relative">
        </div>
        <div class="content-inner " id="page_layout">
<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body p-0">
               <div class="iq-edit-list">
                  <ul class="iq-edit-profile row nav nav-pills">
                     <li class="col-md-3 p-0">
                        <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                        Personal Information
                        <?php
                    
                        ?>
                        </a>
                     </li>
                     <li class="col-md-3 p-0">
                        <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                        Change Password
                        </a>
                     </li>
                     <li class="col-md-3 p-0">
                        <a class="nav-link" data-bs-toggle="pill" href="#emailandsms">
                        Email and SMS
                        </a>
                     </li>
                     <li class="col-md-3 p-0">
                        <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                        Manage Contact
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="iq-edit-list-data">
            <div class="tab-content">
               <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Personal Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        
                        <form method="post" action="<?= base_url('Profile_update') ?>">

                           <div class="form-group row align-items-center">
                              <div class="col-md-12">
                                 <div class="profile-img-edit">
                                    <img class="profile-pic" src="<?= base_url('uploads/' . $user['profile_picture']) ?>"  style="width:-webkit-fill-available" alt="profile-pic" loading="lazy">
                                    <div class="p-image d-flex align-items-center justify-content-center">
                                       <span class="material-symbols-outlined">edit</span>
                                       <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class=" row align-items-center">
                              <div class="form-group col-sm-6">
                                 <label for="fname"  class="form-label">First Name:</label>
                                 <input type="text" class="form-control" id="fname" placeholder="" name="fname" value="<?= trim($users[0]["first_name"]); ?>" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="lname" class="form-label">Last Name:</label>
                                 <input type="text" class="form-control" id="lname" placeholder="Jhon" name="lname" value="<?= trim($users[0]["last_name"]); ?>" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="uname" class="form-label">User Name:</label>
                                 <input type="text" class="form-control" id="uname" placeholder="Bni@01" value="<?= trim($users[0]["username"]); ?>" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="cname" class="form-label">City:</label>
                                 <input type="text" class="form-control" id="cname" placeholder="Atlanta">
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label d-block">Gender:</label>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option1">
                                    <label class="form-check-label" for="inlineRadio10"> Male</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio11" value="option1">
                                    <label class="form-check-label" for="inlineRadio11">Female</label>
                                 </div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="dob" class="form-label">Date Of Birth:</label>
                                 <input  class="form-control" id="dob" name="dob" placeholder="1984-01-24" type="date" value="<?= $user['dob'] ?>" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Marital Status:</label>
                                 <select class="form-select" aria-label="Default select example">
                                    <option selected="">Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                    <option>Divorced</option>
                                    <option>Separated </option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Age:</label>
                                 <select class="form-select" aria-label="Default select example 2">
                                    <option>46-62</option>
                                    <option>63 > </option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Country:</label>
                                 <select class="form-select" aria-label="Default select example 3">
                                    <option>Caneda</option>
                                    <option>Noida</option>
                                    <option selected="">USA</option>
                                    <option>India</option>
                                    <option>Africa</option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">State:</label>
                                 <select class="form-select" aria-label="Default select example 4">
                                    <option>California</option>
                                    <option>Florida</option>
                                    <option selected="">Georgia</option>
                                    <option>Connecticut</option>
                                    <option>Louisiana</option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-12">
                                 <label class="form-label">Address:</label>
                                 <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
37 Cardinal Lane
Petersburg, VA 23803
United States of America
Zip Code: 85001
                                 </textarea>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                           <button type="reset" class="btn btn-danger-subtle">cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Change Password</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form>
                           <div class="form-group">
                              <label for="cpass" class="form-label">Current Password:</label>
                              <a href="#" class="float-end">Forgot Password</a>
                              <input type="Password" class="form-control" id="cpass" value="">
                           </div>
                           <div class="form-group">
                              <label for="npass" class="form-label">New Password:</label>
                              <input type="Password" class="form-control" id="npass" value="">
                           </div>
                           <div class="form-group">
                              <label for="vpass" class="form-label">Verify Password:</label>
                              <input type="Password" class="form-control" id="vpass" value="">
                           </div>
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                           <button type="reset" class="btn btn-danger-subtle">cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Email and SMS</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form>
                           <div class="form-group row align-items-center">
                              <label class="col-md-3" for="emailnotification">Email Notification:</label>
                              <div class="col-md-9 form-check form-switch">
                                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked11" checked>
                                 <label class="form-check-label" for="flexSwitchCheckChecked11">Checked switch checkbox input</label>
                              </div>
                           </div>
                           <div class="form-group row align-items-center">
                              <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                              <div class="col-md-9 form-check form-switch">
                                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked12" checked>
                                 <label class="form-check-label" for="flexSwitchCheckChecked12">Checked switch checkbox input</label>
                              </div>
                           </div>
                           <div class="form-group row align-items-center">
                              <label class="col-md-3" for="npass">When To Email</label>
                              <div class="col-md-9">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12">
                                    You have new notifications.
                                    </label>
                                 </div>
                                 <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="email02">
                                    <label class="form-check-label" for="email02">You're sent a direct message</label>
                                 </div>
                                 <div class="form-check d-block">
                                    <input type="checkbox" class="form-check-input" id="email03" checked="">
                                    <label class="form-check-label" for="email03">Someone adds you as a connection</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row align-items-center">
                              <label class="col-md-3" for="npass">When To Escalate Emails</label>
                              <div class="col-md-9">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="email04">
                                    <label class="form-check-label" for="email04">
                                    Upon new order.
                                    </label>
                                 </div>
                                 <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="" id="email05">
                                    <label class="form-check-label" for="email05">New membership approval</label>
                                 </div>
                                 <div class="form-check d-block">
                                    <input type="checkbox" class="form-check-input" id="email06" checked="">
                                    <label class="form-check-label" for="email06">Member registration</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                           <button type="reset" class="btn btn-danger-subtle">cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Manage Contact</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form>
                           <div class="form-group">
                              <label for="cno"  class="form-label">Contact Number:</label>
                              <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                           </div>
                           <div class="form-group">
                              <label for="email"  class="form-label">Email:</label>
                              <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                           </div>
                           <div class="form-group">
                              <label for="url"  class="form-label">Url:</label>
                              <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                           </div>
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                           <button type="reset" class="btn btn-danger-subtle">cancel</button>
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
  

</body>

</html>
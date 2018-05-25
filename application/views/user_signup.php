<div class="mainbar">
        <div class="article">
          <h2><span>User Signup</span></h2>
          <div class="clr"></div>
          <h3>
              <?php
                $msg=$this->session->userdata('message');
                if($msg)
                {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                
              
              ?>
          </h3>
        </div>
        <div class="article">
          
          <div class="clr"></div>
          <form action="<?php echo base_url();?>welcome/save_user" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="user_name" name="user_name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="user_email" name="email_address" class="text" />
              </li>
              <li>
                <label for="Password">Password</label>
                <input id="user_password" name="password" type="password" />
              </li>
              <li>
                <label for="age">Age</label>
                <input id="user_age" name="age" class="text" />
              </li>
              <li>
                  <input type="submit" name="imageField" id="imageField" value="Submit" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
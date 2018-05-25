<div class="mainbar">
        <div class="article">
          <h2><span>Log in</span></h2>
          <div class="clr"></div>
          <h3 style="color: red" >
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
          <form action="<?php echo base_url();?>welcome/check_user_login" method="post" id="sendemail">
            <ol>
              
              <li>
                  <label for="email">Email Address</label>
                <input id="user_email" name="email_address" class="text" />
              </li>
              <li>
                <label for="Password">Password</label>
                <input id="user_password" name="password" type="password" />
              </li>
              
              <li>
                  <input type="submit" name="imageField" id="imageField" value="Login" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
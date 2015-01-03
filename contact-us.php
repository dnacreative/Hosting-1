<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header();?>
<div class="content-box">
<div class="main-content">
<h1>Contact Us</h1>


<div style="padding:10px 0 10px 0">
			
			
			
             	  <div> <strong>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, risus neque venenatis arcu, a semper massa mi eget ipsum. </strong><br />
            <br />
            Lorem  ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et  ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus  neque venenatis arcu, a semper massa mi eget ipsum. </div>
          <div> <br />
            <h6>Contact Form:</h6>
            <form action="form.php" method="post">
              <table width="97%">
                <tr>
                  <td width="145" align="left" valign="top" class="body" id="Company"><strong>Company:</strong></td>
                  <td width="280" align="left" valign="top"><input name="Company" type="text" size="30" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Contact"><strong>Full Name:</strong></td>
                  <td align="left" valign="top"><input name="Name" type="text" size="30" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Address"><strong>Address: </strong></td>
                  <td align="left" valign="top"><input name="Address" type="text" size="30" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Phone"><strong> Phone: </strong></td>
                  <td align="left" valign="top"><input name="Phone" type="text" size="30" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Email"><strong> Email: </strong></td>
                  <td align="left" valign="top"><input name="Email" type="text" size="30" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Comments"><strong> Questions / Comments: </strong></td>
                  <td align="left" valign="top"><textarea name="comments" cols="25" rows="6"></textarea></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" class="button" value="Send Now" /></td>
                </tr>
              </table>
            </form>
          </div>
          <div> <br />
            <h6>Contact Information: </h6>
            <img src="<?php echo get_template_directory_uri();?>/images/photo-contact.jpg" alt="" width="152" height="100" class="project-img" /> 100 Lorem Ipsum Dolor Sit<br />
            88-99 Sit Amet, Lorem<br />
            USA<br />
            <br />
            <p> <span><img src="images/ico-phone.png" alt="Phone" width="20" height="16" hspace="2" /> Phone:</span> (888) 123 456 789<br />
              <span><img src="images/ico-fax.png" alt="Fax" width="20" height="16" hspace="2" /> Fax:</span> (888) 987 654 321<br />
              <span><img src="images/ico-website.png" alt="WWW Link" width="20" height="16" hspace="2" /> Website:</span> <a href="#">www.mycompany.com</a><br />
              <span><img src="images/ico-email.png" alt="Email" width="20" height="16" hspace="2" /> Email:</span> <a href="mailto:info@mycompany.com">info@mycompany.com</a><br />
              <span><img src="images/ico-twitter.png" alt="Twitter Follow" width="20" height="16" hspace="3" /> <a href="#">Follow</a> on Twitter</span><br /><br />
            </p>
          </div>
			
			
			
			
			
			
			</div>
</div>
</div>
<div class="clear"></div>
</div>
<?php get_footer(); ?>

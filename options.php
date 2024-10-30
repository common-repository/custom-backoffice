<div class="wrap backoffice">
    <div class="postbox">
        <h2><?php _e('Custom backoffice Options', 'custom-backoffice'); ?></h2>
        <form method='post' action='options.php'>
            <?php wp_nonce_field('update-options'); ?>
            <?php settings_fields('cc-custom-backoffice-option-group'); ?>
            <table class="form-table">
                <tbody id="first_section">

                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Enter a URL or upload an image to use for your login logo', 'custom-backoffice'); ?></strong>.</th>
                        <td>
                            <label for="upload_image">
                                <input id="upload_image" type="text" size="36" name="cc-custom-backoffice-img" value="<?php echo get_option('cc-custom-backoffice-img'); ?>" /> 
                                <input class="upload_image_button"  type="button" value="<?php _e('Upload Image', 'custom-backoffice'); ?>" />
                            </label>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Enter the URL of you would like the login logo to point to.', 'custom-backoffice'); ?></strong><br /><?php _e('By default it points to', 'custom-backoffice'); ?> <a href="http://wordpress.org" target="_blank">WordPress.org</a></th>
                        <td><input type="text" size="36" name="cc-custom-backoffice-link" value="<?php echo get_option('cc-custom-backoffice-link'); ?>" />
                    </tr>
                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Enter the text to display when you hover your mouse over the login logo.', 'custom-backoffice'); ?></strong><br /><?php _e('By default it says "Powered by WordPress".', 'custom-backoffice'); ?></th>
                        <td><input type="text" size="36" name="cc-custom-backoffice-title" value="<?php echo get_option('cc-custom-backoffice-title'); ?>" />
                    </tr>
                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Enter custom CSS for the login screen.', 'custom-backoffice'); ?></strong><br /><?php _e('If you are not familiar with CSS, you can leave this blank.', 'custom-backoffice'); ?>
                <ul>
                    <li><a href="http://codex.wordpress.org/Customizing_the_Login_Form#Styling_Your_Login" target="_blank"><?php _e('CSS options can be found by clicking here.', 'custom-backoffice'); ?></a></li>
                </ul>
                </th>
                <td><textarea rows="10" cols="36" name="cc-custom-backoffice-css"><?php echo get_option('cc-custom-backoffice-css'); ?></textarea>
                    </tr>

                <tr valign="top">
                    <th scope="row"><strong><?php _e('Enter a URL or upload an image for your login screen background', 'custom-backoffice'); ?></strong>.</th>
                    <td>
                        <label for="upload_image">
                            <input id="upload_back_image" type="text" size="36" name="cc-custom-backoffice-back" value="<?php echo get_option('cc-custom-backoffice-back'); ?>" /> 
                            <input class="upload_image_button"  type="button" value="<?php _e('Upload Image', 'custom-backoffice'); ?>" />
                        </label>
                    </td>
                </tr>
            </tbody>
            <tbody id="second_section">
                <tr valign="top">
                    <th scope="row"><strong><?php _e('Enter the text you would like to display in the dashboard footer.', 'custom-backoffice'); ?></strong><br /><?php _e('By default it says "Thank you for creating with WordPress".', 'custom-backoffice'); ?>

                    </th>
                    <td><textarea rows="10" cols="36" name="cc-custom-backoffice-footer"><?php echo get_option('cc-custom-backoffice-footer'); ?></textarea>
                </tr>
                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to remove all the widgets on dashboard,leave it blank if you want to keep it', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-widgets" value="Yes"<?php echo get_option('cc-custom-backoffice-widgets') ? 'checked="checked"' : ''; ?>/>  Yes</td>

                </tr>

                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to remove all the wordpress icon on adminbar,leave it blank if you want to keep it', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-adminbar" value="Yes"<?php echo get_option('cc-custom-backoffice-adminbar') ? 'checked="checked"' : ''; ?>/>  Yes</td>

                </tr>




                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to remove update nag', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-updatenag" value="Yes"<?php echo get_option('cc-custom-backoffice-updatenag') ? 'checked="checked"' : ''; ?>/>  Yes</td>                  
                </tr>

              

                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to put a dynamic copyright in the footer, then use the shortcode [copyright] wherever in your website', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-copyright" value="Yes"<?php echo get_option('cc-custom-backoffice-copyright') ? 'checked="checked"' : ''; ?>/>  Yes</td>   
                </tr>  

                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to remove the help tab', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-help" value="Yes"<?php echo get_option('cc-custom-backoffice-help') ? 'checked="checked"' : ''; ?>/>  Yes</td>   
                </tr> 

                <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to remove the screen option tab', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-screen" value="Yes"<?php echo get_option('cc-custom-backoffice-screen') ? 'checked="checked"' : ''; ?>/>  Yes</td>   
                </tr> 
                   <tr valign="top">
                    <th scope="row"><strong><?php _e('Click yes if you want to keep your name and erase the word howdy in the admin bar', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-name" value="Yes"<?php echo get_option('cc-custom-backoffice-name') ? 'checked="checked"' : ''; ?>/>  Yes</td>   
                </tr> 
            </tbody>
            <tbody id="third_section">
                <tr valign="top">
                    <th scope="row"><strong><?php _e('Check the menu tab you want to remove', 'custom-backoffice'); ?></strong></th></tr>
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-page" value="Yes"<?php echo get_option('cc-custom-backoffice-page') ? 'checked="checked"' : ''; ?>>Page</td></tr> 
                <tr> <td><input type="checkbox"  name="cc-custom-backoffice-links" value="Yes"<?php echo get_option('cc-custom-backoffice-links') ? 'checked="checked"' : ''; ?>>Links</td></tr>  
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-media" value="Yes"<?php echo get_option('cc-custom-backoffice-media') ? 'checked="checked"' : ''; ?>>Media</td></tr>  
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-tools" value="Yes"<?php echo get_option('cc-custom-backoffice-tools') ? 'checked="checked"' : ''; ?>>Tools</td></tr> 
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-users" value="Yes"<?php echo get_option('cc-custom-backoffice-users') ? 'checked="checked"' : ''; ?>>Users</td></tr>
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-settings" value="Yes"<?php echo get_option('cc-custom-backoffice-settings') ? 'checked="checked"' : ''; ?>>Settings</td></tr>  
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-comments" value="Yes"<?php echo get_option('cc-custom-backoffice-comments') ? 'checked="checked"' : ''; ?>>Comments</td></tr>  
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-plugins" value="Yes"<?php echo get_option('cc-custom-backoffice-plugins') ? 'checked="checked"' : ''; ?>>Plugins</td> </tr> 
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-posts" value="Yes"<?php echo get_option('cc-custom-backoffice-posts') ? 'checked="checked"' : ''; ?>>Posts</td></tr>
                <tr><td><input type="checkbox"  name="cc-custom-backoffice-appearance" value="Yes"<?php echo get_option('cc-custom-backoffice-appearance') ? 'checked="checked"' : ''; ?>>Appearance</td></tr>  

             <tr valign="top">
                    <th scope="row"><strong><?php _e('Replace Appearence menu tab by Menu', 'custom-backoffice'); ?></strong></th>
                    <td><input type="checkbox"  name="cc-custom-backoffice-changemenu" value="Yes"<?php echo get_option('cc-custom-backoffice-changemenu') ? 'checked="checked"' : ''; ?>/>  Yes</td>
                </tr>
            </tbody>
             


               
                </tbody>

               

                <tr valign="top">
                    <td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
                </tr>
            </table>
        </form>
        <?php
        $cclogo = get_option('cc-custom-backoffice-img');
        $cclink = get_option('cc-custom-backoffice-link');
        $cctitle = get_option('cc-custom-backoffice-title');
        $cccss = get_option('cc-custom-backoffice-css');
        if (!empty($cclogo)) {
            ?>
            <p><?php _e('How your login logo image looks:', 'custom-backoffice'); ?></p>
            <a href="<?php
            if (!empty($cclink)) {
                echo $cclink;
            } else {
                echo "#";
            }
            ?>">
                <img src="<?php echo $cclogo; ?>" title="<?php
                if (!empty($cctitle)) {
                    echo $cctitle;
                } else {
                    echo "";
                }
                ?>" />
            </a>	
        <?php } ?>
    </div>
    <div class="postbox">
        <p><?php _e('If this plugin has helped you out at all, please consider making a donation to encourage future updates.', 'custom-backoffice'); ?><br /><?php _e('Your generosity is appreciated!', 'custom-backoffice'); ?></p>
        <a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=43XMASQSUE4YE');">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
        </a>
        <p><?php _e('To report any issues with', 'custom-backoffice'); ?><strong>&nbsp;<?php _e('this plugin', 'custom-backoffice'); ?></strong><?php _e(', please visit the', 'custom-backoffice'); ?> <a href="http://wordpress.org/support/plugin/custom-backoffice"><?php _e('support page on WordPress.org', 'custom-backoffice'); ?></a>.</p>
        <p><?php _e('For all other WordPress help, please check out some great tutorials at', 'custom-backoffice'); ?> <a href="https://copier-coller.com/"><?php _e('copier-coller.com', 'custom-backoffice'); ?></a></p>

    </div>
</div>
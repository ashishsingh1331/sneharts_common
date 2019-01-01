<?php
/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[module]--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $module: The sending module
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
  </head>
  <body id="mimemail-body">
    <table  width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; font-size:16px;"><!--Outer table -->
      <tr>
        <td width="100%" height="100%" bgcolor="#e2eace">
          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width: 650px"><!--Inner table -->
            <tr>
              <td width="100%" bgcolor="#FF69B4" align="center" style="padding: 20px; font-weight: bold">
                <img width="41%" height="auto" src="http://sneharts.in/sites/default/files/output-onlinepngtools.png"/>
              </td>
            </tr>
            <tr>
              <td width="100%" style="font-size:24px;font-weight: bold; text-align: center;padding-top: 70px"  bgcolor="#FFFFFF">
                Hello [user:name],
              </td>
            </tr>
            <tr>
              <td width="100%" style="font-size:24px;line-height:1.5; text-align: center;"  bgcolor="#FFFFFF">
                Registration completed
              </td>
            </tr>
            <tr>
              <td width="100%" align="center" bgcolor="#FFFFFF" style="padding:30px; text-align: center;">
                Thank you for joining us
                
                
              </td>             
            </tr>
            <tr>
              <td width="100%" align="center" bgcolor="#FFFFFF" style="padding: 0px 70px 30px 70px; text-align: center;font-size: 14px;line-height: 21px;">
                TO FINISH SIGNING UP AND ACTIVATE YOUR ACCOUNT YOU JUST NEED TO SET YOUR PASSWORD
              </td>             
            </tr>
            <tr>
              <td style="padding:15px 0px 50px 0px" width="100%" align="center" bgcolor="#FFFFFF">
                <a style="color: #ffffff;background-color: #FF69B4;border-radius: 4px;max-width: 202px;width: 172px;width: auto;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;text-align: center;text-decoration: none;font-weight: bold;" href="[user:one-time-login-url]">Activate Account</a>
              </td>
            </tr>
            <tr>
              <td style="padding: 30px 0px; color: #FFFFFF" width="100%" height="100%" bgcolor="#222222"><!--footer table-->
                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width: 650px">
                  <tr>
                    <td width="33%" align="center">
                      <table width="73%" align="center" cellpadding="0" cellspacing="0" border="0"><!--social icons table-->
                        <tr>
                          <td  align="center">
                            <img src="images/fb.png">
                          </td>
                          <td  align="center">
                            <img src="images/gp.png">
                          </td>
                          <td  align="center">
                            <img src="images/yt.png">
                          </td>
                          <td  align="center">
                            <img src="images/in.png">
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td style="font-size: 13px;line-height: 15px" width="33%" align="center">
                      <span style="font-size: 13px;line-height: 15px;color: rgb(168, 191, 111);">Tel: </span>9716666678
                    </td>
                    <td style="font-size: 13px;line-height: 15px" width="33%" align="center">
                      <span style="font-size: 13px;line-height: 15px;color: rgb(168, 191, 111);">Email: </span>zendchamp@gmail.com
                    </td>
                  </tr>
                </table>
              </td>             
            </tr>
          </table>
        </td>
      </tr>
      
    </table>
  </body>
</html>

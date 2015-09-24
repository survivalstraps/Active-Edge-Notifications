<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="ink.css">

    <style type="text/css">
      
      /* Ink styles go here in production */
      
    </style>
    <style type="text/css">
      
      body, .body {
        background: #0064af;
      }
      
      .pre-headerText {
        color: #ffffff;
      }
      
      .logoWrapper {
         padding: 0;
      }
      
      .logo, .bodyText {
        background: #fcfcfc;
      }
      
      .footer {
        background: #ccc;
        border-top: 1px solid #818181;        
      }
      

    </style>
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center>

          <table class="container">
            <tr>
              <td>
               
                <table class="row pre-header"> <!-- pre-header -->
                  <tr>
                    <td class="wrapper last">
                      
                      <table class="twelve columns">
                        <tr>
                          <td class="center pre-headerText">
                            <small>Pre-header text</small>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /pre-header -->
               
                <table class="row logo"> <!-- logo -->
                  <tr>
                    <td class="wrapper last" style="padding: 0;">
                      
                      <table class="twelve columns">
                        <tr>
                          <td class="center">
                            <center>
                              <a href="http://activeedgegear.com" target="_blank"><img src="logo.jpg" alt="Active Edge Gear" border="0" class="center"></a>
                            </center>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /logo -->
               
                <table class="row bodyText"> <!-- bodyText -->
                  <tr>
                    <td class="wrapper last">
                      
                      <table class="twelve columns">
                        <tr>
                          <td class="center text-pad">
                           
<?php

$include = $_GET['load'];

if (file_exists("snippets/$include.html")) {
    require("snippets/$include.html");
}

?>
                            
                            
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /bodyText -->
                
               
                <table class="row footer"> <!-- footer -->
                  <tr>
                    <td class="wrapper">
                      
                      <table class="seven columns">
                        <tr>
                          <td class="text-pad">
                            <p><small><strong>Active Edge Gear</strong><br>
                            <a href="http://activeedgegear.com" target="_blank">activeedgegear.com</a><br>
                            <a href="mailto: support@activeedgegear.com">support@activeedgegear.com</a><br>
                            1-800-971-3360</small></p>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                     
                     <td class="wrapper last">
                      
                      <table class="five columns">
                        <tr>
                          <td class="four sub-columns center">
                            <img src="images/facebook.png" alt="Facebook" class="center">
                          </td>
                          <td class="four sub-columns center">
                            <img src="images/twitter.png" alt="Twitter" class="center">                            
                          </td>
                          <td class="four sub-columns last center">
                            <img src="images/instagram.png" alt="Instagram" class="center">                            
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /footer -->
                
                
                
              </td>
            </tr>
          </table>

          </center>
        </td>
      </tr>
    </table>
  </body>
</html>
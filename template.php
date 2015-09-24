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
      
      .logo, .bodyText, .buttonText {
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
                          <td class="center pre-headerText"><small>
<?php

$switch = $_GET['load'];

if (isset($switch)) {
    switch($switch) {

        case "abandoned_6hr": 
            echo "A little reminder ";
        break;

        case "abandoned_24hr": 
            echo "A big reminder ";
        break;

        case "abandoned_48hr": 
            echo "A huge reminder ";
        break;

        case "customer_account_activation": 
            echo "Your account has been created";
        break;

        case "customer_account_welcome": 
            echo "Abandoned for 6 hours!";
        break;

        case "gift_card_notification": 
            echo "Abandoned for 6 hours!";
        break;

        case "new_order_notification": 
            echo "Abandoned for 6 hours!";
        break;

        case "order_canceled": 
            echo "Abandoned for 6 hours!";
        break;

        case "refund_notification": 
            echo "Abandoned for 6 hours!";
        break;

        case "shipping_confirmation": 
            echo "Abandoned for 6 hours!";
        break;

        case "shipping_update": 
            echo "Abandoned for 6 hours!";
        break;

        case "mailchimp_popup": 
            echo "Abandoned for 6 hours!";
        break;

    }
}

?></small>
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
                              <a href="http://activeedgegear.com" target="_blank"><img src="images/logo.jpg" alt="Active Edge Gear" border="0" class="center"></a>
                            </center>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /logo -->
               
                <table class="row bodyText"> <!-- bodyText 1 -->
                  <tr>
                    <td class="wrapper last">
                      
                      <table class="twelve columns">
                        <tr>
                          <td class="center text-pad">
                           
<?php

function embedButton($text, $url) {
    $buttonText = $text;
    $buttonUrl = $url;
    require("snippets/button.php");
}

$include = $_GET['load'];

if (file_exists("snippets/$include.html")) {
    require("snippets/$include.html");
}

?>
                           
<p>Thanks so much for your support!</p>

                            
                            
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table> <!-- /bodyText 2 -->
                
               
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
                            <a href="http://facebook.com/activeedgegear" target="_blank"><img src="images/facebook.png" alt="Facebook" class="center"></a>
                          </td>
                          <td class="four sub-columns center">
                              <a href="http://twitter.com/activeedgegear" target="_blank"><img src="images/twitter.png" alt="Twitter" class="center"></a>   
                          </td>
                          <td class="four sub-columns last center">
                              <a href="http://instagram.com/activeedgegear" target="_blank"><img src="images/instagram.png" alt="Instagram" class="center"></a> 
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
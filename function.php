<?php 
/**
* @func preg_match_all function will check curly braces variables from string.
* @var content_full Your paragraph with curly braces variables
* @var operating_system variable which will be replaced your curly braces variable
* @var ip_address variable which will be replaced your curly braces variable
* @var after_content_full Your modified paragraph with all varibale values
**/


                    
                    $content_full = "Hi Gulshan you are using {operating_system} and your IP address is {120.12.12.12}";
                    $operating_system   = "Window 7";
                    $ip_address         = "120.12.12.12";


                    preg_match_all('/{(\w+)}/', $content_full, $matches);
                    $after_content_full = $content_full;
                    foreach ($matches[0] as $index => $var_name) {
                      if (isset(${$matches[1][$index]})) {
                        $after_content_thankyou = str_replace($var_name, ${$matches[1][$index]}, $after_content_full);
                      }
                    }

                    echo $after_content_full;

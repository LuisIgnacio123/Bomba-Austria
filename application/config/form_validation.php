<?php

/*
 * 
 * Rule	Parameter	Description	Example
  required              No	Returns FALSE if the form element is empty.
  matches               Yes	Returns FALSE if the form element does not match the one in the parameter.          matches[form_item]
  regex_match           Yes	Returns FALSE if the form element does not match the regular expression.            regex_match[/regex/]
  differs               Yes	Returns FALSE if the form element does not differ from the one in the parameter.    differs[form_item]
  is_unique             Yes	Returns FALSE if the form element is not unique                                     is_unique[table.field]
  min_length            Yes	Returns FALSE if the form element is shorter than the parameter value.              min_length[3]
  max_length            Yes	Returns FALSE if the form element is longer than the parameter value.               max_length[12]
  exact_length          Yes	Returns FALSE if the form element is not exactly the parameter value.               exact_length[8]
  greater_than          Yes	Returns FALSE if the form element is less than or equal to the parameter value or not numeric.	greater_than[8]
  greater_than_equal_to	Yes	Returns FALSE if the form element is less than the parameter value, or not numeric.	greater_than_equal_to[8]
  less_than             Yes	Returns FALSE if the form element is greater than or equal to the parameter value or not numeric.	less_than[8]
  less_than_equal_to	Yes	Returns FALSE if the form element is greater than the parameter value, or not numeric.	less_than_equal_to[8]
  in_list               Yes	Returns FALSE if the form element is not within a predetermined list.                   in_list[red,blue,green]
  alpha                 No	Returns FALSE if the form element contains anything other than alphabetical characters.
  alpha_numeric         No	Returns FALSE if the form element contains anything other than alpha-numeric characters.
  alpha_numeric_spaces	No	Returns FALSE if the form element contains anything other than alpha-numeric characters or spaces. Should be used after trim to avoid spaces at the beginning or end.
  alpha_dash            No	Returns FALSE if the form element contains anything other than alpha-numeric characters, underscores or dashes.
  numeric               No	Returns FALSE if the form element contains anything other than numeric characters.
  integer               No	Returns FALSE if the form element contains anything other than an integer.
  decimal               No	Returns FALSE if the form element contains anything other than a decimal number.
  is_natural            No	Returns FALSE if the form element contains anything other than a natural number: 0, 1, 2, 3, etc.
  is_natural_no_zero	No	Returns FALSE if the form element contains anything other than a natural number, but not zero: 1, 2, 3, etc.
  valid_url             No	Returns FALSE if the form element does not contain a valid URL.
  valid_email           No	Returns FALSE if the form element does not contain a valid email address.
  valid_emails          No	Returns FALSE if any value provided in a comma separated list is not a valid email.
  valid_ip              Yes	Returns FALSE if the supplied IP address is not valid. Accepts an optional parameter of ‘ipv4’ or ‘ipv6’ to specify an IP format.
  valid_base64          No	Returns FALSE if the supplied string contains anything other than valid Base64 characters.
 */
/*
  $config = array(
               array(
                     'field'   => 'Username', 
                     'label'   => 'username', 
                     'rules'   => 'required|trim|callback_rut'
                  ),
               array(
                     'field'   => 'Password', 
                     'label'   => 'password', 
                     'rules'   => 'required|trim|min_length[2]|max_length[100]'
                  )
            );
*/
//$this->form_validation->set_rules($config);
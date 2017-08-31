<?php
$viewdefs ['Cases'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 =>
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');"value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' =>
      array (
        'LBL_CASE_INFORMATION' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array (
      'lbl_case_information' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'serial_nbr_c',
            'label' => 'LBL_SERIAL_NBR',
          ),
          1 =>
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
        ),
        1 =>
        array (
          0 => 'priority',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        3 =>
        array (
          0 => 'account_name',
          1 =>
          array (
            'name' => 'use_email_c',
            'label' => 'LBL_USE_EMAIL',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 =>
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        5 =>
        array (
          0 => 'description',
        ),
        6 =>
        array (
          0 => 'resolution',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
$viewdefs['Cases']['DetailView']['templateMeta'] = array (
  'form' =>
  array (
    'buttons' =>
    array (
      0 => 'EDIT',
      1 => 'DUPLICATE',
      2 => 'DELETE',
      3 => 'FIND_DUPLICATES',
      4 =>
      array (
        'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');"value="{$MOD.LBL_PRINT_AS_PDF}">',
      ),
    ),
  ),
  'maxColumns' => '2',
  'widths' =>
  array (
    0 =>
    array (
      'label' => '10',
      'field' => '30',
    ),
    1 =>
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'useTabs' => true,
  'tabDefs' =>
  array (
    'LBL_CASE_INFORMATION' =>
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    'LBL_AOP_CASE_UPDATES' =>
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
    ),
  ),
);
?>

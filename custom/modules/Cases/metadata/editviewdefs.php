<?php
$viewdefs ['Cases'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
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
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
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
            'type' => 'readonly',
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
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'case_update_form',
            'studio' => 'visible',
          ),
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
$viewdefs['Cases']['EditView']['templateMeta'] = array (
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
  'includes' => 
  array (
    0 => 
    array (
      'file' => 'include/javascript/bindWithDelay.js',
    ),
    1 => 
    array (
      'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
    ),
    2 => 
    array (
      'file' => 'include/javascript/qtip/jquery.qtip.min.js',
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
  'form' => 
  array (
    'enctype' => 'multipart/form-data',
  ),
);
?>

<?php
$viewdefs ['Users'] = 
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
          3 => 
          array (
            'customCode' => '<input  type="submit" class="button" name="create" id="create" value="Create User" onClick="document.location=\'index.php?module=Users&action=EditView&return_module=Users&return_action=DetailView\'">',
          ),
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    0 => 
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/DetailViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/DetailViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'user_name',
          1 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{$USER_TYPE_READONLY}',
          ),
        ),
        3 => 
        array (
          0 => 'picture',
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'download_source_code_c',
            'label' => 'LBL_DOWNLOAD_SOURCE_CODE',
          ),
        ),
      ),
      //~ 'lbl_editview_panel1' => 
      //~ array (
        //~ 0 => 
        //~ array (
          //~ 0 => 
          //~ array (
            //~ 'name' => 'asterisk_ext_c',
            //~ 'label' => 'LBL_ASTERISK_EXT',
          //~ ),
          //~ 1 => 
          //~ array (
            //~ 'name' => 'asterisk_inbound_c',
            //~ 'label' => 'LBL_ASTERISK_INBOUND',
          //~ ),
        //~ ),
        //~ 1 => 
        //~ array (
          //~ 0 => 
          //~ array (
            //~ 'name' => 'asterisk_outbound_c',
            //~ 'label' => 'LBL_ASTERISK_OUTBOUND',
          //~ ),
          //~ 1 => 
          //~ array (
            //~ 'name' => 'agent_id_c',
            //~ 'label' => 'LBL_AGENT_ID',
          //~ ),
        //~ ),
        //~ 2 => 
        //~ array (
          //~ 0 => 
          //~ array (
            //~ 'name' => 'agent_name_c',
            //~ 'label' => 'LBL_AGENT_NAME',
          //~ ),
          //~ 1 => 
          //~ array (
            //~ 'name' => 'agent_pin_c',
            //~ 'label' => 'LBL_AGENT_PIN',
          //~ ),
        //~ ),
      //~ ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 'department',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => 'phone_other',
        ),
        4 => 
        array (
          0 => '',
          1 => 'phone_fax',
        ),
        5 => 
        array (
          0 => '',
          1 => 'phone_home',
        ),
        6 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        7 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        8 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        9 => 
        array (
          0 => 'address_country',
        ),
        10 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
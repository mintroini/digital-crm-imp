<?php /* Smarty version 2.6.29, created on 2017-08-30 05:17:20
         compiled from cache/include/InlineEditing/CasesEditViewserial_nbr_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['serial_nbr_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['serial_nbr_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['serial_nbr_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['serial_nbr_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['serial_nbr_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >
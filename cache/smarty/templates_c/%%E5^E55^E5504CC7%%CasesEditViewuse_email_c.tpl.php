<?php /* Smarty version 2.6.29, created on 2017-08-30 04:52:47
         compiled from cache/modules/AOW_WorkFlow/CasesEditViewuse_email_c.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['use_email_c']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['use_email_c']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['use_email_c']['name']; ?>
" 
value="1" title='' tabindex="1" <?php echo $this->_tpl_vars['checked']; ?>
 >
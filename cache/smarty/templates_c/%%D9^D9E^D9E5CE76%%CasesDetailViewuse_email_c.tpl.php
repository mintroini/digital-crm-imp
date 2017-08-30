<?php /* Smarty version 2.6.29, created on 2017-08-30 04:53:00
         compiled from cache/modules/AOW_WorkFlow/CasesDetailViewuse_email_c.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['use_email_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['use_email_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['use_email_c']['name']; ?>
" value="$fields.use_email_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
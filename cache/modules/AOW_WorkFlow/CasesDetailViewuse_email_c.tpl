
{if strval($fields.use_email_c.value) == "1" || strval($fields.use_email_c.value) == "yes" || strval($fields.use_email_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.use_email_c.name}" id="{$fields.use_email_c.name}" value="$fields.use_email_c.value" disabled="true" {$checked}>

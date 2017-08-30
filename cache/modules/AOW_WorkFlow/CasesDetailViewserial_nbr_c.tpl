
{if strlen($fields.serial_nbr_c.value) <= 0}
{assign var="value" value=$fields.serial_nbr_c.default_value }
{else}
{assign var="value" value=$fields.serial_nbr_c.value }
{/if} 
<span class="sugar_field" id="{$fields.serial_nbr_c.name}">{$fields.serial_nbr_c.value}</span>

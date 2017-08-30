<?php /* Smarty version 2.6.29, created on 2017-08-30 06:05:18
         compiled from modules/AOR_Reports/Dashlets/AORReportsDashlet/dashlet.tpl */ ?>
<?php if (! $this->_tpl_vars['onlyCharts']): ?>
    <?php echo '
        <script>
                function changeReportPage(record, offset, group_value, table_id){
                 var paginationButtonCaller = $(this);
                    params = reportDashletParams[record];
                    $.get(\'index.php\',
                            {module : \'AOR_Reports\',
                                record : record,
                                offset : offset,
                                table_id : table_id,
                                \'parameter_id\' : params[\'ids\'],
                                \'parameter_operator\' : params[\'operators\'],
                                \'parameter_type\' : params[\'types\'],
                                \'parameter_value\' : params[\'values\'],
                                action : \'changeReportPage\'}).done(
                            function(data){
                              var _data = $(data);
                              // Fix the icons in the dashlet pagination.
                              _data.find(\'.paginationChangeButtons\').find(\'button\').each(function(i,v){
                                $(this).attr(\'id\', $(this).attr(\'id\')+\'dashlet\');
                                $(this).addClass(\'btn-aor-reports-dashlet-pagination\');
                              });
                              $(\'#report_table_\' + table_id).replaceWith(_data);
                            }
                    );
                }
            $(document).ready(function(){
                if(\''; ?>
<?php echo $this->_tpl_vars['report_id']; ?>
<?php echo '\'){
                    if(typeof reportDashletParams === \'undefined\'){
                        reportDashletParams = [];
                    }
                    reportDashletParams[\''; ?>
<?php echo $this->_tpl_vars['report_id']; ?>
<?php echo '\'] = '; ?>
<?php echo $this->_tpl_vars['parameters']; ?>
<?php echo '
                    changeReportPage(\''; ?>
<?php echo $this->_tpl_vars['report_id']; ?>
<?php echo '\', 0, \'\',\''; ?>
<?php echo $this->_tpl_vars['dashlet_id']; ?>
<?php echo '\');
                }
            });

        </script>
    '; ?>

    <div class="aor_report_contents">

        <table id="report_table_<?php echo $this->_tpl_vars['dashlet_id']; ?>
">
            <tr>
                <td><?php echo $this->_tpl_vars['MOD']['LBL_DASHLET_CHOOSE_REPORT']; ?>
</td>
            </tr>
        </table>

    </div>
<?php endif; ?>
<div style="padding: 10px">
    <?php echo $this->_tpl_vars['chartHTML']; ?>

</div>

<script src="modules/AOR_Reports/Dashlets/AORReportsDashlet/AORReportsDashlet.js"></script>
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin"><?php echo _l('estimate_civil_unit_converion_calculator_title'); ?></h4>
                        <hr class="hr-panel-heading" />
                        <?php echo form_open($this->uri->uri_string()); ?>
                        <div class="form-group select-placeholder">
                            <label for="estimate_conversion_type"><?php echo _l('estimate_conversion_type'); ?></label>
                            <select name="estimate_conversion_type" id="estimate_conversion_type" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                <option value="1"><?php echo _l('estimate_conversion_type_length'); ?></option>
                                <option value="2"><?php echo _l('estimate_conversion_type_area'); ?></option>
                                <option value="3"><?php echo _l('estimate_conversion_type_volume'); ?></option>
                               
                            </select>
                        </div>
                        <div class="form-group select-placeholder">
                            <label for="estimate_conversion_unit"><?php echo _l('estimate_conversion_unit'); ?></label>
                            <select name="estimate_conversion_unit" id="estimate_conversion_unit" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                <option value="1"><?php echo _l('estimate_conversion_unit_metre'); ?></option>
                                <option value="2"><?php echo _l('estimate_conversion_unit_feet'); ?></option>
                                <option value="3"><?php echo _l('estimate_conversion_unit_kilometre'); ?></option>
                                <option value="4"><?php echo _l('estimate_conversion_unit_mile'); ?></option>
                                <option value="5"><?php echo _l('estimate_conversion_unit_yard'); ?></option>
                                <option value="6"><?php echo _l('estimate_conversion_unit_inch'); ?></option>
                                <option value="7"><?php echo _l('estimate_conversion_unit_centimetre'); ?></option>
                            </select>
                        </div>
                         <div class="input-group">
                           <label for="estimate_conversion_value"><?php echo _l('estimate_conversion_value'); ?></label>
                           <input type="text" class="form-control" name="volume" id="volume">
                         </div>
                        <button class="btn btn-info" type="submit"><?php echo _l('estimate_conversion_calculate'); ?></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<script>
    $(function(){
        appValidateForm($('form'),{export_type:'required'});
        $('#export_type').on('change',function(){
            var val = $(this).val();
            $('.shifter').addClass('hide');
            $('.'+val+'_shifter').removeClass('hide');
        });
    });
</script>
</body>
</html>

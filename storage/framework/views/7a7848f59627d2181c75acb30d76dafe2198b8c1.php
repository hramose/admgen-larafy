
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2"><?php echo e(trans('messages.system')); ?> <?php echo e(trans('messages.configuration')); ?></h4>
            <?php echo Form::open(['route' => 'configuration.store','role' => 'form', 'class'=>'config-system-form','id' => 'config-system-form','data-disable-enter-submission' => '1','data-no-form-clear' => 1]); ?>


            <div class="row">

                <div class="col-sm-6">
                    <div class="input-field col s6">
                        <?php echo Form::input('text','application_name',(config('config.application_name')) ? : '',[]); ?>

                        <?php echo Form::label('application_name',trans('messages.application').' '.trans('messages.name'),[]); ?>

                    </div>
                    <div class="input-field col s6">
                        <?php echo Form::select('timezone_id', [null=>trans('messages.select_one')] + config('timezone'),(config('config.timezone_id')) ? : '',[]); ?>

                        <?php echo Form::label('timezone_id',trans('messages.timezone'),[]); ?>

                    </div>
                    <div class="input-field col s6">
                        <?php echo Form::select('default_language', $languages,(config('config.default_language')) ? : '',[]); ?>

                        <?php echo Form::label('default_language',trans('messages.default').' '.trans('messages.language'),[]); ?>

                    </div>
                    <div class="input-field col s6">
                        <?php echo Form::select('direction', [
                        'ltr' => trans('messages.ltr'),
                        'rtl' => trans('messages.rtl'),
                        ],(config('config.direction')) ? : 'ltr',[]); ?>

                        <?php echo Form::label('direction',trans('messages.direction'),[]); ?>

                    </div>
                    <div class="input-field col s6">
                        <?php echo Form::select('date_format', [
                        'd-m-Y' => date('d-m-Y'),
                        'm-d-Y' => date('m-d-Y'),
                        'M-d-Y' => date('M-d-Y'),
                        'd-M-Y' => date('d-M-Y'),
                        ],(config('config.date_format')) ? : 'd-m-Y',[]); ?>

                        <?php echo Form::label('date_format','Date Format',[]); ?>

                    </div>

                    <div class="input-field col s6">
                        <?php echo Form::input('text','allowed_upload_file',(config('config.allowed_upload_file')) ? : '',[]); ?>

                        <?php echo Form::label('allowed_upload_file',trans('messages.allowed_upload_file_type'),[]); ?>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-field col s6">
                        <?php echo Form::select('notification_position', [
                        'toast-top-right'=>trans('messages.top_right'),
                        'toast-top-left' => trans('messages.top_left'),
                        'toast-bottom-right' => trans('messages.bottom_right'),
                        'toast-bottom-left' => trans('messages.bottom_left')
                        ],(config('config.notification_position')) ? : '',[]); ?>

                        <?php echo Form::label('notification_position',trans('messages.notification_position'),[]); ?>

                    </div>

                    <div class="input-field col s6">
                        <?php echo Form::select('time_format', [
                        '1'=>'12 Hours',
                        '0'=>'24 Hours'
                        ],(config('config.time_format')) ? : '',[]); ?>

                        <?php echo Form::label('time_format','Time Format',[]); ?>

                    </div>
                    <div class="row">



                    </div>
                    <div class="col-md-6">
                        <div class="input-field col s6">

                            <p>
                                <input name="error_display" type="checkbox" class="checkbox-input filled-in" id="error_display" value="1" <?php echo e((config('config.error_display') == 1) ? 'checked' : ''); ?> data-off-value="0">
                                <?php echo Form::label('error_display',trans('messages.error').' '.trans('messages.display'),[]); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field col s6">

                        <p>
                            <input name="multilingual" type="checkbox" class="checkbox-input filled-in" id="multilingual" value="1" <?php echo e((config('config.multilingual') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('multilingual',trans('messages.multilingual'),[]); ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_ip_filter" type="checkbox" class="checkbox-input filled-in" id="enable_ip_filter" value="1" <?php echo e((config('config.enable_ip_filter') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_ip_filter',trans('messages.enable').' IP '.trans('messages.filter'),[]); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_activity_log" type="checkbox" class="checkbox-input filled-in" id="enable_activity_log" value="1" <?php echo e((config('config.enable_activity_log') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_activity_log',trans('messages.enable').' IP '.trans('messages.activity').''.trans('messages.log'),[]); ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_email_template" type="checkbox" class="checkbox-input filled-in" id="enable_email_template" value="1" <?php echo e((config('config.enable_email_template') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_email_template',trans('messages.enable').' IP '.trans('messages.email').''.trans('messages.template'),[]); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_to_do" type="checkbox" class="checkbox-input filled-in" id="enable_to_do" value="1" <?php echo e((config('config.enable_to_do') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_to_do',trans('messages.enable').' '.trans('messages.to_do'),[]); ?>

                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_message" type="checkbox" class="checkbox-input filled-in" id="enable_message" value="1" <?php echo e((config('config.enable_message') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_message',trans('messages.enable').' '.trans('messages.message'),[]); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_backup" type="checkbox" class="checkbox-input filled-in" id="enable_backup" value="1" <?php echo e((config('config.enable_backup') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_backup',trans('messages.enable').' '.trans('messages.backup'),[]); ?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_custom_field" type="checkbox" class="checkbox-input filled-in" id="enable_custom_field" value="1" <?php echo e((config('config.enable_custom_field') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_custom_field',trans('messages.enable').' '.trans('messages.custom').' '.trans('messages.field'),[]); ?>

                        </p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_group_chat" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_group_chat" value="1" <?php echo e((config('config.enable_group_chat') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_group_chat',trans('messages.enable').' '.trans('messages.group').' '.trans('messages.chat'),[]); ?>

                        </p>


                    </div>
                    <br>
                    <div id="enable_group_chat_field">
                        <div class="input-field col s6">
                            <p>
                                <input name="enable_chat_refresh" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_chat_refresh" value="1" <?php echo e((config('config.enable_chat_refresh') == 1) ? 'checked' : ''); ?> data-off-value="0">
                                <?php echo Form::label('enable_chat_refresh',trans('messages.enable').' '.trans('messages.chat').' '.trans('messages.refresh'),[]); ?>

                            </p>

                        </div>
                    </div>
                        


                    <div id="enable_chat_refresh_field">
                        <div class="input-field col s3">
                            

                            <?php echo Form::input('text','chat_refresh_duration',(config('config.chat_refresh_duration')) ? : '',[]); ?>

                            <?php echo Form::label('chat_refresh_duration',trans('messages.chat').' Refresh Duration (In Second)',[]); ?>

                        </div>
                    </div>
                </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field col s6">

                        <input name="maintenance_mode" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="maintenance_mode" value="1" <?php echo e((config('config.maintenance_mode') == 1) ? 'checked' : ''); ?> data-off-value="0">
                        <?php echo Form::label('maintenance_mode',trans('messages.maintenance').' '.trans('messages.mode'),[]); ?>

                        </p>
                    </div>				  
                    <div id="maintenance_mode_field">
                        <div class="input-field col s6">

                            <?php echo Form::input('text','under_maintenance_message',(config('config.under_maintenance_message')) ? : '',[]); ?>

                            <?php echo Form::label('under_maintenance_message',trans('messages.under_maintenance_message'),[]); ?>

                            <span class="countdown"></span>
                        </div>
                    </div>
                </div>
                </div>
            
        </div>
        <div class="clear"></div>
        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action"><?php echo e(isset($buttonText) ? $buttonText : trans('messages.save')); ?>

                    
                </button>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>
</div>
</div>
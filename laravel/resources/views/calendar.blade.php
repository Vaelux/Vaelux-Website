@extends('layouts.app')

@section('title')
- Calendar
@endsection

@section('breadcrumbs')
    <div id="#breadcrumbs-wrapper">
        &nbsp;> Calendar
    </div>
@endsection

@section('content')

    <div class="content">

        <style>
            .content p
            {
                text-indent : 20px;
            }

            .content .tab-pane li
            {
                padding-left   : 20px;
                text-indent    : -20px;
                padding-bottom : 10px;
            }

            .col-md-2
            {
                margin-left  : 0px;
                padding-left : 0px;
            }

            .indent-section
            {
                padding-left  : 20px;
                margin-bottom : 30px;
            }

            .fa.bg-big
            {
                color       : rgb(45, 45, 45);
                position    : absolute;
                margin-top  : -20px;
                font-size   : 200px;
                margin-left : 60%;
                transform   : rotate(30deg);
                z-index     : 0;
            }

            .panel-default
            {
                overflow:hidden;
            }

            .panel-default .panel-heading
            {
                background-image : none;
            }

            .panel-default .panel-heading a,
            .panel-default .panel-heading a:hover
            {
                text-decoration: none;
            }

            .panel-title
            {
                font-size: 110%;
                font-weight:normal;
                font-family:'Orbitron', Sans-serif;
            }

            .panel-collapse.collapse
            {
                border-top: 1px solid rgb(166, 166, 166);
            }

            .panel-collapse .panel-body
            {
                padding-left:10px;
                padding-right:10px;
            }
        </style>

        <div class="modal fade" id="modal-edit-event" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-edit-event-label">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" id="edit-event-id" name="edit-event-id">

                            <fieldset class="form-group">
                                <label for="edit-event-title">Title</label>
                                <input type="text" name="title" id="edit-event-title" class="form-control">

                                <label for="edit-event-description">Description</label>
                                <textarea name="description" id="edit-event-description" class="form-control" style="resize:vertical;"></textarea>

                                <label for="edit-event-game">Game</label>
                                <input type="text" name="game" id="edit-event-game" class="form-control">
                            </fieldset>

                            <fieldset class="form-group">
                                <legend>Dates</legend>
                                <div class="container" style="width:100%;">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Start</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="date" name="startDate" id="edit-event-startDate" class="form-control">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="time" name="startTime" id="edit-event-startTime" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="allDay" id="edit-event-allDay" class="form-check-input" data-toggle="toggle" data-on="All Day" data-off="End"
                                                   data-width="80" data-height="38">
                                        </div>
                                        <div id="end">
                                            <div class="col-sm-5">
                                                <input type="date" name="endDate" id="edit-event-endDate" class="form-control">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="time" name="endTime" id="edit-event-endTime" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group">
                                <legend>Colors</legend>
                                <div class="container" style="width:100%;">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="edit-event-textColor">Text</label>
                                            <input type='text' id="edit-event-textColor"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="edit-event-backgroundColor">BG</label>
                                            <input type='text' id="edit-event-backgroundColor"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="edit-event-borderColor">Border</label>
                                            <input type='text' id="edit-event-borderColor"/>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group">
                                <legend>Signups</legend>
                                <input type="checkbox" name="allowSignups" id="edit-event-allowSignups" data-toggle="toggle" data-on="Allow Signups" data-off="Disallow Signups" data-width="150"
                                   data-height="38">
                            </fieldset>

                            <fieldset class="form-group">
                                <legend>Notifications</legend>
                                <div class="container" style="width:100%;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="checkbox" name="discordNotify" id="edit-event-discordNotify" class="form-check-input" data-toggle="toggle" data-on="Discord On" data-off="Discord Off" data-width="120" data-height="38">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="discord-notifications">
                                                <input type="checkbox" name="discordNotifyByPM" id="edit-event-discordNotifyByPM" class="form-check-input" data-toggle="toggle" data-on="DM Participants"
                                                   data-off="Post To Events Channel" data-width="400" data-height="38">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="discord-notifications">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotifyOnStart" id="edit-event-discordNotifyOnStart" class="form-check-input" data-toggle="toggle"
                                                   data-on="On Start" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotifyOnSignup" id="edit-event-discordNotifyOnSignup" class="form-check-input" data-toggle="toggle"
                                                   data-on="On Signup" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotifyOnChange" id="edit-event-discordNotifyOnChange" class="form-check-input" data-toggle="toggle"
                                                   data-on="On Change" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotifyOnDelete" id="edit-event-discordNotifyOnDelete" class="form-check-input" data-toggle="toggle"
                                                   data-on="On Cancel" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotify1Hour" id="edit-event-discordNotify1Hour" class="form-check-input" data-toggle="toggle"
                                                   data-on="1 Hour" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotify1Day" id="edit-event-discordNotify1Day" class="form-check-input" data-toggle="toggle"
                                                   data-on="1 Day" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" name="discordNotify1Week" id="edit-event-discordNotify1Week" class="form-check-input" data-toggle="toggle"
                                                   data-on="1 Week" data-off="Off" data-width="120" data-height="38">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="btn-save-event" type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div id='calendar'></div>

                </div>
            </div>
        </div>

        <script>
            $(function()
            {
	            $.ajaxSetup(
                {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('.navbar-nav li').removeClass('active');
                $('.navbar-nav .nav-about').addClass('active');

	            $('#calendar').fullCalendar(
                {
                    header        :
                    {
                        left  : 'prev,next today',
                        center: 'title',
                        right : 'month,agendaWeek,agendaDay,listWeek'
                    },
                    eventSources  :
                    [
                        {
                            url        : '/calendar/events',
                            color      : '#555',
                            textColor  : '#ddd',
                            borderColor: '#111',
                        }
                    ],
                    fixedWeekCount: false,
                    height        : 700,
                    eventClick    : function (calEvent, jsEvent, view)
                    {
                        $.ajax(
                        {
                            url     : "/calendar/event/" + calEvent.event_id,
                            type    : "POST",
                            dataType: "json",
                            success : function (data)
                            {
	                            $('#edit-event-id').val(calEvent.event_id);

                                $('#modal-edit-event').find('#modal-edit-event-label').html('Edit ' + data['title']);

                                $('#edit-event-title').val(data['title']);
                                $('#edit-event-description').val(data['description']);

                                $('#edit-event-startDate').val(moment.utc(data['start']).local().format('YYYY-MM-DD'));
                                $('#edit-event-startTime').val(moment.utc(data['start']).local().format('HH:mm:ss'));
                                $('#edit-event-endDate').val(moment.utc(data['end']).local().format('YYYY-MM-DD'));
                                $('#edit-event-endTime').val(moment.utc(data['end']).local().format('HH:mm:ss'));
                                $('#edit-event-allDay').bootstrapToggle(data['end'] == null ? 'on' : 'off');
                            },
                            error   : function (error)
                            {
                                alert('Something went wrong! Please refresh the page and try again.');
                            }
                        });


                        $('#modal-edit-event').modal();
                    },
                });

	            $('#btn-save-event').click(save_event);

	            $('#edit-event-allDay').change(function ()
	            {
	            	if($(this).prop('checked'))
                    {
	                    $('#end').hide('medium');
                    }
                    else
                    {
	                    $('#end').show('medium');
                    }
	            });

	            if (!$('#edit-event-allDay').prop('checked'))
	            {
		            $('#end').show();
	            }

	            $('#edit-event-discordNotify').change(function ()
	            {
		            if ($(this).prop('checked'))
		            {
			            $('.discord-notifications').show('medium');
		            }
		            else
		            {
			            $('.discord-notifications').hide('medium');
		            }
	            });

	            if (!$('#edit-event-discordNotify').prop('checked'))
	            {
		            $('.discord-notifications').hide();
	            }

	            $("#edit-event-textColor").spectrum({
		            color               : "#ddd",
		            flat                : false,
		            allowEmpty          : true,
		            showAlpha           : false,
		            showPalette         : true,
		            showPaletteOnly     : false,
		            togglePaletteOnly   : false,
		            showSelectionPalette: false,
		            clickoutFiresChange : true,
		            preferredFormat     : "hex",
		            palette             : [['black', 'white', 'blanchedalmond'],
		                                   ['rgb(255, 128, 0);', 'hsv 100 70 50', 'lightyellow']],
	            });

	            $("#edit-event-backgroundColor").spectrum({
		            color               : "#555",
		            flat                : false,
		            allowEmpty          : true,
		            showAlpha           : false,
		            showPalette         : true,
		            showPaletteOnly     : false,
		            togglePaletteOnly   : false,
		            showSelectionPalette: false,
		            clickoutFiresChange : true,
		            preferredFormat     : "hex",
		            palette             : [['black', 'white', 'blanchedalmond'],
		                                   ['rgb(255, 128, 0);', 'hsv 100 70 50', 'lightyellow']],
	            });

	            $("#edit-event-borderColor").spectrum({
		            color               : "#111",
		            flat                : false,
		            allowEmpty          : true,
		            showAlpha           : false,
		            showPalette         : true,
		            showPaletteOnly     : false,
		            togglePaletteOnly   : false,
		            showSelectionPalette: false,
		            clickoutFiresChange : true,
		            preferredFormat     : "hex",
		            palette             : [['black', 'white', 'blanchedalmond'],
		                                   ['rgb(255, 128, 0);', 'hsv 100 70 50', 'lightyellow']],
	            });
            });

            function save_event()
            {
	            $.ajax(
                {
                    url     : "/calendar/event/" + $('#edit-event-id').val() + "/save",
                    type    : "POST",
                    dataType: "json",
                    data:
                    {
                        title: $('#edit-event-title').val(),
                        description: $('#edit-event-description').val()

                    },
                    success: function (data)
                    {
	                    $('#calendar').fullCalendar('refetchEvents');
                    },
	                error: function (error)
	                {
		                alert('Something went wrong! Please refresh the page and try again.');
	                }
                });

	            $('#modal-edit-event').modal('hide');
            }
        </script>
    </div>

@endsection

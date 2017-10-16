<div class="modal fade ModalSusscess" id="ModalSusscess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle"></i>
				</button>
				<h4 class="modal-title" id="myModalLabel">{!! __('text.reservation') !!}</h4>
			</div>
			<div class="modal-body">					
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
				            <div class="input-group date datetimepicker" id="check_in">
				                <input type='text' class="form-control" placeholder="{!! __('text.check_in') !!}" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
				            <div class="input-group date datetimepicker" id="check_out">
				                <input type='text' class="form-control" placeholder="{!! __('text.check_out') !!}" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
				            <select id="number_of_guests" class="form-control" data-width="100%">
								<option value="">{!! __('text.number_of_guests') !!}</option>
								<option value="1">1</option>
								<option value="2">2</option>
							</select>
				        </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
			             	<select id="room_id" class="form-control" data-width="100%">
								<option value="">{!! __('text.room_type') !!}</option>
								<option value="1">STANDARD - 60 USD</option>
								<option value="2">TWIN - 70 USD</option>
								<option value="3">SUPERIOR - 70 USD</option>
							</select>
				        </div>
					</div>
				</div>
				<div class="group-btn text-center">
					<button type="button" class="btn btn-check btn-1e" id="btnCheck">{!! __('text.check') !!}</button>
				</div>					
			</div>
		</div>
	</div>
</div><!-- /#ModalSusscess -->

<div class="modal fade ModalreCheck" id="ModalreCheck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle"></i>
				</button>
				<h4 class="modal-title" id="myModalLabel">{!! __('text.sorry_out_of_room') !!}</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					{!! $contentList[9] !!}
				</div>
				<div class="group-btn text-center">
					<a href="javascript:;" id="btnCheckAgain" class="btn btn-checkagain btn-2e">{!! __('text.check_again') !!}</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#ModalreCheck -->

<div class="modal fade ModalSusscess" id="arrival-airport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle"></i>
				</button>
				<h4 class="modal-title" id="myModalLabel">{!! __('text.airport') !!}</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					{!! $contentList[7] !!}
				</div>
			</div>
		</div>
	</div>
</div><!-- /#ModalreCheck -->

<div class="modal fade ModalSusscess" id="at-taxi-stand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle"></i>
				</button>
				<h4 class="modal-title" id="myModalLabel">{!! __('text.at_taxi_stand') !!}</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					{!! $contentList[8] !!}
				</div>
			</div>
		</div>
	</div>
</div><!-- /#ModalreCheck -->
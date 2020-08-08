<!-- @extends ('layouts.layouts')
@section('title'. 'Event Table')
@section('content') -->

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1" id="table_id">
						<thead>
							<tr class="row100 head">						
								<th class="column100 column1" data-column="column1">Event ID</th>
								<th class="column100 column2" data-column="column2">Event Name</th>
								<th class="column100 column3" data-column="column3">Location</th>
								<th class="column100 column4" data-column="column4">Date</th>
                                <th class="column100 column5" data-column="column5">Option</th>
                                
							</tr>
						</thead>
						<tbody>
							@foreach($events as $event)
							<tr class="row100">
								
								<td class="column100 column1" data-column="column1">{{$event->id}}</td>
								<td class="column100 column2" data-column="column2">{{$event->event_name}}</td>
								<td class="column100 column3" data-column="column3">{{$event->location}}</td>
								<td class="column100 column4" data-column="column4">{{$event->date}}</td>
                                <td class="column100 column5" data-column="column5">
								<a href="event2/{{$event->id}} " class="btn btn-outline-primary btn-sm" role="button">Edit</a>
								<a href="event2/{{$event->id}}/participant" class="btn btn-outline-success btn-sm" role="button">Show</a>
								</td>								
								
							</tr>
							@endforeach
						

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


<!-- @endsection -->
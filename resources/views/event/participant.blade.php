<!-- @extends ('layouts.layouts')
@section('title'. 'Participants Table')
@section('content') -->

<div class="limiter">


		<div class="container-table100">	
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110" id="printTable">
					<table data-vertable="ver1" id="table_id">
							<thead>					
							<tr class="row100 head">						
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">Firstname</th>
								<th class="column100 column3" data-column="column3">Lastname</th>
								<th class="column100 column4" data-column="column4">Department</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($participants as $participant)
							<tr class="row100">							
								<td class="column100 column1" data-column="column1">{{$participant->id}}</td>
								<td class="column100 column2" data-column="column2">{{$participant->firstname}}</td>
								<td class="column100 column3" data-column="column3">{{$participant->lastname}}</td>
								<td class="column100 column4" data-column="column4">{{$participant->department}}</td>                      
								<!-- <td class="column100 column6" data-column="column6"><a href="deleteMember/{{$participant->id}}" class="btn btn-danger"  type="submit">Delete</a></td> -->
							</tr>		
							@endforeach
						
							<button type="button" class="btn btn-success btn-md" onclick="myFunction()">Print</button>
							<!-- <iframe name="print_frame" width="0" height="0" frameborder="0"></iframe> -->
							<script>

									// function myFunction(){
									// 	window.frames["print_frame"].document.bofy.innerHTML =
									// 	document.getElementById("printTable").innerHTML;

									// 	window.frames["print_frame"].window.focus();

									// 	window.frames["print_frame"].window.print();
									// }

								function myFunction() {
								window.print();
								}
								 </script>
						</tbody>
						
					</table>
				
				</div>
			</div>
		</div>
					
	</div>


	

<!-- @endsection -->
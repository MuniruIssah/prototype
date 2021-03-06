@extends('layouts.master')
@section('content')
<nav >
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
    </nav>
   {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav justify-centered mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>--}}
    <div class="container">
        <p>logged as <b>Isaac</b> <button type = "submit" href="#" class="btn btn-primary">Logout</button></p>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-user-plus"></i>
                  Invitations
                    <span class="badge badge-light">4</span>
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                  <p>
					  <span>
						  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#history">
							  <b>Dr.Kwame</b>
						  </button></span>
					  	  <a href="#">Accept</a> | <a href="#">Deny</a> | <a type="button" data-toggle="modal" href="#exampleModal" data-whatever="@KwameOwusu">Message</a>
				  </p>
				  <p>
					  <span>
						  <button type="button" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Click to view Doctor's History">
							  <b>Dr. Habib</b>
						  </button></span>
					  	  <a href="#">Accept</a> | <a href="#">Deny</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <h2 class="text-center text-primary">Hospital Management System</h2>
        <div class="records">
            <table class="table">
              <h3 class="text-center text-info">Medical Records</h3>
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Temperature &#x2103</th>
                  <th scope="col">Blood Pressure mmHg</th>
                  <th scope="col">Diagnosis</th>
                  <th scope="col">Prescription</th>
                  <th scope="col">Remarks</th>
                  <th scope="col">Updated by</th>
                  <th scope="col">Associated Hospital</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>36.1</td>
                  <td>120/80</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
		<button type="button" class="btn btn-outline-secondary">View Full History</button>
		
    </div>
    
	
	{{-- Modals Section --}}
   {{-- Modal for viewing Doctor's history --}}
	<div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="History" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      </div>
      <div class="modal-body">
		<div class="card card-profile text-center">
		  <img alt="" class="card-img-top" src="images/rawpixel-593598-unsplash">
		  <div class="card-block">
			<img alt="" class="img-thumbnail" src="images/profile.jpg">
			<h4 class="card-title">
			  Dr. Kwame Owusu
        <small>Public Health</small>
			  <small>37 Military Hospital</small>
			</h4>
			<div class="card-links">
			  <a class="fa fa-dribbble" href="#"><i class="fab fa-linkedin-in"></i></a>
			  <a class="fa fa-twitter" href="#"><i class="fab fa-twitter"></i></a>
			  <a class="fa fa-facebook" href="#"><i class="far fa-2x fa-comment-alt"></i></a>

        <br/>

			</div>
		  </div>
		</div>

      </div>
    </div>
  </div>

  {{-- Modal for sending a message to a Doctor --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" readonly="true">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


{{-- Chatroom 
  <div class="chatroom">
    <a href="#" class="back-to-top" style="display: inline;">
      <i class="far fa-3x fa-comment-alt"></i>
    </a>
  </div>
   --}}
   <div class="chat-sidebar">
    <h4>Chatroom</h4>
            <div class="sidebar-name">
                {{-- Pass username and display name to register popup --}}
                <a href="javascript:register_popup('Dr.Owusu', 'Dr. Owusu');">
                    <img width="30" height="30" src="images/profile.jpg" />
                    <span>Dr. Owusu</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('Dr.Habib', 'Dr. Habib');">
                    <img width="30" height="30" src="images/profile.jpg" />
                    <span>Dr. Habib</span>
                </a>
            </div>
        </div>

@endsection
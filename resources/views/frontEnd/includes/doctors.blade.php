<div class="team" id="team">

  <div class="container">
      <h3 class="title-w3-agile">Our Doctors</h3>
    <div class="agileits-team-grids">
      @foreach($users as $user)
      <div class="col-md-3  col-sm-6 col-xs-6 agileits-team-grid top">
        <div class="team-info">
          <img src="{{asset($user->image)}}" alt="">
          <div class="team-caption">
            <h4>{{$user->name}}</h4>
            <p>{{$user->designation}}</p>

          </div>
        </div>
      </div>

    @endforeach

                
      <div class="clearfix"></div>
</div>
</div>
</div>

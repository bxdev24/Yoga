@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="headerBar">
			<img src="images/logoYoga.png" style="height: 60px; float: left; margin-left: 17px; margin-top: 17px;"></img>
				<div class="navContainer">
					<a href="YogaHome.html">
					<div class="navButton">
						<p>Home</p>
					</div>
					</a>
					<a href="YogaPosesMenu.html">
					<div class="navButton">
						<p>Poses</p>
					</div>
					</a>
					<a href="YogaSequencer.html">
					<div class="navButton">
						<p>Sequences</p>
					</div>
					</a>
				</div>
				<a href="">
				<div class="navButton" style="float: right; margin: 20px;">
					<a href="YogaLogin.html">
					<p>Login</p>
					</a>
				</div>
				</a>
			</div>
			<div class="content">
				<div class="contentBox" style="text-align:left; padding-left: 10px; padding-right: 10px;">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae nisi in dolor dictum placerat. Phasellus sit amet nisl nec sem fringilla ultrices. 
					Etiam nec semper lacus. Maecenas nec tempus nulla, ac interdum diam. Mauris a lorem vitae odio porttitor gravida. Proin mi quam, tincidunt a viverra nec, ultricies vitae risus. 
					Nunc aliquet lacus posuere ipsum commodo, ornare ullamcorper massa venenatis. Maecenas pellentesque mattis ex, quis commodo dui ornare in. Aliquam accumsan est id viverra aliquam. 
					Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam pellentesque dictum nisl at cursus. 
					Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas a ipsum semper elit fermentum congue. Cras vel pharetra mauris. 
					Etiam cursus sagittis nunc, congue ornare mi ultrices eu. Ut fringilla magna congue diam rhoncus, vel facilisis lorem condimentum. 
					<br><br>
					Nulla efficitur nunc at elit euismod, a eleifend mauris facilisis. Proin elit nisl, consequat ac pulvinar vel, laoreet vitae quam. Donec luctus ullamcorper accumsan. 
					Fusce congue eget ex a varius. Cras tincidunt turpis ac tellus faucibus scelerisque. Aenean vel mi id libero fringilla blandit. Aliquam luctus in risus vel malesuada. 
					Vestibulum mi diam, efficitur sed varius nec, tristique sit amet neque. Integer et lorem commodo, efficitur purus eu, sagittis nulla. 
					Phasellus ut augue fringilla, semper nisl a, tempus quam. Duis luctus pharetra elit vel fermentum. Maecenas nec aliquet sapien. Nunc fermentum sit amet orci sed pellentesque. 
					Aenean faucibus, purus bibendum placerat porta, arcu leo molestie nisl, ut pulvinar erat nibh vel ex. Duis in sem vitae ipsum dapibus ornare ut accumsan ante.
					<br><br>
					Curabitur ac mi suscipit, pellentesque dui id, feugiat ex. Etiam id diam lacus. Aenean et massa sapien. Proin in nunc sed tortor gravida euismod et et arcu. 
					Etiam imperdiet augue quis diam tincidunt fermentum. Aliquam fermentum justo sapien, in maximus arcu interdum et. Quisque aliquam aliquam enim a tempus. 
					Aliquam vulputate vestibulum egestas. Donec ultrices varius leo vitae semper. Nulla tempus ut elit accumsan efficitur. Proin et augue enim. Sed vel vehicula velit. 
					Cras ut placerat leo, pellentesque pulvinar justo. Vivamus lobortis ac sem id imperdiet. Fusce magna quam, posuere ac facilisis et, egestas quis risus. 
					Aliquam faucibus viverra sem at consectetur.
					<br><br>
					Proin non pellentesque augue. Cras lobortis placerat luctus. Curabitur vulputate vehicula sodales. Vivamus sodales nibh enim, non malesuada orci scelerisque vel. 
					Mauris laoreet tortor felis, nec lacinia eros consectetur at. Praesent dictum mauris ac massa mattis, vitae finibus justo euismod. 
					Nullam consectetur felis vel neque commodo posuere. Praesent mollis libero ut leo semper, vitae lacinia nisl venenatis. Donec scelerisque molestie cursus. 
					Donec eget turpis purus. Etiam eleifend orci ligula, nec pulvinar massa rhoncus at. Duis rutrum scelerisque est, dapibus tempor massa. 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales viverra urna eget dignissim. Aenean venenatis dictum euismod.
					<br><br>
					Nullam aliquet turpis eu eros lobortis imperdiet rutrum in ipsum. Nulla porttitor vitae mauris sed laoreet. Sed euismod varius nibh, eget viverra dolor pulvinar eu. 
					Praesent eu pharetra neque, id dignissim elit. In luctus arcu et rhoncus tincidunt. Nullam ornare eros non justo tempus, eu auctor mi dictum. Ut tempor iaculis enim sed aliquet. 
					Sed feugiat consequat porttitor. Quisque rhoncus nec dolor non mattis. Vivamus ultricies vel ex ac facilisis. 
					Pellentesque sollicitudin diam nec nisl maximus, sed posuere metus aliquam. Pellentesque velit ex, vulputate venenatis consequat ac, aliquet eget eros. 
					Duis lobortis id odio eu cursus. Etiam blandit aliquam ligula, vel volutpat turpis hendrerit sit amet. </p>
				</div>
				<div>
					<div class="contentImage">
						<img src="images/Home/YogaHomeImage1.png" style="max-width:100%;"></img>
					</div>
					<div class="contentImage">
						<img src="images/Home/YogaHomeImage2.png" style="max-width:100%;"></img>
					</div>
				</div>
			</div>
@endsection

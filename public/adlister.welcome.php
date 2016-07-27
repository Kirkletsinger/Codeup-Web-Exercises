
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/main.css"></head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">OooLister</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/items">Items For Sale</a></li>
                                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Signup</a></li>
                            </ul>
                    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To OooLister</h1>
                <h2 class="text-center">It's Mathmatical!!!</h2>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
                            <div class="col-md-4">

                    <h4 class="text-center">Gray Apple</h4>

                    <img src="/img/uploads/apple.png" class="img-responsive center-block">

                    <p>
                        Since I only eat the color red, I am finished with this apple so someone else can eat it....                    </p>
                    <p>
                        <a href="/items/show?id=5">See More</a>
                    </p>

                </div>
                                            <div class="col-md-4">

                    <h4 class="text-center">Gunter</h4>

                    <img src="/img/uploads/gunter.png" class="img-responsive center-block">

                    <p>
                        Free to good princess. Must pickup from my Ice Castle in the Ice Kingdom....                    </p>
                    <p>
                        <a href="/items/show?id=4">See More</a>
                    </p>

                </div>
                                            <div class="col-md-4">

                    <h4 class="text-center">Bacon Pancakes</h4>

                    <img src="/img/uploads/bacon_pancakes.jpg" class="img-responsive center-block">

                    <p>
                        Bacon pancakes, makin' bacon pancakes, Take some bacon and I'll put it in a pancake, Bacon pancakes,...                    </p>
                    <p>
                        <a href="/items/show?id=3">See More</a>
                    </p>

                </div>
                                    </div>
                    <div class="row">
                                    </div>

    </section>

</div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/youtube-autoresizer.js"></script>
<script src="/js/form-validation.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#delete-item').on('click', function(e) {
			e.preventDefault();
			$('#delete-item-form').submit();
		});

		setTimeout(function() {
			$('.alert').slideUp(1500);
		}, 5000);
	})
</script></body>
</html>
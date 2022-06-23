<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <style>
        @media print{
            #hide{
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div>
            <img src="{{asset($post->image)}}"  class="img-fluid" alt="">
        </div>

        <p>{!!$post->description!!}</p>



        <button class="btn btn-info" id="hide" onclick="window.print()"><i class=" fas fa-print"></i> Print</button>
        <a href="/post" id="hide" class="btn btn-info bg-success ">Back</a>
    </div>

</body>

</html>

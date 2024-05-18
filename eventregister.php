<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="eventr.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="container-fluid px-1 py-5 mx-auto" style="background-color:rgba(243, 11, 185, 0.414)">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h2>Request an Event</h2>
                <p class="text">Just be free to propose any event ideas <br> All the support that might be possible from our end will be provided </p>
                <form action="eventreq.php" method="post">
                    <div class="card">
                        <h3 class="text-center mb-4">Powering Ideas</h3>
                        <form class="form-card" onsubmit="event.preventDefault()">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your first name" onblur="validate(1)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="Enter your email" onblur="validate(3)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone<span class="text-danger"> *</span></label> <input type="text" id="phone" name="phone" placeholder="Enter your phone number" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Event title<span class="text-danger"> *</span></label> <input type="text" id="etitle" name="etitle" placeholder="Enter a title" onblur="validate(5)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Description of Event<span class="text-danger"> *</span></label> <input type="longtext" id="description" name="description" placeholder="enter description" onblur="validate(6)"> </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-12"> <button type="submit" class="btn-block btn-primary">Request Event</button> </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>
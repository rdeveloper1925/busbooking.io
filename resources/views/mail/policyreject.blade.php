<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        Dear {{$user}},<br>
        The isurance policy application input by you has been rejected.<br/>
        <strong>Policy Details:</strong><br/>
        <ul class="list-group">
            <li class="list-group-item"><b>Applicant Name:</b> {{$policy->fullName}}</li>
            <li class="list-group-item"><b>Applicant Email:</b> {{$policy->email}}</li>
            <li class="list-group-item"><b>Applicant Form:</b> <a href="{{$mediaUrl}}">Click here to view Application form</a></li>
        </ul>
        <strong>Reject Remarks:</strong><br/>
        <p>{{$rejectRemarks}}</p>

        Regards,<br/>
        System

    </div>
</body>
</html>
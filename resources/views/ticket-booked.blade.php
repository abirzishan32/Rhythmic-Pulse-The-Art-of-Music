<!-- resources/views/ticketConfirmation.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ticket Confirmation</title>
    <!-- Include Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin-top: 50px;
        }
        .confirmation-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .confirmation-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .terms-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 30px;
        }
        .terms-list {
            margin-left: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="confirmation-container">
                <h2 class="confirmation-title text-center text-success">Your Ticket has been Successfully Booked!</h2>
                <p class="text-center">Thank you for booking with us. You will receive a confirmation email shortly.</p>

                <h4 class="terms-title">Terms and Conditions:</h4>
                <ul class="terms-list">
                    <li>All sales are final. No refunds or exchanges.</li>
                    <li>Tickets are non-transferable.</li>
                    <li>Please bring a valid ID to the event.</li>
                    <li>Event organizers reserve the right to refuse entry.</li>
                    <li>In case of event cancellation, you will be notified via email.</li>
                    <li>Follow all event guidelines and protocols for a safe and enjoyable experience.</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="/home" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

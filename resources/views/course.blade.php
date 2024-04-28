<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Course</title>
    <style>

            body,
            html {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container {
                width: 100%;
                max-width: 960px;
                margin: 20px auto;
                padding: 10px;
            }

            .block {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
                padding: 20px;
                background-color: #f4f4f4;
                border-radius: 8px;
            }

            .left-text .text,
            .right-text .description {
                width: 40%;
                text-align: left;
            }

            .left-text .description,
            .right-text .text {
                width: 60%;
                text-align: right;
            }

            .text h2 {
                margin-top: 0;
            }

            @media (max-width: 600px) {
                .block {
                    flex-direction: column;
                }

                .text,
                .description {
                    width: 100%;
                    text-align: center;
                }
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="block left-text">
        <img class="img-responsive" src="{{ asset('media/one-more-light.jpeg') }}" />
            <div class="text">
                <h2>Title Left</h2>
                <p>This is the text on the left.</p>
            </div>
            <div class="description">
                <p>This is the description on the right. It can be longer and contain more detailed information about the topic discussed on the left.</p>
            </div>
        </div>
        <div class="block right-text">
            <div class="description">
                <p>This is the description on the left. It can be detailed and informative, providing in-depth information about the topic on the right.</p>
            </div>
            <div class="text">
                <h2>Title Right</h2>
                <p>This is the text on the right.</p>
            </div>
            <img class="img-responsive" src="{{ asset('media/one-more-light.jpeg') }}" />
        </div>
    </div>
</body>
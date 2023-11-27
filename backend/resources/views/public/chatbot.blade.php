@extends('public.templating.layouts')

@section('title', 'Agrihub - Chat Bot AI')

@section('content')
    <style>
        .preloader {
            
        }
        .preloader-inner {

        }
        .position-relative{

        }
    </style>
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Chat Bot AI
                </div>
            </div>
        </div>
        <div class="chat-container">
            <div class="chat-header">
                Chatbot
            </div>
            <div class="chat-box" id="chat-box">
                <!-- Chat box content goes here -->
            </div>
            <div class="chat-input">
                <input type="text" id="user-input" placeholder="Type your message...">
                <button id="send-button">Send</button>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            var chatBox = $("#chat-box");
            // var dataproduct = @json($dataproduct); // Convert PHP array to JSON

            function appendMessage(message, isUser) {
                var messageClass = isUser ? "user" : "bot";
                var messageElement = $("<div>").addClass("chat-message " + messageClass).text(message);
                chatBox.append(messageElement);
                chatBox.scrollTop(chatBox[0].scrollHeight);
            }

            function handleUserInput() {
                var userInput = $("#user-input").val();
                appendMessage(userInput, true);

                $.ajax({
                    url: "https://eziuqoe7we.execute-api.ap-southeast-1.amazonaws.com/1/?recaiType=" + encodeURIComponent(userInput),
                    headers: {
                        "X-API-KEY": "LZoViQWwlK3H7ljxaal2a7g7FRNw3vW65qMHHI8k"
                    },
                    method: "GET",
                    success: function (response) {
                        var botMessage = response.choices[0].message.content;
                        appendMessage(botMessage, false);
                    },
                    error: function (error) {
                        console.error("Error:", error);
                    }
                });

                $("#user-input").val("");
            }

            $("#send-button").on("click", function () {
                handleUserInput();
            });

            $("#user-input").on("keypress", function (e) {
                if (e.which === 13) {
                    handleUserInput();
                }
            });
        });
    </script>

    <style>
        /* Your existing styles */
        .chat-box {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .chat-message {
            margin-bottom: 10px;
        }

        .chat-input {
            margin-top: 10px;
        }
    </style>
@endsection

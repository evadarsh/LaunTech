<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<style>/* Chat container styles */
    .chat-container {
        width: 300px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    /* Chat header styles */
    .chat-header {
        background-color: #123156;
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    /* Chat log styles */
    .chat-log {
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
    }
    
    /* Chat input styles */
    .chat-input {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #f0f0f0;
    }
    
    input[type="text"] {
        flex: 1;
        border: none;
        padding: 5px;
        border-radius: 5px;
    }
    
    button {
        background-color: #0f1d86;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
    }
    
    /* User and chatbot message styles */
    .user {
        background-color: #e0f0f0;
        padding: 5px;
        margin: 5px;
        border-radius: 5px;
    }
    
    .chatbot {
        background-color: #1622a0;
        color: white;
        padding: 5px;
        margin: 5px;
        border-radius: 5px;
    }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
    <div class="chat-container">
        <div class ="chat-header">
            <h2 style="color: white;">Chatbot</h2>
        </div>
        <div class="chat-log" id="chat-log">
            <p>Welcome! How can I assist you today?</p>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type your message...">
            <button id="send-button">Send</button>
        </div>

    <script>// Get DOM elements
        const chatLog = document.getElementById('chat-log');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');
        
        // Responses from the chatbot
        const chatbotResponses = [
            'Hello! How can I help you today?',
            'What can I assist you with?',
            'Please describe your issue, and I\'ll do my best to help.',
            'Is there anything else you\'d like to know?'
        ];
        
        // Function to add a message to the chat log
        function addMessage(message, sender) {
            const messageElement = document.createElement('div');
            messageElement.classList.add(sender);
            messageElement.innerText = message;
            chatLog.appendChild(messageElement);
            chatLog.scrollTop = chatLog.scrollHeight;
        }
        
        // Function to handle user input
        function handleUserInput() {
            const userMessage = userInput.value;
            if (userMessage.trim() === '') return;
        
            addMessage(userMessage, 'user');
            userInput.value = '';
        
            // Simulate chatbot response (you can replace this with actual logic)
            const randomResponse = chatbotResponses[Math.floor(Math.random() * chatbotResponses.length)];
            setTimeout(() => {
                addMessage(randomResponse, 'chatbot');
            }, 1000);
        }
        
        // Event listener for the Send button
        sendButton.addEventListener('click', handleUserInput);
        
        // Event listener for Enter key in input field
        userInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                handleUserInput();
            }
        });
        
        // Initial greeting from chatbot
        setTimeout(() => {
            addMessage(chatbotResponses[0], 'chatbot');
        }, 1000);
        </script>
</body>
</html>

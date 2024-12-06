document.addEventListener('DOMContentLoaded', function () {
    const chatbotToggler = document.querySelector('.chatbot-toggler');
    const chatbot = document.querySelector('.chatbot');
    const chatbox = document.querySelector('.chatbox ul');
    const chatInput = document.querySelector('.chat-input textarea');
    const sendChatBtn = document.querySelector('#send-btn');
    const restartBtn = document.querySelector('#restart-btn');
    const API_URL = "https://maurifun.xyz/main/agent_query/";

    // Ouvrir/Fermer le chatbot
    chatbotToggler.addEventListener('click', () => {
        if (chatbot.style.display === 'flex') {
            chatbot.style.display = 'none';
        } else {
            chatbot.style.display = 'flex';
            chatInput.focus();
        }
    });

    // Redémarrer la conversation
    restartBtn.addEventListener('click', () => {
        chatbox.innerHTML = '';
        displayBotMessage("Hi! How can I assist you?");
    });

    // Envoyer le message utilisateur
    sendChatBtn.addEventListener('click', () => {
        const userMessage = chatInput.value.trim();
        if (userMessage) {
            displayUserMessage(userMessage);
            chatInput.value = '';
            sendToAPI(userMessage);
        }
    });

    function displayUserMessage(message) {
        const li = document.createElement('li');
        li.classList.add('chat', 'outgoing');
        li.innerHTML = `<p>${message}</p>`;
        chatbox.appendChild(li);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    function displayBotMessage(message) {
        const li = document.createElement('li');
        li.classList.add('chat', 'incoming');
        li.innerHTML = `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
        chatbox.appendChild(li);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    async function sendToAPI(message) {
        try {
            const response = await fetch(API_URL, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ query: message }),
            });
            const data = await response.json();
            displayBotMessage(data.response || "I couldn't understand that. Please try again.");
        } catch (error) {
            displayBotMessage("An error occurred. Please try again later.");
        }
    }
});

const accessToken = '3796899bd37c423bad3a21a25277bce0';
const baseUrl = 'https://api.api.ai/api/query?v=2015091001';
const sessionId = '20150910';
const loader = `<span class='loader'><span class='loader__dot'></span><span class='loader__dot'></span><span class='loader__dot'></span></span>`;
const errorMessage = 'My apologies, I\'m still learning at the moment but if your question is with regards to the following. <br><br> 1). <b>How Do I Return My Order ?</b> <br><br> You may return your order for a refund or replacement to Clothing Shop Online within 30 days of the purchase date by visiting the returns page. You are responsible for inspecting the garments before performing any alterations or embellishments. Depending on the reason for your return, you may be responsible for shipping and handling charges. We highly recommend saving the receipt or tracking details verifying the return of your goods. If you have a problem or discrepancy (including shortages, damages, etc.) with an order contact us within 72 hours of receiving goods. Please note we are not able to accommodate any style, color or size swap or exchange requests via a replacement order. Items that have been printed, washed, decorated and masks which are final sale items are not eligible for return. <br><br> 2). <b>How long will it take to get my refund?</b> <br><br> Our warehouse typically takes between 5-7 business days to process a return after being received. Once the return has been processed by our warehouse a credit will be issued to your original payment method within 5-7 business days. In total this entire process can take up to 14 business days. Be sure to save your proof of postage until your return is completed.  <br><br> 3). <b>How do I cancel or change my order?</b> <br><br> As soon as you place your order, we begin processing it. Therefore, we are unable to change or cancel orders. Please visit the returns page if you wish to submit a return authorization once your order has been received. The terms and conditions for returns will apply.';
const urlPattern = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
const $document = document;
const $chatbot = $document.querySelector('.chatbot');
const $chatbotMessageWindow = $document.querySelector('.chatbot__message-window');
const $chatbotHeader = $document.querySelector('.chatbot__header');
const $chatbotMessages = $document.querySelector('.chatbot__messages');
const $chatbotInput = $document.querySelector('.chatbot__input');
const $chatbotSubmit = $document.querySelector('.chatbot__submit');

const botLoadingDelay = 1000;
const botReplyDelay = 2000;

document.addEventListener('keypress', event => {
  if (event.which == 13) validateMessage();
}, false);

$chatbotHeader.addEventListener('click', () => {
  toggle($chatbot, 'chatbot--closed');
  $chatbotInput.focus();
}, false);

$chatbotSubmit.addEventListener('click', () => {
  validateMessage();
}, false);

const toggle = (element, klass) => {
  const classes = element.className.match(/\S+/g) || [],
  index = classes.indexOf(klass);
  index >= 0 ? classes.splice(index, 1) : classes.push(klass);
  element.className = classes.join(' ');
};

const userMessage = content => {
  $chatbotMessages.innerHTML += `<li class='is-user animation'>
      <p class='chatbot__message'>
        ${content}
      </p>
      <span class='chatbot__arrow chatbot__arrow--right'></span>
    </li>`;
};

const aiMessage = (content, isLoading = false, delay = 0) => {
  setTimeout(() => {
    removeLoader();
    $chatbotMessages.innerHTML += `<li 
      class='is-ai animation' 
      id='${isLoading ? "is-loading" : ""}'>
        <div class="is-ai__profile-picture">
          <svg class="icon-avatar" viewBox="0 0 32 32">
            <use xlink:href="#avatar" />
          </svg>
        </div>
        <span class='chatbot__arrow chatbot__arrow--left'></span>
        <div class='chatbot__message'>${content}</div>
      </li>`;
    scrollDown();
  }, delay);
};

const removeLoader = () => {
  let loadingElem = document.getElementById('is-loading');
  if (loadingElem) $chatbotMessages.removeChild(loadingElem);
};

const escapeScript = unsafe => {
  const safeString = unsafe.
  replace(/</g, ' ').
  replace(/>/g, ' ').
  replace(/&/g, ' ').
  replace(/"/g, ' ').
  replace(/\\/, ' ').
  replace(/\s+/g, ' ');
  return safeString.trim();
};

const linkify = inputText => {
  return inputText.replace(urlPattern, `<a href='$1' target='_blank'>$1</a>`);
};

const validateMessage = () => {
  const text = $chatbotInput.value;
  const safeText = text ? escapeScript(text) : '';
  if (safeText.length && safeText !== ' ') {
    resetInputField();
    userMessage(safeText);
    send(safeText);
  }
  scrollDown();
  return;
};

const multiChoiceAnswer = text => {
  const decodedText = text.replace(/zzz/g, "'");
  userMessage(decodedText);
  send(decodedText);
  scrollDown();
  return;
};

const processResponse = val => {
  if (val && val.fulfillment) {
    let output = '';
    let messagesLength = val.fulfillment.messages.length;

    for (let i = 0; i < messagesLength; i++) {
      let message = val.fulfillment.messages[i];
      let type = message.type;

      switch (type) {
        // 0 fulfillment is text
        case 0:
          let parsedText = linkify(message.speech);
          output += `<p>${parsedText}</p>`;
          break;

        // 1 fulfillment is card
        case 1:
          let imageUrl = message.imageUrl;
          let imageTitle = message.title;
          let imageSubtitle = message.subtitle;
          let button = message.buttons[0];

          if (!imageUrl && !button && !imageTitle && !imageSubtitle) break;

          output += `
            <a class='card' href='${button.postback}' target='_blank'>
              <img src='${imageUrl}' alt='${imageTitle}' />
            <div class='card-content'>
              <h4 class='card-title'>${imageTitle}</h4>
              <p class='card-title'>${imageSubtitle}</p>
              <span class='card-button'>${button.text}</span>
            </div>
            </a>
          `;
          break;

        // 2 fulfillment is a quick reply with multi-choice buttons
        case 2:
          let title = message.title;
          let replies = message.replies;
          let repliesLength = replies.length;
          output += `<p>${title}</p>`;

          for (let i = 0; i < repliesLength; i++) {
            let reply = replies[i];
            let encodedText = reply.replace(/'/g, 'zzz');
            output += `<button onclick='multiChoiceAnswer("${encodedText}")'>${reply}</button>`;
          }
          break;}

    }

    removeLoader();
    return output;
  }

  removeLoader();
  return `<p>${errorMessage}</p>`;
};

const setResponse = (val, delay = 0) => {
  setTimeout(() => {
    aiMessage(processResponse(val));
  }, delay);
};

const resetInputField = () => {
  $chatbotInput.value = '';
};

const scrollDown = () => {
  const distanceToScroll =
  $chatbotMessageWindow.scrollHeight - (
  $chatbotMessages.lastChild.offsetHeight + 60);
  $chatbotMessageWindow.scrollTop = distanceToScroll;
  return false;
};

const send = (text = '') => {
  fetch(`${baseUrl}&query=${text}&lang=en&sessionId=${sessionId}`, {
    method: 'GET',
    dataType: 'json',
    headers: {
      Authorization: 'Bearer ' + accessToken,
      'Content-Type': 'application/json; charset=utf-8' } }).


  then(response => response.json()).
  then(res => {
    if (res.status < 200 || res.status >= 300) {
      let error = new Error(res.statusText);
      throw error;
    }
    return res;
  }).
  then(res => {
    setResponse(res.result, botLoadingDelay + botReplyDelay);
  }).
  catch(error => {
    setResponse(errorMessage, botLoadingDelay + botReplyDelay);
    resetInputField();
    console.log(error);
  });

  aiMessage(loader, true, botLoadingDelay);
};
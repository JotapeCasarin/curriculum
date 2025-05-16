// If you want to inject this CSS via JavaScript, use the following:
const style = document.createElement('style');
style.textContent = `
.buttonsocialmedia {
    background-color: #4CAF50; /* Green */
    border: none; /* Remove borders */  
}
`;
document.head.appendChild(style);
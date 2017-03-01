// Toggle state switch
var toggleState = function(elem, one, two) {
    elem = document.querySelector(elem);
    elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
};

// Nav toggle button
var nav = document.querySelector('.toggle');

// Toggle nav
nav.onclick = function(e) {
    toggleState('nav.menu', 'open', 'closed');
    e.preventDefault();
};
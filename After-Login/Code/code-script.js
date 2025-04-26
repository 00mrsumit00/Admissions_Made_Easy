// To Change the topic

// Change to navbar elements
const topicList = document.getElementById('topic-list');
const topics = document.querySelectorAll('.topic');

// Function to show selected tutorial and hide others
function showTopic(selectedTopic) {
    topics.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'flex';
            
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeItem = document.querySelector('.activeTopic');
    if (activeItem) {
        activeItem.classList.remove('activeTopic');
    }
    document.getElementById(selectedTopic).classList.add('activeTopic');
}

// Event listener for tutorial list items
topicList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showTopic(selectedTopic);
    }
});

// Show default tutorial on page load
showTopic(topicList.firstElementChild.id);


// Display html Code
const tutorialList = document.getElementById('tutorial-list');
const tutorials = document.querySelectorAll('.tutorial');

// Function to show selected tutorial and hide others
function showTutorial(selectedTopic) {
    tutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';
            
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeItem = document.querySelector('.active');
    if (activeItem) {
        activeItem.classList.remove('active');
    }
    document.getElementById(selectedTopic).classList.add('active');
}

// Event listener for tutorial list items
tutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showTutorial(tutorialList.firstElementChild.id);


// Display JS Code
const jsTutorialList = document.getElementById('js-tutorial-list');
const jsTutorials = document.querySelectorAll('.js-tutorial');

// Function to show selected tutorial and hide others
function showJsTutorial(selectedTopic) {
    jsTutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeJs = document.querySelector('.active-js');
    if (activeJs) {
        activeJs.classList.remove('active-js');
    }
    document.getElementById(selectedTopic).classList.add('active-js');
}

// Event listener for tutorial list items
jsTutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showJsTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showJsTutorial(jsTutorialList.firstElementChild.id);



// Display PHP Code
const phpTutorialList = document.getElementById('php-tutorial-list');
const phpTutorials = document.querySelectorAll('.php-tutorial');

// Function to show selected tutorial and hide others
function showPhpTutorial(selectedTopic) {
    phpTutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activePhp = document.querySelector('.active-php');
    if (activePhp) {
        activePhp.classList.remove('active-php');
    }
    document.getElementById(selectedTopic).classList.add('active-php');
}

// Event listener for tutorial list items
phpTutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showPhpTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showPhpTutorial(phpTutorialList.firstElementChild.id);



// Display Pyhton Code
const pyTutorialList = document.getElementById('py-tutorial-list');
const pyTutorials = document.querySelectorAll('.py-tutorial');

// Function to show selected tutorial and hide others
function showPyTutorial(selectedTopic) {
    pyTutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activePy = document.querySelector('.active-py');
    if (activePy) {
        activePy.classList.remove('active-py');
    }
    document.getElementById(selectedTopic).classList.add('active-py');
}


// Event listener for tutorial list items
pyTutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showPyTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showPyTutorial(pyTutorialList.firstElementChild.id);



// Display Java Code
const javaTutorialList = document.getElementById('java-tutorial-list');
const javaTutorials = document.querySelectorAll('.java-tutorial');

// Function to show selected tutorial and hide others
function showJavaTutorial(selectedTopic) {
    javaTutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';
        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeJava = document.querySelector('.active-java');
    if (activeJava) {
        activeJava.classList.remove('active-java');
    }
    document.getElementById(selectedTopic).classList.add('active-java');
}


// Event listener for tutorial list items
javaTutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showJavaTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showJavaTutorial(javaTutorialList.firstElementChild.id);


/* This script keeps track of the user's progress through the website through
 * a JavaScript object stored in window.sessionStorage.
 *
 * The format of the object is as follows:
 * {
 *    userName:     String
 *    visitedPages: List of Strings containing the path to the page
 *    papersFound:  List of Strings describing the paper
 *    quizComplete: Boolean
 * }
 *
 * Rules:
 * - The quiz is inaccessible until all the scraps of paper are found.
 * - The certificate is accessible only if the quiz is complete.
 */

const PAPER_NAMES = ["ch1Complete", "ch2Complete"];

function saveProgress(progress) {
    sessionStorage.setItem("progress", JSON.stringify(progress));
}

function getProgress() {
    progress = JSON.parse(sessionStorage.getItem("progress"));
    if (!progress) {
        progress = {
            userName: "",
            visitedPages: [],
            papersFound: [],
            quizComplete: false
        };
    }
    return progress;
}

function setUserName(userName) {
    progress = getProgress();
    progress.userName = userName;
    saveProgress(progress);
}

function getUserName() {
    return getProgress().userName;
}

function recordVisitedPage(path) {
    progress = getProgress();
    if (!progress.visitedPages.includes(path)) {
        progress.visitedPages.push(path);
    }
    saveProgress(progress);
}

function recordThisPageVisited() {
    recordVisitedPage(window.location.pathname);
}

function pageBeenVisited(path) {
    return getProgress().visitedPages.includes(path);
}

function thisPageBeenVisited() {
    return pageBeenVisited(window.location.pathname);
}

function recordFoundPaper(paper) {
    progress = getProgress();
    if (!progress.papersFound.includes(paper)) {
        progress.papersFound.push(paper);
    }
    saveProgress(progress);
}

function allPapersFound() {
    progress = getProgress();
    for (let i = 0; i < PAPER_NAMES.length; i++) {
        if (!progress.papersFound.includes(PAPER_NAMES[i])) {
            return false;
        }
    }
    return true;
}

function getNumPapersFound() {
    nFound = 0;
    nTotal = 0;
    progress = getProgress();
    for (let i = 0; i < PAPER_NAMES.length; i++) {
        nTotal++;
        if (progress.papersFound.includes(PAPER_NAMES[i])) {
            nFound++;
        }
    }
    return [nFound, nTotal, nTotal - nFound];
}

function recordQuizComplete() {
    progress = getProgress();
    progress.quizComplete = true;
    saveProgress(progress);
}

function isQuizComplete() {
    return getProgress().quizComplete;
}

$(document).ready(function() {
    console.log("Website progress:", getProgress());
});
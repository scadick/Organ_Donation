(function() {
    "use strict";

    //Stories Page

    //Share Story
    var share = document.querySelector("#shareButton");

    function lightboxShare() {
        
    }

    share.addEventListener('click', lightboxShare, false);

    //Stories Load

    var load = document.querySelector("#storiesLoad");

    function loadMore(){
        let stories = document.querySelectorAll(".userStory");
        let count = stories.length / 6;
        count += 1;

        const httpRequest = new XMLHttpRequest();
        //1. make an AJAX call to the databse; handle any errors first
        if (!httpRequest) {
          alert('giving up, your browser sucks!');
          return false;
        }
    
        httpRequest.onreadystatechange = processRequest;
        httpRequest.open('GET', 'admin/phpscripts/jscross.php?story');
        httpRequest.send();
    
        function processRequest() {
            // handle the stages of our AJAX call
            let reqIndicator = document.querySelector('.request-state');
            reqIndicator.textContent = httpRequest.readyState;
        
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {// request worked, all is good
                let data = JSON.parse(httpRequest.responseText);
                processResult(data, count);
            } else {
                alert('There was a problem with the request');
            }
            }
        }
    }

    function processResult(data, count) {
        //debugger;
        var story = document.querySelector(".userStory");
        
        let start = (count * 6) - ((count - 1) * 6);
        let end = count * 6;
        let endTest = (count + 1) * 6;
        let dataLimit = data.slice(start, endTest);
        data = data.slice(start, end);
        let storyBox = document.querySelector(".userSubmitted");
        storyBox.cloneNode(true);
        data.forEach(function(element, index){
            let cln = story.cloneNode(true);
            let name = cln.querySelector('h3').innerHTML = data[index].user_fname + " " + data[index].user_lname.substr(0, 1) + ".";
            let text = cln.querySelector('p').innerHTML = data[index].story_text.substr(0, 145) + "...";            
            cln.querySelector('a').id = start + index + 1;
            cln.querySelector('a').addEventListener('click', readMore, false);

            storyBox.appendChild(cln);
        });
        
            //console.log(this.id);

        let stories = document.querySelectorAll(".userStory");

        if(stories.length % 6 || dataLimit.length === 6) {
            load.style.display = "none";
        }
    }

    load.addEventListener('click', loadMore, false);

    //Stories Details
    
    var storyBox = document.querySelector(".userSubmitted");
    var storiesToggle = storyBox.querySelectorAll("a");

    function readMore(e) {
        var id = e.currentTarget.id;
        const httpRequest = new XMLHttpRequest();
        //1. make an AJAX call to the databse; handle any errors first
        if (!httpRequest) {
          alert('giving up, your browser sucks!');
          return false;
        }
    
        httpRequest.onreadystatechange = processRequest;
        httpRequest.open('GET', 'admin/phpscripts/jscross.php?read=' + this.id);
        httpRequest.send();
    
        function processRequest() {
            // handle the stages of our AJAX call
            let reqIndicator = document.querySelector('.request-state');
            reqIndicator.textContent = httpRequest.readyState;
        
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {// request worked, all is good
                let data = JSON.parse(httpRequest.responseText);
                processResultR(data, id);
            } else {
                alert('There was a problem with the request');
            }
        }
    }
    }

    function processResultR(data, id) {
        //debugger;
        let story = document.querySelectorAll(".userStory");
        story = story.item(id - 1);
        let text = story.querySelector("p");
        // = data[0].story_text;

        let read = story.querySelector("a");
        if(read.innerHTML == "...read more") {
            text.innerHTML = data[0].story_text;
            read.innerHTML = "...read less";
        }else{
            text.innerHTML = data[0].story_text.substr(0, 145) + "...";
            read.innerHTML = "...read more";
        }

    }

    storiesToggle.forEach(function(element, index) {
        element.addEventListener('click', readMore, false);
    });



})();
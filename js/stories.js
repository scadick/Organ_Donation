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

    // Story Nav
    var storyBox = document.querySelector(".storiesBox");
    var circlesBox = document.querySelector("#circles1");
    var circles = circlesBox.querySelectorAll("a");
    var mainStory = storyBox.querySelector("#mainStory");
    var title = mainStory.querySelector("h4");
    var desc = mainStory.querySelector("p");
    var video = storyBox.querySelector("iframe");
    var titles = ["I heard the words ‘enlarged heart’. I knew it was bad",
    "I was not supporting my life anymore. I guess I can say I was in survival mode.",
    "It’s tough to know that you have zero control. I had timed my whole life to basically end at 30.",
    "You think to yourself, ‘Oh, it's pneumonia. It'll heal.’ Not all pneumonias heal."];
    var texts = ["Ryley was only two months old when she became quite ill. It was in the ER that her mother, Joanna, heard the words \"enlarged heart.\" She remembers asking the doctor, \"So you're telling me that my baby is going to die? And he said, 'No. But there's a good chance she's going to need a heart transplant.'<br><br>Joanna and her husband were living in a hotel near the transplant centre when they received a 2:00 a.m. call that a heart was available for Ryley. By 9:30 p.m. that night, they were able to see their daughter after her transplant surgery. \"She was on a breathing tube...but she was pink. And she just looked so wonderful.\"",
    "It started with some weird symptoms. Trouble with her peripheral vision. Trouble opening small packages. A shooting pain down her left side. Andrea knew there was something going on. \"When I was wheeled into the hospital, I had a heart rate of 130 at rest. And that was the day that they diagnosed me with dilated cardiomyopathy.\"",
    "At 10 years old the hospital determined that the strep bacterial Justin contracted had triggered an autoimmune disease, which started to attack his kidneys. He clearly remembers the day his mother told him he would have to go on dialysis. Life is not fun on dialysis. Without functioning kidneys you can’t even drink water. It’s difficult when you don’t have control over your life.<br><Br>In 1984, Justin received his first life saving kidney transplant. He has seen firsthand, the new life transplant brings for those in need.",
    "It started with a bout of pneumonia that Carol thought would eventually go away. Unfortunately it didn't.,<br><br>\"It's like, 'What is happening to me? What is this?' Especially when you consider yourself still young.\"<br><br>Carol's doctors determined that she needed a double lung transplant. It was a difficult time for her and her family as they waited for a donor. Fortunately, Carol received that life-changing call and her transplant in June of 2009. Since then she's been able to live on her own again. She's thankful for the opportunity to play with her grandchildren and to win a silver medal at the Transplant Games."];
    var srcs = ["https://player.vimeo.com/video/24894938?color=019f47&title=0&byline=0&portrait=0",
    "https://player.vimeo.com/video/24883613?color=019f47&title=0&byline=0&portrait=0",
    "https://player.vimeo.com/video/24894829?color=019f47&title=0&byline=0&portrait=0",
    "https://player.vimeo.com/video/24922306?color=019f47&title=0&byline=0&portrait=0"];
    var activeCircle;

    function storyChange(e) {
        circles.forEach(function(element, index) {
            if (index == e.currentTarget.id){
                circles[index].classList.add("active");
                activeCircle.classList.remove("active");
                activeCircle = circles[index];
                title.innerHTML = titles[index];
                desc.innerHTML = texts[index];
                video.src = srcs[index];
             }
        });
    }


    circles.forEach(function(element, index) {
        element.addEventListener('click', storyChange, false);
        element.id = index;
        if(circles[index].classList.contains("active")) {
            activeCircle = circles[index];
        }
    });
})();
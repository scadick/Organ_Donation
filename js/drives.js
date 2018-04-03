(function() {
    "use strict";

    // Drives Page

    //Drives Type
    var tabsBar = document.querySelector("#drivesTabs");
    var Dtabs = tabsBar.querySelectorAll("a");
    var Dtabactive;

    function driveType(e, index) {
        if (e.currentTarget.id === "0"){
            Dtabs[0].classList.add("driveTypeActive");
            Dtabactive.classList.remove("driveTypeActive");
            Dtabactive = Dtabs[0];
        } else {
            Dtabs[1].classList.add("driveTypeActive");
            Dtabactive.classList.remove("driveTypeActive");
            Dtabactive = Dtabs[1];
        }
    }

    Dtabs.forEach(function(element, index) {
        element.addEventListener('click', driveType, false);
        element.id = index;
        Dtabactive = Dtabs[0];
    });

    //Drives Pages
    var nav = document.querySelectorAll(".pagination li a");
    var row = document.querySelectorAll("tbody tr");
    var navActive = "";

    function driveNav(e) {
        //nav change
        e.preventDefault();
        e.currentTarget.parentElement.classList.add("current");
        navActive.parentElement.classList.remove("current");
        navActive = e.currentTarget;

        //table change
        let type = "";
        if(Dtabactive.id == 0) {
            type = "org";
        } else {
            type = "individ";
        }
        
        const httpRequest = new XMLHttpRequest();
        //1. make an AJAX call to the databse; handle any errors first
        if (!httpRequest) {
          alert('giving up, your browser sucks!');
          return false;
        }
    
        httpRequest.onreadystatechange = processRequest;
        httpRequest.open('GET', 'admin/phpscripts/jscross.php?page');
        httpRequest.send();
    
        function processRequest() {
            // handle the stages of our AJAX call
            let reqIndicator = document.querySelector('.request-state');
            reqIndicator.textContent = httpRequest.readyState;
        
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {// request worked, all is good
                let data = JSON.parse(httpRequest.responseText);
                console.log(data);
                processResult(data, count);
            } else {
                alert('There was a problem with the request');
            }
            }
        }
    }


    nav.forEach(function(element, index) {
        element.addEventListener('click', driveNav, false);
        element.id = index;
        navActive = nav[0];
    });

        /*<?php

                if(!is_string($drives)){
                  $count = 0;
                  $limit = 0;

                  while($row = mysqli_fetch_array($drives)){
                    if ($row['drive_approval'] !== "Pending") {
                      if($limit < 3) {
                          echo "<tr>
                          <td class=\"driveImage\"><img src=\"images/{$row['drive_image']}\" alt=\"{$row['drive_title']}\"></td>
                          <td class=\"driveTitle\">{$row['drive_title']}</td>
                          <td class=\"driveStart\">{$row['drive_date']}</td>
                          <td class=\"driveRegister\">
                            <h4 class=\"driveMonth\">THIS MONTH</h4>
                            <h4 class=\"monthNum\">{$row['drive_month']}</h4>
                            <h4 class=\"driveTotal\">TOTAL</h4>
                            <h4 class=\"totalNum\">{$row['drive_regs']}</h4>
                          </td>
                        </tr>";
                        
                      }
                    $limit += 1;
                    $count += 1;
                    }                    
                  }
                  $pages = ceil ($count / 3);
                  echo "</tbody>
                  </table>
                    
                  <div class=\"small-12 cell\">
                    <ul class=\"pagination text-center\" role=\"navigation\" aria-label=\"Pagination\">";
                    for ($i = 1; $i < 5; $i++) {
                      if ($i === 1) {
                        echo "<li class=\"current\"><a href=\"#0\" aria-label=\"Page 1\">1</a></li>";
                      } else {
                        echo "<li><a href=\"#0\" aria-label=\"Page {$i}\">{$i}</a></li>";
                      }
                    } 
                }else{
                  echo "<p class=\"error\">{$drives}</p>";
                }
                ?>*/
    
    //Drives Lightbox

    var driveToggle = document.querySelectorAll(".driveTitle");
    var driveToggleImg = document.querySelectorAll(".driveImage");
    var box = document.querySelector("#driveDetails");

    function lightbox(e) {
        let target = e.currentTarget.classList.contains("drive");
        let title = target.querySelector("");
        /*circles.forEach(function(element, index) {
            if (index == e.currentTarget.id){
                circles[index].classList.add("active");
                activeCircle.classList.remove("active");
                activeCircle = circles[index];
                title.innerHTML = titles[index];
                desc.innerHTML = texts[index];
                video.src = srcs[index];
             }
        });*/
        console.log(e.currentTarget);
    }

    driveToggle.forEach(function(element, index) {
        element.addEventListener('click', lightbox, false);
    });
    driveToggleImg.forEach(function(element, index) {
        element.addEventListener('click', lightbox, false);
    });
})();
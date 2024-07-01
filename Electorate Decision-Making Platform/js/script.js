var currentBannerIndex = 0;
var banners = document.querySelectorAll('.banner-image');
var bannerInterval;

function showBanner(index) {
    for (var i = 0; i < banners.length; i++) {
        banners[i].classList.remove('visible');
    }
    banners[index].classList.add('visible');
}

function nextBanner() {
    currentBannerIndex = (currentBannerIndex + 1) % banners.length;
    showBanner(currentBannerIndex);
}

function prevBanner() {
    currentBannerIndex = (currentBannerIndex - 1 + banners.length) % banners.length;
    showBanner(currentBannerIndex);
}

function startBannerInterval() {
    bannerInterval = setInterval(nextBanner, 5000); // Change banner every 5 seconds
}

function stopBannerInterval() {
    clearInterval(bannerInterval);
}

window.onload = function() {
    startBannerInterval();
};

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function search() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    ul = document.querySelector(".list-group"); // Update to target the list group containing the items to search
    li = ul.querySelectorAll('li');

    for (i = 0; i < li.length; i++) {
        a = li[i];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}




$(function() {
    // Load header.html using jQuery
    $('#header').load('header.html');
});

$(function() {
    // Load header.html using jQuery
    $('#footer').load('footer.html');
});



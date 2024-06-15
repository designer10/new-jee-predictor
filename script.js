$(document).ready(function() {
    $('.dropdown-toggle').on('click', function() {
        $('.dropdown-menu').toggle();
    });

    $('#dropdown-search').on('input', function() {
        const searchTerm = $(this).val().toLowerCase();
        $('#dropdown-options li').each(function() {
            const label = $(this).text().toLowerCase();
            $(this).toggle(label.indexOf(searchTerm) > -1);
        });
    });

    $('#select-all').on('click', function() {
        $('#dropdown-options input[type="checkbox"]').prop('checked', true);
    });

    $('#deselect-all').on('click', function() {
        $('#dropdown-options input[type="checkbox"]').prop('checked', false);
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('.dropdown').length) {
            $('.dropdown-menu').hide();
        }
    });
    $('#dropdown-options input[type="checkbox"]').prop('checked', true); 
});

document.getElementById('form').addEventListener('submit', async (e) => {
    e.preventDefault();
    let rank = document.getElementById('rank').value;
    let category = document.getElementById('category').value;
    let gender = $('input[name="gender"]:checked').val();
    let type = document.getElementById('type').value;
    let round = document.getElementById('round').value;
    let branches = []
    let limit=100;
    $('#dropdown-options input[type="checkbox"]:checked').each(function() {
        branches.push($(this).val());
    });
    if(branches.length>50){
        limit=30;
    }
    let currentPage = 1;
    let data = await fetchData(type, rank, category, gender, round, currentPage,limit);
    let filteredData = filterDataByBranches(data, branches);
    let initialHtml = ``;
    showData(filteredData, initialHtml);
});
let filterDataByBranches = (data, branches) => {
    return data.filter(element => branches.includes(element.branchName));
};


function capitalizeFLetter(string) {
    let capString = (string[0].toUpperCase() + string.slice(1));
    return capString;
}


let fetchData = async (type, rank, category, gender, round, page,limit) => {
    let options = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ type: type, rank: rank, category: category, gender: gender, round: round, page: page,limit:limit })
    };
    let request = await fetch(`https://teamgtc.live/predictor/fetchData`, options);
    let response = await request.json();
    return Array.from(response);
};


let showData = (data, html) => {
    let table = document.getElementById('table');
    if (data.length === 0) {
        alert("No more data available");
        return;
    }
    data.forEach(element => {
        html += `<tr>
            <td>Round${element.round}</td>
            <td><a target="_blank" href="https://google.com/search?q=${element.institute}">${element.institute}</a></td>
            <td>${element.branchName}</td>
            <td>${element.category}</td>
            <td>${capitalizeFLetter(element.gender)}</td>
            <td>${element.quota}</td>
            <td>${element.oRank}</td>
            <td>${element.cRank}</td>
        </tr>`;
    });
    table.innerHTML = html;
};


let currentPage = 1;
document.getElementById('loadMore').addEventListener('click', async () => {
    let rank = document.getElementById('rank').value;
    let category = document.getElementById('category').value;
    let type = document.getElementById('type').value;
    let round = document.getElementById('round').value;
    let htmlOld = document.getElementById('table').innerHTML;
    let gender = $('input[name="gender"]:checked').val();
    let branches = []
    let limit=100;
    $('#dropdown-options input[type="checkbox"]:checked').each(function() {
        branches.push($(this).val());
    });
    if(branches.length>50){
        limit=30;
    }
    currentPage += 1;
    let data = await fetchData(type, rank, category, gender, round, currentPage,limit);
    let filteredData = filterDataByBranches(data, branches);
    showData(filteredData, htmlOld);
});

function showMenu() {
    const menuIcon = document.getElementById('menuIcon');
    const mobileUl = document.getElementById('mobile-ul');
    menuIcon.classList.toggle('active');
    mobileUl.classList.toggle('active');
}

function showList() {
    const mobMenuList = document.getElementById('m-dd-menu-list');
    const downImg = document.getElementById('downImg');
    downImg.classList.toggle('active');
    mobMenuList.classList.toggle('active');
}
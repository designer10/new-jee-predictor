<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jee Mains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "nav.html";?>
    <header>
        <div class="page-info">
            <h2 class="title">JAC Delhi<span class="mob-none">-</span>Predictor</h2>
            <div class="instr">
                <span>Instructions</span>
                <div class="detailBox">
                    <p class="info-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum?</p>
                    <p class="info-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum?</p>
                    <p class="info-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum?</p>
                    <p class="info-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum?</p>
                    <p class="info-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum?</p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <form id="form" class="form">
            <div class="selectors">
                <input type="hidden" id="type" value="jacDelhi">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option value="General">General</option>
                        <option value="OBC">OBC</option>
                        <option value="EWS">EWS</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="SG">SG</option>
                        <option value="GNSGD">GNSGD</option>    
                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value='1' selected>Round 1</option>
                    </select>
                </div>
            
                <div class="dropdown">
                    <div class="branch-container">
                        <button type="button" class="dropdown-toggle">Select Branches</button>
                        <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    </div>
                    <div class="dropdown-menu">
                        <input type="text" id="dropdown-search" class="search-branch" placeholder="Search branches...">
                        <div class="dropdown-controls">
                            <button type="button" id="select-all" class="dd-btn">Select All</button>
                            <button type="button" id="deselect-all" class="dd-btn">Deselect All</button>
                        </div>
                        <ul id="dropdown-options">
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (ECE)" checked>Electronics and Communication Engineering (ECE)</label></li>
<li><label><input type="checkbox" name="branches" value="Information Technology (IT)" checked>Information Technology (IT)</label></li>
<li><label><input type="checkbox" name="branches" value="Chemical Engineering (CHE)" checked>Chemical Engineering (CHE)</label></li>
<li><label><input type="checkbox" name="branches" value="Production & Industrial Engineering (PIE)" checked>Production & Industrial Engineering (PIE)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (CSE)" checked>Computer Science and Engineering (CSE)</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Electric Vehicles)" checked>Mechanical Engineering (Electric Vehicles)</label></li>
<li><label><input type="checkbox" name="branches" value="Environmental Engineering (ENE)" checked>Environmental Engineering (ENE)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Data Science)" checked>Computer Science and Engineering (Data Science)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Design (CSAD)" checked>Computer Science & Design (CSAD)</label></li>
<li><label><input type="checkbox" name="branches" value="Bio-Technology (BT)" checked>Bio-Technology (BT)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (ECE)-AI" checked>Electronics & Communication Engineering (ECE)-AI</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & BioSciences (CSB)" checked>Computer Science & BioSciences (CSB)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Artificial Intelligence(CSAI)" checked>Computer Science & Artificial Intelligence(CSAI)</label></li>
<li><label><input type="checkbox" name="branches" value="Biotechnology (BT)" checked>Biotechnology (BT)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Engineering (COE)" checked>Computer Engineering (COE)</label></li>
<li><label><input type="checkbox" name="branches" value="Civil Engineering (CE)" checked>Civil Engineering (CE)</label></li>
<li><label><input type="checkbox" name="branches" value="Software Engineering (SE)" checked>Software Engineering (SE)</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering with specialization in Automotive Engineering (MAM)" checked>Mechanical Engineering with specialization in Automotive Engineering (MAM)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Internet of Things)" checked>Computer Science and Engineering (Internet of Things)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Artificial Intelligence (CSAI)" checked>Computer Science & Artificial Intelligence (CSAI)</label></li>
<li><label><input type="checkbox" name="branches" value="Engineering with INTERNET OF THINGS(EIOT)" checked>Engineering with INTERNET OF THINGS(EIOT)</label></li>
<li><label><input type="checkbox" name="branches" value="Electrical Engineering (EE)" checked>Electrical Engineering (EE)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (CSE) -AI" checked>Computer Science & Engineering (CSE) -AI</label></li>
<li><label><input type="checkbox" name="branches" value="Information Technology and Network Security(ITNS)" checked>Information Technology and Network Security(ITNS)</label></li>
<li><label><input type="checkbox" name="branches" value="Geoinformatics" checked>Geoinformatics</label></li>
<li><label><input type="checkbox" name="branches" value="Information Technology(IT)" checked>Information Technology(IT)</label></li>
<li><label><input type="checkbox" name="branches" value="AI & ML" checked>AI & ML</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical & Automation Engineering (MAE)" checked>Mechanical & Automation Engineering (MAE)</label></li>
<li><label><input type="checkbox" name="branches" value="Mathematics & Computing (MAC)" checked>Mathematics & Computing (MAC)</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering (ME) (Okhla-I Campus)" checked>Mechanical Engineering (ME) (Okhla-I Campus)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (ECE)" checked>Electronics & Communication Engineering (ECE)</label></li>
<li><label><input type="checkbox" name="branches" value="Mathematics and Computing (MCE)" checked>Mathematics and Computing (MCE)</label></li>
<li><label><input type="checkbox" name="branches" value="Dual Degree B.Tech +MBA" checked>Dual Degree B.Tech +MBA</label></li>
<li><label><input type="checkbox" name="branches" value="EVE" checked>EVE</label></li>
<li><label><input type="checkbox" name="branches" value="Instrumentation and Control Engineering (ICE)" checked>Instrumentation and Control Engineering (ICE)</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering (ME)" checked>Mechanical Engineering (ME)</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering (ME) (Okhla-II Campus)" checked>Mechanical Engineering (ME) (Okhla-II Campus)</label></li>
<li><label><input type="checkbox" name="branches" value="Engineering Physics (EP)" checked>Engineering Physics (EP)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (AI & MI)(ECAM)" checked>Electronics and Communication Engineering (AI & MI)(ECAM)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering with Artificial Intelligence (CSAI)" checked>Computer Science & Engineering with Artificial Intelligence (CSAI)</label></li>
<li><label><input type="checkbox" name="branches" value="Dual Degree B.Tech +MBA" checked>Dual Degree B.Tech +MBA</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Applied Mathematics (CSAM)" checked>Computer Science & Applied Mathematics (CSAM)</label></li>
<li><label><input type="checkbox" name="branches" value="B.Arch (JEE Main-Paper 2)" checked>B.Arch (JEE Main-Paper 2)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Social Sciences (CSSS)" checked>Computer Science & Social Sciences (CSSS)</label></li>

                            

                </ul>
            </div>
        </div>
                <div id="gender" class="form-control gender">
                    <label><input type="radio" name="gender" value="neutral" checked>Neutral</label>
                </div>

                <button type="submit" id="submit-btn" class="btn">Predict</button>
            </div>

        </form>
        <div class="table-container">
            <table class="table">
                <thead>
                    <th>Round</th>
                    <th>College</th>
                    <th>Branch</th>
                    <th>Category</th>
                    <th>Gender</th>
                    <th>Quota</th>
                    <th>Opening Rank</th>
                    <th>Closing Rank</th>
                </tr>
                </thead>
                <tbody id="table">
                </tbody>
            </table>
            <button id ="loadMore" class="btn">Load More</button>
        </div>
    </main>
    <?php include "footer.html";?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
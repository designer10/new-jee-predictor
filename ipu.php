<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jee Mains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php include "nav.html";?>
        <div class="page-info">
            <h2 class="title">IPU<span class="mob-none">-</span>Predictor</h2>
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
                <input type="hidden" id="type" value="ipu">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option value="D GENERAL">DELHI GENERAL</option>
                        <option value="D OBC">DELHI OBC</option>
                        <option value="D EWS">DELHI EWS</option>
                        <option value="D SC">DELHI SC</option>
                        <option value="D ST">DELHI ST</option>
                        <option value="D DEFENCE">DELHI DEFENCE</option>
                        <option value="D PHYSICALLY HANDICAPPED">DELHI PHYSICALLY HANDICAPPED</option>
                        <option value="OD GENERAL" selected>OUTSIDE DELHI GENERAL</option>
                        <option value="OD DEFENCE">OUTSIDE DELHI DEFENCE</option>
                        <option value="OD EWS">OUTSIDE DELHI EWS</option>
                        <option value="OD SC">OUTSIDE DELHI SC</option>
                        <option value="OD ST">OUTSIDE DELHI ST</option>
                        <option value="OD PHYSICALLY HANDICAPPED">OUTSIDE DELHI PHYSICALLY HANDICAPPED</option>
                        <option value="ALL INDIA KASHMIRI MIGRANT">ALL INDIA KASHMIRI MIGRANT</option>
                        <option value="ALL INDIA JAIN MINORITY">ALL INDIA JAIN MINORITY</option>
                        <option value="ALL INDIA SIKH MINORITY">ALL INDIA SIKH MINORITY</option>
                        
                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value='1' selected>Round 1</option>
                        <option value='2' selected>Round 2</option>
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
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Engineering" checked>Computer Science & Engineering</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical & Electronics Engineering" checked>Electrical & Electronics Engineering</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering" checked>Electronics & Communication Engineering</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology" checked>Information Technology</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Shift I)" checked>Computer Science & Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical & Electronics Engineering (Shift I)" checked>Electrical & Electronics Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (Shift I)" checked>Electronics & Communication Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology (Shift I)" checked>Information Technology (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Instrumentation & Control Engineering (Shift I)" checked>Instrumentation & Control Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence & Machine Learning" checked>Artificial Intelligence & Machine Learning</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence & Data Science" checked>Artificial Intelligence & Data Science</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering (Shift I)" checked>Civil Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Shift II)" checked>Computer Science & Engineering (Shift II)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (Shift II)" checked>Electronics & Communication Engineering (Shift II)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology (Shift II)" checked>Information Technology (Shift II)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Shift I)" checked>Mechanical Engineering (Shift I)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering" checked>Mechanical Engineering</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Technology" checked>Computer Science & Technology</label></li>
                            <li><label><input type="checkbox" name="branches" value="Automation & Robotics" checked>Automation & Robotics</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial Internet of Things" checked>Industrial Internet of Things</label></li>
                            <li><label><input type="checkbox" name="branches" value="Bio-chemical Engineering (Dual Degree)" checked>Bio-chemical Engineering (Dual Degree)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Engineering (Dual Degree)" checked>Chemical Engineering (Dual Degree)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Dual Degree)" checked>Computer Science & Engineering (Dual Degree)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (Dual Degree)" checked>Electronics & Communication Engineering (Dual Degree)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology (Dual Degree)" checked>Information Technology (Dual Degree)</label></li>
                            <li><label><input type="checkbox" name="branches" value="CSE- DS" checked>CSE- DS</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence & Data Science (Shift II)" checked>Artificial Intelligence & Data Science (Shift II)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence & Machine Learning (Shift II)" checked>Artificial Intelligence & Machine Learning (Shift II)</label></li>
                            <li><label><input type="checkbox" name="branches" value="CS" checked>CS</label></li>
                            <li><label><input type="checkbox" name="branches" value="CSE- AIML" checked>CSE- AIML</label></li>
                            <li><label><input type="checkbox" name="branches" value="CSE (Cyber Security)" checked>CSE (Cyber Security)</label></li>
                            <li><label><input type="checkbox" name="branches" value="CSE - AI" checked>CSE - AI</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics & Comm.- Advance Comm. Technology" checked>Electronics & Comm.- Advance Comm. Technology</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics Engg.- VLSI Design & Technology" checked>Electronics Engg.- VLSI Design & Technology</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology and Engineering" checked>Information Technology and Engineering</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical & Automation Engineering (Shift I)" checked>Mechanical & Automation Engineering (Shift I)</label></li>
                            

                </ul>
            </div>
        </div>
                <div id="gender" class="form-control gender">
                    <label><input type="radio" name="gender" value="neutral" checked> Neutral</label>
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
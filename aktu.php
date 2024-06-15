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
            <h2 class="title">AKTU <span class="mob-none">-</span> Josaa Predictor</h2>
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
                <input type="hidden" id="type" value="aktu">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option value='OPEN' >OPEN</option>
                        <option value='OPEN(AF)' >OPEN(AF)</option>
                        <option value='OPEN(FF)' >OPEN(FF)</option>
                        <option value='OPEN(GIRL)' >OPEN(GIRL)</option>
                        <option value='OPEN(PH)' >OPEN(PH)</option>
                        <option value='OPEN(TF)' >OPEN(TF)</option>
                        <option value='BC' >BC</option>
                        <option value='BC(AF)' >BC(AF)</option>
                        <option value='BC(FF)' >BC(FF)</option>
                        <option value='BC(Girl)' >BC(GIRL)</option>
                        <option value='BC(PH)' >BC(PH)</option>
                        <option value='EWS(AF)'>EWS(AF)</option>
                        <option value='EWS(OPEN)'>EWS(OPEN)</option>
                        <option value='EWS(GL)'>EWS(GIRL)</option>
                        <option value='EWS(PH)'>EWS(PH)</option>
                        <option value='SC'>SC</option>
                        <option value='SC(AF)'>SC(AF)</option>
                        <option value='SC(Girl)'>SC(GIRL)</option>
                        <option value='SC(PH)'>SC(PH)</option>
                        <option value='ST'>ST</option>
                        <option value='ST(Girl)'>ST(GIRL)</option>
                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value='1' selected>Round 1</option>
                        <option value='2' selected>Round 2</option>
                        <option value='3' selected>Round 3</option>
                        <option value='4' selected>Round 4</option>
                        <option value='5' selected>Round 5</option>
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
                    <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Shift I)">Electronics and Communication Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Shift I)">Computer Science and Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science Information Technology (Shift I)">Computer Science Information Technology (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Shift I)(FW)">Electronics and Communication Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Information Technology (Shift I)">Information Technology (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Artificial Intelligence) (Shift I)">Computer Science and Engineering (Artificial Intelligence) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Artificial Intelligence (AI) And Data Science (Shift I)">Artificial Intelligence (AI) And Data Science (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Data Science) (Shift I)">Computer Science and Engineering (Data Science) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Civil Engineering (Shift I)">Civil Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics Engineering (Shift I)">Electronics Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Artificial Intelligence & Machine Learning) (Shift I)">Computer Science and Engineering (Artificial Intelligence & Machine Learning) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science (Shift I)">Computer Science (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Shift I)">Mechanical Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electrical Engineering (Shift I)">Electrical Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Production) (Shift I)">Mechanical Engineering (Production) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Chemical Engineering (Shift I)">Chemical Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Information Technology (Shift I) (FW)">Information Technology (Shift I) (FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Shift I)(FW)">Mechanical Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electrical Engineering (Shift I) (FW)">Electrical Engineering (Shift I) (FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Civil Engineering (Shift I)(FW)">Civil Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Production) (Shift I)(FW)">Mechanical Engineering (Production) (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Shift I)">Electronics and Communication Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Industrial and Production Engineering (Shift I)">Industrial and Production Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Shift II)">Computer Science and Engineering (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Shift II)">Mechanical Engineering (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Civil Engineering (Shift II)">Civil Engineering (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electrical Engineering (Shift II)">Electrical Engineering (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Shift II)">Electronics and Communication Engineering (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Information Technology (Shift II)">Information Technology (Shift II)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (Internet of Things) (Shift I)">Computer Science and Engineering (Internet of Things) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Automobile) (Shift I)">Mechanical Engineering (Automobile) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Automobile Engineering (Shift I)">Automobile Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical and Automation Engineering (Shift I)">Mechanical and Automation Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electrical and Electronics Engineering (Shift I)">Electrical and Electronics Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Industrial Engineering and Management (Shift I)">Industrial Engineering and Management (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Automobile) (Shift I)(FW)">Mechanical Engineering (Automobile) (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical and Automation Engineering (Shift I)(FW)">Mechanical and Automation Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electrical and Electronics Engineering (Shift I)(FW)">Electrical and Electronics Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Industrial Engineering and Management (Shift I)(FW)">Industrial Engineering and Management (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science (Internet of Things) (Shift I)">Computer Science (Internet of Things) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (Manufacturing) (Shift I)">Mechanical Engineering (Manufacturing) (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Biotechnology (Shift I)">Biotechnology (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science and Design (Shift I)">Computer Science and Design (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Robotics and Artificial Intelligence (Shift I)">Robotics and Artificial Intelligence (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechatronics Engineering (Shift I)">Mechatronics Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Biotechnology (Shift I)(FW)">Biotechnology (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Mechatronics Engineering (Shift I)(FW)">Mechatronics Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Robotics and Artificial Intelligence (Shift I)(FW)">Robotics and Artificial Intelligence (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Textile Technology (Shift I)">Textile Technology (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Applied Electronics and Instrumentation (Shift I)">Applied Electronics and Instrumentation (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Bio-Medical Engineering (Shift I)">Bio-Medical Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Environmental Engineering (Shift I)">Environmental Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics and Instrumentation Engineering (Shift I)">Electronics and Instrumentation Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Textile Technology (Shift I)(FW)">Textile Technology (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Applied Electronics and Instrumentation (Shift I)(FW)">Applied Electronics and Instrumentation (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Bio-Medical Engineering (Shift I)(FW)">Bio-Medical Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Environmental Engineering (Shift I)(FW)">Environmental Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronics and Instrumentation Engineering (Shift I)(FW)">Electronics and Instrumentation Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Instrumentation and Control Engineering (Shift I)">Instrumentation and Control Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Industrial Production Engineering (Shift I)">Industrial Production Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Instrumentation and Control Engineering (Shift I)(FW)">Instrumentation and Control Engineering (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Food Engineering & Technology (Shift I)">Food Engineering & Technology (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Engineering (Shift I) (FW)">Computer Engineering (Shift I) (FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronic And Computer Engineering (Shift I)">Electronic And Computer Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Textile Chemistry (Shift I)">Textile Chemistry (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Food Technology (Shift I)(FW)">Food Technology (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Computer Science And Design (Shift I)(FW)">Computer Science And Design (Shift I)(FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Electronic And Computer Engineering (Shift I) (FW)">Electronic And Computer Engineering (Shift I) (FW)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Automobile Engineering (Shift I)">Automobile Engineering (Shift I)</label></li>
                    <li><label><input type="checkbox" name="branches" value="Textile Chemistry (Shift I)(FW)">Textile Chemistry (Shift I)(FW)</label></li>                      
                </ul>
            </div>
        </div>
                <div id="gender" class="form-control gender">
                    <label><input type="radio" name="gender" value="neutral" checked> Neutral</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
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
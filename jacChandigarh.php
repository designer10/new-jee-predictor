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
            <h2 class="title">JAC Chandigarh <span class="mob-none">-</span> Josaa Predictor</h2>
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
                <input type="hidden" id="type" value="jacChandigarh">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option value="OPEN" selected>OPEN</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="Person with Disability (PwD)">Person with Disability (PwD)</option>
                        <option value="Rural Area">Rural Area</option>
                        <option value="One Girl Child out of the only two girl children">One Girl Child out of the only two girl children</option>
                        <option value="Defence Personel for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur">Defence Personel for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur</option>
                        <option value="Sports Person for UIET/Dr. SSB UICET/UIET Hoshiarpur">Sports Person for UIET/Dr. SSB UICET/UIET Hoshiarpur</option>
                        <option value="Economically Weaker Section under Tuition Fee Waiver Scheme for UIET/Dr. SSB UICET/UIET Hoshiarpur">Economically Weaker Section under Tuition Fee Waiver Scheme for UIET/Dr. SSB UICET/UIET Hoshiarpur</option>
                        <option value="Backward Classes">Backward Classes</option>
                        <option value="Border Area for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur">Border Area for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur</option>
                        <option value="Kashmiri Migrant for UIET/Dr. SSB UICET/UIET Hoshiarpur">Kashmiri Migrant for UIET/Dr. SSB UICET/UIET Hoshiarpur</option>
                        <option value="Defence Personel for CCET/CCA">Defence Personel for CCET/CCA</option>
                        <option value="Sports Person for CCET/CCA">Sports Person for CCET/CCA</option>
                        <option value="Economically Weaker Section under Tuition Fee Waiver Scheme for CCET">Economically Weaker Section under Tuition Fee Waiver Scheme for CCET</option>
                        <option value="OPEN EWS">OPEN EWS</option>
                        <option value="Children/Grandchildren of Freedom Fighters">Children/Grandchildren of Freedom Fighters</option>
                        <option value="Kashmiri Migrant/Kashmiri Displaced for CCET/CCA">Kashmiri Migrant/Kashmiri Displaced for CCET/CCA</option>
                        <option value="Cancer patient for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur">Cancer patient for Dr.SSBUICET/ UIET Chandigarh/ UIET Hoshiarpur</option>
                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value='1' selected>Round 1</option>
                        <option value='2' selected>Round 2</option>
                        <option value='3' selected>Round 3</option>
                        <option value='Special'  selected>Special Round</option>
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
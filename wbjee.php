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
            <h2 class="title">WBJEE<span class="mob-none">-</span>Predictor</h2>
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
                <input type="hidden" id="type" value="wbjee">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option value="Tuition Fee Waiver">Tuition Fee Waiver</option>
                        <option value="Open" selected>Open</option>
                        <option value="OBC - A">OBC - A</option>
                        <option value="SC">SC</option>
                        <option value="OBC - B">OBC - B</option>
                        <option value="ST">ST</option>
                        <option value="Open (PwD)">Open (PwD)</option>
                        <option value="SC (PwD)">SC (PwD)</option>
                        <option value="OBC - A (PwD)">OBC - A (PwD)</option>
                        <option value="OBC - B (PwD)">OBC - B (PwD)</option>

                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value='1' selected>Round 1</option>
                        <option value='2' selected>Round 2</option>
                        <option value='3' selected>Round 3</option>
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
                            <li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Artificial Intelligence And Machine Learning) (TFW)">Computer Science & Engineering (Artificial Intelligence And Machine Learning) (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="B.Pharm/Pharmaceutical Technology">B.Pharm/Pharmaceutical Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Civil Engineering (TFW)">Civil Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Textile Technology">Textile Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Electrical & Electronics Engineering (TFW)">Electrical & Electronics Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering - TFW">Computer Science & Engineering - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Electrical Engineering (TFW)">Electrical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Civil Engineering">Civil Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics And Instrumentation Engineering">Electronics And Instrumentation Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Agricultural Engineering">Agricultural Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Architectural Engineering">Architectural Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Artificial Intelligence)">Computer Science & Engineering (Artificial Intelligence)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Tele-Communication Engineering (TFW)">Electronics & Tele-Communication Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="COMPUTER SCIENCE AND INFORMATION TECHNOLOGY-TFW">COMPUTER SCIENCE AND INFORMATION TECHNOLOGY-TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering">Mechanical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Architecture (TFW)">Architecture (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Power Engineering (TFW)">Power Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Optics & Optoelectronics (TFW)">Optics & Optoelectronics (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Artificial Intelligence And Machine Learning)">Computer Science & Engineering (Artificial Intelligence And Machine Learning)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science And Design">Computer Science And Design</label></li>
<li><label><input type="checkbox" name="branches" value="Mechanical Engineering (TFW)">Mechanical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering">Electronics & Communication Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science And Design - TFW">Computer Science And Design - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Agricultural Engineering (TFW)">Agricultural Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Power Engineering">Power Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Jute & Fibre Technology">Jute & Fibre Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Information Technology (TFW)">Information Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Data Science)">Computer Science & Engineering (Data Science)</label></li>
<li><label><input type="checkbox" name="branches" value="Electrical Engineering">Electrical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Chemical Engineering">Chemical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Chemical Engineering (TFW)">Chemical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Communication Engineering (TFW)">Electronics & Communication Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Optics & Optoelectronics">Optics & Optoelectronics</label></li>
<li><label><input type="checkbox" name="branches" value="Polymer Science & Technology">Polymer Science & Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Information Technology">Information Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Cyber Security) (TFW)">Computer Science & Engineering (Cyber Security) (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Construction Engineering">Construction Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Internet Of Things And Cyber Security Including Block Chain Technology) (TFW)">Computer Science & Engineering (Internet Of Things And Cyber Security Including Block Chain Technology) (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (IOT) - TFW">Computer Science & Engineering (IOT) - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Biotechnology">Biotechnology</label></li>
<li><label><input type="checkbox" name="branches" value="Mining Engineering">Mining Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Artificial Intelligence And Data Science">Artificial Intelligence And Data Science</label></li>
<li><label><input type="checkbox" name="branches" value="Artificial Intelligence And Machine Learning">Artificial Intelligence And Machine Learning</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Internet Of Things And Cyber Security Including Block Chain Technology)">Computer Science & Engineering (Internet Of Things And Cyber Security Including Block Chain Technology)</label></li>
<li><label><input type="checkbox" name="branches" value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Production Engineering (TFW)">Production Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Dairy Technology">Dairy Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Applied Electronics And Instrumentation Engineering">Applied Electronics And Instrumentation Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Ceramic Engineering, Oil Technology, Petrochem & Petro Refinery Engg, Pharmaceutical & Fine Chemical Technology">Ceramic Engineering, Oil Technology, Petrochem & Petro Refinery Engg, Pharmaceutical & Fine Chemical Technology</label></li>
<li><label><input type="checkbox" name="branches" value="ELECTRONICS ENGINEERING (VLSI DESIGN AND TECHNOLOGY)">ELECTRONICS ENGINEERING (VLSI DESIGN AND TECHNOLOGY)</label></li>
<li><label><input type="checkbox" name="branches" value="ARTIFICIAL INTELLIGENCE (AI) -TFW">ARTIFICIAL INTELLIGENCE (AI) -TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Metallurgical And Materials Engineering">Metallurgical And Materials Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics & Tele-Communication Engineering">Electronics & Tele-Communication Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Instrumentation & Electronics (TFW)">Instrumentation & Electronics (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Civil And Environmental Engineering">Civil And Environmental Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="B ARCH-TFW">B ARCH-TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Polymer Science & Technology (TFW)">Polymer Science & Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science And Business System (TFW)">Computer Science And Business System (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Instrumentation & Electronics">Instrumentation & Electronics</label></li>
<li><label><input type="checkbox" name="branches" value="B.Pharm/Pharmaceutical Technology (TFW)">B.Pharm/Pharmaceutical Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Biomedical Engineering (TFW)">Biomedical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering">Computer Science & Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Metallurgical Engineering (TFW)">Metallurgical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Textile Technology (TFW)">Textile Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Leather Technology">Leather Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Food Technology">Food Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Data Science (TFW)">Data Science (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="ARTIFICIAL INTELLIGENCE (AI)">ARTIFICIAL INTELLIGENCE (AI)</label></li>
<li><label><input type="checkbox" name="branches" value="Instrumentation Engineering">Instrumentation Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Applied Electronics And Instrumentation Engineering (TFW)">Applied Electronics And Instrumentation Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Food Technology And Bio Chemical Engineering">Food Technology And Bio Chemical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Data Science) (TFW)">Computer Science & Engineering (Data Science) (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Production Engineering">Production Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics And Computer Science (ESC) - TFW">Electronics And Computer Science (ESC) - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Artificial Intelligence And Machine Learning (TFW)">Artificial Intelligence And Machine Learning (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Marine Engineering">Marine Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Apparel & Production Management">Apparel & Production Management</label></li>
<li><label><input type="checkbox" name="branches" value="Metallurgical Engineering">Metallurgical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Ceramic Enginering And Technology (TFW)">Ceramic Enginering And Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="ELECTRONICS ENGINEERING (VLSI DESIGN AND TECHNOLOGY)-TFW">ELECTRONICS ENGINEERING (VLSI DESIGN AND TECHNOLOGY)-TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Biomedical Engineering">Biomedical Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Technology">Computer Science & Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science And Business System">Computer Science And Business System</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics And Computer Science (ESC)">Electronics And Computer Science (ESC)</label></li>
<li><label><input type="checkbox" name="branches" value="Ceramic Engineering, Oil Technology, Petrochem & Petro Refinery Engg, Pharmaceutical & Fine Chemical Technology - TFW">Ceramic Engineering, Oil Technology, Petrochem & Petro Refinery Engg, Pharmaceutical & Fine Chemical Technology - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (IOT)">Computer Science & Engineering (IOT)</label></li>
<li><label><input type="checkbox" name="branches" value="Electronics And Instrumentation Engineering (TFW)">Electronics And Instrumentation Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Ceramic Enginering And Technology">Ceramic Enginering And Technology</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Cyber Security)">Computer Science & Engineering (Cyber Security)</label></li>
<li><label><input type="checkbox" name="branches" value="Construction Engineering (TFW)">Construction Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Technology - TFW">Computer Science & Technology - TFW</label></li>
<li><label><input type="checkbox" name="branches" value="PRINTING ENGINEERING-TFW">PRINTING ENGINEERING-TFW</label></li>
<li><label><input type="checkbox" name="branches" value="Food Technology And Bio Chemical Engineering (TFW)">Food Technology And Bio Chemical Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="B ARCH">B ARCH</label></li>
<li><label><input type="checkbox" name="branches" value="Computer Science & Engineering (Artificial Intelligence) (TFW)">Computer Science & Engineering (Artificial Intelligence) (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Data Science">Data Science</label></li>
<li><label><input type="checkbox" name="branches" value="PRINTING ENGINEERING">PRINTING ENGINEERING</label></li>
<li><label><input type="checkbox" name="branches" value="Instrumentation Engineering (TFW)">Instrumentation Engineering (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="COMPUTER SCIENCE AND INFORMATION TECHNOLOGY">COMPUTER SCIENCE AND INFORMATION TECHNOLOGY</label></li>
<li><label><input type="checkbox" name="branches" value="Jute & Fibre Technology (TFW)">Jute & Fibre Technology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Automobile Engineering">Automobile Engineering</label></li>
<li><label><input type="checkbox" name="branches" value="Biotechnology (TFW)">Biotechnology (TFW)</label></li>
<li><label><input type="checkbox" name="branches" value="Architecture">Architecture</label></li>
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
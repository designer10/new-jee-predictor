<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jee Adv</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include "nav.html";?>
    <header>
        <div class="page-info">
            <h2 class="title">Jee Adv <span class="mob-none">-</span> Josaa Predictor</h2>
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
                <input type="hidden" id="type" value="iit">
                <div class="rank-container">
                    <input type="text" id="rank" class="rank" required="required" autocomplete="off"><span class="enter-rank">Enter Rank</span>
                </div>

                <div class="category-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="category" class="ddds">
                        <option selected>Select Category</option>
                        <option value="OPEN">OPEN</option>
                        <option value="EWS">EWS</option>
                        <option value="OBC-NCL">OBC-NCL</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="OPEN (PwD)">OPEN (PwD)</option>
                        <option value="EWS (PwD)">EWS (PwD)</option>
                        <option value="OBC-NCL (PwD)">OBC-NCL (PwD)</option>
                        <option value="SC (PwD)">SC (PwD)</option>
                        <option value="ST (PwD)">ST (PwD)</option>
                    </select>
                </div>
                <div class="state-container">
                    <span><img src="down-arrow-white.svg" alt="..." class="downImg"></span>
                    <select id="round" class="ddds" id="round">
                        <option value="6">Round 6</option>
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
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering (4 Years, Bachelor of Technology)">Civil Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (4 Years, Bachelor of Technology)">Computer Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering (4 Years, Bachelor of Technology)">Electrical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (4 Years, Bachelor of Technology)">Mechanical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)">Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Aerospace Engineering (4 Years, Bachelor of Technology)">Aerospace Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="BS in Mathematics (4 Years, Bachelor of Science)">BS in Mathematics (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Engineering (4 Years, Bachelor of Technology)">Chemical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemistry (4 Years, Bachelor of Science)">Chemistry (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Economics (4 Years, Bachelor of Science)">Economics (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Energy Engineering (4 Years, Bachelor of Technology)">Energy Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Engineering Physics (4 Years, Bachelor of Technology)">Engineering Physics (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Environmental Science and Engineering (4 Years, Bachelor of Technology)">Environmental Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)">Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech in General Engineering (4 Years, Bachelor of Technology)">B.Tech in General Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech in Materials Science and Engineering (4 Years, Bachelor of Technology)">B.Tech in Materials Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech in Mathematics and Computing (4 Years, Bachelor of Technology)">B.Tech in Mathematics and Computing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech in Microelectronics & VLSI (4 Years, Bachelor of Technology)">B.Tech in Microelectronics & VLSI (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Bio Engineering (4 Years, Bachelor of Technology)">Bio Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="BS in Chemical Sciences (4 Years, Bachelor of Science)">BS in Chemical Sciences (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Data Science and Engineering (4 Years, Bachelor of Technology)">Data Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)">Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)">Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Engineering and Computational Mechanics (4 Years, Bachelor of Technology)">Engineering and Computational Mechanics (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Materials Engineering (4 Years, Bachelor of Technology)">Materials Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing (4 Years, Bachelor of Technology)">Mathematics and Computing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))">Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Production and Industrial Engineering (4 Years, Bachelor of Technology)">Production and Industrial Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Textile Technology (4 Years, Bachelor of Technology)">Textile Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Space Sciences and Engineering (4 Years, Bachelor of Technology)">Space Sciences and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Aerospace Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Aerospace Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Agricultural and Food Engineering (4 Years, Bachelor of Technology)">Agricultural and Food Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Applied Geology (4 Years, Bachelor of Science)">Applied Geology (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Architecture (5 Years, Bachelor of Architecture)">Architecture (5 Years, Bachelor of Architecture)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Exploration Geophysics (4 Years, Bachelor of Science)">Exploration Geophysics (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial and Systems Engineering (4 Years, Bachelor of Technology)">Industrial and Systems Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Instrumentation Engineering (4 Years, Bachelor of Technology)">Instrumentation Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Manufacturing Science and Engineering (4 Years, Bachelor of Technology)">Manufacturing Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing (4 Years, Bachelor of Science)">Mathematics and Computing (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mining Engineering (4 Years, Bachelor of Technology)">Mining Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)">Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))">Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Physics (4 Years, Bachelor of Science)">Physics (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence (4 Years, Bachelor of Technology)">Artificial Intelligence (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biomedical Engineering (4 Years, Bachelor of Technology)">Biomedical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)">Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computational Engineering (4 Years, Bachelor of Technology)">Computational Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)">Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Engineering Science (4 Years, Bachelor of Technology)">Engineering Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial Chemistry (4 Years, Bachelor of Technology)">Industrial Chemistry (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)">Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)">Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemistry with Specialization (4 Years, Bachelor of Science)">Chemistry with Specialization (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)">Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Physics with Specialization (4 Years, Bachelor of Science)">Physics with Specialization (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)">Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Earth Sciences (4 Years, Bachelor of Science)">Earth Sciences (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Materials Science and Engineering (4 Years, Bachelor of Technology)">Materials Science and Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Scientific Computing (4 Years, Bachelor of Science)">Mathematics and Scientific Computing (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Statistics and Data Science (4 Years, Bachelor of Science)">Statistics and Data Science (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biological Engineering (4 Years, Bachelor of Technology)">Biological Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biological Science (4 Years, Bachelor of Science)">Biological Science (4 Years, Bachelor of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)">Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech in CE. - M. Tech. in Geotechnical Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech in CE. - M. Tech. in Geotechnical Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech in CE. - M. Tech. in Structural Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech in CE. - M. Tech. in Structural Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (CSE) and M.Tech in CSE (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech. (CSE) and M.Tech in CSE (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (ECE) -M. Tech. in VLSI (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech. (ECE) -M. Tech. in VLSI (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (EEE)-M. Tech. in (Power &. Control) (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech. (EEE)-M. Tech. in (Power &. Control) (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (Mathematics & Computing) M. Tech. in (Mathematics & Computing) (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech. (Mathematics & Computing) M. Tech. in (Mathematics & Computing) (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (ME) - M. Tech. in Mechatronics (5 Years, B.Tech. + M.Tech./MS (Dual Degree))">B. Tech. (ME) - M. Tech. in Mechatronics (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B. Tech. (ME) - MBA (NITIE) (5 Years, Bachelor of Technology and MBA (Dual Degree))">B. Tech. (ME) - MBA (NITIE) (5 Years, Bachelor of Technology and MBA (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech. in Electronics and Communication Engineering and M.Tech. in Communication Systems (5 Years, Bachelor and Master of Technology (Dual Degree))">B.Tech. in Electronics and Communication Engineering and M.Tech. in Communication Systems (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Science and Technology (4 Years, Bachelor of Technology)">Chemical Science and Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical and Electronics Engineering (4 Years, Bachelor of Technology)">Electrical and Electronics Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biosciences and Bioengineering (4 Years, Bachelor of Technology)">Biosciences and Bioengineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)">Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Geological Technology (5 Years, Integrated Master of Technology)">Geological Technology (5 Years, Integrated Master of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Geophysical Technology (5 Years, Integrated Master of Technology)">Geophysical Technology (5 Years, Integrated Master of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Applied Geology (5 Years, Integrated Master of Technology)">Applied Geology (5 Years, Integrated Master of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Applied Geophysics (5 Years, Integrated Master of Technology)">Applied Geophysics (5 Years, Integrated Master of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Environmental Engineering (4 Years, Bachelor of Technology)">Environmental Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing (5 Years, Integrated Master of Technology)">Mathematics and Computing (5 Years, Integrated Master of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)">Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mining Machinery Engineering (4 Years, Bachelor of Technology)">Mining Machinery Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Petroleum Engineering (4 Years, Bachelor of Technology)">Petroleum Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence and Data Engineering (4 Years, Bachelor of Technology)">Artificial Intelligence and Data Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Ceramic Engineering (4 Years, Bachelor of Technology)">Ceramic Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics Engineering (4 Years, Bachelor of Technology)">Electronics Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgical Engineering (4 Years, Bachelor of Technology)">Metallurgical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)">Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Electrical Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechatronics Engineering (4 Years, Bachelor of Technology)">Mechatronics Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)">Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Agricultural Engineering (4 Years, Bachelor of Technology)">Agricultural Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Artificial Intelligence and Machine Learning (4 Years, Bachelor of Technology)">Artificial Intelligence and Machine Learning (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Bio Technology (4 Years, Bachelor of Technology)">Bio Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Food Engineering and Technology (4 Years, Bachelor of Technology)">Food Engineering and Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing (5 Years, Integrated Master of Science)">Mathematics and Computing (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Physics (5 Years, Integrated Master of Science)">Physics (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Quantitative Economics & Data Science (5 Years, Integrated Master of Science)">Quantitative Economics & Data Science (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Carpet and Textile Technology (4 Years, Bachelor of Technology)">Carpet and Textile Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Engineering (4 Years, Bachelor of Technology)">Computer Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial and Production Engineering (4 Years, Bachelor of Technology)">Industrial and Production Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology (4 Years, Bachelor of Technology)">Information Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics System Engineering (4 Years, Bachelor of Technology)">Electronics System Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Metallurgy and Materials Engineering (4 Years, Bachelor of Technology)">Metallurgy and Materials Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Food Technology (4 Years, Bachelor of Technology)">Food Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Instrumentation and Control Engineering (4 Years, Bachelor of Technology)">Instrumentation and Control Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Planning (4 Years, Bachelor of Planning)">Planning (4 Years, Bachelor of Planning)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science Engineering (Artificial Intelligence) (4 Years, B. Tech / B. Tech (Hons.))">Computer Science Engineering (Artificial Intelligence) (4 Years, B. Tech / B. Tech (Hons.))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science Engineering (Data Science) (4 Years, B. Tech / B. Tech (Hons.))">Computer Science Engineering (Data Science) (4 Years, B. Tech / B. Tech (Hons.))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics Engineering (VLSI Design and Technology) (4 Years, Bachelor of Technology)">Electronics Engineering (VLSI Design and Technology) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Telecommunication Engineering (4 Years, Bachelor of Technology)">Electronics and Telecommunication Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)">Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil and Environmental Engineering (4 Years, Bachelor of Technology)">Civil and Environmental Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science Engineering (Artificial lntelligence and Machine Learning) (4 Years, Bachelor of Technology)">Computer Science Engineering (Artificial lntelligence and Machine Learning) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Bio Medical Engineering (4 Years, Bachelor of Technology)">Bio Medical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Food Technology and Management (4 Years, Bachelor of Technology)">Food Technology and Management (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Handloom and Textile Technology (4 Years, Bachelor of Technology)">Handloom and Textile Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Engineering (5 Years, Integrated Masters in Technology)">Chemical Engineering (5 Years, Integrated Masters in Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering with specialization in Cyber Security (4 Years, Bachelor of Technology)">Computer Science and Engineering with specialization in Cyber Security (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Avionics) (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (Avionics) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Aeronautical Engineering (4 Years, Bachelor of Technology)">Aeronautical Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Dairy Engineering (4 Years, Bachelor of Technology)">Dairy Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Fashion and Apparel Engineering (4 Years, Bachelor of Technology)">Fashion and Apparel Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Printing and Packaging Technology (4 Years, Bachelor of Technology)">Printing and Packaging Technology (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and VLSI Engineering (4 Years, Bachelor of Technology)">Electronics and VLSI Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Data Science (5 Years, Bachelor and Master of Technology (Dual Degree))">Mathematics and Data Science (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemistry (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Chemistry (5 Years, Bachelor of Science and Master of Science (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computational Mathematics (5 Years, Bachelor and Master of Technology (Dual Degree))">Computational Mathematics (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Production Engineering (4 Years, Bachelor of Technology)">Production Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemistry (5 Years, Integrated Master of Science)">Chemistry (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Electronics and Communication Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computational and Data Science (4 Years, Bachelor of Technology)">Computational and Data Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Chemical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Chemical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Civil Engineering with Specialization in Construction Technology and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering with Specialization in Construction Technology and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering with Specialization in Cyber Security (5 Years, Bachelor and Master of Technology (Dual Degree))">Computer Science and Engineering with Specialization in Cyber Security (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering with Specialization in Data Science (5 Years, Bachelor and Master of Technology (Dual Degree))">Computer Science and Engineering with Specialization in Data Science (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electrical Engineering with Specialization In Power System Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with Specialization In Power System Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering with Specialization in Microelectronics and VLSI System Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Electronics and Communication Engineering with Specialization in Microelectronics and VLSI System Design (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Material Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Material Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Computing Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Mathematics and Computing Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering with Specialization in Manufacturing and Industrial Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with Specialization in Manufacturing and Industrial Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial Internet of Things (4 Years, Bachelor of Technology)">Industrial Internet of Things (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Ceramic Engineering and M.Tech Industrial Ceramic (5 Years, Bachelor and Master of Technology (Dual Degree))">Ceramic Engineering and M.Tech Industrial Ceramic (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Food Process Engineering (4 Years, Bachelor of Technology)">Food Process Engineering (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Industrial Design (4 Years, Bachelor of Technology)">Industrial Design (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Life Science (5 Years, Integrated Master of Science)">Life Science (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics (5 Years, Integrated Master of Science)">Mathematics (5 Years, Integrated Master of Science)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (VLSI Design and Technology) (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (VLSI Design and Technology) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Integrated B. Tech.(IT) and M. Tech (IT) (5 Years, Integrated B. Tech. and M. Tech.)">Integrated B. Tech.(IT) and M. Tech (IT) (5 Years, Integrated B. Tech. and M. Tech.)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Integrated B. Tech.(IT) and MBA (5 Years, Integrated B. Tech. and MBA)">Integrated B. Tech.(IT) and MBA (5 Years, Integrated B. Tech. and MBA)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mathematics and Scientific Computing (4 Years, Bachelor of Technology)">Mathematics and Scientific Computing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Information Technology-Business Informatics (4 Years, Bachelor of Technology)">Information Technology-Business Informatics (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="B.Tech. in Electronics and Communication Engineering and M.Tech. in VLSI Design (5 Years, Bachelor and Master of Technology (Dual Degree))">B.Tech. in Electronics and Communication Engineering and M.Tech. in VLSI Design (5 Years, Bachelor and Master of Technology (Dual Degree))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering with Major in Artificial Intelligence (4 Years, Bachelor of Technology)">Computer Science and Engineering with Major in Artificial Intelligence (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Smart Manufacturing (4 Years, Bachelor of Technology)">Smart Manufacturing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering with specialization in Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)">Computer Science and Engineering with specialization in Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering with specialization in VLSI and Embedded Systems (4 Years, Bachelor of Technology)">Electronics and Communication Engineering with specialization in VLSI and Embedded Systems (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science (4 Years, Bachelor of Technology)">Computer Science (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Artificial Intelligence (4 Years, Bachelor of Technology)">Computer Science and Artificial Intelligence (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Business (4 Years, Bachelor of Technology)">Computer Science and Business (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)">Electronics and Communication Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechanical Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)">Mechanical Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science and Engineering (with Specialization of Data Science and Artificial Intelligence) (4 Years, B. Tech / B. Tech (Hons.))">Computer Science and Engineering (with Specialization of Data Science and Artificial Intelligence) (4 Years, B. Tech / B. Tech (Hons.))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (with Specialization of Embedded Systems and Internet of Things) (4 Years, B. Tech / B. Tech (Hons.))">Electronics and Communication Engineering (with Specialization of Embedded Systems and Internet of Things) (4 Years, B. Tech / B. Tech (Hons.))</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science Engineering (Data Science and Analytics) (4 Years, Bachelor of Technology)">Computer Science Engineering (Data Science and Analytics) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Computer Science Engineering (Human Computer lnteraction and Gaming Technology) (4 Years, Bachelor of Technology)">Computer Science Engineering (Human Computer lnteraction and Gaming Technology) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Electronics and Communication Engineering (Internet of Things) (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (Internet of Things) (4 Years, Bachelor of Technology)</label></li>
                            <li><label><input type="checkbox" name="branches" value="Mechatronics and Automation Engineering (4 Years, Bachelor of Technology)">Mechatronics and Automation Engineering (4 Years, Bachelor of Technology)</label></li>
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
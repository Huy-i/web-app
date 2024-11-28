<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本語独学 Web Application</title>
    <link rel="stylesheet" href="style.css">
 
</head>
 
<body>
 
    <header>
        <h1>日本語独学 Web Application</h1>
        <nav>
            <a href="#HOME">Home</a>
            <a href="languagesLink.html" id ="languageSelector">Languages</a>
            <a href="signout.html">Sign Out</a>
            <a href="#MORE">More</a>
            <a href="profile.html" id="Profile">Profile</a>
        </nav>
    </header>
    <!-- 言語選択のポップアップ -->
<div id="languageSelector" class="language-selector" style="display:none;">
    <h3>Select Language</h3>
    <button onclick="changeLanguage('zh')">中文 (Chinese)</button>
    <button onclick="changeLanguage('es')">Español (Spanish)</button>
    <button onclick="changeLanguage('en')">English</button>
</div>
 
    <!-- Search Box -->
    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search Courses...">
        <button class="search-button">Search</button>
    </div>
 
    <div class="container">
        <!-- Course 1 -->
        <div class="course">
            <div class="description">
                <h3>Course 1</h3>
                <p>This is a beginner's course designed to introduce you to the basics of the Japanese language.</p>
            </div>
            <div class="box">
                <a href="course1.html"><img src="image/course1.jpg" alt="Course 1"></a>
            </div>
        </div>
 
        <!-- Course 2 -->
        <div class="course">
            <div class="description">
                <h3>Course 2</h3>
                <p>This course dives deeper into grammar and vocabulary for intermediate learners.</p>
            </div>
            <div class="box">
                <a href="course2.html"><img src="image/course2.jpg" alt="Course 2"></a>
            </div>
        </div>
 
        <!-- Course 3 -->
        <div class="course">
            <div class="description">
                <h3>Course 3</h3>
                <p>A challenging course aimed at advanced learners who want to refine their fluency in Japanese.</p>
            </div>
            <div class="box">
                <a href="course3.html"><img src="image/course3.jpg" alt="Course 3"></a>
            </div>
        </div>
 
        <!-- Course 4 -->
        <div class="course">
            <div class="description">
                <h3>Course 4</h3>
                <p>An in-depth course for those who are looking to master Japanese for business purposes.</p>
            </div>
            <div class="box">
                <a href="course4.html"><img src="image/course4.jpg" alt="Course 4"></a>
            </div>
        </div>
 
        <!-- Course 5 -->
        <div class="course">
            <div class="description">
                <h3>Course 5</h3>
                <p>A course focusing on Japanese literature and culture for intermediate learners.</p>
            </div>
            <div class="box">
                <a href="course5.html"><img src="image/course5.jpg" alt="Course 5"></a>
            </div>
        </div>
    </div>
<footer>Copyright 2024.@Web application</footer>
<script>
    // ページが読み込まれたときにユーザー情報を表示
    window.onload = function() {
        const userInfo = JSON.parse(localStorage.getItem("userInfo"));
        if (userInfo) {
            document.getElementById("profileName").textContent = "Name: " + userInfo.name;
            document.getElementById("profileDob").textContent = "Date of Birth: " + userInfo.dob;
        } else {
            alert("No user info found. Please log in.");
        }
    };
</script>
</body>
 
</html>
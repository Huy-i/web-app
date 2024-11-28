<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
 
</head>
 
<body>
 
    <header>
        <h1>日本語独学 Web Application</h1>
    </header>
 
    <div class="box">
        <h2>Sign Up</h2>
        <form id="signUpForm">
            <div class="input-group">
                <label for="username">Email</label>
                <input type="email" id="username" name="username" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
            </div>
            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div>
                <button class="signin-button" type="submit">Sign Up</button>
            </div>
            <div>
                <!-- ログインページに遷移 -->
                <button class="login-button" type="button" id="loginButton">Already have an account? Log in</button>
            </div>
            <p>※ If you already have an account, please Log in.</p>
        </form>
    </div>
 
    <script>
        // サインインボタンをクリックした場合
        document.getElementById("loginButton").addEventListener("click", function() {
            // ログインページに遷移
            window.location.href = "login.html"; // login.html への遷移
        });
 
        // サインアップフォーム送信時の処理
        document.getElementById("signUpForm").addEventListener("submit", function(event) {
            event.preventDefault();
 
            // ユーザーが入力した値を取得
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const fullname = document.getElementById("fullname").value;
            const dob = document.getElementById("dob").value;
 
            // パスワード確認
            if (password !== confirmPassword) {
                alert("Passwords do not match! Please try again.");
                return;
            }
 
            // 仮のサインアップ処理（サーバーに送信して新規ユーザーを作成）
            // サインアップ処理が成功した場合、ログイン状態にしてホームページに遷移する等の処理を行う
            // サーバーとの通信処理などが必要
 
            // 仮にサインアップ成功した場合
            alert("Sign-up successful! You can now log in.");
            window.location.href = "homePage.html"; // サインアップ完了後、ホームページに遷移
        });
 
        // ページが読み込まれたときにログイン状態を確認
        window.onload = function() {
            // ローカルストレージに「isLoggedIn」があれば、ログイン済みとして扱う
            const isLoggedIn = localStorage.getItem("isLoggedIn");
           
            // ログイン済みならホームページへ遷移
            if (isLoggedIn) {
                window.location.href = "homePage.html"; // ホームページにリダイレクト
            } else {
                // ログインしていない場合はサインイン画面に
                console.log("Please sign in.");
            }
        };
    </script>
 
</body>
 
</html>
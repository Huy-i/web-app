<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
 
    <header>
        <h1>日本語独学 Web Application</h1>
    </header>
 
    <div class="box">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="username">Email</label>
                <input type="text" id="username" name="username" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div>
                <button class="login-button" type="submit">Login</button>
            </div>
            <div>
                <button class="signin-button" type="button" id="signUpButton">Sign Up</button>
            </div>
            <p>※ If you don't have an account, please Sign-Up</p>
        </form>
    </div>
 
    <script>
        // ログインフォームが送信されたときの処理
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();  // フォームのデフォルト送信をキャンセル
 
            // ユーザー名とパスワードを取得
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
 
            // 仮の認証チェック（本番ではサーバー側で行うべき）
            if (username === "user@example.com" && password === "password123") {
                // ユーザー情報をlocalStorageに保存
                const userInfo = {
                    name: "John Doe",  // ユーザー名（仮）
                    dob: "1990-01-01"  // 生年月日（仮）
                };
                localStorage.setItem("userInfo", JSON.stringify(userInfo));  // ローカルストレージに保存
 
                // ログイン成功時、HomePage.htmlへ遷移
                window.location.href = "homePage.blade.php";
            } else {
                // 認証失敗時のエラーメッセージ
                alert("Invalid username or password. Please try again.");
            }
             // フォームの入力欄をクリア
             document.getElementById("loginForm").reset();
        });
 
 
        // サインアップボタンがクリックされたときの処理
        document.getElementById("signUpButton").addEventListener("click", function() {
            // サインインページに遷移
            window.location.href = "sign-in.html"; // sign-in.html への遷移
        });
    </script>
 
</body>
 
</html>
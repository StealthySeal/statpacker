<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hey kid, wanna buy some camping gear?</title>
    <meta name="description" content="Find stats and info for camping gear." />
    <link rel="icon" href="/resources/image/logoC.png">
</head>

<body>
    <?php
include 'components/header.php';
?>
    <main>
        <form id="issue-report" method="POST" action="components/mail.php">
            <div class="field">
                <label id="name">Name</label>
                <p><input type="text" id="name" name="name"></p>
            </div>
            <div class="field">
                <label id="subject">Subject</label>
                <p><input type="text" id="subject" name="subject"></p>
            </div>
            <div class="field">
                <label id="description">Description of Issue</label>
                <p>
                    <textarea name="description" id="description" cols="60" rows="10" required="required" id="description">
                </textarea>
                </p>
            </div>
            <div class="field">
                <p>
                    <label id="email">Email Address:</label>
                    <input type="email" name="email" id="email">
                </p>
            </div>
            <div class="field">
                <label id="submit">Submit</label>
                <input type="submit" value="submit issue">
                <label id="reset">Reset</label>
                <input type="reset">
            </div>
        </form>
    </main>
</body>

</html>
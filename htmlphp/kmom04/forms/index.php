<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Forms</title>
</head>

<body>
    <form>
        <fieldset>
            <legend>Contact me!</legend>
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" placeholder="A. N. Other">
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" placeholder="a.n@other.com">
            <label for="reason">Reason for contacting</label>
            <select name="reason" id="reason">
                <option value="feedback">Feedback</option>
                <option value="hiring">Hiring</option>
                <option value="billing">Billing</option>
            </select>
            <label for="message">Your message</label>
            <textarea name="message" id="message" placeholder="Write your message here..."></textarea>
            <button type="submit">Send message!</button>
        </fieldset>
    </form>
</body>

</html>

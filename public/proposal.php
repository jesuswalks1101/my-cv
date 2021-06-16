<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/proposal.css">
    <title>Send Your Proposal</title>
</head>
<body>

    <header class="header">
        <div class="container">
           <nav class="navigation">
               <a href="index.html"><strong>Go to CV</strong></a>
               
           </nav>
        </div> <!-- container  -->
   </header>
    
    <div id="proposal">
        <section>
            <h2>SEND YOUR PROPOSAL</h2>
            <form action="/action.html">
                <section class="information">
                    <article>
                        <label for="lname">Last Name: </label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name...">
                    </article>
                        <article>
                            <label for="fname">First Name: </label>
                        <input type="text" name="fname" id="fname" placeholder="First Name...">
                    </article>
                    <article>
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" placeholder="Email...">
                    </article>
                </section>
                    <br>
                <h3>What do you need?</h3>
                <div class="textarea">
                <textarea name="textarea" id="textarea" cols="101" rows="10" placeholder="Type here..."></textarea>
                </div>
                <br>
                <form action="/action.html">
                    <label for="hear">How did you hear about me?</label>
                    <select name="hear" id="hear">
                        <option value="linkedin">LinkedIn</option>
                        <option value="upwork">UpWork</option>
                        <option value="youtube">YouTube</option>
                        <option value="other">Other</option>
                    </select>
                </form>
                <input class="button" type="submit" value="Send" name="submit">
            </form>
        </section>
    </div> <!-- Proposal -->


</body>
</html>
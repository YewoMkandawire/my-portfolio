
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="navstyle.css">
    </head>


    <body >
       <nav>
            <ul>
                <li><a href="indeks.html">HOME</a></li>
                <li><a href="project.html">PROJECTS</a></li>
                <li><a href="skills.html">SKILLS</a></li>
                
            </ul><div class="form">
       <form >
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <span class="error" id="nameError"></span><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <span class="error" id="emailError"></span><br>

        <label for="message">phone number:</label><br>
        <textarea id="message" name="message" required></textarea><br>
        <span class="error" id="messageError"></span><br>

        <label for="message">MESSAGES</label><br>
        <textarea id="message" name="message" required></textarea><br>
        <span class="error" id="messageError"></span><br>

     <input type="submit" value="Submit">
      </form>
    </div> 
</body>
</html>
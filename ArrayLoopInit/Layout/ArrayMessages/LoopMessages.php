<?php

class ArrayConfirmationMessages {
    
    const confirmExecute = '
    <html>

    <head>
    <link href="./Layout/CSS/main.css" rel="stylesheet" type="text/css"></link>
    </head>

    <body>
    <center>

    <div id="ArrayLoop-Container">
        <div id="ArrayLoop-MainTitle">
    ArrayLoop
    <p style="font-size: 20px; color: red;">Confirmation Required</p>
        </div>
        <div id="ArrayLoop-MainText">
        <p>You just enabled all the possible options,</p>
        <p>You got this message because you enabled Infinite ArrayLoop.</p>
        <p>Keep in mind that (again) i am not responsible for any damage you get or do while running this program.</p>
        <p style="font-size: 30px;">Are You Sure You Want This To Execute?</p>
        </div>
        <div id="ArrayLoop-Current-Boolean-Value">
        <form method="POST">
            <button class="arrayloop-button" name="arrayloop-sure">Turn On</button>
        </form>
        </div>
    </div>

    </center>
    </body>

    </html>';

}
<!-- <?php
    echo "<div class='calculatrice'>
    <form action=''>
        <input type='textarea'>
        <div class='row'>
            <input type='button' value='(' class='subButton button'>
            <input type='button' value=')' class='subButton button'>
            <input type='button' value='%' class='subButton button'>
            <input type='button' value='AC' class='subButton button'>
        </div>
        <div class='row'>
            <input type='button' value='7' class='primButton button'>
            <input type='button' value='8' class='primButton button'>
            <input type='button' value='9' class='primButton button'>
            <input type='button' value='/' class='subButton button'>
        </div>
        <div class='row'>
            <input type='button' value='4' class='primButton button'>
            <input type='button' value='5' class='primButton button'>
            <input type='button' value='6' class='primButton button'>
            <input type='button' value='*' class='subButton button'>
        </div>
        <div class='row'>
            <input type='button' value='1' class='primButton button'>
            <input type='button' value='2' class='primButton button'>
            <input type='button' value='3' class='primButton button'>
            <input type='button' value='-' class='subButton button'>
        </div>
        <div class='row'>
            <input type='button' value='0' class='primButton button'>
            <input type='button' value='.' class='primButton button'>
            <input type='submit' value='=' class='validButton button'>
            <input type='button' value='+' class='subButton button'>
        </div>
    </form>
    </div>";
?> -->

<?php
    echo "<div class='calculatrice'>
    <form action=''>
        <input type='number' name='valueOne' id='valueOne'>
        <div class='radio-box'>
            <div class='radio'>
                <input type='radio' name='operateur' id='plus' checked>
                <label for='plus'>+</label>
            </div>
            <div class='radio'>
                <input type='radio' name='operateur' id='moins' value='-'>
                <label for='moins'>-</label>
            </div>
            <div class='radio'>
                <input type='radio' name='operateur' id='fois' value='*'>
                <label for='fois'>*</label>
            </div>
            <div class='radio'>
                <input type='radio' name='operateur' id='diviser' value='/'>
                <label for='diviser'>/</label>
            </div>
        </div>
        <input type='number' name='valueTwo' id='valueTwo'>
        <input type='submit' value='='>
    </form>
    </div>";
    $v1 = floatval($_GET["valueOne"]);
    $v2 = floatval($_GET["valueTwo"]);
    $op = $_GET["operateur"];

    switch ($op) {
        case 'on':
            echo $v1 + $v2;
            break;
        
        case '-':
            echo $v1 - $v2;
            break;

        case '*':
            echo $v1 * $v2;
            break;

        case '/':
            echo $v1 / $v2;
            break;
    }
?>
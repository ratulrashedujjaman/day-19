<?php
require_once "vendor/autoload.php";
//require_once "App/classes/Student.php";

use App\classes\Word;
use App\classes\Student;
Student::student();
    if (isset($_POST['btn'])){
//        $word = new App\classes\Word();
//        $result = $word->wordCharacterCount($_POST);

        $result = Word::wordCharacterCount($_POST);

    }
?>

<form action="" method="post">
    <table>

    <tr>
        <th>Enter your String</th>
        <td><input type="text" name="given_string" size="50"></td>

    </tr>

    <tr>
        <th>Total number of Word</th>
        <td><input type="text" name="word_length" value= "<?php if (isset($result['word_length']))  echo $result ['word_length']; ?>" ></td>
    </tr>

    <tr>
        <th>Total number of Character</th>
        <td><input type="text" name="string_length" value= "<?php if (isset($result['string_length'])) echo $result ['string_length']; ?>" ></td>
    </tr>

    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="SubmiT"></td>
    </tr>

    </table>
</form>
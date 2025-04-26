<?php include('../../partials/session/session.php'); include('../nav.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Panel</title>
    <link rel="stylesheet" href="code-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/monokai.min.css">
</head>

<body>
    <div class="code-content temp">
        <div class="nav-2" id="topic-list">
            <li id="html-content">HTML & CSS</li>
            <li id="js-content">JAVASCRIPT</li>
            <li id="php-content">PHP</li>
            <li id="py-content">PYTHON</li>
            <li id="java-content">JAVA</li>
        </div>
        <div id="html-content" class="topic">
            <div class="left" id="left">
                <ol type="1" id="tutorial-list">
                    <li id="tut1">Inline block elements</li>
                    <li id="tut2">Entities in html</li>
                    <li id="tut3">Semantic elements in html</li>
                    <li id="tut4">Cascading Style Sheets in html</li>
                    <li id="tut5">External CSS for Tutorial-4</li>
                    <li id="tut6">CSS Selectors</li>
                    <li id="tut7">Box tools in html</li>
                    <li id="tut8">Background image and border</li>
                    <li id="tut9">Box Model in html</li>
                    <li id="tut10">Alignment in html</li>
                    <li id="tut11">Link Styling and other designing</li>
                    <li id="tut12">Navigation Bar</li>
                    <li id="tut13">Positioning Property in html</li>
                    <li id="tut14">Box Properties in html</li>
                    <li id="tut15">Inline block elements</li>
                    <li id="tut16">Flex Box Tutorial</li>
                    <li id="tut17">Size Units in html</li>
                    <li id="tut18">Media Queries</li>
                    <li id="tut19">More about selectors</li>
                    <li id="tut20">Attribute and nth child Pseudo selectors</li>
                    <li id="tut21">Before and after pseudo selector</li>
                </ol>
            </div>
            <div class="right" id="right">
                <div class="tutorial" id="tut1">
                    <h2>Tutorial - 1 Inline Block </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_1.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut2">
                    <h2>Tutorial - 2 HTML Entities </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_2.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut3">
                    <h2>Tutorial - 3 Sementic elements </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_3.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut4">
                    <h2>Tutorial - 4 Cascading Style Sheets </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_4.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut5">
                    <h2>Tutorial - 5 External CSS </h2>
                    <pre>
                        <code class="css"><?php include('html-code/tut_5.css'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut6">
                    <h2>Tutorial - 6 CSS Selectors </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_6.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut7">
                    <h2>Tutorial - 7 Box tools </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_7.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut8">
                    <h2>Tutorial - 8 Background image and border </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_8.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut9">
                    <h2>Tutorial - 9 Box Model </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_9.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut10">
                    <h2>Tutorial - 10 Alignment </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_20.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut11">
                    <h2>Tutorial - 11 Link Styling and other designing </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_11.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut12">
                    <h2>Tutorial - 12 Navigation Bar </h2>
                    <pre>
                        <code><?php include('html-code/tut_12.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut13">
                    <h2>Tutorial - 13 Positioning Property </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_13.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut14">
                    <h2>Tutorial - 14 Z-index </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_14.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut15">
                    <h2>Tutorial - 15 Document </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_15.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut16">
                    <h2>Tutorial - 16 Flex Box Tutorial </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_16.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut17">
                    <h2>Tutorial - 17 Size Units </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_17.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut18">
                    <h2>Tutorial - 18 Media Queries </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_18.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut19">
                    <h2>Tutorial - 19 More about selectors </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_19.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut20">
                    <h2>Tutorial - 20 Attribute and nth child Pseudo selectors </h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_20.html'); ?></code>
                    </pre>
                </div>
                <div class="tutorial" id="tut21">
                    <h2>Tutorial - 21 Before and after pseudo selector</h2>
                    <pre>
                        <code class="html"><?php include('html-code/tut_21.html'); ?></code>
                    </pre>
                </div>
            </div>
        </div>
        <div id="js-content" class="topic">
            <div class="left" id="left">
                <ol type="1" id="js-tutorial-list">
                    <li id="js-tut1">Variables</li>
                    <li id="js-tut2">Operator</li>
                    <li id="js-tut3">Loops</li>
                    <li id="js-tut4">Function</li>
                    <li id="js-tut5">Calculator</li>
                    <li id="js-tut6">Template Literal</li>
                    <li id="js-tut7">Map, Filter, Reduce</li>
                    <li id="js-tut8">Document Object Model</li>
                    <li id="js-tut9">Document Object Model</li>
                    <li id="js-tut10">Document Object Model - Functions</li>
                    <li id="js-tut11">Apply random color on boxes using DOM</li>
                    <li id="js-tut12">Document Object Model - Attribute</li>
                    <li id="js-tut13">Dynamic Card Generator</li>
                    <li id="js-tut14">Event Bubbling</li>
                    <li id="js-tut15">Set Timeout</li>
                </ol>
            </div>
            <div class="right" id="right">
                <div class="js-tutorial" id="js-tut1">
                    <h2>Tutorial - 1 Variables </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut1/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut1/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut2">
                    <h2>Tutorial - 2 Operator </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut2/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut2/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut3">
                    <h2>Tutorial - 3 Loops </h2>
                    <pre>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut3/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut4">
                    <h2>Tutorial - 4 Function </h2>
                    <pre>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut4/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut5">
                    <h2>Tutorial - 5 Calculator</h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut5/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut5/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut6">
                    <h2>Tutorial - 6 Template Literal </h2>
                    <pre>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut6/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut7">
                    <h2>Tutorial - 7 Map, Filter, Reduce </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut7/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut7/mfr.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut8">
                    <h2>Tutorial - 8 Document Object Model </h2>
                    <pre>
                        <h3>HTML & JavaScript</h3>
                        <code class="html"><?php include('js-code/tut8/index.html'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut9">
                    <h2>Tutorial - 9 Document Object Model </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut9/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut9/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut10">
                    <h2>Tutorial - 10 Document Object Model - Functions </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut10/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut10/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut11">
                    <h2>Tutorial - 11 Apply random color on boxes using DOM </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut11/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut11/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut12">
                    <h2>Tutorial - 12 Document Object Model - Attribute </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut12/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut12/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut13">
                    <h2>Tutorial - 13 Dynamic Card Generator </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut13/index.html'); ?></code>
                        <h3>CSS</h3>
                        <code class="css"><?php include('js-code/tut13/style.css'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut13/script.js'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut14">
                    <h2>Tutorial - 14 Event Bubbling </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut14/eventBubbling.html'); ?></code>
                    </pre>
                </div>
                <div class="js-tutorial" id="js-tut15">
                    <h2>Tutorial - 15 Set Timeout </h2>
                    <pre>
                        <h3>HTML</h3>
                        <code class="html"><?php include('js-code/tut15/index.html'); ?></code>
                        <h3>JavaScript</h3>
                        <code class="js"><?php include('js-code/tut15/script.js'); ?></code>
                    </pre>
                </div>
            </div>
        </div>
        <div id="php-content" class="topic">
            <div class="left" id="left">
                <ol type="1" id="php-tutorial-list">
                    <li id="php-tut1">Variables</li>
                    <li id="php-tut2">Datatypes</li>
                    <li id="php-tut3">String Function</li>
                    <li id="php-tut4">Operators</li>
                    <li id="php-tut5">If Else</li>
                    <li id="php-tut6">Switch Case</li>
                    <li id="php-tut7">Loops</li>
                    <li id="php-tut8">Functions in PHP</li>
                    <li id="php-tut9">Date function</li>
                    <li id="php-tut10">Associative Array</li>
                    <li id="php-tut11">Multidimensional Array</li>
                    <li id="php-tut12">Global Variable</li>
                    <li id="php-tut13">Get Post</li>
                    <li id="php-tut14">Database Connection</li>
                    <li id="php-tut15">Create Database</li>
                    <li id="php-tut16">Store in Database</li>
                    <li id="php-tut17">Select from database</li>
                    <li id="php-tut18">Files</li>
                    <li id="php-tut19">Include</li>
                    <li id="php-tut20">Writing in file</li>
                    <li id="php-tut21">Cookies</li>
                    <li id="php-tut22">Session</li>
                    <li id="php-tut23">Get Session Data</li>
                    <li id="php-tut24">Logout</li>
                </ol>
            </div>
            <div class="right" id="right">
                <div class="php-tutorial" id="php-tut1">
                    <h2>Tutorial - 1 Variables </h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_05.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut2">
                    <h2>Tutorial - 2 Datatypes </h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_06_datatypes.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut3">
                    <h2>Tutorial - 3 String Function </h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_07_String_fun.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut4">
                    <h2>Tutorial - 4 Operators </h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_08_oerators.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut5">
                    <h2>Tutorial - 5 If Else</h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_09_if-else.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut6">
                    <h2>Tutorial - 6 Switch Case </h2>
                    <pre>
                        <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_10_switch_case.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut7">
                    <h2>Tutorial - 7 Loops </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_11_Loops.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut8">
                    <h2>Tutorial - 8 Functions in PHP </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_12_function.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut9">
                    <h2>Tutorial - 9 Date function </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_13_date_function.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut10">
                    <h2>Tutorial - 10 Associative Array </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_14_asso_array.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut11">
                    <h2>Tutorial - 11 Multidimensional Array </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_15_multi-dimensional_array.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut12">
                    <h2>Tutorial - 12 Global Variable </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_16_global_variables.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut13">
                    <h2>Tutorial - 13 Get Post </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_17_get_post.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut14">
                    <h2>Tutorial - 14 Database Connection </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_18_database_connectivity.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut15">
                    <h2>Tutorial - 15 Create Database </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_19_create_db.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut16">
                    <h2>Tutorial - 16 Store in Database </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="html"><?php include('php_code\tut_20_store_in_db.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut17">
                    <h2>Tutorial - 17 Select from database </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_21_select_data.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut18">
                    <h2>Tutorial - 18 Files </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_22_files.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut19">
                    <h2>Tutorial - 19 Include </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_23_include.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut20">
                    <h2>Tutorial - 20 Writing in file </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_26_writing_in_files.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut21">
                    <h2>Tutorial - 21 Cookies </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_27_cookies.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut22">
                    <h2>Tutorial - 22 Session </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_28_1_session.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut23">
                    <h2>Tutorial - 23 Get Session Data </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_28_2_get_session_data.php'); ?></code>
                    </pre>
                </div>
                <div class="php-tutorial" id="php-tut24">
                    <h2>Tutorial - 24 Logout </h2>
                    <pre>
                    <h3>PHP</h3>
                        <code class="php"><?php include('php_code\tut_28_3_logout.php'); ?></code>
                    </pre>
                </div>
            </div>
        </div>
        <div id="py-content" class="topic">
            <div class="left" id="left">
                <ol type="1" id="py-tutorial-list">
                    <li id="py-tut5">Comments</li>
                    <li id="py-tut6">Variables</li>
                    <li id="py-tut7">Excercise-1 Calculator</li>
                    <li id="py-tut8">TypeCasting</li>
                    <li id="py-tut9">Input Statement</li>
                    <li id="py-tut10">Strings</li>
                    <li id="py-tut11">String Slicing</li>
                    <li id="py-tut12">String Methods</li>
                    <li id="py-tut13">If Else Conditionals</li>
                    <li id="py-tut14">Excercise-2 Good Morning</li>
                    <li id="py-tut15">Match case statement</li>
                    <li id="py-tut16">For Loop</li>
                    <li id="py-tut17">While Loop</li>
                    <li id="py-tut18">Break & Continue</li>
                    <li id="py-tut19">Functions</li>
                    <li id="py-tut20">Function Arguments</li>
                    <li id="py-tut21">List</li>
                    <li id="py-tut22">List Methods</li>
                    <li id="py-tut23">Tuples</li>
                    <li id="py-tut24">Operations on Tuples</li>
                    <li id="py-tut25">Excercise-3</li>
                    <li id="py-tut26">F-String</li>
                    <li id="py-tut27">Doc-String</li>
                    <li id="py-tut28">Recursion</li>
                    <li id="py-tut29">Set</li>
                    <li id="py-tut30">Set Methods</li>
                    <li id="py-tut31">Dictionary</li>
                    <li id="py-tut32">Dictionary Methods</li>
                    <li id="py-tut33">For loop with else</li>
                    <li id="py-tut34">Exception Handling</li>
                    <li id="py-tut35">Finally Keyword</li>
                    <li id="py-tut36">Raise Keyword</li>
                    <li id="py-tut37">Excercise-4</li>
                    <li id="py-tut38">Short hand If Else</li>
                    <li id="py-tut39">Enumerete Function</li>
                    <li id="py-tut40">Importing in Python</li>
                    <li id="py-tut41">if __nmae__ == "__main__"</li>
                    <li id="py-tut42">OS Module</li>
                    <li id="py-tut43">Local & Global Variables</li>
                    <li id="py-tut44">File IO</li>
                    <li id="py-tut45">Methpds of file IO</li>
                    <li id="py-tut46">seek(), tell() and other function</li>
                    <li id="py-tut47">Lambda function</li>
                    <li id="py-tut48">Map, Filter & Reduce</li>
                    <li id="py-tut49">is vs == OPerator</li>
                    <li id="py-tut50">Excercise-5</li>
                    <li id="py-tut51">Introduction to OOPS</li>
                    <li id="py-tut52">Classes and Object</li>
                    <li id="py-tut53">Constructor</li>
                    <li id="py-tut54">Decorator</li>
                    <li id="py-tut55">Getter & Setter</li>
                    <li id="py-tut56">Inheritance</li>
                    <li id="py-tut57">Access Modifier</li>
                    <li id="py-tut58">Excercise-6</li>
                    <li id="py-tut59">Static Methods</li>
                    <li id="py-tut60">Instance variable vs Class variable</li>
                    <li id="py-tut61">Excercise-7</li>
                    <li id="py-tut62">Class Methods</li>
                    <li id="py-tut63">Class Methods as alternative constructor</li>
                    <li id="py-tut64">dir(), __dict__ and help() method</li>
                    <li id="py-tut65">Super Keyword</li>
                    <li id="py-tut66">MagicDunder methods</li>
                    <li id="py-tut67">Method Overriding</li>
                    <li id="py-tut68">Excercise-8</li>
                    <li id="py-tut69">Operator Overloading</li>
                    <li id="py-tut70">Single Inheritance</li>
                    <li id="py-tut71">Multiple Inheritance</li>
                    <li id="py-tut72">Multilevel Inheritance</li>
                    <li id="py-tut73">Hybrid & Hierarchical Inheritance</li>
                    <li id="py-tut74">Excercie-9</li>
                    <li id="py-tut75">Time Modules</li>
                    <li id="py-tut76">Command Line Utility</li>
                    <li id="py-tut77">Walrus Operator</li>
                    <li id="py-tut78">Shutil Module</li>
                    <li id="py-tut79">Requests Module</li>
                    <li id="py-tut80">Excercise-10</li>
                    <li id="py-tut81">Generators</li>
                    <li id="py-tut82">Function Caching</li>
                    <li id="py-tut83">Excercise-11</li>
                    <li id="py-tut84">Regular Expression</li>
                    <li id="py-tut85">AsyncIO</li>
                    <li id="py-tut86">Multithreading</li>
                    <li id="py-tut87">MultiProcessing</li>
                </ol>
            </div>
            <div class="right" id="right">
                <div class="py-tutorial" id="py-tut5">
                    <h2>Tutorial - Comments </h2>
                    <pre>
                        <h3>Comments</h3>
                        <code class="python"><?php include('python-code\day_5.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut6">
                    <h2>Tutorial - Variables </h2>
                    <pre>
                        <h3>Variables</h3>
                        <code class="python"><?php include('python-code\day_6.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut7">
                    <h2>Tutorial - Excercise-1 Calculator </h2>
                    <pre>
                        <h3>Excercise-1 Calculator</h3>
                        <code class="python"><?php include('python-code\day_7.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut8">
                    <h2>Tutorial - TypeCasting </h2>
                    <pre>
                        <h3>TypeCasting</h3>
                        <code class="python"><?php include('python-code\day_8.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut9">
                    <h2>Tutorial - Input Statement </h2>
                    <pre>
                        <h3>Input Statement</h3>
                        <code class="python"><?php include('python-code\day_9.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut10">
                    <h2>Tutorial - Strings </h2>
                    <pre>
                        <h3>Strings</h3>
                        <code class="python"><?php include('python-code\day_10.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut11">
                    <h2>Tutorial - String Slicing </h2>
                    <pre>
                        <h3>String Slicing</h3>
                        <code class="python"><?php include('python-code\day_11.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut12">
                    <h2>Tutorial - String Methods </h2>
                    <pre>
                        <h3>String Methods</h3>
                        <code class="python"><?php include('python-code\day_12.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut13">
                    <h2>Tutorial - If Else Conditionals </h2>
                    <pre>
                        <h3>If Else</h3>
                        <code class="python"><?php include('python-code\day_13.py'); ?></code>
                    
                        <h3>If Elif</h3>
                        <code class="python"><?php include('python-code\day_14.py'); ?></code>
        
                        <h3>If if Else </h3>
                        <code class="python"><?php include('python-code\day_15.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut14">
                    <h2>Tutorial - Excercise-2 Good Morning </h2>
                    <pre>
                        <h3>Excercise-2 Good Morning</h3>
                        <code class="python"><?php include('python-code\day_16.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut15">
                    <h2>Tutorial - Match case statement </h2>
                    <pre>
                        <h3>Match case statement</h3>
                        <code class="python"><?php include('python-code\day_17.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut16">
                    <h2>Tutorial - For Loop </h2>
                    <pre>
                        <h3>For Loop</h3>
                        <code class="python"><?php include('python-code\day_18.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut17">
                    <h2>Tutorial - While Loop </h2>
                    <pre>
                        <h3>While Loop</h3>
                        <code class="python"><?php include('python-code\day_19.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut18">
                    <h2>Tutorial - Break & Continue </h2>
                    <pre>
                        <h3>Break & Continue</h3>
                        <code class="python"><?php include('python-code\day_20.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut19">
                    <h2>Tutorial - Functions </h2>
                    <pre>
                        <h3>Functions</h3>
                        <code class="python"><?php include('python-code\day_21.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut20">
                    <h2>Tutorial - Function Arguments </h2>
                    <pre>
                        <h3>Function Arguments</h3>
                        <code class="python"><?php include('python-code\day_22.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut21">
                    <h2>Tutorial - List </h2>
                    <pre>
                        <h3>List</h3>
                        <code class="python"><?php include('python-code\day_23.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut22">
                    <h2>Tutorial - List Methods </h2>
                    <pre>
                        <h3>List Methods</h3>
                        <code class="python"><?php include('python-code\day_24.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut23">
                    <h2>Tutorial - Tuples </h2>
                    <pre>
                        <h3>Tuples</h3>
                        <code class="python"><?php include('python-code\day_25.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut24">
                    <h2>Tutorial - Operations on Tuples </h2>
                    <pre>
                        <h3>Operations on Tuples</h3>
                        <code class="python"><?php include('python-code\day_26.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut25">
                    <h2>Tutorial - Excercise-3 </h2>
                    <pre>
                        <h3>Excercise-3</h3>
                        <code class="python"><?php include('python-code\day_27.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut26">
                    <h2>Tutorial - F-String </h2>
                    <pre>
                        <h3>F-String</h3>
                        <code class="python"><?php include('python-code\day_28.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut27">
                    <h2>Tutorial - Doc-String </h2>
                    <pre>
                        <h3>Doc-String</h3>
                        <code class="python"><?php include('python-code\day_29.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut28">
                    <h2>Tutorial - Recursion </h2>
                    <pre>
                        <h3>Recursion</h3>
                        <code class="python"><?php include('python-code\day_30.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut29">
                    <h2>Tutorial - Set </h2>
                    <pre>
                        <h3>Set</h3>
                        <code class="python"><?php include('python-code\day_31.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut30">
                    <h2>Tutorial - Set Methods </h2>
                    <pre>
                        <h3>Set Methods</h3>
                        <code class="python"><?php include('python-code\day_32.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut31">
                    <h2>Tutorial - Dictionary </h2>
                    <pre>
                        <h3>Dictionary</h3>
                        <code class="python"><?php include('python-code\day_33.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut32">
                    <h2>Tutorial - Dictionary Methods </h2>
                    <pre>
                        <h3>Dictionary Methods</h3>
                        <code class="python"><?php include('python-code\day_34.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut33">
                    <h2>Tutorial - For loop with else </h2>
                    <pre>
                        <h3>For loop with else</h3>
                        <code class="python"><?php include('python-code\day_35.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut34">
                    <h2>Tutorial - Exception Handling </h2>
                    <pre>
                        <h3>Exception Handling</h3>
                        <code class="python"><?php include('python-code\day_36.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut35">
                    <h2>Tutorial - Finally Keyword </h2>
                    <pre>
                        <h3>Finally Keyword</h3>
                        <code class="python"><?php include('python-code\day_37.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut36">
                    <h2>Tutorial - Raise Keyword </h2>
                    <pre>
                        <h3>Raise Keyword</h3>
                        <code class="python"><?php include('python-code\day_38.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut37">
                    <h2>Tutorial - Excercise-4 </h2>
                    <pre>
                        <h3>Excercise-4</h3>
                        <code class="python"><?php include('python-code\day_39.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut38">
                    <h2>Tutorial - Short hand If Else </h2>
                    <pre>
                        <h3>Short hand If Else</h3>
                        <code class="python"><?php include('python-code\day_40.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut39">
                    <h2>Tutorial - Enumerete Function </h2>
                    <pre>
                        <h3>Enumerete Function</h3>
                        <code class="python"><?php include('python-code\day_41.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut40">
                    <h2>Tutorial - Importing in Python </h2>
                    <pre>
                        <h3>Importing in Python</h3>
                        <code class="python"><?php include('python-code\day_42.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut41">
                    <h2>Tutorial - if __name__ == "__main__" </h2>
                    <pre>
                        <h3>main.py</h3>
                        <code class="python"><?php include('python-code\day_44.py'); ?></code>

                        <h3>day_45.py</h3>
                        <code class="python"><?php include('python-code\day_45.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut42">
                    <h2>Tutorial - OS Module </h2>
                    <pre>
                        <h3>OS Module</h3>
                        <code class="python"><?php include('python-code\day_46.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut43">
                    <h2>Tutorial - Local & Global Variables </h2>
                    <pre>
                        <h3>Local & Global Variables</h3>
                        <code class="python"><?php include('python-code\day_47.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut44">
                    <h2>Tutorial - File IO </h2>
                    <pre>
                        <h3>File IO</h3>
                        <code class="python"><?php include('python-code\day_48.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut45">
                    <h2>Tutorial - Methods of file IO </h2>
                    <pre>
                        <h3>Methods of file IO</h3>
                        <code class="python"><?php include('python-code\day_49.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut46">
                    <h2>Tutorial - seek(), tell() and other function </h2>
                    <pre>
                        <h3>seek(), tell() and other function</h3>
                        <code class="python"><?php include('python-code\day_50.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut47">
                    <h2>Tutorial - Lambda function </h2>
                    <pre>
                        <h3>Lambda function</h3>
                        <code class="python"><?php include('python-code\day_51.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut48">
                    <h2>Tutorial - Map, Filter & Reduce </h2>
                    <pre>
                        <h3>Map, Filter & Reduce</h3>
                        <code class="python"><?php include('python-code\day_52.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut49">
                    <h2>Tutorial - is vs == OPerator </h2>
                    <pre>
                        <h3>is vs == OPerator</h3>
                        <code class="python"><?php include('python-code\day_53.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut50">
                    <h2>Tutorial - Excercise-5 </h2>
                    <pre>
                        <h3>Excercise-5</h3>
                        <code class="python"><?php include('python-code\day_54.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut51">
                    <h2>Tutorial - Introduction to OOPS </h2>
                    <pre>
                        <h3>Introduction to OOPS</h3>
                        <code class="python"><?php include('python-code\day_55.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut52">
                    <h2>Tutorial - Classes and Object </h2>
                    <pre>
                        <h3>Classes and Object</h3>
                        <code class="python"><?php include('python-code\day_56.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut53">
                    <h2>Tutorial - Constructor </h2>
                    <pre>
                        <h3>Constructor</h3>
                        <code class="python"><?php include('python-code\day_57.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut54">
                    <h2>Tutorial - Decorator </h2>
                    <pre>
                        <h3>Decorator</h3>
                        <code class="python"><?php include('python-code\day_58.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut55">
                    <h2>Tutorial - Getter & Setter </h2>
                    <pre>
                        <h3>Getter & Setter</h3>
                        <code class="python"><?php include('python-code\day_59.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut56">
                    <h2>Tutorial - Inheritance </h2>
                    <pre>
                        <h3>Inheritance</h3>
                        <code class="python"><?php include('python-code\day_60.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut57">
                    <h2>Tutorial - Access Modifier </h2>
                    <pre>
                        <h3>Access Modifier</h3>
                        <code class="python"><?php include('python-code\day_61.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut58">
                    <h2>Tutorial - Excercise-6 </h2>
                    <pre>
                        <h3>Excercise-6</h3>
                        <code class="python"><?php include('python-code\day_62.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut59">
                    <h2>Tutorial - Static Methods </h2>
                    <pre>
                        <h3>Static Methods</h3>
                        <code class="python"><?php include('python-code\day_63.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut60">
                    <h2>Tutorial - Instance variable vs Class variable </h2>
                    <pre>
                        <h3>Instance variable vs Class variable</h3>
                        <code class="python"><?php include('python-code\day_64.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut61">
                    <h2>Tutorial - Excercise-7 </h2>
                    <pre>
                        <h3>Excercise-7</h3>
                        <code class="python"><?php include('python-code\day_65.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut62">
                    <h2>Tutorial - Class Methods </h2>
                    <pre>
                        <h3>Class Methods</h3>
                        <code class="python"><?php include('python-code\day_66.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut63">
                    <h2>Tutorial - Class Methods as alternative constructor </h2>
                    <pre>
                        <h3>Class Methods as alternative constructor</h3>
                        <code class="python"><?php include('python-code\day_67.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut64">
                    <h2>Tutorial - dir(), __dict__ and help() method </h2>
                    <pre>
                        <h3>dir(), __dict__ and help() method</h3>
                        <code class="python"><?php include('python-code\day_68.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut65">
                    <h2>Tutorial - Super Keyword </h2>
                    <pre>
                        <h3>Super Keyword</h3>
                        <code class="python"><?php include('python-code\day_69.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut66">
                    <h2>Tutorial - MagicDunder methods </h2>
                    <pre>
                        <h3>MagicDunder methods</h3>
                        <code class="python"><?php include('python-code\day_70.py'); ?></code>
                        <code class="python"><?php include('python-code\day_71.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut67">
                    <h2>Tutorial - Method Overriding </h2>
                    <pre>
                        <h3>Method Overriding</h3>
                        <code class="python"><?php include('python-code\day_72.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut68">
                    <h2>Tutorial - Excercise-8 </h2>
                    <pre>
                        <h3>Excercise-8</h3>
                        <code class="python"><?php include('python-code\day_73.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut69">
                    <h2>Tutorial - Operator Overloading </h2>
                    <pre>
                        <h3>Operator Overloading</h3>
                        <code class="python"><?php include('python-code\day_74.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut70">
                    <h2>Tutorial - Single Inheritance </h2>
                    <pre>
                        <h3>Single Inheritance</h3>
                        <code class="python"><?php include('python-code\day_75.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut71">
                    <h2>Tutorial - Multiple Inheritance </h2>
                    <pre>
                        <h3>Multiple Inheritance</h3>
                        <code class="python"><?php include('python-code\day_76.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut72">
                    <h2>Tutorial - Multilevel Inheritance </h2>
                    <pre>
                        <h3>Multilevel Inheritance</h3>
                        <code class="python"><?php include('python-code\day_77.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut73">
                    <h2>Tutorial - Hybrid & Hierarchical Inheritance </h2>
                    <pre>
                        <h3>Hybrid & Hierarchical Inheritance</h3>
                        <code class="python"><?php include('python-code\day_78.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut74">
                    <h2>Tutorial - Excercie-9 </h2>
                    <pre>
                        <h3>Excercie-9</h3>
                        <code class="python"><?php include('python-code\day_79.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut75">
                    <h2>Tutorial - Time Modules </h2>
                    <pre>
                        <h3>Time Modules</h3>
                        <code class="python"><?php include('python-code\day_80.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut76">
                    <h2>Tutorial - Command Line Utility </h2>
                    <pre>
                        <h3>Command Line Utility</h3>
                        <code class="python"><?php include('python-code\day_81.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut77">
                    <h2>Tutorial - Walrus Operator </h2>
                    <pre>
                        <h3>Walrus Operator</h3>
                        <code class="python"><?php include('python-code\day_82.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut78">
                    <h2>Tutorial - Shutil Module </h2>
                    <pre>
                        <h3>Shutil Module</h3>
                        <code class="python"><?php include('python-code\day_83.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut79">
                    <h2>Tutorial - Requests Module </h2>
                    <pre>
                        <h3>Requests Module</h3>
                        <code class="python"><?php include('python-code\day_84.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut80">
                    <h2>Tutorial - Excercise-10 </h2>
                    <pre>
                        <h3>Excercise-10</h3>
                        <code class="python"><?php include('python-code\day_85.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut81">
                    <h2>Tutorial - Generators </h2>
                    <pre>
                        <h3>Generators</h3>
                        <code class="python"><?php include('python-code\day_86.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut82">
                    <h2>Tutorial - Function Caching </h2>
                    <pre>
                        <h3>Function Caching</h3>
                        <code class="python"><?php include('python-code\day_87.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut83">
                    <h2>Tutorial - Excercise-11 </h2>
                    <pre>
                        <h3>Excercise-11</h3>
                        <code class="python"><?php include('python-code\day_88.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut84">
                    <h2>Tutorial - Regular Expression </h2>
                    <pre>
                        <h3>Regular Expression</h3>
                        <code class="python"><?php include('python-code\day_89.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut85">
                    <h2>Tutorial - AsyncIO </h2>
                    <pre>
                        <h3>AsyncIO</h3>
                        <code class="python"><?php include('python-code\day_90.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut86">
                    <h2>Tutorial - Multithreading </h2>
                    <pre>
                        <h3>Multithreading</h3>
                        <code class="python"><?php include('python-code\day_91.py'); ?></code>
                    </pre>
                </div>
                <div class="py-tutorial" id="py-tut87">
                    <h2>Tutorial - MultiProcessing </h2>
                    <pre>
                        <h3>MultiProcessing</h3>
                        <code class="python"><?php include('python-code\day_92.py'); ?></code>
                    </pre>
                </div>
            </div>
        </div>
        <div id="java-content" class="topic">
            <div class="left" id="left">
                <ol type="1" id="java-tutorial-list">
                    <li id="java-tut1">Project - Library Management</li>
                    <li id="java-tut2">Project - Game(Rock Paper Scissor)</li>
                    <li id="java-tut3">Tutorial (Abstract Class)</li>
                    <li id="java-tut4">Tutorial (Access_Modifiers)</li>
                    <li id="java-tut5">Tutorial (Access_Modifiers 2)</li>
                    <li id="java-tut6">Tutorial (Array_Deque)</li>
                    <li id="java-tut7">Tutorial (ArrayList)</li>
                    <li id="java-tut8">Tutorial (Arrays_In_Java)</li>
                    <li id="java-tut9">Tutorial (AsciiCode) </li>
                    <li id="java-tut10">Tutorial (Basic) </li>
                    <li id="java-tut11">Tutorial (Break_Continue)</li>
                    <li id="java-tut12">Tutorial (Calender_Class) </li>
                    <li id="java-tut13">Tutorial (Constructor_In_Inheritance)</li>
                    <li id="java-tut14">Tutorial (Constructor)</li>
                    <li id="java-tut15">Tutorial (CustomClass)</li>
                    <li id="java-tut16">Tutorial (Date_And_Time)</li>
                    <li id="java-tut17">Tutorial (Date_And_Time_Revision)</li>
                    <li id="java-tut18">Tutorial (DateTime_Formatter)</li>
                    <li id="java-tut19">Tutorial (Default_Methods)</li>
                    <li id="java-tut20">Tutorial (Doubts)</li>
                    <li id="java-tut21">Tutorial (Dsa_Problem_1)</li>
                    <li id="java-tut22">Tutorial (Dsa_Problem_2)</li>
                    <li id="java-tut23">Tutorial (Dsa_Problem_3)</li>
                    <li id="java-tut24">Tutorial (Else_If) </li>
                    <li id="java-tut25">Tutorial (Error_Handling) </li>
                    <li id="java-tut26">Tutorial (Exception_Class) </li>
                    <li id="java-tut27">Tutorial (Exception_Handling)</li>
                    <li id="java-tut28">Tutorial (Exercise_5) </li>
                    <li id="java-tut29">Tutorial (Exercise_6)</li>
                    <li id="java-tut30">Tutorial (Exercise_7)</li>
                    <li id="java-tut31">Tutorial (FibonacciSeries)</li>
                    <li id="java-tut32">Tutorial (File_Handling)</li>
                    <li id="java-tut33">Tutorial (Finally_Block)</li>
                    <li id="java-tut34">Tutorial (Gregorian_Calendar) </li>
                    <li id="java-tut35">Tutorial (HashSet_In_Java) </li>
                    <li id="java-tut36">Tutorial (Inheritance)</li>
                    <li id="java-tut37">Tutorial (Inheritance2) </li>
                    <li id="java-tut38">Tutorial (Interfaces_In_Java)</li>
                    <li id="java-tut39">Tutorial (Java_Generics)</li>
                    <li id="java-tut40">Tutorial (JavaTime_API) </li>
                    <li id="java-tut41">Tutorial (Join)</li>
                    <li id="java-tut42">Tutorial (Lambda)</li>
                    <li id="java-tut43">Tutorial (Library)</li>
                    <li id="java-tut44">Tutorial (Linked_List)</li>
                    <li id="java-tut45">Tutorial (literals)</li>
                    <li id="java-tut46">Tutorial (Logical_Operators)</li>
                    <li id="java-tut47">Tutorial (Loops)</li>
                    <li id="java-tut48">Tutorial (Main)</li>
                    <li id="java-tut49">Tutorial (Marksheet)</li>
                    <li id="java-tut50">Tutorial (Method_Overriding)</li>
                    <li id="java-tut51">Tutorial (Multi_Dimensional_Array) </li>
                    <li id="java-tut52">Tutorial (Multithreading) </li>
                    <li id="java-tut53">Tutorial (Multithreading2)</li>
                    <li id="java-tut54">Tutorial (MysqlCon) </li>
                    <li id="java-tut55">Tutorial (MysqlStoring)</li>
                    <li id="java-tut56">Tutorial (operators)</li>
                    <li id="java-tut57">Tutorial (output_formats)</li>
                    <li id="java-tut58">Tutorial (p1) </li>
                    <li id="java-tut59">Tutorial (Packages_In_Java)</li>
                    <li id="java-tut60">Tutorial (PassingArrayToMethod)</li>
                    <li id="java-tut61">Tutorial (Percentage)</li>
                    <li id="java-tut62">Tutorial (Practice_Set_03)</li>
                    <li id="java-tut63">Tutorial (Practice_Set_04)</li>
                    <li id="java-tut64">Tutorial (Practice_Set_05)</li>
                    <li id="java-tut65">Tutorial (Practice_Set_06)</li>
                    <li id="java-tut66">Tutorial (Practice_Set_07)</li>
                    <li id="java-tut67">Tutorial (Practice_Set_08)</li>
                    <li id="java-tut68">Tutorial (Practice_Set_09)</li>
                    <li id="java-tut69">Tutorial (Practice_Set_10)</li>
                    <li id="java-tut70">Tutorial (Practice_Set_11)</li>
                    <li id="java-tut71">Tutorial (Practice_Set_12)</li>
                    <li id="java-tut72">Tutorial (Practice_Set_13)</li>
                    <li id="java-tut73">Tutorial (Practice_Set_14)</li>
                    <li id="java-tut74">Tutorial (Practice_Set_15)</li>
                    <li id="java-tut75">Tutorial (Practice_Set_16)</li>
                    <li id="java-tut76">Tutorial (practice_set)</li>
                    <li id="java-tut77">Tutorial (Print_Star_Patterns)</li>
                    <li id="java-tut78">Tutorial (RecursionFactorial)</li>
                    <li id="java-tut79">Tutorial (result)</li>
                    <li id="java-tut80">Tutorial (String_methods)</li>
                    <li id="java-tut81">Tutorial (taking_input)</li>
                    <li id="java-tut82">Tutorial (This_Keyword)</li>
                    <li id="java-tut83">Tutorial (Thread_Contsructor)</li>
                    <li id="java-tut84">Tutorial (Thread_Methods)</li>
                    <li id="java-tut85">Tutorial (Thread_Priorities)</li>
                    <li id="java-tut86">Tutorial (Throw_Throws)</li>
                    <li id="java-tut87">Tutorial (Try_Catch_Block)</li>
                    <li id="java-tut88">Tutorial (VarArgs)</li>
                    <li id="java-tut89">Tutorial (Timepass)</li>
                </ol>
            </div>
            <div class="right" id="right">
                <div class="java-tutorial" id="java-tut1">
                    <h2>Project - Library Management </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\D_Library.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut2">
                    <h2>Project - Game(Rock Paper Scissor)</h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Game.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut3">
                    <h2>Tutorial - (Abstract Class) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Abstract_Class.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut4">
                    <h2>Tutorial - (Access_Modifiers)</h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Access_Modifiers.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut5">
                    <h2>Tutorial - (Access_Modifiers 2) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\AccessModifier.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut6">
                    <h2>Tutorial - (Array_Deque) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Array_Deque.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut7">
                    <h2>Tutorial - (ArrayList) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\arrayList.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut8">
                    <h2>Tutorial - (Arrays_In_Java) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Arrays_In_Java.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut9">
                    <h2>Tutorial - (AsciiCode) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\AsciiCode.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut10">
                    <h2>Tutorial - (Basic) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Basic.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut11">
                    <h2>Tutorial - (Break_Continue) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Break_Continue.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut12">
                    <h2>Tutorial - (Calender_Class) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Calender_Class.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut13">
                    <h2>Tutorial - (Constructor_In_Inheritance) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Constructor_In_Inheritance.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut14">
                    <h2>Tutorial - (Constructor) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Constructor.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut15">
                    <h2>Tutorial - (CustomClass) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\CustomClass.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut16">
                    <h2>Tutorial - (Date_And_Time) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Date_And_Time.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut17">
                    <h2>Tutorial - (Date_And_Time_Revision) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Date_And_Time_Revision.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut18">
                    <h2>Tutorial - (DateTime_Formatter) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\DateTime_Formatter.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut19">
                    <h2>Tutorial - (Default_Methods) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Default_Methods.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut20">
                    <h2>Tutorial - (Doubts) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Doubts.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut21">
                    <h2>Tutorial - (Dsa_Problem_1) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Dsa_Problem_1.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut22">
                    <h2>Tutorial - (Dsa_Problem_2) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Dsa_Problem_2.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut23">
                    <h2>Tutorial - (Dsa_Problem_3) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Dsa_Problem_3.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut24">
                    <h2>Tutorial - (Else_If) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Else_If.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut25">
                    <h2>Tutorial - (Error_Handling) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Error_Handling.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut26">
                    <h2>Tutorial - (Exception_Class) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Exception_Class.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut27">
                    <h2>Tutorial - (Exception_Handling) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Exception_Handling.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut28">
                    <h2>Tutorial - (Exercise_5) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Exercise_5.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut29">
                    <h2>Tutorial - (Exercise_6) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Exercise_6.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut30">
                    <h2>Tutorial - (Exercise_7) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Exercise_7.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut31">
                    <h2>Tutorial - (FibonacciSeries) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\FibonacciSeries.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut32">
                    <h2>Tutorial - (File_Handling) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\File_Handling.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut33">
                    <h2>Tutorial - (Finally_Block) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Finally_Block.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut34">
                    <h2>Tutorial - (Gregorian_Calendar) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Gregorian_Calendar.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut35">
                    <h2>Tutorial - (HashSet_In_Java) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\HashSet_In_Java.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut36">
                    <h2>Tutorial - (Inheritance) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Inheritance.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut37">
                    <h2>Tutorial - (Inheritance2) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Inheritance2.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut38">
                    <h2>Tutorial - (Interfaces_In_Java) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Interfaces_In_Java.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut39">
                    <h2>Tutorial - (Java_Generics) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Java_Generics.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut40">
                    <h2>Tutorial - (JavaTime_API) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\JavaTime_API.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut41">
                    <h2>Tutorial - (Join) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Join.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut42">
                    <h2>Tutorial - (Lambda) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Lambda.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut43">
                    <h2>Tutorial - (Library) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Library.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut44">
                    <h2>Tutorial - (Linked_List) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Linked_List.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut45">
                    <h2>Tutorial - (literals) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\literals.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut46">
                    <h2>Tutorial - (Logical_Operators) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Logical_Operators.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut47">
                    <h2>Tutorial - (Loops) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Loops.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut48">
                    <h2>Tutorial - (Main) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Main.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut49">
                    <h2>Tutorial - (Marksheet) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Marksheet.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut50">
                    <h2>Tutorial - (Method_Overriding) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Method_Overriding.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut51">
                    <h2>Tutorial - (Multi_Dimensional_Array) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Multi_Dimensional_Array.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut52">
                    <h2>Tutorial - (Multithreading) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Multithreading.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut53">
                    <h2>Tutorial - (Multithreading2) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Multithreading2.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut54">
                    <h2>Tutorial - (MysqlCon) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\MysqlCon.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut55">
                    <h2>Tutorial - (MysqlStoring) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\MysqlStoring.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut56">
                    <h2>Tutorial - (operators) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\operators.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut57">
                    <h2>Tutorial - (output_formats) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\output_formats.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut58">
                    <h2>Tutorial - (p1) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\p1.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut59">
                    <h2>Tutorial - (Packages_In_Java) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Packages_In_Java.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut60">
                    <h2>Tutorial - (PassingArrayToMethod) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\PassingArrayToMethod.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut61">
                    <h2>Tutorial - (Percentage) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Percentage.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut62">
                    <h2>Tutorial - (Practice_Set_03) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_03.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut63">
                    <h2>Tutorial - (Practice_Set_04) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_04.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut64">
                    <h2>Tutorial - (Practice_Set_05) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_05.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut65">
                    <h2>Tutorial - (Practice_Set_06) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_06.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut66">
                    <h2>Tutorial - (Practice_Set_07) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_07.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut67">
                    <h2>Tutorial - (Practice_Set_08) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_08.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut68">
                    <h2>Tutorial - (Practice_Set_09) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_09.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut69">
                    <h2>Tutorial - (Practice_Set_10) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_10.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut70">
                    <h2>Tutorial - (Practice_Set_11) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_11.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut71">
                    <h2>Tutorial - (Practice_Set_12) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_12.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut72">
                    <h2>Tutorial - (Practice_Set_13) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_13.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut73">
                    <h2>Tutorial - (Practice_Set_14) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_14.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut74">
                    <h2>Tutorial - (Practice_Set_15) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_15.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut75">
                    <h2>Tutorial - (Practice_Set_16) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Practice_Set_16.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut76">
                    <h2>Tutorial - (practice_set) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\practice_set.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut77">
                    <h2>Tutorial - (Print_Star_Patterns) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Print_Star_Patterns.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut78">
                    <h2>Tutorial - (RecursionFactorial) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\RecursionFactorial.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut79">
                    <h2>Tutorial - (result) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\result.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut80">
                    <h2>Tutorial - (String_methods) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\String_methods.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut81">
                    <h2>Tutorial - (taking_input) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\taking_input.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut82">
                    <h2>Tutorial - (This_Keyword) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\This_Keyword.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut83">
                    <h2>Tutorial - (Thread_Contsructor) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Thread_Contsructor.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut84">
                    <h2>Tutorial - (Thread_Methods) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Thread_Methods.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut85">
                    <h2>Tutorial - (Thread_Priorities) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Thread_Priorities.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut86">
                    <h2>Tutorial - (Throw_Throws) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Throw_Throws.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut87">
                    <h2>Tutorial - (Try_Catch_Block) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Try_Catch_Block.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut88">
                    <h2>Tutorial - (VarArgs) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\VarArgs.java'); ?></code>
                    </pre>
                </div>
                <div class="java-tutorial" id="java-tut89">
                    <h2>Tutorial - (Timepass) </h2>
                    <pre>
                        <h3>Java</h3>
                        <code class="java"><?php include('java-code\src\Tp.java'); ?></code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <script src="code-script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</body>

</html>